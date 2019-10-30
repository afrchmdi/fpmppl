<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBarangValidasi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barang_validasi', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('id_hilang')->nullable();
            $table->integer('id_penemu')->nullable();
            $table->string('nama_barang');
            $table->integer('id_penemu');
            $table->string('nama_penemu', 30);
            $table->integer('id_pencari');
            $table->string('nama_pencari', 30);
            $table->string('kategori', 20);
            $table->timestamp('waktu_validasi');
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
        Schema::dropIfExists('barang_validasi');
    }
}
