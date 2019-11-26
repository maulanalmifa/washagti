<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Pesanan;
use PDF;

class PesananController extends Controller
{
    public function pesan(Request $request){
        Pesanan::create([
            'name' => $request->nama,
            'telpon' => $request->telpon,
            'alamat' => $request->alamat,
            'jenis' => $request->jenis,
            'kecepatan' => $request->kecepatan,
            'do'=>$request->do
    ]);
    Pesanan::select('EXEC getjenis()');
    return redirect('/pesanan');
    }

    public function daftar(){
        $pesanan = Pesanan::where('name',Auth::user()-> name)->get();
        return view('pesanan', ['pesanan' => $pesanan]);
    }

    public function cetak($id){
        $pesanan = Pesanan::where('id',$id)->get();
        $pdf = PDF::loadview('cetak',['pesanan'=>$pesanan]);
        return $pdf->stream();
    }
}
