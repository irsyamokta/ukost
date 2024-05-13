<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Spesifikasi extends Model
{
    use HasFactory;

    protected $table = 'spesifikasi';
    protected $primaryKey = 'id_spesifikasi';
    protected $fillable = [
        'tipe_produk', 'status', 'rating', 'jenis_penghuni', 'akses_jalan', 'listrik', 'luas_kamar', 'sisa_kamar', 'jml_kamar', 'jml_km', 'catatan'
    ];
}
