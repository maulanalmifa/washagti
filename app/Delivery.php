<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Delivery extends Model
{
    public $table = "delivery";
    protected $fillable = ['nama','harga'];
    public function harga(){
        return $this->belongsTo('App\Pesanan');
    }
}
