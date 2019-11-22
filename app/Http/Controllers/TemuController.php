<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BarangTemuan;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class TemuController extends Controller
{
    public function temuan(){
        $user = DB::table('barang_temuan')
            ->distinct()
            ->get();

        return view('page.barang_temuan', ['user' => $user]);
    }
}
