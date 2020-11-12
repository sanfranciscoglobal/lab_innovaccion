@extends('layouts.aplicacion.app')

@section('content')
<div class="position-relative bg-purple-gradient" style="height: 480px;">
    <div class="cs-shape cs-shape-bottom cs-shape-slant bg-secondary d-none d-lg-block">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 3000 260">
            <polygon fill="currentColor" points="0,257 0,260 3000,260 3000,0"></polygon>
        </svg>
    </div>
</div>
<div class="container bg-overlay-content pb-4 mb-md-3" style="margin-top: -350px;">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Confirmar Contraseña</div>

                <div class="card-body">
                    porfavor confirma tu contraseña para continuar

                    <form class="needs-validation" novalidate method="POST" action="{{ route('password.update') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">Contraseña</label>

                            <div class="col-md-6">
                                <div class="cs-password-toggle">
                                    <input class="form-control @error('password') is-invalid @enderror" name="password" type="password" placeholder="Confirme la contraseña" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[\W])[\S]{8,}" value="{{ old('password_confirmation') }}" required>
                                    <label class="cs-password-toggle-btn">
                                        <input class="custom-control-input" type="checkbox">
                                        <i class="fe-eye cs-password-toggle-indicator"></i>
                                        <span class="sr-only">Mostrar contraseña</span>
                                    </label>
                                </div>
                                <small class="form-text text-muted">Al menos 1 Mayúscula, 1 minúscula, 1 número, 1 símbolo, Mínimo 8 caracteres</small>
                                @error('password')<div class="invalid-feedback d-inline">{{ $message }}</div>@enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">Confirme la contraseña</label>

                            <div class="col-md-6">
                                <div class="cs-password-toggle">
                                    <input class="form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation" type="password" placeholder="Confirme la contraseña" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[\W])[\S]{8,}" value="{{ old('password_confirmation') }}" required>
                                    <label class="cs-password-toggle-btn">
                                        <input class="custom-control-input" type="checkbox">
                                        <i class="fe-eye cs-password-toggle-indicator"></i>
                                        <span class="sr-only">Mostrar contraseña</span>
                                    </label>
                                </div>
                                <small class="form-text text-muted">Al menos 1 Mayúscula, 1 minúscula, 1 número, 1 símbolo, Mínimo 8 caracteres</small>
                                @error('password_confirmation')<div class="invalid-feedback d-inline">{{ $message }}</div>@enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Cambiar contraseña
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
