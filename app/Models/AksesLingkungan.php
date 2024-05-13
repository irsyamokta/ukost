<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AksesLingkungan extends Model
{
    use HasFactory;

    protected $table = 'akses';
    protected $primaryKey = 'id_akses';
    protected $fillable = [
        'rumah_makan', 'jarak_rm', 'warung', 'jarak_warung', 'mini_market', 'jarak_mm', 'laundry', 'jarak_laundry', 'atm', 'jarak_atm', 'kampus', 'jarak_kampus'
    ];
}
