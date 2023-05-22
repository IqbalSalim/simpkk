<?php

namespace App\Http\Livewire\Proker;

use App\Models\Proker;
use Livewire\Component;

class EditProker extends Component
{
    public $proker_id, $nama, $tujuan, $sasaran, $pj, $program_pokok;

    protected $listeners = ['getProker'];

    public function render()
    {
        return view('livewire.proker.edit-proker');
    }

    public function getProker($id)
    {
        $proker = Proker::find($id);
        $this->proker_id = $id;
        $this->nama = $proker->nama;
        $this->tujuan = $proker->tujuan;
        $this->sasaran = $proker->sasaran;
        $this->pj = $proker->pj;
        $this->program_pokok = $proker->program_pokok;
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

            $this->dispatchBrowserEvent('close-modal-edit');
            session()->flash('message', 'Proker Edited Successfully.');
        }
    }

    public function closeForm()
    {
        $this->reset('proker_id', 'nama', 'tujuan', 'sasaran', 'pj', 'program_pokok');
        $this->resetValidation();
        $this->dispatchBrowserEvent('close-modal-edit');
    }
}
