<div class="bg-light rounded-lg box-shadow-lg">
    @if(Auth::check())
        <div class="px-4 py-4 mb-1 text-center">
            @php
                $avatar = asset('img/logo/favicon/android-chrome-192x192.png');
                if(isset(Auth::user()->perfil_id)){
                    if(isset(Auth::user()->perfil->avatar)){
                        $avatar = asset('storage/perfil/'.Auth::user()->perfil->avatar);
                    }
                }
            @endphp
            {{--<img class="d-block rounded-circle mx-auto my-2" width="110" src="{{ $avatar }}">--}}
            <img class="d-block rounded-circle mx-auto my-2" width="110" src="{{asset('img/demo/presentation/logo/logo-icon-footer.png')}}">
            <h6 class="mb-0 pt-1">{{ Auth::user()->name }}</h6>
        </div>
        <div class="d-lg-block collapse pb-2" id="account-menu">
            <div class="cs-widget cs-widget-categories mb-5 pl-3">
                <ul id="menu">
                    <li>
                        <a class="cs-widget-link px-4 py-3 collapsed" href="#gestion" data-toggle="collapse">
                            Gestión de Innovación
                        </a>
                        <ul class="collapse" id="gestion" data-parent="#menu">
                            <li>
                                <a class="cs-widget-link" href="{{ route('admin.escritorio.convocatoria') }}">
                                    Convocatorias
                                    <small class="text-muted pl-1 ml-2">5</small>
                                </a>
                            </li>
                            <li>
                                <a class="cs-widget-link" href="#">
                                    Administrador 2
                                    <small class="text-muted pl-1 ml-2">12</small>
                                </a>
                            </li>
                            <li>
                                <a class="cs-widget-link" href="#">
                                    Administrador 3
                                    <small class="text-muted pl-1 ml-2">0</small>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a class="cs-widget-link px-4 py-3 collapsed" href="#ecosistema" data-toggle="collapse">
                            Ecosistema de Innovación
                        </a>
                        <ul class="collapse" id="ecosistema" data-parent="#menu">
                            <li>
                                <a class="cs-widget-link" href="{{route('admin.iniciativas.index')}}">
                                    Iniciativas
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a class="cs-widget-link px-4 py-3 collapsed" href="#ecosistema" data-toggle="collapse">
                            Paginas
                        </a>
                        <ul class="collapse" id="ecosistema" data-parent="#menu">
                            <li>
                                <a class="cs-widget-link" href="{{route('app.iniciativas.index')}}">
                                    Administrador 4
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    @endif
</div>
