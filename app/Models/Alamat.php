<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alamat extends Model
{
    use HasFactory;

    protected $table = 'alamat';
    protected $primaryKey = 'id_alamat';
    protected $fillable = [
        'rt', 'rw', 'kelurahan', 'kecamatan', 'kabupaten', 'kode_pos', 'provinsi'
    ];
}
