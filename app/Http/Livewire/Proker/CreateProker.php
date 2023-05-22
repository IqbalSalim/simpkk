<?php

namespace App\Http\Livewire\Proker;

use App\Models\Proker;
use Livewire\Component;

class CreateProker extends Component
{
    public $nama, $tujuan, $sasaran, $pj, $program_pokok;

    public function render()
    {
        return view('livewire.proker.create-proker');
    }

    public function closeForm()
    {
        $this->reset('nama', 'tujuan', 'sasaran', 'pj', 'program_pokok');
        $this->resetValidation();
        $this->dispatchBrowserEvent('close-modal');
    }

    public function store()
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
        Proker::create($validateDate);

        session()->flash('message', 'Proker Added Successfully.');
        $this->dispatchBrowserEvent('close-modal');
    }
}
