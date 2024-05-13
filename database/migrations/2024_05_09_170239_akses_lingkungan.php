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
        Schema::create('akses_lingkungan', function (Blueprint $table) {
            $table->bigIncrements('id_akses');
            $table->string('rumah_makan');
            $table->integer('jarak_rm');
            $table->string('warung');
            $table->integer('jarak_warung');
            $table->string('mini_market');
            $table->integer('jarak_mm');
            $table->string('laundry');
            $table->integer('jarak_laundry');
            $table->string('atm');
            $table->integer('jarak_atm');
            $table->string('kampus');
            $table->integer('jarak_kampus');

            $table->primary('id_akses');
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
