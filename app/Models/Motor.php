<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Motor extends Eloquent
{
    protected $connection = 'mongodb';
    protected $table = 'motors';
    use HasFactory;
    protected $fillable = ['mesin', 'tipe_suspensi', 'tipe_transmisi', 'tahun_keluaran', 'warna', 'harga'];



}
