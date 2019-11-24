<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Pesanan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pesanan', function (Blueprint $table) {
            $table->timestamp('created_at');
            $table->timestamp('updated_at');
            $table->increments('id');
            $table->char('name',255);
            $table->char('telpon',15);
            $table->text('alamat');
            $table->char('jenis',255);
            $table->char('kecepatan',255);
            $table->char('do',255);
            $table->integer('kg')->default(0);
            $table->bigInteger('harga_jenis')->default(0);
            $table->bigInteger('harga_kecepatan')->default(0);
            $table->bigInteger('harga_do')->default(0);
            $table->bigInteger('total')->default(0);
            $table->char('status',30)->default('Proses');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pesanan');
    }
}
