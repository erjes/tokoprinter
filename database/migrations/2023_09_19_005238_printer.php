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
        Schema::create('Printer', function (Blueprint $table) {
            $table->id('IdPrinter');
            $table->id('IdTransaksi');
            $table->string('NamaPrinter');
            $table->string('SpesifikasiPrinter');
            $table->integer('HargaPrinter');
            $table->integer('UserIdUser');
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
