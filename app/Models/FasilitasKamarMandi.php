<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FasilitasKamarMandi extends Model
{
    use HasFactory;

    protected $table = 'fasilitas_kamar_mandi';
    protected $primaryKey = 'id_fkm';
    protected $fillable = [
        'tipe_km', 'tipe_kloset', 'shower', 'bak_mandi', 'bath_tube', 'water_heater', 'wastafel', 'ember_mandi' 
    ];
}
