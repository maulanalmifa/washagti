<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Pesanan;
use App\Harga;
use App\Delivery;
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
        $do = Delivery::where('id',$request->id_do)->first();
        Pesanan::where('id',$request->id)->update([
            'kg'=>$request->kg,
            'harga_jenis'=>$harga->harga,
            'harga_do'=>$do->harga,
            'total'=>($request->kg * $harga->harga)+$do->harga,
            'Status'=>"Selesai"
        ]);
        return redirect('washadmin');
    }

    public function cetak($id){
        $pesanan = Pesanan::where('id',$id)->get();
        $pdf = PDF::loadview('admincetak',['pesanan'=>$pesanan]);
        return $pdf->stream();
    }

    public function hapus($id){
        $pesanan = Pesanan::find($id);
        $pesanan->delete();
        return redirect('washadmin');
    }

    public function harga(){
        $jenis = Harga::All();
        $delivery = Delivery::All();
        return view('harga',['jenis'=>$jenis],['delivery'=>$delivery]);
    }

    public function updateharga($id){
        $jenis = Harga::where('id',$id)->get();
        return view('editharga',['jenis'=>$jenis]);
    }

    public function simpanharga(Request $request){
        Harga::where('id',$request->id)->update([
            'harga'=>$request->hbaru
        ]);
        return redirect('/washadmin/harga');
    }

    public function do(){
        $delivery = Delivery::All();
        return view('delivery',['delivery'=>$delivery]);
    }

    public function updatedo($id){
        $delivery = Delivery::where('id',$id)->get();
        return view('editdo',['delivery'=>$delivery]);
    }

    public function simpando(Request $request){
        Delivery::where('id',$request->id)->update([
            'harga'=>$request->hbaru
        ]);
        return redirect('/washadmin/do');
    }
}
