
<header class="cs-header navbar navbar-expand-lg navbar-light navbar-sticky d-block p-0 bg-white" data-scroll-header>
    <div class="container px-0 px-xl-3">
        <button class="navbar-toggler ml-n2 mr-2" type="button" data-toggle="offcanvas" data-offcanvas-id="primaryMenu">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand order-lg-1 mx-auto ml-lg-0 pr-lg-2 mr-lg-4" href="{{route('admin.escritorio')}}">
            <img class="navbar-floating-logo d-none d-lg-block" width="153" src="{{asset('img/logo/logo-light.png')}}"
                 alt="Around"/>
            <img class="navbar-stuck-logo" width="153" src="{{asset('img/logo/logo-dark.png')}}"
                 alt="Around"/>
            <img class="d-lg-none" width="58" src="{{asset('img/logo/logo-icon.png')}}" alt="Around"/>
        </a>
        <div class="d-flex align-items-center order-lg-3 ml-lg-auto">
            <a class="nav-link-style font-size-sm text-nowrap" href="#modal-signin" data-toggle="modal"
               data-view="#modal-signin-view">
                <i class="fe-bell font-size-xl mr-2"></i>
            </a>&nbsp;
            <a class="nav-link-style font-size-sm text-nowrap" href="#modal-signin" data-toggle="modal"
               data-view="#modal-signin-view">
                <i class="fe-user font-size-xl mr-2"></i>
            </a>
            <a class="btn btn-translucent-light ml-grid-gutter d-none d-lg-inline-block navbar-btn"
               href="#modal-signin" data-toggle="modal" data-view="#modal-signup-view">Crear cuenta</a>
            <a class="btn btn-primary ml-grid-gutter d-none d-lg-inline-block navbar-stuck-btn"
               href="#modal-signin" data-toggle="modal" data-view="#modal-signup-view">Crear cuenta</a>
        </div>
    </div>
</header>
