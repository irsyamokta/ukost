<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PeraturanKos extends Model
{
    use HasFactory;

    protected $table = 'peraturan_kos';
    protected $primaryKey = 'id_peraturan';
    protected $fillable = [
        'pasutri', 'sekamar_berdua', 'sekamar_bertiga', 'lawan_jenis', 'peliharaan', 'merokok', 'akses', 'akses_lain'
    ];
}
