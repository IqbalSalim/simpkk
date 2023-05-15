<?php

namespace App\Http\Livewire\Warta;

use App\Models\Warta;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreateWarta extends Component
{
    use WithFileUploads;
    public $judul, $isi, $penulis, $photo;

    public function render()
    {
        return view('livewire.warta.create-warta');
    }

    public function store()
    {

        $this->validate(
            [
                'judul' => 'required|string|max:255',
                'isi' => 'required|string',
                'penulis' => 'required|string|max:255|',
                'photo' => 'required|image|max:2048',

            ]
        );

        $imageName = $this->photo->store('images', 'public');

        Warta::create([
            'judul' => $this->judul,
            'isi' => $this->isi,
            'penulis' => $this->penulis,
            'gambar' => $imageName,
        ]);

        $this->closeForm();
        session()->flash('message', 'Warta Added Successfully.');
        $this->emit('render');
    }

    public function closeForm()
    {
        $this->reset('judul', 'isi', 'penulis', 'photo');
        $this->resetValidation();
        $this->dispatchBrowserEvent('close-modal');
    }
}
