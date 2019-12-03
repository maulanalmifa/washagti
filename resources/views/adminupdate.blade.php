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
                    <label for="name">Nama</label>
                    <input type="text" class="form-control form-control-user" name="name" value="{{$p->name}}" disabled>
                </div>
                <div class="col-sm-6">
                    <label for="telpon">Telepon</label>
                    <input type="text" class="form-control form-control-user" name="telpon" value="{{$p->telpon}}" disabled>
                </div>
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                  <input type="text" class="form-control form-control-user" name="alamat" value="{{$p->alamat}}" disabled>
                </div>
            <div class="form-group row">
                <div class="col-sm-3 mb-2 mb-sm-0">
                    <label for="jenis">Jenis Layanan</label>
                    <input type="hidden" name="id_jenis" value="{{$p->id_jenis}}">
                    <input type="text" class="form-control form-control-user" name="jenis" value="{{$p->jenis}}" disabled>
                </div>
                <div class="col-sm-3">
                    <label for="do">Delivery Order</label>
                    <input type="hidden" name="id_do" value="{{$p->id_do}}">
                    <input type="text" class="form-control form-control-user" name="do" value="{{$p->do}}" disabled>
                </div>
                @if($p->status == 'Proses')
                <div class="col-sm-3">
                    <label for="kg">Jumlah Berat (kg)</label>
                    <input type="number" class="form-control form-control-user" name="kg" placeholder="1.0" step="0.1" min="0" max="10" required>
                </div>
                @else
                <div class="col-sm-3">
                    <label for="kg">Jumlah Berat (kg)</label>
                    <input type="number" class="form-control form-control-user" name="kg" value="{{$p->kg}}" disabled>
                </div>
                <div class="col-sm-3">
                    <label for="total">Total Tagihan</label>
                    <input type="number" class="form-control form-control-user" name="total" value="{{$p->total}}" disabled>
                </div>
                @endif
            </div>
            
            @if($p->status == 'Proses')
            <input type="submit" onclick="return confirm('Data Pesanan {{$p->name}} Apakah sudah benar?')" value="Simpan" class="d-none d-sm-inline-block btn btn-lg btn-info shadow-sm"><i class="fas fa-check fa-sm text-white-50"></i>
            @endif
            </form>

        </div>
    </div>
    @endforeach
</div>
@endsection