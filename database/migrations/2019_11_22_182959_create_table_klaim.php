<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableKlaim extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'klaim';
    /**
     * Run the migrations.
     * @table barang_hilang
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('id_barang');
            $table->integer('id_klaim');
            $table->string('nama_pengklaim');
            // jenis :
            // 1 = kehilangan
            // 2 = penemuan
            $table->string('jenis');
            $table->string('deskripsi');
            $table->text('foto_bukti');
            $table->integer()('stat')->nullable();
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
