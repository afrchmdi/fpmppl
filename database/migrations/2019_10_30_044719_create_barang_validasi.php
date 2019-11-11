<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBarangValidasi extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'barang_validasi';
    /**
     * Run the migrations.
     * @table barang_validasi
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('id_hilang')->nullable();
            $table->integer('id_penemu')->nullable();
            $table->string('nama_barang');
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
        Schema::dropIfExists($this->set_schema_table);
    }
}
