<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Pesanan;

class PesananController extends Controller
{
    public function pesan(Request $request){
        Pesanan::create([
            'name' => $request->nama,
            'telpon' => $request->telpon,
            'alamat' => $request->alamat,
            'jenis' => $request->jenis,
            'kecepatan' => $request->kecepatan
    ]);
    return redirect('/pesanan');
    }

    public function daftar(){
        $pesanan = Pesanan::where('name',Auth::user()-> name)->get();
        return view('pesanan', ['pesanan' => $pesanan]);
    }
}
