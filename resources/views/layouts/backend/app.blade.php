<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>Laboratorio de Innovación</title>
    <!-- SEO Meta Tags-->
    <meta name="description" content="Around - Multipurpose Bootstrap Template">
    <meta name="keywords"
          content="bootstrap, business, consulting, coworking space, services, creative agency, dashboard, e-commerce, mobile app showcase, multipurpose, product landing, shop, software, ui kit, web studio, landing, html5, css3, javascript, gallery, slider, touch, creative">
    <meta name="author" content="Createx Studio">
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.2/min/tiny-slider.js"></script>
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

        .list-item {
            border-top: 1px solid #E9E9F2;
        }

        .list-item:last-child {
            border-bottom: 1px solid #E9E9F2;
        }

        @media (max-width: 768px) {
            .desktop-spacer {
                height: 93px;
            }
        }

        @media (min-width: 769px) {
            .desktop-spacer {
                height: 125px;
            }
        }

        .cs-widget-categories .cs-widget-link::before {
            top: 0.9rem !important;
            left: 0.1rem !important;
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
    <link rel="stylesheet" media="screen" href="{{asset('css/theme.css')}}">
    @yield('header-css')
</head>
<!-- Body-->
<body class="cs-is-sidebar">
@include('includes.session-flash-status')
@include('includes.session-flash-error')

<div class="cs-page-loading active">
    <div class="cs-page-loading-inner">
        <div class="cs-page-spinner"></div>
        <span>Cargando...</span>
    </div>
</div>
<main class="cs-page-wrapper">
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

    @include('layouts.aplicacion.header')

    <div class="position-relative desktop-spacer mb-4 mb-md-5"></div>
    <div class="container bg-overlay-content mb-md-5">
        {{--<div class="cs-sidebar-enabled">--}}
        {{--<div class="container">--}}
        <div class="row">
            <div class="col-lg-3 mb-4 mb-lg-0">
                {{--@yield('sidebar-top')--}}
                @include('layouts.backend.menu')
                {{--@yield('sidebar-bottom')--}}
            </div>

            <div class="col-lg-9 cs-content mb-2 mb-sm-0 pb-sm-5">
                <div class="d-flex flex-column h-100 bg-light rounded-lg box-shadow-lg p-4">
                    @yield('content')
                </div>
            </div>
        </div>
        {{--</div>--}}
        {{--</div>--}}
    </div>
</main>

@include('layouts.backend.footer')


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
<script>
    // var errorCard = $('#errorDiv .alert');
    // if (errorCard.length > 0){
    //     var iteraction = 0;
    //     var interval = setInterval(function(){
    //         iteraction++;
    //         if (iteraction == 10) {
    //             errorCard.css({
    //                 'transform':'translateX(400px)',
    //                 'transition': 'all ease .2s'
    //             })
    //             setTimeout(function(){
    //                 $('.close').click();
    //             },2000)
    //             clearInterval(interval);
    //         }
    //     }, 1000);
    // }
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

@yield('scripts')
@yield('footer')
{{--<script type="text/javascript">--}}
{{--console.log(smoothScroll);--}}
{{--</script>--}}
{{--<script src="{{asset('js/theme.min.js')}}"></script>--}}
</body>
</html>
