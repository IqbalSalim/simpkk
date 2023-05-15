<?php

namespace App\Http\Livewire;

use App\Models\Warta;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class WartaIndex extends Component
{
    use WithFileUploads, WithPagination;

    public $judul, $isi, $penulis, $photo;
    public $warta_id, $warta_judul, $warta_isi, $warta_penulis, $warta_photo;
    public $paginate = 6, $search;
    protected $queryString = ['search'];

    protected $listeners = ['render'];

    public function render()
    {
        return view('livewire.warta-index', [
            'wartas' => $this->search === null ?
                Warta::latest()->paginate($this->paginate) :
                Warta::where('judul', 'like', '%' . $this->search . '%')->paginate($this->paginate)

        ]);
    }

    public function resetInput()
    {
        $this->judul = null;
        $this->isi = null;
        $this->penulis = null;
        $this->photo = null;

        $this->warta_id = null;
        $this->warta_judul = null;
        $this->warta_isi = null;
        $this->warta_penulis = null;
        $this->warta_photo = null;
    }




    public function getWarta($id)
    {
        $warta = Warta::where('id', $id)->get();
        $this->warta_id = $id;
        $this->warta_judul = $warta[0]->judul;
        $this->warta_isi = $warta[0]->isi;
        $this->warta_penulis = $warta[0]->penulis;
    }

    public function update()
    {
        if ($this->warta_id) {


            $warta = Warta::find($this->warta_id);

            if ($this->warta_photo) {
                $this->validate(
                    [
                        'warta_judul' => 'required|string|max:255',
                        'warta_isi' => 'required|string',
                        'warta_penulis' => 'required|string|max:255|',
                        'warta_photo' => 'image|max:2048',

                    ]
                );
                if (Storage::disk('public')->exists($warta->gambar)) {
                    Storage::disk('public')->delete($warta->gambar);
                }
                $imageName = $this->warta_photo->store('images', 'public');

                $warta->update([
                    'judul' => $this->warta_judul,
                    'isi' => $this->warta_isi,
                    'penulis' => $this->warta_penulis,
                    'gambar' => $imageName,
                ]);
            } else {
                $this->validate(
                    [
                        'warta_judul' => 'required|string|max:255',
                        'warta_isi' => 'required|string',
                        'warta_penulis' => 'required|string|max:255|',
                    ]
                );
                $warta->update([
                    'judul' => $this->warta_judul,
                    'isi' => $this->warta_isi,
                    'penulis' => $this->warta_penulis,
                ]);
            }


            $this->resetInput();
            $this->dispatchBrowserEvent('close-modal-edit');
            session()->flash('message', 'Warta Edited Successfully.');
        }
    }

    public function delete($id)
    {
        if ($id) {
            $warta = Warta::find($id);
            if (Storage::disk('public')->exists($warta->gambar)) {
                Storage::disk('public')->delete($warta->gambar);
            }
            $warta->delete();
            session()->flash('message', 'Warta Deleted Successfully.');
        }
    }
}
