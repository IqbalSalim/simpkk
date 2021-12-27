<?php

namespace App\Http\Livewire\Dasawisma;

use App\Models\DataPenduduk;
use App\Models\Keluarga;
use App\Models\Warga;
use Livewire\Component;

class Detail extends Component
{
    public $keluarga, $warga, $nik, $penduduk;

    public function mount($id)
    {
        $this->keluarga = Keluarga::find($id);
        $this->nik = $this->keluarga->nik;
        $this->warga = Warga::where('nik', '=', $this->nik)->first();
        $this->penduduk = DataPenduduk::where('NIK', '=', $this->nik)->first();
    }

    public function render()
    {
        return view('livewire.dasawisma.detail');
    }
}
