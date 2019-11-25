@extends('admin.sidebar')
@section('content')
        <!-- Begin Page Content -->
<div class="container-fluid">
<!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <a href="/washadmin">Kembali</a>    
        <h1 class="h3 mb-0 text-gray-800">Update Pesanan</h1>
    </div>
    @foreach($pesanan as $p)
    <!-- COntent Row -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Pesanan {{$p -> name}}</h6>
        </div>
        <div class="card-body">
            <form class="user" action="/washadmin/simpan" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{ $p->id }}">
            <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" name="name" value="{{$p->name}}" disabled>
                </div>
                <div class="col-sm-6">
                    <input type="text" class="form-control form-control-user" name="telpon" value="{{$p->telpon}}" disabled>
                </div>
            </div>
            <div class="form-group">
                  <input type="text" class="form-control form-control-user" name="alamat" value="{{$p->alamat}}" disabled>
                </div>
            <div class="form-group row">
                <div class="col-sm-4 mb-2 mb-sm-0">
                    <input type="text" class="form-control form-control-user" name="jenis" value="{{$p->jenis}}" disabled>
                </div>
                <div class="col-sm-4">
                    <input type="text" class="form-control form-control-user" name="kecepatan" value="{{$p->kecepatan}}" disabled>
                </div>
                <div class="col-sm-4">
                    <input type="text" class="form-control form-control-user" name="do" value="{{$p->do}}" disabled>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-3">
                    <input type="number" class="form-control form-control-user" name="kg" placeholder="Kg" required>
                </div>
                <div class="col-sm-3 mb-2 mb-sm-0">
                    <input type="number" class="form-control form-control-user" name="harga_jenis" placeholder="Harga {{$p->jenis}}" required>
                </div>
                <div class="col-sm-3">
                    <input type="number" class="form-control form-control-user" name="harga_kecepatan" placeholder="Harga {{$p->kecepatan}}" required>
                </div>
                <div class="col-sm-3">
                    <input type="number" class="form-control form-control-user" name="harga_do" placeholder="Harga {{$p->do}}" required>
                </div>
            </div>
            <input type="submit" value="Simpan" class="d-none d-sm-inline-block btn btn-lg btn-info shadow-sm"><i class="fas fa-check fa-sm text-white-50"></i>
              <!-- Logout Modal
            <div class="modal fade" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Apakah Data Pesanan {{$p->name }} sesuai?</h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            Pilih "Ya" jika data sudah sesuai. Pilih "Tidak" untuk melakukan edit data.</div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Tidak</button>
                            <a href="/washadmin/simpan" class="btn btn-secondary">Ya</a>
                        </div>
                    </div>
                </div>
            </div> -->
            </form>
        </div>
    </div>
    @endforeach
</div>
@endsection