@extends('layouts.app')
@section('judul','Daftar')
@section('content')
<div class="whole-wrap">
	<div class="container box_1170">
		<div class="section-top-border">
			<div class="progress-table-wrap">
				<div class="progress-table">
					<div class="table-head">
						<div class="country">Nama</div>
						<div class="country">Layanan</div>
						<div class="country">Jenis Laundry</div>
						<div class="country">Dibuat Pada</div>
					</div>
					@foreach($pesanan as $g)
					<div class="table-row">
						<div class="country">{{ $g->name }}</div>
						<div class="country">{{ $g->jenis }}</div>
						<div class="country">{{ $g->kecepatan }}</div>
						<div class="country">{{ $g->created_at }}</div>
					</div>
					@endforeach
				</div>
			</div>
		</div>
	</div>
</div>
@endsection