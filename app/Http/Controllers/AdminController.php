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
}
