<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Klaim extends Model
{
    protected $table = 'klaim';
    protected $primaryKey = 'id';
    protected $fillable = ['jenis', 'deskripsi', 'foto_bukti'];
}
