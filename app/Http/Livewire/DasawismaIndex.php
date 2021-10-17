<?php

namespace App\Http\Livewire;

use App\Models\Keluarga;
use App\Models\Warga;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class DasawismaIndex extends Component
{
    public $nik, $no_dasawisma, $no_reg, $akseptor_kb, $kegiatan_posyandu;
    public $program_bkb, $tabungan, $kelompok_belajar, $paud, $kegiatan_koperasi;
    public $data, $pesan,  $warga_id, $keluarga_id;
    public $isDisable = false, $isDataWarga = true;
    public $penduduk;

    public $jumlah_AK, $jumlah_KK, $balita, $pus, $wus, $buta, $ibu_hamil, $ibu_menyusui;
    public $lansia, $makanan_pokok, $jamban_keluarga, $sumber_air, $pembuangan_sampah;
    public $pembuangan_air_limbah, $stiker_pkk, $kriteria_rumah, $up2k, $usaha_kesehatan_lingkungan;


    public function render()
    {
        return view('livewire.dasawisma-index', [
            'penduduk' => $this->data === null ?
                null :
                $this->data
        ]);
    }

    public function resetInput()
    {
        $this->no_dasawisma = null;
        $this->no_reg = null;
        $this->akseptor_kb = null;
        $this->kegiatan_posyandu = null;
        $this->program_bkb = null;
        $this->tabungan = null;
        $this->kelompok_belajar = null;
        $this->paud = null;
        $this->kegiatan_koperasi = null;
        $this->warga_id = null;
        $this->isDisable = false;
        $this->isDataWarga = true;
    }

    public function resetKeluarga()
    {
        $this->jumlah_AK = null;
        $this->jumlah_KK = null;
        $this->balita = null;
        $this->pus = null;
        $this->wus = null;
        $this->buta = null;
        $this->ibu_hamil = null;
        $this->ibu_menyusui = null;
        $this->lansia = null;
        $this->makanan_pokok = null;
        $this->jamban_keluarga = null;
        $this->sumber_air = null;
        $this->pembuangan_sampah = null;
        $this->pembuangan_air_limbah = null;
        $this->stiker_pkk = null;
        $this->kriteria_rumah = null;
        $this->up2k = null;
        $this->usaha_kesehatan_lingkungan = null;
        $this->keluarga_id = null;
    }

    public function cekNik()
    {

        $this->penduduk = null;
        $this->validate([
            'nik' => 'required|string',
        ]);

        if ($this->nik) {

            $data = DB::Table('data_penduduk')->where('NIK', $this->nik)->get();
            if ($data->isEmpty()) {
                $this->data = null;
                session()->flash('validNIK', 'NIK tidak ditemukan');
            } else {
                $this->penduduk = $data;
                $warga = Warga::where('nik', $this->penduduk[0]->NIK)->get();
                $keluarga = Keluarga::where('nik', $this->penduduk[0]->NIK)->get();

                if ($warga->count() !== 0) {
                    // Warga Ada
                    $this->no_dasawisma = $warga[0]->no_dasawisma;
                    $this->no_reg = $warga[0]->no_reg;
                    $this->akseptor_kb = $warga[0]->akseptor_kb;
                    $this->kegiatan_posyandu = $warga[0]->kegiatan_posyandu;
                    $this->program_bkb = $warga[0]->program_bkb;
                    $this->tabungan = $warga[0]->tabungan;
                    $this->kelompok_belajar = $warga[0]->kelompok_belajar;
                    $this->paud = $warga[0]->paud;
                    $this->kegiatan_koperasi = $warga[0]->kegiatan_koperasi;
                    $this->warga_id = $warga[0]->id;
                    $this->isDisable = true;
                } else {
                    // Warga Tidak Ada
                    $this->resetInput();
                }

                if ($keluarga->count() !== 0) {
                    $this->jumlah_AK = $keluarga[0]->jumlah_AK;
                    $this->jumlah_KK = $keluarga[0]->jumlah_KK;
                    $this->balita = $keluarga[0]->balita;
                    $this->pus = $keluarga[0]->pus;
                    $this->wus = $keluarga[0]->wus;
                    $this->buta = $keluarga[0]->buta;
                    $this->ibu_hamil = $keluarga[0]->ibu_hamil;
                    $this->ibu_menyusui = $keluarga[0]->ibu_menyusui;
                    $this->lansia = $keluarga[0]->lansia;
                    $this->makanan_pokok = $keluarga[0]->makanan_pokok;
                    $this->jamban_keluarga = $keluarga[0]->jamban_keluarga;
                    $this->sumber_air = $keluarga[0]->sumber_air;
                    $this->pembuangan_sampah = $keluarga[0]->pembuangan_sampah;
                    $this->pembuangan_air_limbah = $keluarga[0]->pembuangan_air_limbah;
                    $this->stiker_pkk = $keluarga[0]->stiker_pkk;
                    $this->kriteria_rumah = $keluarga[0]->kriteria_rumah;
                    $this->up2k = $keluarga[0]->up2k;
                    $this->usaha_kesehatan_lingkungan = $keluarga[0]->usaha_kesehatan_lingkungan;
                    $this->keluarga_id = $keluarga[0]->id;
                } else {
                    $this->resetKeluarga();
                }
            }
        }
    }

    public function storeWarga()
    {

        if ($this->warga_id === null) {
            // Tambah Warga
            $validateDate = $this->validate(
                [
                    'no_dasawisma' => 'required|string|unique:wargas,no_dasawisma,',
                    'no_reg' => 'required|string|unique:wargas,no_reg,',
                    'akseptor_kb' => 'required|string',
                    'kegiatan_posyandu' => 'required|string',
                    'program_bkb' => 'required|string',
                    'tabungan' => 'required|string',
                    'kelompok_belajar' => 'required|string',
                    'paud' => 'required|string',
                    'kegiatan_koperasi' => 'required|string',
                ]
            );


            Warga::create([
                'no_dasawisma' => $this->no_dasawisma,
                'no_reg' => $this->no_reg,
                'nik' => $this->penduduk[0]->NIK,
                'akseptor_kb' => $this->akseptor_kb,
                'kegiatan_posyandu' => $this->kegiatan_posyandu,
                'program_bkb' => $this->program_bkb,
                'tabungan' => $this->tabungan,
                'kelompok_belajar' => $this->kelompok_belajar,
                'paud' => $this->paud,
                'kegiatan_koperasi' => $this->kegiatan_koperasi,
            ]);
            $this->isDataWarga = false;
            session()->flash('message', 'Data Warga Berhasil Disimpan.');
        } else {
            // Edit Warga
            $validateDate = $this->validate(
                [
                    'akseptor_kb' => 'required|string',
                    'kegiatan_posyandu' => 'required|string',
                    'program_bkb' => 'required|string',
                    'tabungan' => 'required|string',
                    'kelompok_belajar' => 'required|string',
                    'paud' => 'required|string',
                    'kegiatan_koperasi' => 'required|string',
                ]
            );
            $warga = Warga::find($this->warga_id);
            $warga->update($validateDate);
            $this->isDataWarga = false;
            session()->flash('message', 'Data Warga Berhasil Disimpan.');
        }
    }

    public function storeKeluarga()
    {
        if ($this->keluarga_id === null) {
            // Tambah Warga
            $validateDate = $this->validate(
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
                ]
            );


            Keluarga::create([
                'nik' => $this->penduduk_nik,
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
            $this->resetInput();
            $this->resetKeluarga();
            $this->penduduk = null;
            $this->nik = null;
            session()->flash('message', 'Data Keluarga Berhasil Disimpan.');
        } else {
            // Edit Warga
            $validateDate = $this->validate(
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
                ]
            );
            $keluarga = Keluarga::find($this->keluarga_id);
            $keluarga->update($validateDate);
            $this->resetInput();
            $this->resetKeluarga();
            $this->penduduk = null;
            $this->nik = null;
            session()->flash('message', 'Data Warga Berhasil Disimpan.');
        }
    }
}
