<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class seller extends Model
{
    use HasFactory;
    protected $table = "seller";
    protected $fillable = [
        'ID',
        'NamaToko',
        'Alamat',
        'Kota',
        'Provinsi',
        'Latitude',
        'Longitude',
        'NoHP',
        'Profil',
        'JenisMakanan',
        'URLFoto',
        'NamaMakanan',
        'HargaMakanan',
        'DeskripsiMakanan',
        'FotoMakanan',
        'URLFotoMakanan',
        'JumlahView',
        'JumlahCall',
        'LastModified',
    ];
}
