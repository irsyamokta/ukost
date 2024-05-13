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
        Schema::create('fasilitas_kamar_mandi', function (Blueprint $table) {
            $table->bigIncrements('id_fkm');
            $table->string('tipe_km');
            $table->string('tipe_kloset');
            $table->boolean('shower');
            $table->boolean('bak_mandi');
            $table->boolean('bath_tube');
            $table->boolean('water_heater');
            $table->boolean('westafel');
            $table->boolean('ember_mandi');

            $table->primary('id_fkm');
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
