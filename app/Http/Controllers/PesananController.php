<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Pesanan;

class PesananController extends Controller
{
    public function pesan(Request $request){
        Pesanan::create([
            'nama' => $request->nama,
            'telpon' => $request->telpon,
            'alamat' => $request->alamat,
            'jenis' => $request->jenis,
            'kecepatan' => $request->kecepatan
    ]);
    return redirect('/');
    }

    public function cek(Request $request){
        $cek = $request->get('cek');
        $pesanan = pesanan::where('nama','like',$cek);
        return view('cek',['pesanan'=>$pesanan]);
    }
}
