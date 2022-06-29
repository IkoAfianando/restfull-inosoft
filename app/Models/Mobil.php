<?php

namespace App\Models;

use App\Models\Kendaraan;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Mobil extends Eloquent
{
    protected $connection = 'mongodb';
    protected $table = 'mobils';
    use HasFactory;
    protected $fillable = ['mesin', 'kapasitas_penumpang', 'tipe', 'tahun_keluaran', 'warna', 'harga'];

    public function kendaraan()
    {
        return $this->belongsTo(Kendaraan::class);
    }
}
