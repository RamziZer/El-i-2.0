@extends('layout')

@section('content')
<link rel="stylesheet" href="{{asset('css/stylesingup.css')}}">
<div class="login-page">
		<div class="form">
    
{{-- 				<form class ="register-form" action="{{ route('register') }}"> 
					<input type="text" placeholder="Nom Utilisateur">
					<input type="email" placeholder="Email">
					<input type="password" placeholder="Mot de passe">
					<button>Créer</button>
					<p class="message"> Déjà inscrit ?<a href="#">Connectez vous</a> </p>

				</form> --}}

				<form method="POST" action="{{ route('login') }}"  class ="login-form">
                        @csrf
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autofocus>

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                                <p class="message"> Pas de compte ?<a href="/register">Inscrivez vous</a></p>
	
				</form>
	

			</div>
		</div>
@endsection
