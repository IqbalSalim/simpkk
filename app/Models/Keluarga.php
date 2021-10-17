<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keluarga extends Model
{
    use HasFactory;
    protected $fillable = [
        'nik',
        'jumlah_AK',
        'jumlah_KK',
        'balita',
        'pus',
        'wus',
        'buta',
        'ibu_hamil',
        'ibu_menyusui',
        'lansia',
        'makanan_pokok',
        'jamban_keluarga',
        'sumber_air',
        'pembuangan_sampah',
        'pembuangan_air_limbah',
        'stiker_pkk',
        'kriteria_rumah',
        'up2k',
        'usaha_kesehatan_lingkungan',
    ];
}
