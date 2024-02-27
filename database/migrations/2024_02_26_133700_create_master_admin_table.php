<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMasterAdminTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('master_admin', function (Blueprint $table) {
            $table->id('id_master_admin');
            $table->decimal('pembayaran_daftar_ulang', 50, 0);
            $table->decimal('pembayaran_tamrin', 50, 0);
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
        Schema::dropIfExists('master_admins');
    }
}
