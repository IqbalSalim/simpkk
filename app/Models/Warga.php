<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Warga extends Model
{
    use HasFactory;
    protected $fillable = [
        'no_dasawisma',
        'no_reg',
        'nik',
        'akseptor_kb',
        'kegiatan_posyandu',
        'program_bkb',
        'tabungan',
        'kelompok_belajar',
        'paud',
        'kegiatan_koperasi',
    ];
}
