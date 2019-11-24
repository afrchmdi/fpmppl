<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBarangTemuan extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'barang_temuan';
    /**
     * Run the migrations.
     * @table barang_temuan
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_barang', 20);
            $table->integer('id_penemu');
            $table->string('nama_penemu', 30);
            $table->string('lokasi', 30);
            $table->string('deskripsi');
            $table->date('waktu');
            $table->text('foto');
            $table->string('kategori', 20);
            $table->boolean('validasi')->nullable();
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
        Schema::dropIfExists($this->set_schema_table);
    }
}
