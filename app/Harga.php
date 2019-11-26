<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Harga extends Model
{
    public $table = "harga_jenis";
    public function harga(){
        return $this->belongsTo('App\Pesanan');
    }
}
