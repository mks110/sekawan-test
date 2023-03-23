<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    use HasFactory;
    protected $table = 'pesanan';
    protected $fillable = [
        'pemesan_id',
        'driver_id',
        'kendaraan_id',
        'tanggal',
        'petugas_approve',
        'akomodasi_approve',
        'pembuat',
    ];
    
    public function kendaraan()
    {
        return $this->belongsTo(Kendaraan::class);
    }
    
    public function driver()
    {
        return $this->belongsTo(Driver::class);
    }
    public function pemesan()
    {
        return $this->belongsTo(Pemesan::class);
    }
}
