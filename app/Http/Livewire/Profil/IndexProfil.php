<?php

namespace App\Http\Livewire\Profil;

use App\Models\Anggota;
use App\Models\User;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class IndexProfil extends Component
{
    use WithFileUploads;
    public $name, $jenis_kelamin, $no_telpon, $alamat,  $email, $foto, $userId;
    public $foto_preview;

    public function render()
    {
        return view('livewire.profil.index-profil');
    }

    public function mount()
    {
        $user = User::find(Auth::user()->id);
        $this->name = $user->anggota->nama;
        $this->jenis_kelamin = $user->anggota->jenis_kelamin;
        $this->no_telpon = $user->anggota->no_telpon;
        $this->alamat = $user->anggota->alamat;
        $this->email = $user->email;
        $this->foto_preview = $user->anggota->foto;
        $this->userId = Auth::user()->id;
    }

    public function update()
    {
        $this->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $this->userId,
            'jenis_kelamin' => 'required|string|in:Laki-laki,Perempuan',
            'no_telpon' => 'required|numeric|digits_between:11,13',
            'alamat' => 'required|string|max:255',
            'foto' => 'nullable|image|max:2048',
        ]);


        $id = $this->userId;
        $user = User::find($id);
        $fotolama = '';
        if ($this->foto !== null) {
            $foto = $this->foto->store('foto', 'public');
            $fotolama = $user->foto;
        } else {
            $foto = $this->foto_preview;
        }

        try {
            // Transaction
            $exception = DB::transaction(function () use ($id, $foto, $fotolama) {
                User::find($id)->update([
                    'nama' => $this->name,
                    'jenis_kelamin' => $this->jenis_kelamin,
                    'no_telpon' => $this->no_telpon,
                    'alamat' => $this->alamat,
                    'email' => $this->email,
                    'foto' => $foto,
                ]);

                User::find($id)->update([
                    'email' => $this->email,
                ]);

                Anggota::where('user_id', $id)->first()->update([
                    'nama' => $this->name,
                    'jenis_kelamin' => $this->jenis_kelamin,
                    'no_telpon' => $this->no_telpon,
                    'alamat' => $this->alamat,
                    'foto' => $foto,
                ]);
            });

            if (is_null($exception)) {
                if ($fotolama !== '') {
                    if (Storage::disk('public')->exists($fotolama)) {
                        Storage::disk('public')->delete($fotolama);
                    }
                }
                session()->flash('message', 'Profil User Edited Successfully.');
                $this->render();
            } else {
                throw new Exception();
            }
        } catch (Exception $e) {
            if (Storage::disk('public')->exists($foto)) {
                Storage::disk('public')->delete($foto);
            }
            dd($e);
            session()->flash('message', 'Terjadi Kesalahan.');
        }
    }
}
