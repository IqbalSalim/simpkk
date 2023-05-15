<?php

namespace App\Http\Livewire;

use App\Models\Struktur as ModelsStruktur;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class Struktur extends Component
{
    use WithFileUploads;
    public $gambar, $struktur, $status_gambar = false;
    public function render()
    {
        $gambar = ModelsStruktur::all();
        if (count($gambar) > 0) {
            $this->gambar = ModelsStruktur::find(1)->gambar;
            $this->status_gambar = true;
        } else {
            $this->gambar = 'images/default_struktur.jpeg';
            $this->status_gambar = false;
        }
        return view('livewire.struktur');
    }

    public function update()
    {
        $this->validate([
            'struktur' => 'required|image|max:2048'
        ]);
        if ($this->status_gambar) {
            $struktur = ModelsStruktur::find(1);
            if (Storage::disk('public')->exists($struktur->gambar)) {
                Storage::disk('public')->delete($struktur->gambar);
            }
            $gambar = $this->struktur->store('images', 'public');
            $struktur->update([
                'gambar' => $gambar
            ]);
        } else {
            $gambar = $this->struktur->store('images', 'public');
            ModelsStruktur::create([
                'gambar' => $gambar
            ]);
        }

        session()->flash('message', 'Struktur Edited Successfully.');
    }
}
