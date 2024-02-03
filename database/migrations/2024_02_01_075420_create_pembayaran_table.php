<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePembayaranTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pembayaran', function (Blueprint $table) {
            $table->id('id_pembayaran');
            $table->dateTime('tanggal_pembayaran');
            $table->decimal('jumlah_pembayaran', 50, 0);
            $table->enum('jenis_pembayaran',['daftar_ulang', 'iuran_bulanan', 'tamrin']);
            $table->enum('status_pembayaran', ['sudah_bayar', 'belum_bayar'])->default('belum_bayar');
            $table->unsignedBigInteger('id_admin');
            $table->unsignedBigInteger('id_santri');
            $table->timestamps();

            $table->foreign('id_admin')->references('id_admin')->on('admin');
            $table->foreign('id_santri')->references('id_santri')->on('santri');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pembayaran');
    }
}