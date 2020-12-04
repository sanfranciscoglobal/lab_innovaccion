<header class="cs-header navbar navbar-expand-lg navbar-light navbar-floating navbar-sticky d-block p-0 secondary-nav"
        data-scroll-header>
    <div class="d-block w-100 secondary-nav">
        <div class="container">
            <div class="row w-100">
                <div class="col-12 d-flex justify-content-end align-items-center">
                    <a href="mailto:info@thinkia.org"><span class=""><span
                                    class="fe-mail"></span>&nbsp;Contáctanos</span></a>
                    <ul class="d-flex justify-content-space-around list-inline align-items-center ml-4 mb-0">
                        <li class="list-inline-item m-0"><a
                                    class="social-btn sb-outline sb-facebook sb-dark sb-sm mr-2 mr-md-3" href="#">
                                <i class="fe-facebook"></i>
                            </a></li>
                        <li class="list-inline-item m-0"><a
                                    class="social-btn sb-outline sb-twitter sb-dark sb-sm mr-2 mr-md-3" href="#">
                                <i class="fe-twitter"></i>
                            </a></li>
                        <li class="list-inline-item m-0"><a
                                    class="social-btn sb-outline sb-instagram sb-dark sb-sm mr-2 mr-md-3" href="#">
                                <i class="fe-instagram"></i>
                            </a></li>
                        <li class="list-inline-item m-0"><a class="social-btn sb-outline sb-linkedin sb-dark sb-sm"
                                                            href="#">
                                <i class="fe-linkedin"></i>
                            </a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container px-0 px-xl-0">
        <button class="navbar-toggler ml-n2 mr-2" type="button" data-toggle="offcanvas" data-offcanvas-id="primaryMenu">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand order-lg-1 ml-lg-0 pr-lg-0 mr-lg-0 justify-content-start" href="{{route('home')}}">
            <img class="navbar-floating-logo d-none d-lg-block my-2" style="width: 150px;max-width: none;" width="100"
                 src="{{asset('img/logo/thinkia_color.svg')}}"
                 alt="Thinkia - Laboratorio de innovación"/>
            <img class="navbar-stuck-logo my-1" style="width: 150px;max-width: none;" src="{{asset('img/logo/thinkia_color.svg')}}"
                 alt="Thinkia - Laboratorio de innovación"/>
            <img class="d-lg-none" width="100" src="{{asset('img/logo/thinkia_color.svg')}}"
                 alt="Thinkia - Laboratorio de innovación"/>
        </a>
        <div class="d-flex justify-content-center center-block text-center align-items-center order-lg-3 ml-lg-0">
            <a class="nav-link-style font-size-sm text-nowrap " href="#search" data-toggle="modal">
                <i class="fe-search font-size-xl mr-2"></i>
            </a>&nbsp;
            <?php /*
            <a class="nav-link-style font-size-sm text-nowrap" href="#modal-signin" data-toggle="modal"
               data-view="#modal-signin-view">
                <i class="fe-user font-size-xl mr-2"></i>
            </a>
            */ ?>
            @auth
                @php
                    $avatar = asset('img/logo/favicon/android-chrome-192x192.png');
                    if(isset(Auth::user()->perfil_id)){
                        if(isset(Auth::user()->perfil->avatar)){
                            $avatar = asset('storage/perfil/'.Auth::user()->perfil->avatar);
                        }
                    }
                @endphp
                <div class="navbar-tool dropdown d-none d-lg-inline-flex">
                    <img src="{{ $avatar }}" class="navbar-tool-icon-box-img" alt="user-avatar"
                         style="max-width: 50px; max-height:50px">
                    <a class="navbar-tool-label dropdown-toggle" role="button" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false" id="avatarMenu">
                        <small class="d-none d-lg-block">Hola!</small>
                        <span class="d-none d-lg-inline">{{ Auth::user()->name }}</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" role="menu" aria-labelledby="avatarMenu">
                        <a href="{{ route('app.escritorio') }}" class="dropdown-item">Escritorio</a>
                        <a href="{{ route('app.registro') }}" class="dropdown-item">Mi Perfil</a>
                        <div class="dropdown-divider"></div>
                        <a href="{{ route('logout') }}" class="dropdown-item">Cerrar Sesión</a>
                    </div>
                </div>
            @else
                <a class="btn btn-primary ml-grid-gutter d-none d-lg-inline-block navbar-btn"
                   href="#modal-signin" data-toggle="modal">Iniciar Sesión</a>
                <a class="btn btn-primary ml-grid-gutter d-none d-lg-inline-block navbar-btn"
                   href="#modal-signup" data-toggle="modal">Crear cuenta</a>
                <a class="btn btn-primary ml-grid-gutter d-none d-lg-inline-block navbar-stuck-btn"
                   href="#modal-signin" data-toggle="modal">Iniciar Sesión</a>
                <a class="btn btn-primary ml-grid-gutter d-none d-lg-inline-block navbar-stuck-btn"
                   href="#modal-signup" data-toggle="modal">Crear cuenta</a>
            @endif
        </div>
        <div class="cs-offcanvas-collapse order-lg-2" id="primaryMenu">
            <div class="cs-offcanvas-cap navbar-box-shadow">
                <h5 class="mt-1 mb-0">Menu</h5>
                <button class="close lead" type="button" data-toggle="offcanvas" data-offcanvas-id="primaryMenu"><span
                            aria-hidden="true">&times;</span></button>
            </div>
            <div class="cs-offcanvas-body">
                <!-- Menu-->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link  text-lg-center font-weight-bold" href="{{route('innovaciones')}}">Gestión de la Innovación</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="text-lg-center nav-link  font-weight-bold" href="#" data-toggle="dropdown">
                            Ecosistema de innovación<i class="fas fa-caret-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/iniciativasmapa">Mapa de
                            Iniciativas</a></li>
                            <li><a class="dropdown-item" href="{{route('web.iniciativas.index')}}">Iniciativas de
                            Actores</a></li>
                            <li><a class="dropdown-item" href="{{route('web.iniciativas.analiticas')}}">Analítica</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle font-weight-bold" href="#" data-toggle="dropdown">
                            Recursos<i class="fas fa-caret-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item " href="/mapa">Mapa General</a></li>
                            <li><a class="dropdown-item " href="{{route('fondos')}}">Fondos</a></li>
                            <li><a class="dropdown-item " href="{{route('eventos')}}">Eventos</a></li>
                            <li><a class="dropdown-item " href="{{route('material')}}">Publicaciones y herramientas</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle font-weight-bold font-weight-bold" href="#" data-toggle="dropdown">
                            Nosotros<i class="fas fa-caret-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('acercade') }}">Acerca de</a></li>
                            <li><a class="dropdown-item" href="{{ route('faq') }}">Condiciones de uso</a></li>
                        </ul>
                    </li>

                    @if(\App\Helpers\Helper::validarUsuarioAdmin())
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="{{route('admin.escritorio')}}">Administrar</a>
                        </li>
                    @endif

                    <li class="nav-item dropdown d-lg-none">
                        @auth
                            <a class="nav-link dropdown-toggle" href="#"
                               data-toggle="dropdown">{{auth()->user()->name}}</a>
                            <ul class="dropdown-menu">
                                <a href="{{ route('app.escritorio') }}" class="dropdown-item">Escritorio</a>
                                <a href="{{ route('app.registro') }}" class="dropdown-item">Mi Perfil</a>
                                <div class="dropdown-divider"></div>
                                <a href="{{ route('logout') }}" class="dropdown-item">Cerrar Sesión</a>
                            </ul>
                        @else
                            <div class="d-flex justify-content-between">
                                <a class="btn btn-primary" href="#modal-signin" data-toggle="modal">Iniciar Sesión</a>
                                <a class="btn btn-primary" href="#modal-signup" data-toggle="modal">Crear cuenta</a>
                            </div>
                        @endauth
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>
