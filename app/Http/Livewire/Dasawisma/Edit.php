<?php

namespace App\Http\Livewire\Dasawisma;

use App\Models\DataPenduduk;
use App\Models\Keluarga;
use App\Models\Warga;
use Livewire\Component;

class Edit extends Component
{
    public $no_dasawisma, $no_reg, $akseptor_kb, $kegiatan_posyandu, $program_bkb, $tabungan, $kelompok_belajar, $paud, $kegiatan_koperasi;
    public $jumlah_AK, $jumlah_KK, $balita, $pus, $wus, $buta, $ibu_hamil, $ibu_menyusui, $lansia, $makanan_pokok, $jamban_keluarga, $sumber_air, $pembuangan_sampah, $pembuangan_air_limbah, $stiker_pkk, $kriteria_rumah, $up2k, $usaha_kesehatan_lingkungan;
    public $nama, $nik, $warga, $keluarga;

    public function mount($id)
    {
        $this->keluarga = Keluarga::find($id);
        $this->nik = $this->keluarga->nik;
        $this->warga = Warga::where('nik', '=', $this->nik)->first();
        $penduduk = DataPenduduk::where('NIK', '=', $this->nik)->first();
        $this->nama = $penduduk->Nama_Lengkap;
        $this->getWarga($this->warga);
        $this->getKeluarga($this->keluarga);
    }

    public function render()
    {
        return view('livewire.dasawisma.edit');
    }

    public function getWarga($warga)
    {
        $this->no_dasawisma = $warga->no_dasawisma;
        $this->no_reg = $warga->no_reg;
        $this->akseptor_kb = $warga->akseptor_kb;
        $this->kegiatan_posyandu = $warga->kegiatan_posyandu;
        $this->program_bkb = $warga->program_bkb;
        $this->tabungan = $warga->tabungan;
        $this->kelompok_belajar = $warga->kelompok_belajar;
        $this->paud = $warga->paud;
        $this->kegiatan_koperasi = $warga->kegiatan_koperasi;
        $this->warga_id = $warga->id;
    }

    public function getKeluarga($keluarga)
    {
        $this->jumlah_AK = $keluarga->jumlah_AK;
        $this->jumlah_KK = $keluarga->jumlah_KK;
        $this->balita = $keluarga->balita;
        $this->pus = $keluarga->pus;
        $this->wus = $keluarga->wus;
        $this->buta = $keluarga->buta;
        $this->ibu_hamil = $keluarga->ibu_hamil;
        $this->ibu_menyusui = $keluarga->ibu_menyusui;
        $this->lansia = $keluarga->lansia;
        $this->makanan_pokok = $keluarga->makanan_pokok;
        $this->jamban_keluarga = $keluarga->jamban_keluarga;
        $this->sumber_air = $keluarga->sumber_air;
        $this->pembuangan_sampah = $keluarga->pembuangan_sampah;
        $this->pembuangan_air_limbah = $keluarga->pembuangan_air_limbah;
        $this->stiker_pkk = $keluarga->stiker_pkk;
        $this->kriteria_rumah = $keluarga->kriteria_rumah;
        $this->up2k = $keluarga->up2k;
        $this->usaha_kesehatan_lingkungan = $keluarga->usaha_kesehatan_lingkungan;
    }



    public function update()
    {
        $validateWarga =  $this->validate(
            [
                'no_dasawisma' => 'required|integer|unique:wargas,no_dasawisma,' . $this->warga->no_dasawisma . ',id',
                'no_reg' => 'required|integer|unique:wargas,no_reg,' . $this->warga->no_reg . ',id',
                'akseptor_kb' => 'required|string',
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
                'akseptor_kb' => 'Akseptor KB',
                'kegiatan_posyandu' => 'Kegiatan Posyandu',
                'program_bkb' => 'Program BKB',
                'tabungan' => 'Tabungan',
                'kelompok_belajar' => 'Kelompok Belajar',
                'paud' => 'Paud',
                'kegiatan_koperasi' => 'Kegiatan Koperasi',
            ],
        );

        $validateKeluarga = $this->validate(
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
        $this->warga->update($validateWarga);
        $this->keluarga->update($validateKeluarga);
        session()->flash('message', 'Perubahan Berhasil Disimpan.');
        return redirect()->route('dasawisma');
    }
}
