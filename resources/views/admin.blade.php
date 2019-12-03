@extends('admin.sidebar')
@section('content')
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
          </div>

          <!-- Content Row -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Pesanan</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Dipesan pada</th>
                      <th>Nama Pemesan</th>
                      <th>Telepon</th>
                      <th>Jenis Layanan</th>
                      <th>Delivery</th>
                      <th>Total Tagihan</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Dipesan pada</th>
                      <th>Nama Pemesan</th>
                      <th>Telepon</th>
                      <th>Jenis Layanan</th>
                      <th>Delivery</th>
                      <th>Total Tagihan</th>
                      <th>Aksi</th>
                    </tr>
                  </tfoot>
                  <tbody>
                  @foreach($pesanan as $p)
                    <tr>
                      <td>{{$p->created_at}}</td>
                      <td>{{$p->name}}</td>
                      <td>{{$p->telpon}}</td>
                      <td>{{$p->jenis}}</td>
                      <td>{{$p->do}}</td>
                      @if($p->total == 0)
                      <td>Dalam Proses</td>
                      @else
                      <td>{{$p->total}}</td>
                      @endif
                      <td><a href="/washadmin/update/{{$p->id}}" class="btn btn-info btn-circle btn-sm" title="Selesai">
                          <i class="fas fa-check"></i></a>
                      @unless($p->status == 'Proses')
                      <a target="_blank" href="/washadmin/cetak/{{$p->id}}" class="btn btn-danger btn-circle btn-sm" title="Cetak Nota">
                          <i class="fas fa-file"></i></a></td>
                      @endunless
                    </tr>
                  @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <!-- /.container-fluid -->
@endsection
      