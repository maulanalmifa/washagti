@section('judul','Register Washagti')
@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-6">

        <p>&larr; <a href="/">Home</a>

        <h4>Bergabunglah bersama ribuan orang lainnya...</h4>
        <p>Sudah punya akun? <a href="/login">Login di sini</a></p>

        <form action="{{ route('register') }}" method="POST">
        @csrf
            <div class="form-group">
                <label for="name">{{ __('Nama Lengkap') }}</label>
                <input class="form-control @error('name') is-invalid @enderror" type="text" name="name" placeholder="Nama kamu" />
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>


            <div class="form-group">
                <label for="email">Email</label>
                <input class="form-control @error('email') is-invalid @enderror" type="email" name="email" placeholder="Alamat Email" />
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input class="form-control @error('password') is-invalid @enderror" type="password" name="password" placeholder="Password" />
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group">
                <label for="password-confirm">{{ __('Confirm Password') }}</label>
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
            </div>

            <input type="submit" class="btn btn-success btn-block" name="register" value="Daftar" />

        </form>
            
        </div>

        <div class="col-md-6">
            <img class="img img-responsive" src="img/connect.png" />
        </div>

    </div>
</div>

</body>
</html>