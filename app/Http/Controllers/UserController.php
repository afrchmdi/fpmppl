<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BarangHilang;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index(){
        return view('page.dashboard');
    }

    public function postkehilangan(){
        $datas = DB::table('barang_hilang')
            ->distinct()
            ->get();
            // dd($datas);

        return view('page.riwayat_postingan_kehilangan', ['datas' => $datas]);
    }

    public function showposthilang(Request $request){
        $id = request('id');

        $datas = new BarangHilang();
        $what = $datas->get($id);       

            $values = [
                'message' => 'success',
                'namabarang' => $what->nama_barang,
                'lokasi' => $what->lokasi,
                'deskripsi' => $what->deskripsi,
                'waktu' => $what->waktu,
                'kategori' => $what->kategori,
                'validasi' => $what->validasi,
                'foto' => $what->foto
            ];

            return response()->json($values);
    }

    public function post(Request $request){
        // $tes = "satu";
        // dd($tes);
        $post = new BarangHilang();

        $post->nama_barang = $request->input('Form-namabarang');
        $post->id_pencari = Auth::user()->id;
        $post->nama_pencari = Auth::user()->nama;
        $post->lokasi = $request->input('Form-lokasi');
        $post->deskripsi = $request->input('Form-deskripsi');
        $post->waktu = $request->input('Form-waktu');
        $post->kategori = $request->input('Form-kategori');
        $post->validasi = 0;
        $post->klaim = 0;

        $file = $request->file('Form-foto');
        if ($file){
            $file->getClientOriginalName();
            $file->getClientOriginalExtension();
            $file->getRealPath();
            $file->getSize();
            $file->getMimeType();
            $filename = 'foto-kehilangan-' . Auth::user()->id . '_' .'.jpg';
            
            $destinationPath = 'uploads/kehilangan';
            $file->move($destinationPath, $filename);
        }
        else{
            $filename = "error";
        }
        $post->foto = $filename;
        $post->save();
        // dd($post);

    }

    public function edit(Request $request){
        $id = $request('id');

        $hilang = new BarangHilang();
        $data = $hilang->get($id);

        $data->nama_barang = $request->input('namabarang');
        $data->lokasi = $request->input('lokasi');
        $data->deskripsi = $request->input('waktu');
        $data->kategori = $request->input('kategori');

        $data->save();

        return redirect()->back();
    }
}
