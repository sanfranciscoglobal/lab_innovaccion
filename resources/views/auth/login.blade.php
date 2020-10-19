@extends('layouts.aplicacion.app')

@section('content')
    <main id="main">
        <div class="breadcrumbs" data-aos="fade-in">
            <div class="container">
                <h2>Entrar</h2>
                <p>Est dolorum ut non facere possimus quibusdam eligendi voluptatem. Quia id aut similique quia voluptas
                    sit quaerat debitis. Rerum omnis ipsam aperiam consequatur laboriosam nemo harum praesentium. </p>
            </div>
        </div><!-- End Breadcrumbs -->
        <div class="container mb-5">
            <div class="row">
                <div class="col-md-4 offset-md-4">
                    <form class="login-form" action="{{ route('login') }}" method="post" role="form">
                        @csrf
                        <div class="login-wrap">
                            <p class="login-img text-center mt-5 fs-48"><i class="ri-lock-line"></i></p>
                            <div class="input-group">
                                <span class="input-group-addon fs-28 mr-3 d-inline">
                                    <i class="far fa-envelope"></i>
                                </span>

                                <input id="email" type="email"
                                       class="form-control @error('email') is-invalid @enderror" name="email"
                                       value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="input-group">
                                <span class="input-group-addon fs-28 mr-3 d-inline">
                                    <i class="ri-key-fill"></i>
                                </span>

                                <input id="password" type="password"
                                       class="form-control @error('password') is-invalid @enderror" name="password"
                                       required autocomplete="current-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="checkbox mt-2 mb-3 ml-4 text-center">
                                <input class="form-check-input" type="checkbox" name="remember"
                                       id="remember" {{ old('remember') ? 'checked' : '' }}>
                                <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>

                            <button class="btn btn-lg btn-success btn-block" type="submit">
                                {{ __('Entrar') }}
                            </button>

                            @if (Route::has('auth.register'))
                                <div class="text-center">
                                    <a class="btn btn-lg btn-info btn-block mt-2 text-white" href="{{ route('auth.register') }}">
                                        {{ __('Registrarse') }}
                                    </a>
                                </div>
                            @endif

                            @if (Route::has('password.request'))
                                <div class="text-center">
                                    <a class="btn btn-link text-center" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                </div>
                            @endif
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
@endsection
