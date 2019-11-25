<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Pesanan;

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
        Pesanan::where('id',$request->id)->update([
            'kg'=>$request->kg,
            'harga_jenis'=>$request->harga_jenis,
            'harga_kecepatan'=>$request->harga_kecepatan,
            'harga_do'=>$request->harga_do,
            'total'=>($request->kg * $request->harga_jenis)+$request->harga_kecepatan+$request->harga_do,
            'Status'=>"Selesai"
        ]);
        return redirect('washadmin');
    }
}
