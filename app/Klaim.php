<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Klaim extends Model
{
    protected $table = 'klaim';
    protected $primaryKey = 'id';
    protected $fillable = ['jenis', 'deskripsi', 'foto_bukti'];

    public function get($id){
        $datas = DB::table('klaim')
                ->where('id', '=', $id)
                ->first();
        // dd($datas);
        return $datas;
    }

}
