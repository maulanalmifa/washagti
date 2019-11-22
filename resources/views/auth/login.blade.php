@extends('layouts.app')

@section('judul','Login Washagti')
@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-6">

        <p>&larr; <a href="/home">Home</a>

        <h4>Masuk ke Washagti</h4>
        <p>Belum punya akun? <a href="/register">Daftar di sini</a></p>

        <form action="{{ route('login') }}" method="POST">
        @csrf
            <div class="form-group">
                <label for="email">{{ __('Email') }}</label>
                <input class="form-control @error('email') is-invalid @enderror" type="email" name="email" placeholder="E-Mail" />
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>


            <div class="form-group">
                <label for="password">{{ __('Password') }}</label>
                <input class="form-control @error('password') is-invalid @enderror" type="password" name="password" placeholder="Password" />
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group row">
                <div class="col-md-6 offset-md-4">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                        <label class="form-check-label" for="remember">
                            {{ __('Remember Me') }}
                        </label>
                    </div>
                </div>
            </div>

            <input type="submit" class="btn btn-success btn-block" name="login" value="{{ __('Login') }}" />
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