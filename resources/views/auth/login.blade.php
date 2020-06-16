@extends('layouts.login')

@section('content')
<link rel="stylesheet" href="{{asset('css/login.css')}}">
<a href="/"><img src="images/logo.png" class="imagem" alt="logo" height="90"></a>
<section>
    <br><br><br>
    <div class="container">
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <h2 class="margem">LOGIN</h2>
            <br><br>
            <div class="form-group row">
                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Endereço de Email') }}</label>
                <div class="col-md-6">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
    
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <br>
            <div class="form-group row">
                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
                <div class="col-md-6">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
    
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <br>
            <div class="row; margem2">
                <div class="checkbox">
                    <label><input type="checkbox"> Lembrar-se de mim</label>
                </div>
                <button type="submit" class="btn btn-secondary">Login</button>
            </div>
            <br><br><br>
            @if (Route::has('password.request'))
                <a class="btn btn-link" href="{{ route('password.request') }}" style="color:#555555">
                    {{ __('Esqueceu a sua Password?') }}
                </a>
            @endif
        </form>    
    </div>
</section>
<br><br><br><br><br><br><br><br><br><br><br><br>
@include('layouts/footer')
@endsection