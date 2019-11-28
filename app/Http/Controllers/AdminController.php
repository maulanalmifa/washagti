<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Pesanan;
use App\Harga;
use PDF;

class AdminController extends Controller
{
    public function index(){
        $pesanan = Pesanan::All();
        return view('admin', ['pesanan'=>$pesanan]);
    }
    
    public function update($id){
        $pesanan = DB::table('pesanan')->where('id',$id)->get();
        return view('adminupdate',['pesanan'=>$pesanan]);
    }

    public function simpan(Request $request){
        $harga = Harga::where('id',$request->id_jenis)->first();
        Pesanan::where('id',$request->id)->update([
            'kg'=>$request->kg,
            'harga_jenis'=>$harga->harga,
            'harga_do'=>$request->harga_do,
            'total'=>$request->kg * $harga->harga,
            'Status'=>"Selesai"
        ]);
        return redirect('washadmin');
    }

    public function cetak($id){
        $pesanan = Pesanan::where('id',$id)->get();
        $pdf = PDF::loadview('admincetak',['pesanan'=>$pesanan]);
        return $pdf->stream();
    }
}
