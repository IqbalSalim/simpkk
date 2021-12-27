<?php

namespace App\Http\Livewire;

use App\Models\Struktur as ModelsStruktur;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class Struktur extends Component
{
    use WithFileUploads;
    public $gambar, $struktur;
    public function render()
    {
        $this->gambar = ModelsStruktur::find(1)->gambar;
        return view('livewire.struktur');
    }

    public function update()
    {
        $struktur = ModelsStruktur::find(1);
        $this->validate([
            'struktur' => 'required|image|max:2048'
        ]);
        if (Storage::disk('public')->exists($struktur->gambar)) {
            Storage::disk('public')->delete($struktur->gambar);
        }
        $gambar = $this->struktur->store('images', 'public');
        $struktur->update([
            'gambar' => $gambar
        ]);
        session()->flash('message', 'Struktur Edited Successfully.');
    }
}
