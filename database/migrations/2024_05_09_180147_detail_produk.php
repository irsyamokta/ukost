<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('detail_produk', function (Blueprint $table) {
            $table->bigIncrements('id_produk');
            $table->unsignedBigInteger('id_pemilik'); 
            $table->foreign('id_pemilik')->references('id_pemilik')->on('pemilik');
            $table->unsignedBigInteger('id_pengelola');
            $table->foreign('id_pengelola')->references('id_pengelola')->on('pengelola');
            $table->unsignedBigInteger('id_alamat');
            $table->foreign('id_alamat')->references('id_alamat')->on('alamat');
            $table->unsignedBigInteger('id_spesifikasi');
            $table->foreign('id_spesifikasi')->references('id_spesifikasi')->on('spesifikasi');
            $table->unsignedBigInteger('id_fu');
            $table->foreign('id_fu')->references('id_fu')->on('fasilitas_umum');
            $table->unsignedBigInteger('id_fkm');
            $table->foreign('id_fkm')->references('id_fkm')->on('fasilitas_kamar_mandi');
            $table->unsignedBigInteger('id_peraturan');
            $table->foreign('id_peraturan')->references('id_peraturan')->on('peraturan_kos');
            $table->unsignedBigInteger('id_akses');
            $table->foreign('id_akses')->references('id_akses')->on('akses_lingkungan');
            $table->string('nama_produk');
            $table->string('no_telp');
            $table->timestamps();

            $table->primary('id_produk');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
