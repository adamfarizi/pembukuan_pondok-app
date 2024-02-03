<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSantriTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('santri', function (Blueprint $table) {
            $table->id('id_santri');
            $table->string('nama_santri');
            $table->string('tempat_tanggal_lahir_santri');
            $table->enum('jenis_kelamin_santri',['laki-laki', 'perempuan']);
            $table->string('alamat_santri');
            $table->string('no_hp_santri', 13);
            $table->string('email_santri')->unique();
            $table->enum('status_santri',['menetap','pulang']);
            $table->string('nama_wali_santri');
            $table->string('no_hp_wali_santri', 13);
            $table->string('ktp_santri');
            $table->string('kk_santri');
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
        Schema::dropIfExists('santri');
    }
}
