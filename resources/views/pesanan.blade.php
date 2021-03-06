@extends('layouts.app')
@section('judul','Daftar')
@section('content')
<div class="whole-wrap">
	<div class="container box_1170">
		<div class="section-top-border">
			<div class="progress-table-wrap">
				<div class="progress-table">
					<div class="table-head">
						<div class="country">Dipesan Pada</div>
						<div class="country">Selesai Pada</div>
						<div class="country">Status</div>
						<div class="country">Jenis Laundry</div>
						<div class="country">Delivery</div>
						<div class="country">Total Harga</div>
					</div>
					@foreach($pesanan as $g)
					<div class="table-row">
						<div class="country">{{ $g->created_at }}</div>
					@if($g->status == 'Selesai')
						<div class="country">{{ $g->updated_at }}</div>
					@else
						<div class="country">N/A</div>
					@endif
						<div class="country">{{ $g->status }}</div>
						<div class="country">{{ $g->jenis }} - {{$g->harga_jenis}}/kg</div>
						<div class="country">{{$g->do}} - {{$g->harga_do}}</div>
					@if($g->status == 'Selesai')
						<div class="country">{{ $g->total }}
							<div class="serial"><a target="_blank" href="/pesanan/cetak/{{$g->id}}" class="btn btn-danger btn-circle btn-sm" title="Cetak Nota">
							<i class="fas fa-file"></i></a></div>
						</div>
					@else
						<div class="country">N/A</div>
					@endif
					</div>
					@endforeach
				</div>
			</div>
		</div>
	</div>
</div>
@endsection