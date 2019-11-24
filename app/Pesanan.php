<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    public $table = "pesanan";
    protected $fillable = ['name','telpon','alamat','jenis','kecepatan','do'];
}
