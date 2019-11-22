<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BarangHilang;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;

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
            dd($user);
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
        $user = DB::table('barang_temuan')
            ->where('id_penemu', '!=', Auth::user()->id)
            ->distinct()
            ->get();
            // dd($datas);

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
                'foto' => "{{ URL::asset('uploads/kehilangan/".$what->foto."') }}"
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

        $file = $request->file('foto');
        // dd($file);
        
        if ($request->hasFile('foto')){
            // dd($file);
            $file->getClientOriginalName();
            $file->getClientOriginalExtension();
            $file->getRealPath();
            $file->getSize();
            $file->getMimeType();
            $filename = 'foto-kehilangan-' . Auth::user()->id . '.jpg';
            
            $destinationPath = 'uploads/kehilangan';
            $file->move($destinationPath, $filename);
        }

        $post->foto = $filename;
        $post->save();
        // dd($post);

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

        $data = BarangHilang::where('id', $id)->first()
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
