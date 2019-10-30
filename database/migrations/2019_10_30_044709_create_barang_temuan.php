<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBarangTemuan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barang_temuan', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_barang', 20);
            $table->integer('id_penemu');
            $table->string('nama_penemu', 30);
            $table->string('lokasi', 30);
            $table->string('deskripsi');
            $table->date('waktu');
            $table->text('foto');
            $table->string('kategori', 20);
            $table->boolean('validasi');
            $table->integer('klaim');
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
        Schema::dropIfExists('barang_temuan');
    }
}
