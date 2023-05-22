<?php

namespace App\Http\Livewire\Dashboard;

use App\Models\DataPenduduk;
use App\Models\Keluarga;
use App\Models\Warga;
use Livewire\Component;

class IndexDashboard extends Component
{
    public $filter_keluarga, $pilihan_keluarga = [];

    public function mount()
    {
        $this->pilihan_keluarga = [
            [
                'judul' => 'JUMLAH KEPALA KELUARGA',
                'db' => 'jumlah_KK'
            ],
            [
                'judul' => 'PASANGAN USIA SUBUR (PUS)',
                'db' => 'pus'
            ],
        ];
        $this->filter_keluarga = 'jumlah_KK';

        // dd($this->pilihan_keluarga);
    }

    public function updateChartKeluarga()
    {

        $keluargas = DataPenduduk::leftJoin('keluargas', 'keluargas.nik', '=', 'data_penduduk.NIK')
            ->selectRaw('
            data_penduduk.dusun as dusun,
            sum(keluargas.' . $this->filter_keluarga . ') as data
            ')->groupBy('data_penduduk.dusun')->get();

        $kategori = [];
        $data = [];
        foreach ($keluargas as $row) {
            array_push($kategori, $row->dusun);
            array_push($data, $row->data == null ? "0" : $row->data);
        }

        $judul = '';
        foreach ($this->pilihan_keluarga as $row) {
            if ($row['db'] == $this->filter_keluarga) {
                $judul = $row['judul'];
            }
        }

        $data = [
            'kategori' => $kategori,
            'data' => $data,
            'judul' => $judul,
        ];
        $this->dispatchBrowserEvent('updateChartSeries', $data);
    }

    public function render()
    {
        $jumlah_penduduk = DataPenduduk::all()->count();
        $jumlah_KK = Keluarga::selectRaw('sum(keluargas.jumlah_KK) as jumlah_KK')->get()->first()->jumlah_KK;
        $jumlah_pus = Keluarga::selectRaw('sum(keluargas.pus) as pus')->get()->first()->pus;
        $jumlah_dasawisma = Warga::all()->count();

        $keluargas = DataPenduduk::leftJoin('keluargas', 'keluargas.nik', '=', 'data_penduduk.NIK')
            ->selectRaw('
            data_penduduk.dusun as dusun,
            sum(keluargas.' . $this->filter_keluarga . ') as data
            ')->groupBy('data_penduduk.dusun')->get();

        $kategori = [];
        $data = [];
        foreach ($keluargas as $row) {
            array_push($kategori, $row->dusun);
            array_push($data, $row->data == null ? "0" : $row->data);
        }

        $judul = '';
        foreach ($this->pilihan_keluarga as $row) {
            if ($row['db'] == $this->filter_keluarga) {
                $judul = $row['judul'];
            }
        }
        return view('livewire.dashboard.index-dashboard', [
            'jumlah_penduduk' => $jumlah_penduduk,
            'jumlah_KK' => $jumlah_KK,
            'jumlah_dasawisma' => $jumlah_dasawisma,
            'jumlah_pus' => $jumlah_pus,
            'kategori' => $kategori,
            'data' => $data,
            'judul' => $judul,
        ]);
    }
}
