<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kendaraan extends Model
{
    use HasFactory;
    protected $table = 'kendaraan';
    protected $fillable = [
        'jenis',
        'merk',
        'type',
        'bbm',
        'service',
    ];
    public function pesanan()
    {
        return $this->hasMany(Pesanan::class);
    }
}
