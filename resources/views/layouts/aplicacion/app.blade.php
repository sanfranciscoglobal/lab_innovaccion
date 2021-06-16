<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>Laboratorio de Innovación</title>
    <!-- google Analytics -->
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-RCKYF8WLDC"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());

        gtag('config', 'G-RCKYF8WLDC');
    </script>


    <!-- SEO Meta Tags-->
    <meta name="description" content="Thinkia - Laboratorio de Innovación Ciudadana">
    <meta name="keywords"
          content="Innovación, sertor productivo ">
    <meta name="author" content="Thinkia">
    <!-- Viewport-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon and Touch Icons-->
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('img/logo/favicon/android-chrome-192x192.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('img/logo/favicon/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('img/logo/favicon/favicon-16x16.png')}}">
    <link rel="manifest" href="{{asset('site.webmanifest')}}">
    <link rel="mask-icon" color="#5bbad5" href="{{asset('img/safari-pinned-tab.svg')}}">
    <meta name="msapplication-TileColor" content="#766df4">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.3/tiny-slider.css">
    {{--<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet">--}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.2/min/tiny-slider.js"></script>
    <link rel="stylesheet" href="{{asset('assets/lightgallery.js/dist/css/lightgallery.min.css')}}">
    <!-- Page loading styles-->
    <style>
        .cs-page-loading {
            position: fixed;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 100%;
            -webkit-transition: all .4s .2s ease-in-out;
            transition: all .4s .2s ease-in-out;
            background-color: #fff;
            opacity: 0;
            visibility: hidden;
            z-index: 9999;
        }

        .cs-page-loading.active {
            opacity: 1;
            visibility: visible;
        }

        .cs-page-loading-inner {
            position: absolute;
            top: 50%;
            left: 0;
            width: 100%;
            text-align: center;
            -webkit-transform: translateY(-50%);
            transform: translateY(-50%);
            -webkit-transition: opacity .2s ease-in-out;
            transition: opacity .2s ease-in-out;
            opacity: 0;
        }

        .cs-page-loading.active > .cs-page-loading-inner {
            opacity: 1;
        }

        .cs-page-loading-inner > span {
            display: block;
            font-family: 'Inter', sans-serif;
            font-size: 1rem;
            font-weight: normal;
            color: #380655;
        }

        .cs-page-spinner {
            display: inline-block;
            width: 2.75rem;
            height: 2.75rem;
            margin-bottom: .75rem;
            vertical-align: text-bottom;
            border: .15em solid #FF8527;
            border-right-color: transparent;
            border-radius: 50%;
            -webkit-animation: spinner .75s linear infinite;
            animation: spinner .75s linear infinite;
        }

        @-webkit-keyframes spinner {
            100% {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }

        @keyframes spinner {
            100% {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }

        .error-container {
            position: fixed;
            top: 20px;
            right: 0px;
            width: 100%;
            z-index: 1051;
        }

        .select2-search--inline {
            display: contents; /*this will make the container disappear, making the child the one who sets the width of the element*/
        }

        .select2-search__field:placeholder-shown {
            width: 100% !important; /*makes the placeholder to be 100% of the width while there are no options selected*/
        }

    </style>
    <!-- Page loading scripts-->
    <script>
        (function () {
            window.onload = function () {
                var preloader = document.querySelector('.cs-page-loading');
                preloader.classList.remove('active');
                setTimeout(function () {
                    preloader.remove();
                }, 2000);
            };
        })();

    </script>
    <!-- Vendor Styles-->
    {{--<link rel="stylesheet" media="screen" href="vendor/simplebar/dist/simplebar.min.css"/>--}}
<!-- Main Theme Styles + Bootstrap-->
    {{-- <link rel="stylesheet" media="screen" href="{{asset('css/theme.css')}}"> --}}
    <link rel="stylesheet" media="screen" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" media="screen" href="{{asset('css/extra.css')}}">
    @yield('header-css')
</head>
<!-- Body-->
<body>

{{-- <div class="error-container" id="errorDiv"> --}}
@include('includes.session-flash-status')
@include('includes.session-flash-error')
{{-- @include('includes.validation-error')
{{ json_encode(session()->all()) }}
{{ json_encode(Auth::user()) }} --}}
{{-- </div> --}}

<!-- Page loading spinner-->
<div class="cs-page-loading active">
    <div class="cs-page-loading-inner">
        <div class="cs-page-spinner"></div>
        <span>Cargando...</span>
    </div>
</div>
<main class="cs-page-wrapper">
    <!-- Sign In Modal-->

    <div class="modal fade" id="modal-signin" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content border-0">
                <div class="modal-header border-0 bg-purple-gradient px-4">
                    <h4 class="modal-title text-light">Iniciar sesión</h4>
                    <button class="close text-light" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body px-4">
                    <p class="font-size-ms ">
                        Inicie sesión en su cuenta, usando el correo electrónico y la contraseña que guardó durante su
                        registro.
                    </p>
                    <form class="needs-validation" novalidate action="{{ route('login') }}" method="POST">
                        @csrf
                        <input type="hidden" name="login" value="1">
                        <div class="form-group">
                            <div class="input-group-overlay">
                                <div class="input-group-prepend-overlay">
                                    <span class="input-group-text">
                                        <i class="fe-mail"></i>
                                    </span>
                                </div>
                                <input class="form-control prepended-form-control @error('email') is-invalid @enderror"
                                       type="email" placeholder="Correo Electrónico" name='email' maxlength="250"
                                       value="{{ old('email') }}" required>
                            </div>
                            @error('email')
                            <div class="invalid-feedback d-inline">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <div class="input-group-overlay cs-password-toggle">
                                <div class="input-group-prepend-overlay">
                                    <span class="input-group-text">
                                        <i class="fe-lock"></i>
                                    </span>
                                </div>
                                <input class="form-control prepended-form-control @error('password') is-invalid @enderror"
                                       type="password" placeholder="Contraseña" maxlength="250" name="password" required
                                        {{-- pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[\W])[\S]{8,}" --}}
                                >
                                <label class="cs-password-toggle-btn">
                                    <input class="custom-control-input" type="checkbox">
                                    <i class="fe-eye cs-password-toggle-indicator"></i>
                                    <span class="sr-only">Show password</span>
                                </label>
                            </div>
                            {{-- <small class="text-muted">Al menos 1 mayúscula, 1 minúscula, 1 número, 1 símbolo, mínimo 8 caracteres</small> --}}
                            @error('password')<br>
                            <div class="invalid-feedback d-inline">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- <div class="d-flex justify-content-between align-items-center form-group">
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="keep-signed">
                                <label class="custom-control-label" for="keep-signed">Mantener sesión iniciada</label>
                            </div>
                            <a class="nav-link-style font-size-ms" href="password-recovery.html">
                                ¿Olvidó su contraseña?
                            </a>
                        </div> --}}
                        <p class="font-size-sm mb-3">
                            ¿Olvidaste tu contraseña? <a href='{{ route('reset') }}' class='font-weight-medium'>Recuperar
                                contraseña</a>
                        </p>
                        <button class="btn btn-primary btn-block" type="submit">Entrar</button>
                        <p class="font-size-sm pt-3 mb-0">
                            ¿No tiene una cuenta? <a href='#modal-signup' data-toggle="modal"
                                                     class='font-weight-medium'>Regístrese</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modal-signup" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content border-0">
                <div class="modal-header border-0 bg-purple-gradient px-4">
                    <h4 class="modal-title text-light">Registro de Usuario</h4>
                    <button class="close text-light" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body px-4">
                    <!--
                    <p class="font-size-ms text-muted">Registration takes less than a minute but gives you full control over your orders.</p>
                    -->
                    <form class="needs-validation" action="{{route('signin')}}" method="POST" novalidate>
                        @csrf
                        <input type="hidden" name="login" value="0">
                        <div class="form-group">
                            <input class="form-control @error('name') is-invalid @enderror" name="name" type="text"
                                   placeholder="Nombre Completo" maxlength="250" value="{{ old('name') }}" required>
                            @error('name')
                            <div class="invalid-feedback d-inline">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input class="form-control @error('email') is-invalid @enderror" name="email" type="email"
                                   placeholder="Correo electrónico" maxlength="250" value="{{ old('email') }}" required>
                            @error('email')
                            <div class="invalid-feedback d-inline">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <div class="cs-password-toggle">
                                <input class="form-control @error('password') is-invalid @enderror" name="password"
                                       type="password" placeholder="Contraseña"
                                       pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[\W])[\S]{8,}" maxlength="250"
                                       value="{{ old('password') }}" required>
                                <label class="cs-password-toggle-btn">
                                    <input class="custom-control-input" type="checkbox">
                                    <i class="fe-eye cs-password-toggle-indicator"></i>
                                    <span class="sr-only">Mostrar contraseña</span>
                                </label>
                            </div>
                            <small class="form-text text-muted">Al menos 1 mayúscula, 1 minúscula, 1 número, 1 símbolo,
                                mínimo 8 caracteres
                            </small>
                            @error('password')
                            <div class="invalid-feedback d-inline">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <div class="cs-password-toggle">
                                <input class="form-control @error('password_confirmation') is-invalid @enderror"
                                       name="password_confirmation" maxlength="250" type="password"
                                       placeholder="Confirme la contraseña"
                                       pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[\W])[\S]{8,}"
                                       value="{{ old('password_confirmation') }}" required>
                                <label class="cs-password-toggle-btn">
                                    <input class="custom-control-input" type="checkbox">
                                    <i class="fe-eye cs-password-toggle-indicator"></i>
                                    <span class="sr-only">Mostrar contraseña</span>
                                </label>
                            </div>
                            <small class="form-text text-muted">Al menos 1 mayúscula, 1 minúscula, 1 número, 1 símbolo,
                                mínimo 8 caracteres
                            </small>
                            @error('password_confirmation')
                            <div class="invalid-feedback d-inline">{{ $message }}</div>
                            @enderror
                        </div>
                        @error('email')
                        <div class="font-size-lg text-danger d-inline mb-3">Para recuperar tu cuenta ponte en
                            contacto.
                        </div>
                        @enderror
                        <button class="btn btn-primary btn-block" type="submit">Registrar</button>
                        <p class="font-size-sm pt-3 mb-0">¿Ya tiene una cuenta? <a href='#modal-signin'
                                                                                   data-toggle="modal"
                                                                                   class='font-weight-medium'>Entrar</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="search" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content border-0">
                <div class="modal-header border-0 bg-purple-gradient px-4">
                    <h4 class="modal-title text-light">Buscar contenidos</h4>
                    <button class="close text-light" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body px-4">
                    <!--
                    <p class="font-size-ms text-muted">Registration takes less than a minute but gives you full control over your orders.</p>
                    -->
                    <form class="needs-validation" action="{{route('signin')}}" method="POST" novalidate>
                        @csrf
                        <div class="form-group">
                            <input class="form-control" name="s" type="text" placeholder="Término de búsqueda" required>
                        </div>
                        <button class="btn btn-primary btn-block" type="submit">Buscar</button>

                    </form>
                </div>
                <?php /*
                <div class="modal-body text-center px-4 pt-2 pb-4">
                    <hr>
                    <p class="font-size-sm font-weight-medium text-heading pt-4">Or sign in with</p>
                    <a class="social-btn sb-facebook sb-lg mx-1 mb-2" href="#"><i class="fe-facebook"></i></a>
                    <a class="social-btn sb-twitter sb-lg mx-1 mb-2" href="#"><i class="fe-twitter"></i></a>
                    <a class="social-btn sb-instagram sb-lg mx-1 mb-2" href="#"><i class="fe-instagram"></i></a>
                    <a class="social-btn sb-google sb-lg mx-1 mb-2" href="#"><i class="fe-google"></i></a>
                </div>
                */ ?>
            </div>
        </div>
    </div>
    <!-- Navbar Floating light for Index page only-->
    @include('layouts.aplicacion.header')
    @yield('content')
    <div class="modal fade" id="modal-filtros" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content border-0">
                <div class="modal-header border-0 bg-purple-gradient px-4">
                    <h4 class="modal-title text-light">Filtros</h4>
                    <button class="close text-light" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body px-4">

                    <form action="{{route('web.iniciativas.data')}}" method="POST">
                        @method('POST')
                        @csrf
                        <div class="row justify-content-center">

                            <div class="col-12">
                                <span class="ml-3 font-weight-bold  d-block" style="font-size: 15px;color:#531c6a "
                                      for="to-destination">Tipo Instituci&oacute;n</span>
                                <select id="etipo_institucion" name="tipo_institucion[]"
                                        class="form-control custom-select select2"
                                        data-ajax--url="{{route('api.tipo-institucion.select2')}}"
                                        data-ajax--data-type="json"
                                        data-ajax--cache="true"
                                        data-close-on-select="false"
                                        data-placeholder="Seleccionar tipo institución"
                                        style="width:100%;"
                                        multiple>

                                </select>
                            </div>
                            <div class="col-12">
                                <span class="ml-3 py-2 mt-1 mb-1  py-md-0 mt-sm-0 mb-sm-0 font-weight-bold  d-block"
                                      style="font-size: 15px;color:#531c6a ">ODS</span>
                                <select id="eods_categorias" class="form-control custom-select select2"
                                        name="ods_categorias[]"
                                        data-ajax--url="{{route('api.ods-categoria.select2')}}"
                                        data-ajax--data-type="json"
                                        data-ajax--cache="true"
                                        data-close-on-select="false"
                                        style="width:100%;"
                                        data-placeholder="Seleccionar ODS"
                                        multiple>
                                </select>
                            </div>
                            <div class="col-12">
                                <span class="ml-3 font-weight-bold  d-block" style="font-size: 15px;color:#531c6a ">Población Objetivo</span>
                                <select style="width:100%;" id="etipo_poblacion" name="tipo_poblacion[]"
                                        class="form-control select2"
                                        data-ajax--url="{{route('api.tipo-poblacion.select2')}}"
                                        data-ajax--data-type="json"
                                        data-ajax--cache="true"
                                        data-close-on-select="false"
                                        data-placeholder="Seleccionar población objetivo"
                                        multiple>
                                </select>
                            </div>
                            <div class="col-lg-2 col-xl-2  col-md-2 col-sm-3 pt-3">
                                <button type="submit" class="font-weight-bold mt-3 btn btn-primary btn-filter-submit"
                                        style="border-color:#FF7F00;background: #FF7F00;">
                                    Aplicar
                                </button>
                            </div>


                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modal-mapa-filtros" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content border-0">
                <div class="modal-header border-0 bg-purple-gradient px-4">
                    <h4 class="modal-title text-light">Filtros</h4>
                    <button class="close text-light" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body px-4">

                    <form action="{{route('web.mapaproblemas.data')}}" method="POST">
                        @method('POST')
                        @csrf

                        <div class="container justify-content-center">
                            <div class="w-10 center-block text-left">

                                <h4 class="" style="color:#531c6a">
                                    Problemas
                                </h4>
                                <div class="row mb-2">
                                    <span class="ml-3 font-weight-bold  d-block" style="font-size: 15px;color:#531c6a "
                                          for="to-destination">Tipo de Convocatoria</span>
                                    <select class="tipo_conv form-control custom-select select2 select2-hidden-accessible"
                                            style="width:100%;" data-placeholder="Seleccione tipo de convocatoria"
                                            data-select2-id="tipo_conv" tabindex="-1" aria-hidden="true">
                                        <option value="1" data-select2-id="2">Sector Productivo</option>
                                        <option value="2">Ciudadanía</option>
                                        <option value="3">Gestión Pública</option>
                                    </select>
                                </div>
                                <div class="row my-2 pb-2">
                                    <span class=" ml-3 font-weight-bold  d-block"
                                          style="font-size: 15px;color:#531c6a ">Convocatorias</span>
                                    <select style="width:100%;"
                                            class="form-control select2 conv"
                                            data-placeholder="Seleccione convocatorias"
                                            multiple>
                                    </select>
                                </div>
                                <h4 class="" style="color:#531c6a">
                                    Iniciativas
                                </h4>
                                <div class="row mb-2">
                                    <span class="ml-3 mt-1 mb-1  py-md-0 mt-sm-0 mb-sm-0 font-weight-bold  d-block"
                                          style="font-size: 15px;color:#531c6a ">ODS</span>
                                    <select id="ods_categorias_1" class="form-control custom-select select2"
                                            name="ods_categorias[]"
                                            data-ajax--url="{{route('api.ods-categoria.select2')}}"
                                            data-ajax--data-type="json"
                                            data-ajax--cache="true"
                                            data-close-on-select="false"
                                            style="width:100%;"
                                            data-placeholder="Seleccionar ODS"
                                            multiple>
                                    </select>
                                </div>


                                <div class="row justify-content-center">
                                    <button type="submit" class="font-weight-bold  btn btn-primary btn-filter-submit"
                                            style="border-color:#FF7F00;background: #FF7F00; width: 150px;">
                                        Aplicar
                                    </button>

                                </div>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>

@include('layouts.aplicacion.footer')

<!-- Vendor scrits: js libraries and plugins-->
{{--<script src="vendor/jquery/dist/jquery.slim.min.js"></script>--}}
{{--<script src="vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>--}}

{{--<script src="vendor/bs-custom-file-input/dist/bs-custom-file-input.min.js"></script>--}}
{{--<script src="vendor/simplebar/dist/simplebar.min.js"></script>--}}
{{--<script src="{{url('node_modules/smooth-scroll/dist/smooth-scroll.js') }}"></script>--}}
{{--<script src="vendor/parallax-js/dist/parallax.min.js"></script>--}}

<!-- Main theme script-->
<script src="{{asset('js/app.js')}}"></script>
<script src="{{asset('js/helpers.js')}}"></script>
<link rel="stylesheet" href="{{asset('assets/simple-scrollbar-master/simple-scrollbar.css')}}"/>
<script src="{{ asset('assets/simple-scrollbar-master/simple-scrollbar.min.js') }}"></script>
<script src="{{ asset('assets/lightgallery.js/dist/js/lightgallery.min.js') }}"></script>
<script src="{{asset('assets/lightgallery.js/dist/js/lg-video.min.js')}}"></script>
@if($errors->any())
    <script>
        var isLogin = "{{ old('login') ?? 'null' }}";
        if (isLogin != null) {
            if (isLogin == 1) {
                $('#modal-signin').modal('show');
            } else {
                $('#modal-signup').modal('show');
            }
        }
    </script>
@endif
<script>
    (function ($) {
        $(function () {
            $(document).ready(function () {
                $('.scrolling').each(function () {
                    var id = $(this).attr('id');
                    SimpleScrollbar.initEl(document.getElementById(id));
                });
            });
        });
    })(jQuery);

    $('#open-signin-error').on('click', function () {
        $('#modal-signin').modal('show');
    });

    $('#modal-signup').on('show.bs.modal', function () {
        $('#modal-signin').modal('hide');
    });

    $('#modal-signin').on('show.bs.modal', function () {
        $('#modal-signup').modal('hide');
    });

    $('.modal-status').modal('show');

    flatpickr(".js-input", {
        allowInput: true,
        altInput: true,
        minDate: "today",
        onOpen: function (selectedDates, dateStr, instance) {
            $(instance.altInput).prop('readonly', true);
        },
        onClose: function (selectedDates, dateStr, instance) {
            $(instance.altInput).prop('readonly', false);
            $(instance.altInput).blur();
        }
    });
    flatpickr(".js-input-hora", {
        enableTime: true,
        noCalendar: true,
        allowInput: true,
        altInput: true,
        onOpen: function (selectedDates, dateStr, instance) {
            $(instance.altInput).prop('readonly', true);
        },
        onClose: function (selectedDates, dateStr, instance) {
            $(instance.altInput).prop('readonly', false);
            $(instance.altInput).blur();
        }
    });
</script>

@yield('scripts')
@yield('footer')
{{--<script type="text/javascript">--}}
{{--console.log(smoothScroll);--}}
{{--</script>--}}
{{--<script src="{{asset('js/theme.min.js')}}"></script>--}}
</body>
</html>
