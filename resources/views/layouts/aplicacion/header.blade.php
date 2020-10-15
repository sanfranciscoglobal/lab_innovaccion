
<header class="cs-header navbar navbar-expand-lg navbar-light navbar-floating navbar-sticky d-block p-0 bg-white" data-scroll-header>
    <div class="d-block w-100 secondary-nav">
        <div class="container">
            <div class="row">
                <div class="col d-flex justify-flex-start align-items-center">
                    <span class="text-white"><span class="fe-phone"></span>&nbsp;Contáctanos</span>&nbsp;<a class="text-white" href="#">+593 910-784-8015</a>
                    <ul class="d-flex justify-content-space-around list-inline align-items-center ml-4 mb-0">
                        <li class="list-inline-item"><a class="text-white social-btn sb-outline sb-facebook sb-dark sb-sm mr-2" href="#">
                            <i class="fe-facebook"></i>
                        </a></li>
                        <li class="list-inline-item"><a class="text-white social-btn sb-outline sb-twitter sb-dark sb-sm mr-2" href="#">
                            <i class="fe-twitter"></i>
                        </a></li>
                        <li class="list-inline-item"><a class="text-white social-btn sb-outline sb-instagram sb-dark sb-sm mr-2" href="#">
                            <i class="fe-instagram"></i>
                        </a></li>
                        <li class="list-inline-item"><a class="text-white social-btn sb-outline sb-google sb-dark sb-sm mr-2" href="#">
                            <i class="fe-google"></i>
                        </a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container px-0 px-xl-3">
        <button class="navbar-toggler ml-n2 mr-2" type="button" data-toggle="offcanvas" data-offcanvas-id="primaryMenu">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand order-lg-1 mx-auto ml-lg-0 pr-lg-2 mr-lg-4" href="{{route('app.home')}}">
            <img class="navbar-floating-logo d-none d-lg-block" width="153" src="{{asset('img/logo/logo-light.png')}}"
                 alt="Around"/>
            <img class="navbar-stuck-logo" width="153" src="{{asset('img/logo/logo-dark.png')}}"
                 alt="Around"/>
            <img class="d-lg-none" width="58" src="{{asset('img/logo/logo-icon.png')}}" alt="Around"/>
        </a>
        <div class="d-flex align-items-center order-lg-3 ml-lg-auto">
            <a class="nav-link-style font-size-sm text-nowrap" href="#modal-signin" data-toggle="modal"
               data-view="#modal-signin-view">
                <i class="fe-search font-size-xl mr-2"></i>
            </a>&nbsp;
            <a class="nav-link-style font-size-sm text-nowrap" href="#modal-signin" data-toggle="modal"
               data-view="#modal-signin-view">
                <i class="fe-user font-size-xl mr-2"></i>
            </a>
            @if (Auth::check())
            <div class="btn-group dropdown">
                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                   {{ Auth::user()->name }}
                </button>
                <div class="dropdown-menu dropdown-menu-right">
                    <a href="#" class="dropdown-item">Action</a>
                    <a href="#" class="dropdown-item">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a href="{{ route('logout') }}" class="dropdown-item">Salir</a>
                </div>
            </div>
            @else
            <a class="btn btn-translucent-light ml-grid-gutter d-none d-lg-inline-block navbar-btn"
               href="#modal-signin" data-toggle="modal" data-view="#modal-signup-view">Crear cuenta</a>
            <a class="btn btn-primary ml-grid-gutter d-none d-lg-inline-block navbar-stuck-btn"
               href="#modal-signin" data-toggle="modal" data-view="#modal-signup-view">Crear cuenta</a>
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
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Iniciativas</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/mapeo/">Mapeo</a></li>
                            <li><a class="dropdown-item" href="/nuevas-iniciativas/">Nuevas iniciativas</a></li>
                            <li><a class="dropdown-item" href="/analitica/">Analítica</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Gestión de Innovación</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/identificacion-de-problemas/">Identificación de Problemas</a></li>
                            <li><a class="dropdown-item" href="/soluciones-innovadoras/">Soluciones Innovadoras</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Analítica</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/graficos/">Gráficos</a></li>
                            <li><a class="dropdown-item" href="/datos/">Datos</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Recursos</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{route('app.fondos')}}">Fondos</a></li>
                            <li><a class="dropdown-item" href="{{route('app.eventos')}}">Eventos</a></li>
                            <li><a class="dropdown-item" href="{{route('app.material-de-aprendizaje')}}">Material de aprendizaje</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link " href="/acerca-de/">Acerca de</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>
