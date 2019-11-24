<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BarangHilang;
use App\Klaim;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class CariController extends Controller
{
    public function hilang(){
        $user = DB::table('barang_hilang')
                ->where('validasi', '!=', 1)
                ->distinct()
                ->get();
        // dd($user);
        return view('page.barang_hilang', ['user' => $user]);
    }

    public function postklaimhilang(Request $request, $id){

        $barang = DB::table('barang_hilang')->where('id', '=', $id)->first();
        // dd($barang);
        $data = new Klaim;

        $data->id_barang = $barang->id;
        // id pengklaim
        $data->id_klaim = Auth::user()->id;
        $data->nama_pengklaim = Auth::user()->nama;
        $data->jenis = 1;
        $data->deskripsi = $request->input('deskripsi');
        
        $data->save();
        $file = $request->file('foto');
        // dd($file);
        
        if ($request->hasFile('foto')){
            // dd($file);
            $file->getClientOriginalName();
            $file->getClientOriginalExtension();
            $file->getRealPath();
            $file->getSize();
            $file->getMimeType();
            $filename = 'bukti-klaim-hilang-' . $data->id . '.jpg';
            
            $destinationPath = 'uploads/klaim';
            $file->move($destinationPath, $filename);
        }

        $data->foto_bukti = $filename;
        $data->save();
        
        $update = DB::table('barang_hilang')->where('id', '=', $id)
                ->update([
                    'klaim' => 1,
                ]);

        // dd($data);
        return redirect()->back();

    }

    public function laporanklaim(){
        $user = DB::table('barang_hilang')
            ->where('id_pencari', '=', Auth::user()->id)
            ->join('klaim', 'barang_hilang.id', '=', 'klaim.id_barang')
            ->distinct()
            ->get();
            // dd($user);

        return view('page.laporan_klaim_penemuan', ['user' => $user]);
    }

    public function showklaim(Request $request){
        $id = request('id');

        $data = DB::table('klaim')
                ->where('id', '=', $id)
                ->first();

                $values = [
                    'message' => 'success',
                    'deskripsi' => $data->deskripsi,
                    'foto' => $data->foto_bukti,
                ];
    
                return response()->json($values);
    }

    public function validasiterima(Request $request, $id){
        
    }
}
