<?php

namespace App\Http\Livewire\Dashboard;

use App\Models\DataPenduduk;
use App\Models\Keluarga;
use App\Models\Warga;
use Livewire\Component;

class IndexDashboard extends Component
{
    public $filter_keluarga, $filter_warga, $pilihan_keluarga = [], $pilihan_warga = [];

    protected $listeners = [
        'updateChartWarga',
        'updateChartKeluarga'
    ];

    public function mount()
    {
        $this->pilihan_keluarga = [
            [
                'judul' => 'JUMLAH KEPALA KELUARGA',
                'db' => 'jumlah_KK'
            ],
            [
                'judul' => 'JUMLAH BALITA',
                'db' => 'balita'
            ],
            [
                'judul' => 'PASANGAN USIA SUBUR (PUS)',
                'db' => 'pus'
            ],
            [
                'judul' => 'WANITA USIA SUBUR (WUS)',
                'db' => 'wus'
            ],
            [
                'judul' => 'BUTA',
                'db' => 'buta'
            ],
            [
                'judul' => 'JUMLAH IBU HAMIL',
                'db' => 'ibu_hamil'
            ],
            [
                'judul' => 'JUMLAH IBU MENYUSUI',
                'db' => 'ibu_menyusui'
            ],
            [
                'judul' => 'JUMLAH LANSIA',
                'db' => 'lansia'
            ],
        ];
        $this->filter_keluarga = 'jumlah_KK';

        $this->pilihan_warga = [
            [
                'judul' => 'JUMLAH AKSEPTOR KB',
                'db' => 'akseptor_kb'
            ],
            [
                'judul' => 'MENGIKUTI KEGIATAN POSYANDU',
                'db' => 'kegiatan_posyandu'
            ],
            [
                'judul' => 'PROGRAM BKB',
                'db' => 'program_bkb'
            ],
            [
                'judul' => 'MEMILIKI TABUNGAN',
                'db' => 'tabungan'
            ],
            [
                'judul' => 'MENGIKUTI KELOMPOK BELAJAR',
                'db' => 'kelompok_belajar'
            ],
        ];

        $this->filter_warga = 'akseptor_kb';

        // dd($this->pilihan_keluarga);
    }

    public function updateChartKeluarga()
    {
        $this->setChart();
    }

    public function updateChartWarga()
    {
        $this->setChart();
    }

    public function render()
    {
        $jumlah_penduduk = DataPenduduk::all()->count();
        $jumlah_KK = Keluarga::selectRaw('sum(keluargas.jumlah_KK) as jumlah_KK')->get()->first()->jumlah_KK;
        $jumlah_pus = Keluarga::selectRaw('sum(keluargas.pus) as pus')->get()->first()->pus;
        $jumlah_dasawisma = Warga::all()->count();

        return view('livewire.dashboard.index-dashboard', [
            'jumlah_penduduk' => $jumlah_penduduk,
            'jumlah_KK' => $jumlah_KK,
            'jumlah_dasawisma' => $jumlah_dasawisma,
            'jumlah_pus' => $jumlah_pus,
            'kategori' => [],
            'data' => [],
            'judul' => [],
            'data_dusun' => [],
            'data_count' => [],
            'judul_warga' => '',
        ]);
    }

    public function setChart()
    {
        // Chart Keluarga
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


        // Chart Warga
        $filter = $this->filter_warga;
        // Chart Warga
        $dusuns = DataPenduduk::select('dusun')->groupBy('dusun')->get();
        $wargas = [];
        foreach ($dusuns as $key => $dusun) {
            $wargas[$key] = [
                'dusun' => $dusun->dusun,
                '' . $filter . '' => DataPenduduk::join('wargas', 'wargas.nik', '=', 'data_penduduk.NIK')
                    ->where('data_penduduk.dusun', $dusun->dusun)->where('wargas.' . $filter, 'Ya')->count(),
            ];
        }
        $data_dusun = [];
        $data_count = [];
        $judul_warga = '';

        foreach ($wargas as $row) {
            array_push($data_dusun, $row['dusun']);
            array_push($data_count, $row[$filter]);
        }

        // dd($data_count);
        foreach ($this->pilihan_warga as $row) {
            if ($row['db'] == $filter) {
                $judul_warga = $row['judul'];
            }
        }

        $data = [
            'kategori' => $data_dusun,
            'data' => $data_count,
            'judul' => $judul_warga,
        ];
        $this->dispatchBrowserEvent('updateChartSeriesWarga', $data);
    }
}
