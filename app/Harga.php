<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Harga extends Model
{
    public $table = "jenis";
    protected $fillable = ['nama','harga'];
    public function harga(){
        return $this->belongsTo('App\Pesanan');
    }
}
