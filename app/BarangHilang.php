<?php

namespace App;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Eloquent\Model;

class BarangHilang extends Model
{
    protected $table = 'barang_hilang';
    protected $primaryKey = 'id';
    protected $fillable = ['nama_barang', 'lokasi', 'deskripsi', 'waktu', 'foto', 'kategori'];

    public function get($id){
        $datas = DB::table('barang_hilang')
                ->where('id', '=', $id)
                ->first();
// dd($datas);
        return $datas;
    }

}
