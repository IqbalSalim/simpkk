<?php

namespace App\Http\Livewire\Dasawisma;

use App\Models\Keluarga;
use App\Models\Warga;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    public $paginate = 5, $search;
    protected $queryString = ['search'];

    public function render()
    {
        $search = $this->search;
        return view('livewire.dasawisma.index', [
            'dasawisma' => $this->search === null ?
                Keluarga::latest()->paginate($this->paginate) :
                Keluarga::whereHas('dataPenduduk', function ($query) use ($search) {
                    $query->where('Nama_Lengkap', 'like', '%' . $search . '%');
                })->paginate($this->paginate)
        ]);
    }

    public function delete($id)
    {
        $keluarga = Keluarga::find($id);
        $warga = Warga::where('nik', '=', $keluarga->nik);

        $keluarga->delete();
        $warga->delete();
        session()->flash('message', 'Data Berhasil Dihapus.');
    }
}
