<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BarangValidasi extends Model
{
    protected $table = 'barang_validasi';
    protected $primaryKey = 'id';
    protected $fillable = ['id_hilang', 'id_penemu', 'nama_barang', 'id_pencari', 'nama_pencari', 'kategori', 'waktu_validasi'];
}
