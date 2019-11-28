<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    public $table = "pesanan";
    protected $fillable = ['name','telpon','alamat','id_jenis','jenis','do','kg','harga_jenis','harga_do','total','status'];

    public function harga(){
        return $this->hasOne('App\Harga');
    }
}
