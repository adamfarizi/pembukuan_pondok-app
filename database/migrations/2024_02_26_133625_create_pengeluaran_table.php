<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengeluaranTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengeluaran', function (Blueprint $table) {
            $table->id('id_pengeluaran');
            $table->dateTime('tanggal_pengeluaran');
            $table->decimal('jumlah_pengeluaran', 50, 0);
            $table->string('deskripsi_pengeluaran');
            $table->string('nama_pengeluar');
            $table->unsignedBigInteger('id_admin');
            $table->timestamps();

            $table->foreign('id_admin')->references('id_admin')->on('admin');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pengeluaran');
    }
}
