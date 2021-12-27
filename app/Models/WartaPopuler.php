<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WartaPopuler extends Model
{
    use HasFactory;
    protected $table = 'warta_populer';
    protected $fillable = [
        'warta_id',
        'alamat_ip',
        'created_at',
    ];
}
