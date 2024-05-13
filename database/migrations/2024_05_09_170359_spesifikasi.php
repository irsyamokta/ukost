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
        Schema::create('spesifikasi', function (Blueprint $table) {
            $table->bigIncrements('id_spesifikasi');
            $table->integer('tipe_produk');
            $table->integer('status');
            $table->string('rating');
            $table->integer('jenis_penghuni');
            $table->integer('akses_jalan');
            $table->integer('listrik');
            $table->string('luas_kamar');
            $table->integer('sisa_kamar');
            $table->integer('jml_kamar');
            $table->integer('jml_km');
            $table->text('catatan');

            $table->primary('id_spesifikasi');
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
