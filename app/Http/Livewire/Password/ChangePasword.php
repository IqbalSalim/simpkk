<?php

namespace App\Http\Livewire\Password;

use App\Models\User;
use Livewire\Component;
use App\Rules\HashedPasswordCheck;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ChangePasword extends Component
{
    public $password_lama, $password, $password_confirmation;


    public function render()
    {
        return view('livewire.password.change-pasword');
    }

    public function closeForm()
    {
        $this->reset('password_lama', 'password', 'password_confirmation');
        $this->resetValidation();
    }

    public function update()
    {
        $this->validate([
            'password_lama' => 'required',
            'password' => 'required|confirmed|min:6',

        ]);

        $user = User::find(Auth::user()->id);
        $cekPass = Hash::check($this->password_lama, $user->password);
        if (!$cekPass) {
            session()->flash('message', 'Password Lama Tidak Sesuai.');
            return false;
        }


        try {
            // Transaction
            $exception = DB::transaction(function () {
                User::find(Auth::user()->id)->update([
                    'password' => Hash::make($this->password),
                ]);
            });

            if (is_null($exception)) {
                $this->closeForm();
                session()->flash('message', 'Password User Edited Successfully.');
                return redirect()->route('change-password');
            } else {
                throw new Exception();
            }
        } catch (Exception $e) {
            session()->flash('message', 'Terjadi Kesalahan.');
        }
    }
}
