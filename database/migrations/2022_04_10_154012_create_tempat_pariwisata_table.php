<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tempat_pariwisatas', function (Blueprint $table) {
            $table->id();
            $table->string('gambar');
            $table->string('nama_tempat');
            $table->string('deskripsi');
            $table->string('lokasi');
            $table->string('tarif');
            $table->string('catering');
            $table->string('tourguide');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tempat_pariwisatas');
    }
};
