<?php

namespace App\Http\Livewire;

use App\Models\Proker;
use Livewire\Component;
use Livewire\WithPagination;

class ProkerIndex extends Component
{
    use WithPagination;


    public $proker_id, $nama, $tujuan, $sasaran, $pj, $program_pokok;
    public $paginate = 5, $search, $event = 'store';
    protected $queryString = ['search'];
    public $modal = false;

    public function render()
    {
        if ($this->modal === false) {
            $this->event = 'store';
            $this->resetInput();
        }
        return view('livewire.proker-index', [
            'prokers' => $this->search === null ?
                Proker::latest()->paginate($this->paginate) :
                Proker::where('nama', 'like', '%' . $this->search . '%')->paginate($this->paginate)
        ]);
    }

    public function resetInput()
    {

        $this->nama = null;
        $this->tujuan = null;
        $this->sasaran = null;
        $this->pj = null;
        $this->program_pokok = null;

        $this->proker_id = null;
    }




    public function getProker($id)
    {
        $this->event = 'update';
        $proker = Proker::where('id', $id)->get();
        $this->proker_id = $id;
        $this->nama = $proker[0]->nama;
        $this->tujuan = $proker[0]->tujuan;
        $this->sasaran = $proker[0]->sasaran;
        $this->pj = $proker[0]->pj;
        $this->program_pokok = $proker[0]->program_pokok;
    }

    public function update()
    {

        $validateDate  = $this->validate(
            [
                'nama' => 'required|string',
                'tujuan' => 'required|string',
                'sasaran' => 'required|string',
                'pj' => 'required|string',
                'program_pokok' => 'required|string',
            ]
        );


        if ($this->proker_id) {
            $proker = Proker::find($this->proker_id);
            $proker->update($validateDate);

            $this->dispatchBrowserEvent('close-modal');
            session()->flash('message', 'Proker Edited Successfully.');
        }
    }

    public function delete($id)
    {
        if ($id) {
            $proker = Proker::find($id);
            $proker->delete();
            session()->flash('message', 'Proker Deleted Successfully.');
        }
    }
}
