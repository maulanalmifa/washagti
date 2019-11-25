@extends('admin.sidebar')
@section('content')
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
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
                      <th>Alamat</th>
                      <th>Jenis Layanan</th>
                      <th>Kecepatan</th>
                      <th>Delivery</th>
                      <th>Update</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Dipesan pada</th>
                      <th>Nama Pemesan</th>
                      <th>Telepon</th>
                      <th>Alamat</th>
                      <th>Jenis Layanan</th>
                      <th>Kecepatan</th>
                      <th>Delivery</th>
                      <th>Update</th>
                    </tr>
                  </tfoot>
                  <tbody>
                  @foreach($pesanan as $p)
                    <tr>
                      <td>{{$p->created_at}}</td>
                      <td>{{$p->name}}</td>
                      <td>{{$p->telpon}}</td>
                      <td>{{$p->alamat}}</td>
                      <td>{{$p->jenis}}</td>
                      <td>{{$p->kecepatan}}</td>
                      <td>{{$p->do}}</td>
                      <td><a href="/washadmin/update/{{$p->id}}" class="btn btn-info btn-circle btn-sm">
                          <i class="fas fa-check"></i></a></td>
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
      