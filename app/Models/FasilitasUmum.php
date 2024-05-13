<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FasilitasUmum extends Model
{
    use HasFactory;

    protected $table = 'fasilitas_umum';
    protected $primaryKey = 'id_fu';
    protected $fillable = [
        'ruang_tamu', 'dapur', 'kulkas', 'dispenser', 'musholla', 'ruang_santai', 'ruang_jemur', 'ruang_cuci', 'mesin_cuci', 'keamanan', 'wifi', 'parkiran_motor', 'parkiran_mobil'
    ];
}
