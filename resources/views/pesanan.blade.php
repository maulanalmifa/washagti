@extends('layouts.app')
@section('judul','Daftar')
@section('content')
<table class="table table-bordered">
	<thead>
		<tr>
			<th>Nama</th>
			<th>Layanan</th>
			<th>Jenis Laundry</th>
			<th>Dibuat Pada</th>
		</tr>
	</thead>
	<tbody>
		@foreach($pesanan as $g)
		<tr>
			<td>{{ $g->name }}</td>
			<td>{{ $g->jenis }}</td>
			<td>{{ $g->kecepatan }}</td>
			<td>{{ $g->created_at }}</td>
		</tr>
		@endforeach
	</tbody>
</table>
@endsection