<?php

namespace App\Http\Livewire\Dasawisma;

use App\Models\DataPenduduk;
use App\Models\Keluarga;
use App\Models\Warga;
use Livewire\Component;

class Create extends Component
{
    public $currentStep = 1, $nik, $nama, $nama_krt;
    public $no_dasawisma, $no_reg, $akseptor_kb, $kegiatan_posyandu, $program_bkb, $tabungan, $kelompok_belajar, $paud, $kegiatan_koperasi;
    public $jumlah_AK, $jumlah_KK, $balita, $pus, $wus, $buta, $ibu_hamil, $ibu_menyusui, $lansia, $makanan_pokok, $jamban_keluarga, $sumber_air, $pembuangan_sampah, $pembuangan_air_limbah, $stiker_pkk, $kriteria_rumah, $up2k, $usaha_kesehatan_lingkungan;

    public function render()
    {
        return view('livewire.dasawisma.create');
    }

    public function firstStepSubmit()
    {
        $this->validate(
            [
                'nik' => 'required|numeric|digits:16|exists:data_penduduk,NIK|unique:wargas,nik,NIK',
            ],
            [
                'nik.exists' => ':attribute tidak terdaftar di Tabel Penduduk',
                'nik.unique' => ':attribute ini sudah ditambahkan ke data Dasawisma'
            ],
            [
                'nik' => 'NIK',
            ],
        );
        $this->nama = DataPenduduk::where('NIK', '=', $this->nik)->select('Nama_Lengkap')->first()->Nama_Lengkap;
        $this->currentStep = 2;
    }

    public function secondStepSubmit()
    {
        $this->validate(
            [
                'no_dasawisma' => 'required|string|unique:wargas,no_dasawisma,',
                'no_reg' => 'required|string|unique:wargas,no_reg,',
                'akseptor_kb' => 'required|string',
                'nama_krt' => 'required|string',
                'kegiatan_posyandu' => 'required|string',
                'program_bkb' => 'required|string',
                'tabungan' => 'required|string',
                'kelompok_belajar' => 'required|string',
                'paud' => 'required|string',
                'kegiatan_koperasi' => 'required|string',
            ],
            [],
            [
                'no_dasawisma' => 'No Dasawisma',
                'no_reg' => 'No Registrasi',
                'nama_krt' => 'Nama Kepala Keluarga',
                'akseptor_kb' => 'Akseptor KB',
                'kegiatan_posyandu' => 'Kegiatan Posyandu',
                'program_bkb' => 'Program BKB',
                'tabungan' => 'Tabungan',
                'kelompok_belajar' => 'Kelompok Belajar',
                'paud' => 'Paud',
                'kegiatan_koperasi' => 'Kegiatan Koperasi',
            ],
        );
        $this->currentStep = 3;
    }

    public function thirdStepSubmit()
    {
        $this->validate(
            [
                'jumlah_AK' => 'required|integer',
                'jumlah_KK' => 'required|integer',
                'balita' => 'required|integer',
                'pus' => 'required|integer',
                'wus' => 'required|integer',
                'buta' => 'required|integer',
                'ibu_hamil' => 'required|integer',
                'ibu_menyusui' => 'required|integer',
                'lansia' => 'required|integer',
                'makanan_pokok' => 'required|string',
                'jamban_keluarga' => 'required|string',
                'sumber_air' => 'required|string',
                'pembuangan_sampah' => 'required|string',
                'pembuangan_air_limbah' => 'required|string',
                'stiker_pkk' => 'required|string',
                'kriteria_rumah' => 'required|string',
                'up2k' => 'required|string',
                'usaha_kesehatan_lingkungan' => 'required|string',
            ],
            [],
            [
                'jumlah_AK' => 'Jumlah AK',
                'jumlah_KK' => 'Jumlah KK',
                'balita' => 'Balita',
                'pus' => 'PUS',
                'wus' => 'WUS',
                'buta' => 'Buta',
                'ibu_hamil' => 'Ibu Hamil',
                'ibu_menyusui' => 'Ibu Menyusui',
                'lansia' => 'Lansia',
                'makanan_pokok' => 'Makanan Pokok',
                'jamban_keluarga' => 'Jamban Keluarga',
                'sumber_air' => 'Sumber Air',
                'pembuangan_sampah' => 'Pembuangan Sampah',
                'pembuangan_air_limbah' => 'Pembuangan Air Limbah',
                'stiker_pkk' => 'Stiker PKK',
                'kriteria_rumah' => 'Kriteria Rumah',
                'up2k' => 'UP2K',
                'usaha_kesehatan_lingkungan' => 'Usaha KesLing',
            ]
        );
        $this->submitForm();
        $this->currentStep = 4;
    }

    public function submitForm()
    {
        Warga::create([
            'nama_krt' => $this->nama_krt,
            'no_dasawisma' => $this->no_dasawisma,
            'no_reg' => $this->no_reg,
            'nik' => $this->nik,
            'akseptor_kb' => $this->akseptor_kb,
            'kegiatan_posyandu' => $this->kegiatan_posyandu,
            'program_bkb' => $this->program_bkb,
            'tabungan' => $this->tabungan,
            'kelompok_belajar' => $this->kelompok_belajar,
            'paud' => $this->paud,
            'kegiatan_koperasi' => $this->kegiatan_koperasi,
        ]);

        Keluarga::create([
            'nik' => $this->nik,
            'jumlah_AK' => $this->jumlah_AK,
            'jumlah_KK' => $this->jumlah_KK,
            'balita' => $this->balita,
            'pus' => $this->pus,
            'wus' => $this->wus,
            'buta' => $this->buta,
            'ibu_hamil' => $this->ibu_hamil,
            'ibu_menyusui' => $this->ibu_menyusui,
            'lansia' => $this->lansia,
            'makanan_pokok' => $this->makanan_pokok,
            'jamban_keluarga' => $this->jamban_keluarga,
            'sumber_air' => $this->sumber_air,
            'pembuangan_sampah' => $this->pembuangan_sampah,
            'pembuangan_air_limbah' => $this->pembuangan_air_limbah,
            'stiker_pkk' => $this->stiker_pkk,
            'kriteria_rumah' => $this->kriteria_rumah,
            'up2k' => $this->up2k,
            'usaha_kesehatan_lingkungan' => $this->usaha_kesehatan_lingkungan,
        ]);
    }

    public function back($step)
    {
        $this->currentStep = $step;
    }
}
