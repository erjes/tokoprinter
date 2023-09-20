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
        Schema::create('transaksi', function (Blueprint $table) {
            $table->id('IdTransaksi');
            $table->integer('Jumlah');
            $table->integer('UserIdUser');
            $table->integer('Printer_IdPrinter');
            $table->integer('Printer_IdTransaksi');
            $table->integer('UserIdUser2');
        });
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
