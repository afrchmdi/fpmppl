<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BarangHilang;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\URL;

class UserController extends Controller
{
    public function index(){
        return view('page.dashboard');
    }

    public function postkehilangan(){
        $user = DB::table('barang_hilang')
            ->where('id_pencari', '=', Auth::user()->id)
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
        return view('page.riwayat_postingan_kehilangan', ['user' => $user]);
    }

    public function klaimkehilangan(){
        // $user = DB::table('barang_temuan')
        //     ->where('id_penemu', '!=', Auth::user()->id)
        //     ->distinct()
        //     ->get();
        //     // dd($datas);
        $user = DB::table('klaim')
                ->where('id_klaim', '=', Auth::user()->id)
                ->join('barang_temuan', 'barang_temuan.id', '=', 'klaim.id_barang')
                ->select('klaim.*', 'barang_temuan.nama_barang', 'barang_temuan.nama_penemu', 'barang_temuan.lokasi', 'barang_temuan.waktu', 'barang_temuan.kategori')
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

        return view('page.riwayat_klaim_kehilangan', ['user' => $user]);
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
                // 'foto' => "{{ URL::asset('uploads/kehilangan/".$what->foto."') }}"
                'foto' => URL::asset('uploads/kehilangan/' .$what->foto),
                // 'foto' => URL::asset('uploads/temuan/'.$what->foto),
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
        $post->save();

        $file = $request->file('foto');
        // dd($file);
        
        if ($request->hasFile('foto')){
            // dd($file);
            $file->getClientOriginalName();
            $file->getClientOriginalExtension();
            $file->getRealPath();
            $file->getSize();
            $file->getMimeType();
            $filename = $post->id. 'foto-kehilangan-' . Auth::user()->id . '.jpg';
            
            $destinationPath = 'uploads/kehilangan';
            $file->move($destinationPath, $filename);
        }

        $post->foto = $filename;
        $post->save();
        // dd($post);
        return redirect()->back();
    }

    public function edit(Request $request, $id){
        // $id = $request('id');
        // $id = $request->id;
        // dd($id);
        // -----------------------------------
        // $hilang = new BarangHilang();
        // $data = $hilang->get($id);
        
        // $data->nama_barang = $request->input('namabarang');
        // $data->lokasi = $request->input('lokasi');
        // $data->deskripsi = $request->input('deskripsi');
        // // $data->waktu = $request->input('waktu');
        // $data->kategori = $request->input('kategori');
        // dd($data);
        // dd($request->input('waktu'));
        $file = $request->file('foto');
        // dd($file);
        
        if ($request->hasFile('foto')){
            // dd($file);
            $file->getClientOriginalName();
            $file->getClientOriginalExtension();
            $file->getRealPath();
            $file->getSize();
            $file->getMimeType();
            $filename = $id. '-foto-kehilangan-' . Auth::user()->id . '.jpg';
            
            $destinationPath = 'uploads/kehilangan';
            $file->move($destinationPath, $filename);
        }

        $data = DB::table('barang_hilang')->where('id', '=', $id)
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
}
