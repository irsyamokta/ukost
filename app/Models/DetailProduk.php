<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailProduk extends Model
{
    use HasFactory;

    protected $table = 'detail_produk';
    protected $primaryKey = 'id_produk';
    protected $fillable = [
        'nama_produk', 'no_telp', 'image_1', 'image_2', 'image_3', 'image_4', 'image_5'
    ];

    public function pemilik(){
        return $this->belongsTo(Pemilik::class, 'id_pemilik');
    }

    public function pengelola(){
        return $this->belongsTo(Pengelola::class, 'id_pengelola');
    }

    public function alamat(){
        return $this->belongsTo(Alamat::class, 'id_alamat');
    }

    public function spesifikasi(){
        return $this->belongsTo(Spesifikasi::class, 'id_spesifikasi');
    }

    public function fasilitasUM(){
        return $this->belongsTo(FasilitasUmum::class, 'id_fu');
    }

    public function fasilitasKM(){
        return $this->belongsTo(FasilitasKamarMandi::class, 'id_fkm');
    }
    
    public function peraturan(){
        return $this->belongsTo(PeraturanKos::class, 'id_peraturan');
    }

    public function akses(){
        return $this->belongsTo(AksesLingkungan::class, 'id_akses');
    }
}
