@section('judul','Login Washagti')
@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-6">

        <p>&larr; <a href="/">Home</a>

        <h4>Masuk ke Washagti</h4>
        <p>Belum punya akun? <a href="/register">Daftar di sini</a></p>

        <form action="{{ route('login') }}" method="POST">
        @csrf
            <div class="form-group">
                <label for="username">{{ __('Username') }}</label>
                <input class="form-control" type="text" name="username" placeholder="Username atau" />
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>


            <div class="form-group">
                <label for="password">{{ __('Password') }}</label>
                <input class="form-control" type="password" name="password" placeholder="Password" />
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <input type="submit" class="btn btn-success btn-block" name="login" value="Masuk" />
            @if (Route::has('password.request'))
                <a class="btn btn-link" href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                </a>
            @endif
        </form>
            
        </div>

        <div class="col-md-6">
            <!-- isi dengan sesuatu di sini -->
        </div>

    </div>
</div>
@endsection