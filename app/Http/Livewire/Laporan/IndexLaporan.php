<?php

namespace App\Http\Livewire\Laporan;

use App\Models\DataPenduduk;
use App\Models\Keluarga;
use Livewire\Component;

class IndexLaporan extends Component
{

    public function mount()
    {


        $dusuns = DataPenduduk::select('dusun')->groupBy('dusun')->get();
        $wargas = [];
        foreach ($dusuns as $key => $dusun) {
            $wargas[$key] = [
                'dusun' => $dusun->dusun,
                'akseptor_kb' => DataPenduduk::join('wargas', 'wargas.nik', '=', 'data_penduduk.NIK')
                    ->where('data_penduduk.dusun', $dusun->dusun)->where('wargas.akseptor_kb', 'Ya')->count(),
                'kegiatan_posyandu' => DataPenduduk::join('wargas', 'wargas.nik', '=', 'data_penduduk.NIK')
                    ->where('data_penduduk.dusun', $dusun->dusun)->where('wargas.kegiatan_posyandu', 'Ya')->count(),
                'program_bkb' => DataPenduduk::join('wargas', 'wargas.nik', '=', 'data_penduduk.NIK')
                    ->where('data_penduduk.dusun', $dusun->dusun)->where('wargas.program_bkb', 'Ya')->count(),
                'tabungan' => DataPenduduk::join('wargas', 'wargas.nik', '=', 'data_penduduk.NIK')
                    ->where('data_penduduk.dusun', $dusun->dusun)->where('wargas.tabungan', 'Ya')->count(),
                'kelompok_belajar' => DataPenduduk::join('wargas', 'wargas.nik', '=', 'data_penduduk.NIK')
                    ->where('data_penduduk.dusun', $dusun->dusun)->where('wargas.kelompok_belajar', 'Ya')->count(),
            ];
        }
    }

    public function render()
    {
        $keluargas = DataPenduduk::leftJoin('keluargas', 'keluargas.nik', '=', 'data_penduduk.NIK')
            ->selectRaw('
            data_penduduk.dusun as dusun,
            sum(keluargas.jumlah_KK) as jumlah_KK,
            sum(keluargas.balita) as balita,
            sum(keluargas.pus) as pus,
            sum(keluargas.wus) as wus, 
            sum(keluargas.buta) as buta,
            sum(keluargas.ibu_hamil) as ibu_hamil,
            sum(keluargas.ibu_menyusui) as ibu_menyusui,
            sum(keluargas.lansia) as lansia,
            sum(Case When keluargas.jamban_keluarga = "Ya" then 1 Else 0 END) as jamban,
            sum(Case When keluargas.pembuangan_sampah = "Ya" then 1 Else 0 END) as sampah,
            sum(Case When keluargas.pembuangan_air_limbah = "Ya" then 1 Else 0 END) as limbah,
            sum(Case When keluargas.stiker_pkk = "Ya" then 1 Else 0 END) as stiker,
            sum(Case When keluargas.up2k = "Ya" then 1 Else 0 END) as up2k,
            sum(Case When keluargas.usaha_kesehatan_lingkungan = "Ya" then 1 Else 0 END) as kesling
            ')->groupBy('data_penduduk.dusun')->get();

        $dusuns = DataPenduduk::select('dusun')->groupBy('dusun')->get();
        $wargas = [];
        foreach ($dusuns as $key => $dusun) {
            $wargas[$key] = [
                'dusun' => $dusun->dusun,
                'akseptor_kb' => DataPenduduk::join('wargas', 'wargas.nik', '=', 'data_penduduk.NIK')
                    ->where('data_penduduk.dusun', $dusun->dusun)->where('wargas.akseptor_kb', 'Ya')->count(),
                'kegiatan_posyandu' => DataPenduduk::join('wargas', 'wargas.nik', '=', 'data_penduduk.NIK')
                    ->where('data_penduduk.dusun', $dusun->dusun)->where('wargas.kegiatan_posyandu', 'Ya')->count(),
                'program_bkb' => DataPenduduk::join('wargas', 'wargas.nik', '=', 'data_penduduk.NIK')
                    ->where('data_penduduk.dusun', $dusun->dusun)->where('wargas.program_bkb', 'Ya')->count(),
                'tabungan' => DataPenduduk::join('wargas', 'wargas.nik', '=', 'data_penduduk.NIK')
                    ->where('data_penduduk.dusun', $dusun->dusun)->where('wargas.tabungan', 'Ya')->count(),
                'kelompok_belajar' => DataPenduduk::join('wargas', 'wargas.nik', '=', 'data_penduduk.NIK')
                    ->where('data_penduduk.dusun', $dusun->dusun)->where('wargas.kelompok_belajar', 'Ya')->count(),
                'paud' => DataPenduduk::join('wargas', 'wargas.nik', '=', 'data_penduduk.NIK')
                    ->where('data_penduduk.dusun', $dusun->dusun)->where('wargas.paud', 'Ya')->count(),
                'kegiatan_koperasi' => DataPenduduk::join('wargas', 'wargas.nik', '=', 'data_penduduk.NIK')
                    ->where('data_penduduk.dusun', $dusun->dusun)->where('wargas.kegiatan_koperasi', 'Ya')->count(),
            ];
        }

        return view('livewire.laporan.index-laporan', [
            'keluargas' => $keluargas,
            'wargas' => $wargas,
        ]);
    }
}
