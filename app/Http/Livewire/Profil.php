<?php

namespace App\Http\Livewire;

use App\Models\Proker;
use App\Models\Struktur;
use Livewire\Component;
use Livewire\WithPagination;

class Profil extends Component
{
    use WithPagination;

    public $struktur;
    public $paginate = 10, $search;
    protected $queryString = ['search'];

    public function render()
    {
        $this->struktur = Struktur::find(1);
        return view('livewire.profil', [
            'prokers' => $this->search === null ?
                Proker::latest()->paginate($this->paginate) :
                Proker::where('nama', 'like', '%' . $this->search . '%')->paginate($this->paginate)
        ])->layout('layouts.guest');
    }
}
