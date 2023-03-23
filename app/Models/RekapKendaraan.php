<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RekapKendaraan extends Model
{
    use HasFactory;
    protected $table = 'rekap_kendaraan';
    protected $fillable = [
        'kendaraan',
        'tanggal',
        'kepentingan',
    ];
}
