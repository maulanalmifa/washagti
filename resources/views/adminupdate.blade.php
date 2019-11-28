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
                <div class="col-sm-3 mb-2 mb-sm-0">
                    <input type="hidden" name="id_jenis" value="{{$p->id_jenis}}">
                    <input type="text" class="form-control form-control-user" name="jenis" value="{{$p->jenis}}" disabled>
                </div>
                <div class="col-sm-3">
                    <input type="text" class="form-control form-control-user" name="do" value="{{$p->do}}" disabled>
                </div>
                <div class="col-sm-3">
                    <input type="number" class="form-control form-control-user" name="harga_do" placeholder="Harga {{$p->do}}" required>
                </div>
                <div class="col-sm-3">
                    <input type="number" class="form-control form-control-user" name="kg" placeholder="Jumlah Berat (kg)" required>
                </div>
            </div>
            
            <input type="submit" value="Simpan" class="d-none d-sm-inline-block btn btn-lg btn-info shadow-sm"><i class="fas fa-check fa-sm text-white-50"></i>
            </form>
        </div>
    </div>
    @endforeach
</div>
@endsection