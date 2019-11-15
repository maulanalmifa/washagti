@extends('welcome')
@section('judul','Cek Pesanan')
@section('konten')
<div class="section-top-border">
	<h3 class="mb-30">Table</h3>
	<div class="progress-table-wrap">
		<div class="progress-table">
			<div class="table-head">
                <div class="serial">#</div>
			    <div class="country">Nama</div>
			    <div class="visit">Telpon</div>
			    <div class="percentage">Alamat</div>
                <div class="country">Layanan</div>
                <div class="country">Jenis</div>
                <div class="country">Proggress</div>
            </div>
            @foreach($pesanan as $p)
            <div class="row">
                <div class="serial">{{ $p->nomor }}</div>
			    <div class="country">{{ $p->nama }}</div>
			    <div class="visit">{{ $p->telpon }}</div>
			    <div class="percentage">{{ $p->alamat }}</div>
                <div class="country">{{ $p->jenis }}</div>
                <div class="country">{{ $p->kecepatan }}</div>
                <div class="country">Proggress</div>
            </div>
            @endforeach
@endsection