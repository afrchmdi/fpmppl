<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BarangHilang;
use App\Klaim;
use App\BarangValidasi;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\URL;

class CariController extends Controller
{
    public function hilang(){
        $user = DB::table('barang_hilang')
                ->where('validasi', '!=', 1)
                ->distinct()
                ->get();
        // dd($user);
        if($user->has('id')){
            // dd($user);
        }
        else{
            $user->id =  Auth::user()->id;
            $user->nama_barang = NULL;
            $user->lokasi = NULL;
            $user->waktu = NULL;
            $user->kategori = NULL;
            $user->validasi = NULL;
        }

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
            ->where('barang_hilang.validasi', '!=', 1)
            ->where('barang_hilang.klaim', '=', '1')
            ->where('klaim.jenis', '=', 1)
            ->distinct()
            ->get();
            // dd($user);

        return view('page.laporan_klaim_penemuan', ['user' => $user]);
    }

    public function showklaim(Request $request){
        $id = request('id');

        // $data = DB::table('klaim')
        //         ->where('id', '=', $id)
        //         ->first();
        $datas = new Klaim();
        $data = $datas->get($id);
        

                $values = [
                    'message' => 'success',
                    'deskripsi' => $data->deskripsi,
                    // 'foto' => $data->foto_bukti,
                    'foto' => URL::asset('uploads/klaim/' .$data->foto_bukti),
                ];
    
                return response()->json($values);
    }

    public function validasiterima(Request $request){
        $idbarang = request('idbarang');
        $idklaim = request('idklaim');

        $update = DB::table('barang_hilang')->where('id', '=', $idbarang)
                ->update([
                    'validasi' => 1,
                ]);
        $update = DB::table('klaim')->where('id', '=', $idklaim)
                ->update([
                    'stat' => 1,
                ]);
        $update = DB::table('klaim')->where('id_barang', '=', $idbarang)->where('id', '!=', $idklaim)
                ->update([
                    'stat' => 2,
                ]);
        // $barang = DB::table('barang_hilang')->where('id', '=', $idbarang)->first();
        // $klaim = DB::table('klaim')->where('id', '=', $idklaim)->first();
        $barang = BarangHilang::where('id', $idbarang)->first();
        $klaim = Klaim::where('id', $idklaim)->first();

        $insert = new BarangValidasi();
        $insert->id_hilang = $barang->id;
        $insert->id_penemu = $klaim->id_klaim;
        $insert->nama_barang = $barang->nama_barang;
        $insert->nama_penemu = $klaim->nama_pengklaim;
        $insert->id_pencari = $barang->id_pencari;
        $insert->nama_pencari = $barang->nama_pencari;
        $insert->kategori = $barang->kategori;
        $insert->save();
        $insert->waktu_validasi = $insert->created_at;
        $insert->save();

            $values = [
                'message' => 'success',
            ];

        return response()->json($values);

    }

    public function validasitolak(){
        $idbarang = request('idbarang');
        $idklaim = request('idklaim');

        $klaim = DB::table('klaim')->where('id', '=', $idklaim)
                ->first();
        $barang = DB::table('barang_hilang')->where('id', '=', $idbarang)
        ->update([
            'klaim' => 0,
        ]);
        $update = DB::table('klaim')->where('id', '=', $idklaim)
        ->update([
            'stat' => 2,
        ]);
        
        return redirect()->back();
    }

    public function klaimpenemuan(){
        $user = DB::table('klaim')
                ->where('id_klaim', '=', Auth::user()->id)
                ->join('barang_hilang', 'barang_hilang.id', '=', 'klaim.id_barang')
                ->select('klaim.*', 'barang_hilang.nama_barang', 'barang_hilang.nama_pencari', 'barang_hilang.lokasi', 'barang_hilang.waktu', 'barang_hilang.kategori', 'barang_hilang.validasi', 'barang_hilang.foto')
                ->where('jenis', '=', 1)
                ->distinct()
                ->get();
                // dd($user);
        if($user->has('id')){
            // dd($user);
        }
        else{
            $user->id =  Auth::user()->id;
            $user->nama_barang = NULL;
            $user->lokasi = NULL;
            $user->waktu = NULL;
            $user->kategori = NULL;
            $user->validasi = NULL;
        }

        return view('page.riwayat_klaim_penemuan', ['user' => $user]);
    }

    public function editklaimpenemuan(Request $request, $id){
        $file = $request->file('foto');
        // $idnya = request('id');
        // dd($id);
        
        if ($request->hasFile('foto')){
            // dd($file);
            $file->getClientOriginalName();
            $file->getClientOriginalExtension();
            $file->getRealPath();
            $file->getSize();
            $file->getMimeType();
            $filename = 'bukti-klaim-temuan-' . $id . '.jpg';
            
            $destinationPath = 'uploads/klaim';
            $file->move($destinationPath, $filename);
        }

        $klaim = DB::table('klaim')->where('id', '=', $id)
        ->update([
            'deskripsi' => $request->input('deskripsi'),
        ]);

        // dd($klaim);

        return redirect()->back();
    }
    
    public function batalklaim($id){
        $klaim = DB::table('klaim')->where('id', '=', $id)->delete();
        
        return redirect()->back();
    }
}
