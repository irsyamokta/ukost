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
        Schema::create('fasilitas_umum', function (Blueprint $table) {
            $table->bigIncrements('id_fu');
            $table->boolean('ruang_tamu');
            $table->boolean('dapur');
            $table->boolean('kulkas');
            $table->boolean('dispenser');
            $table->boolean('musholla');
            $table->boolean('ruang_santai');
            $table->boolean('ruang_jemur');
            $table->boolean('ruang_cuci');
            $table->boolean('mesin_cuci');
            $table->boolean('keamanan');
            $table->boolean('wifi');
            $table->boolean('parkir_motor');
            $table->boolean('parkir_mobil');

            $table->primary('id_fu');
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
