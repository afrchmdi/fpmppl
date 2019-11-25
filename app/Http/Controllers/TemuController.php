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
            ->where('validasi', '!=', 1)
            ->distinct()
            ->get();

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

        return view('page.barang_temuan', ['user' => $user]);
    }

    public function postpenemuan(){
        $user = DB::table('barang_temuan')
            ->where('id_penemu', '=', Auth::user()->id)
            ->distinct()
            ->get();
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
        // dd($user);
        return view('page.riwayat_postingan_penemuan', ['user' => $user]);
    }

    public function laporanklaim(){
        $user = DB::table('barang_temuan')
            ->where('id_penemu', '=', Auth::user()->id)
            ->join('klaim', 'barang_temuan.id', '=', 'klaim.id_barang')
            ->where('barang_temuan.validasi', '!=', 1)
            ->where('barang_temuan.klaim', '=', '1')
            ->distinct()
            ->get();
            // dd($user);

        return view('page.laporan_klaim_kehilangan', ['user' => $user]);
    }

    public function postklaimtemu(Request $request, $id){

        $barang = DB::table('barang_temuan')->where('id', '=', $id)->first();
        // dd($barang);
        $data = new Klaim;

        $data->id_barang = $barang->id;
        // id pengklaim
        $data->id_klaim = Auth::user()->id;
        $data->nama_pengklaim = Auth::user()->nama;
        $data->jenis = 2;
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
            $filename = 'bukti-klaim-temuan-' . $data->id . '.jpg';
            
            $destinationPath = 'uploads/klaim';
            $file->move($destinationPath, $filename);
        }

        $data->foto_bukti = $filename;
        $data->save();
        
        $update = DB::table('barang_temuan')->where('id', '=', $id)
                ->update([
                    'klaim' => 1,
                ]);

        // dd($data);
        return redirect()->back();

    }

    public function post(Request $request){
        // $tes = "satu";
        // dd($tes);
        $post = new BarangTemuan();

        $post->nama_barang = $request->input('Form-namabarang');
        $post->id_penemu = Auth::user()->id;
        $post->nama_penemu = Auth::user()->nama;
        $post->lokasi = $request->input('Form-lokasi');
        $post->deskripsi = $request->input('Form-deskripsi');
        $post->waktu = $request->input('Form-waktu');
        $post->kategori = $request->input('Form-kategori');
        $post->validasi = 0;
        $post->klaim = 0;

        $file = $request->file('foto');
        // dd($file);
        
        if ($request->hasFile('foto')){
            // dd($file);
            $file->getClientOriginalName();
            $file->getClientOriginalExtension();
            $file->getRealPath();
            $file->getSize();
            $file->getMimeType();
            $filename = 'foto-penemuan-' . Auth::user()->id . '.jpg';
            
            $destinationPath = 'uploads/temuan';
            $file->move($destinationPath, $filename);
        }

        $post->foto = $filename;
        $post->save();
        // dd($post);
        return redirect()->back();
    }

    public function showposttemu(Request $request){
        $id = request('id');

        $datas = new BarangTemuan();
        $what = $datas->get($id);       

            $values = [
                'message' => 'success',
                'namabarang' => $what->nama_barang,
                'lokasi' => $what->lokasi,
                'deskripsi' => $what->deskripsi,
                'waktu' => $what->waktu,
                'kategori' => $what->kategori,
                'validasi' => $what->validasi,
                'foto' => "{{ URL::asset('uploads/temuan/".$what->foto."') }}"
            ];

            return response()->json($values);
    }


    public function edit(Request $request, $id){

        $data = BarangTemuan::where('id', $id)->first()
                ->update([
                    'nama_barang' => $request->input('namabarang'),
                    'lokasi' => $request->input('lokasi'),
                    'deskripsi' => $request->input('deskripsi'),
                    // 'waktu' => $request->input('waktu'),
                    'kategori' => $request->input('kategori'),
                ]);
        
        // $data->save();

        return redirect()->back();
    }

    public function editklaimhilang(Request $request, $id){
        $klaim = DB::table('klaim')->where('id', '=', $id)
        ->update([
            'deskripsi' => $request->input('deskripsi'),
        ]);

        // dd($klaim);

    }

    public function validasiterima(Request $request){
        $idbarang = request('idbarang');
        $idklaim = request('idklaim');

        $update = DB::table('barang_temuan')->where('id', '=', $idbarang)
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
        $barang = DB::table('barang_temuan')->where('id', '=', $idbarang)->first();
        $klaim = DB::table('klaim')->where('id', '=', $idklaim)->first();
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

        if($update && $insert){
            $values = [
                'message' => 'success',
            ];
        }
        else{
            $values = [
                'message' => 'error',
            ];
        }

        return response()->json($values);

    }

    public function validasitolak(){
        $idbarang = request('idbarang');
        $idklaim = request('idklaim');

        $klaim = DB::table('klaim')->where('id', '=', $idklaim)
                ->first();
        $barang = DB::table('barang_temuan')->where('id', '=', $idbarang)
        ->update([
            'klaim' => 0,
        ]);
        $update = DB::table('klaim')->where('id', '=', $idklaim)
        ->update([
            'stat' => 2,
        ]);
        
        return redirect()->back();
    }

}
