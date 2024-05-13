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
        Schema::create('peraturan_kos', function (Blueprint $table) {
            $table->bigIncrements('id_peraturan');
            $table->boolean('pasutri');
            $table->boolean('sekamar_berdua');
            $table->boolean('sekamar_bertiga');
            $table->boolean('lawan_jenis');
            $table->boolean('peliharaan');
            $table->boolean('merokok');
            $table->boolean('akses');
            $table->string('akses_lain');
            $table->timestamps();

            $table->primary('id_peraturan');
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
