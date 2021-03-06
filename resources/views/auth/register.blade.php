@extends('layouts.login')

@section('content')
<link rel="stylesheet" href="{{asset('css/register.css')}}">
<a href="/"><img src="images/logo.png" class="imagem" alt="logo" height="90"></a>
<section>
    <br><br><br>
    <div class="container">
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <h2 class="margem" style="font-size: 2vw">REGISTAR</h2>
            <br><br>
            <div class="form-group row">
                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nome') }}</label>

                <div class="col-md-6" style="font-size: 0.9vw">
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <br>
            <div class="form-group row" style="font-size: 0.9vw">
                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Endereço de Email') }}</label>

                <div class="col-md-6">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <br>
            <div class="form-group row" style="font-size: 0.9vw">
                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                <div class="col-md-6">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <br>
            <div class="form-group row" style="font-size: 0.9vw">
                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirmar Password') }}</label>

                <div class="col-md-6">
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                </div>
            </div>
            <br>
            <div class="row; margem2" style="font-size: 0.9vw">
                <button type="submit" class="btn btn-secondary">Registar</button>
            </div>
        </form>    
    </div>
</section>
<br><br><br><br><br><br><br><br><br>
@include('layouts/footer')
@endsection