<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Pesanan;
use App\Harga;
use App\Delivery;
use PDF;

class PesananController extends Controller
{
    public function pesan(Request $request){
        $harga = Harga::select('id')->where('nama',$request->jenisharga)->first();
        $do = Delivery::select('id')->where('nama',$request->do)->first();
        Pesanan::create([
            'name' => $request->nama,
            'telpon' => $request->telpon,
            'alamat' => $request->alamat,
            'id_jenis' => $harga->id,
            'id_do' =>$do->id,
            'jenis' => $request->jenis,
            'do'=>$request->do,
            'Status'=>'Proses'
    ]);
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
