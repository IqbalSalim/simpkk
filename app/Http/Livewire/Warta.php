<?php

namespace App\Http\Livewire;

use App\Models\Warta as ModelsWarta;
use App\Models\WartaPopuler;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithPagination;

class Warta extends Component
{
    use WithPagination;
    public $warta1, $warta_populer, $array = [];
    public $paginate = 2, $search, $paginator;
    protected $queryString = ['search'];

    public function mount()
    {
        $arrayWP = [];
        $this->warta1 = ModelsWarta::orderBy('created_at', 'desc')->limit(3)->get();
        if ($this->warta1->count() >= 3) {
            $this->array = $this->warta1->pluck('id');
        }
        $warta2 = WartaPopuler::groupBy('warta_id')->select('warta_id', DB::raw('count(warta_id) as jumlah'))->orderBy('jumlah', 'desc')->limit(5)->get();
        if ($warta2->count() != 0) {
            $arrayWP = $warta2->pluck('warta_id');
            $this->warta_populer = ModelsWarta::latest()->whereIn('id', $arrayWP)->get();
        }
    }

    public function render()
    {
        return view('livewire.warta', [
            'wartas' => $this->search === null ?
                ModelsWarta::whereNotIn('id', $this->array)->paginate($this->paginate) :
                ModelsWarta::where('judul', 'like', '%' . $this->search . '%')->paginate($this->paginate)
        ])->layout('layouts.guest');
    }
}
