<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class BarangTemuan extends Model
{
    protected $table = 'barang_temuan';
    protected $primaryKey = 'id';
    protected $fillable = ['nama_barang', 'lokasi', 'deskripsi', 'waktu', 'foto', 'kategori'];

    public function get($id){
        $datas = DB::table('barang_temuan')
                ->where('id', '=', $id)
                ->first();
// dd($datas);
        return $datas;
    }
}
