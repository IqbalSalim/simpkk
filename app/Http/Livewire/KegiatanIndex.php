<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Kegiatan;
use Livewire\WithPagination;

class KegiatanIndex extends Component
{
    use WithPagination;

    public $tanggal, $detail, $kegiatan_id, $kegiatan_tanggal, $kegiatan_detail;
    public $paginate = 5, $search;
    protected $queryString = ['search'];

    public function render()
    {
        return view('livewire.kegiatan-index', [
            'kegiatans' => $this->search === null ?
                Kegiatan::latest()->paginate($this->paginate) :
                Kegiatan::where('detail', 'like', '%' . $this->search . '%')->paginate($this->paginate)

        ]);
    }

    public function resetInput()
    {
        $this->tanggal = null;
        $this->detail = null;

        $this->kegiatan_id = null;
        $this->kegiatan_tanggal = null;
        $this->kegiatan_detail = null;
    }


    public function store()
    {

        $validatedDate = $this->validate(
            [
                'tanggal' => 'required|date',
                'detail' => 'required|string',
            ]
        );

        Kegiatan::create([
            'tanggal' => $this->tanggal,
            'detail' => $this->detail,
        ]);

        $this->resetInput();
        $this->dispatchBrowserEvent('close-modal');
        session()->flash('message', 'Activity Added Successfully.');
    }

    public function getUser($id)
    {
        $kegiatan = Kegiatan::where('id', $id)->get();
        $this->kegiatan_id = $id;
        $this->kegiatan_tanggal = $kegiatan[0]->tanggal;
        $this->kegiatan_detail = $kegiatan[0]->detail;
    }

    public function update()
    {
        $validatedDate = $this->validate(
            [
                'kegiatan_tanggal' => 'required|date',
                'kegiatan_detail' => 'required|string',
            ]
        );


        if ($this->kegiatan_id) {
            $kegiatan = Kegiatan::find($this->kegiatan_id);
            $kegiatan->update([
                'tanggal' => $this->kegiatan_tanggal,
                'detail' => $this->kegiatan_detail,
            ]);

            $this->resetInput();
            $this->dispatchBrowserEvent('close-modal-edit');
            session()->flash('message', 'Activity Edited Successfully.');
        }
    }

    public function delete($id)
    {
        if ($id) {
            $kegiatan = Kegiatan::find($id);
            $kegiatan->delete();
            session()->flash('message', 'Activity Deleted Successfully.');
        }
    }
}
