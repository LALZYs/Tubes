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
        Schema::create('ordersystem', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('tanggal pembelian');
            $table->string('email');
            $table->string('phone_number');
            $table->string('harga');
            $table->timestamps();
        });
    }
        //
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
