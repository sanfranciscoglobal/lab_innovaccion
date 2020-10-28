<div class="col-lg-3 mb-4 mb-lg-0">
    <div class="bg-light rounded-lg box-shadow-lg">
        <div class="px-4 py-4 mb-1 text-center">
            <img class="d-block rounded-circle mx-auto my-2" width="110" src="http://placehold.it/80x80/?text=U" >
            <h6 class="mb-0 pt-1">{{ Auth::user()->name }}</h6>
        </div>
        <div class="d-lg-block collapse pb-2" id="account-menu">
            <h3 class="d-block bg-secondary font-size-sm font-weight-semibold text-muted mb-0 px-4 py-3">Cuenta</h3>
            <a class="d-flex align-items-center nav-link-style px-4 py-3" href="{{route('app.iniciativas.index')}}">
                Iniciativas registradas
                <span class="text-muted font-size-sm font-weight-normal ml-auto">{{ App\Models\Iniciativas::count() }}</span>
            </a>
            <a class="d-flex align-items-center nav-link-style px-4 py-3 active" href="#">
                Problemas reportados
                {{-- <span class="text-muted font-size-sm font-weight-normal ml-auto">{{ App\Models\::count() }}</span> --}}
            </a>
            <a class="d-flex align-items-center nav-link-style px-4 py-3" href="{{route('app.escritorio.fondos')}}">
                Fondos registrados
                <span class="text-muted font-size-sm font-weight-normal ml-auto">{{ App\Models\Fondo::count() }}</span>
            </a>
            <a class="d-flex align-items-center nav-link-style px-4 py-3" href="{{route('app.escritorio.eventos')}}">
                Eventos registrados
                <span class="text-muted font-size-sm font-weight-normal ml-auto">{{ App\Models\Evento::count() }}</span>
            </a>
            <a class="d-flex align-items-center nav-link-style px-4 py-3" href="{{route('app.escritorio.material')}}">
                Materiales registrados
                <span class="text-muted font-size-sm font-weight-normal ml-auto">{{ App\Models\MaterialAprendizaje::count() }}</span>
            </a>
            {{-- <a class="d-flex align-items-center nav-link-style px-4 py-3" href="{{ route('app.registro') }}">Mi Perfil</a>
            <a class="d-flex align-items-center nav-link-style px-4 py-3 border-top" href="{{ route('logout') }}">
                Cerrar sesión
            </a> --}}
        </div>
    </div>
</div>
