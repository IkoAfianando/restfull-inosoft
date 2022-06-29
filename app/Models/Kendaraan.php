<?php

namespace App\Models;

// use Mobil class
use App\Models\Mobil;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Kendaraan extends Eloquent
{

    protected $connection = 'mongodb';
    protected $table = 'kendaraans';
    use HasFactory;
    protected $fillable = ['tahun_keluaran', 'warna', 'harga'];

    public function mobil()
    {
        return $this->hasMany(Mobil::class);
    }
}
