@extends('admin.sidebar')
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">
<!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <a href="/washadmin">Kembali</a>    
        <h1 class="h3 mb-0 text-gray-800">Update Harga</h1>
    </div>
    @foreach($delivery as $p)
    <!-- COntent Row -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Edit</h6>
        </div>
        <div class="card-body">
            <form class="user" action="/washadmin/do/simpan" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{ $p->id }}">
            <div class="form-group row">
            <input type="hidden" class="form-control form-control-user" name="id" value="{{$p->id}}" disabled>
                <div class="col-sm-4 mb-3 mb-sm-0">
                    <label for="name">Nama</label>
                    <input type="text" class="form-control form-control-user" name="name" value="{{$p->nama}}" disabled>
                </div>
                <div class="col-sm-4">
                    <label for="hnow">Harga Saat ini</label>
                    <input type="text" class="form-control form-control-user" name="hnow" value="{{$p->harga}}" disabled>
                </div>
                <div class="col-sm-4">
                    <label for="hbaru">Harga Baru</label>
                    <input type="number" class="form-control form-control-user" name="hbaru" required>
                </div>
            </div>
            <input type="submit" value="Simpan" class="d-none d-sm-inline-block btn btn-lg btn-info shadow-sm"><i class="fas fa-check fa-sm text-white-50"></i>
            </form>
        </div>
    </div>
    @endforeach
</div>
@endsection