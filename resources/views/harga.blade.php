@extends('admin.sidebar')
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">
<!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <a href="/washadmin">Kembali</a>    
        <h1 class="h3 mb-0 text-gray-800">Edit Harga</h1>
    </div>

    <!-- COntent Row -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Edit Harga Layanan</h6>
        </div>
        <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                      <th>Nama Layanan</th>
                      <th>Harga</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                        <th>Nama Layanan</th>
                      <th>Harga</th>
                      <th>Aksi</th>
                    </tr>
                  </tfoot>
                  <tbody>
                  @foreach($jenis as $h)
                    <tr>
                      <td>{{$h->nama}}</td>
                      <td>{{$h->harga}}</td>
                      <td><a href="/washadmin/up/{{$h->id}}" class="d-none d-sm-inline-block btn btn-sm btn-info shadow-sm">
                        Edit</a>
                    </tr>
                  @endforeach
                  </tbody>
                </table>
              </div>
    </div>
</div>
@endsection$i