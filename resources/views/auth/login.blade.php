@extends('layouts.app')
<nav class="navbar navbar-expand-lg navbar-info bg-secondary text-white">
    <a class="navbar-brand text-dark" href="{{route('movie.index')}}"><h4 class="font-weight-light font-italic Italica"><b><span class="text-info lead">A</span>ssian<span class="text-info lead">V</span>iew</b></h4></a>
    
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link text-dark" href="{{route('movie.index')}}">Inicio <span class="sr-only">(current)</span></a>
        </li>
        @auth
        <li class="nav-item active">
            <a class="nav-link text-dark" href="{{route('movie.create')}}">Nueva Pelicula <span class="sr-only">(current)</span></a>
          </li>
        <li class="nav-item active">
          <a class="nav-link text-dark" href="{{route('user.index')}}">Users <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link text-dark" href="{{route('people.index')}}">People <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link text-dark" href="{{route('genre.index')}}">Genres <span class="sr-only">(current)</span></a>
        </li>
        @endauth
        <li class="nav-item active">
            <a class="nav-link text-dark" href="{{route('login')}}">Login <span class="sr-only">(current)</span></a>
          </li>
          @auth      
         
          <li class="nav-item active">
              <a class="nav-link text-dark" href="{{route('register')}}">Logout <span class="sr-only">(current)</span></a>
            </li>
            @endauth     
      </ul>
      <form class="form-inline my-2 my-lg-0 text-dark">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-dark my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </nav>
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

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

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
