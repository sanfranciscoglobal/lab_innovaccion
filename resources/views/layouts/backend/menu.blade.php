<div class="cs-offcanvas-collapse" id="blog-sidebar">
    <div class="cs-offcanvas-body px-4 pt-3 pt-lg-0 pl-lg-0 pr-lg-2 pr-xl-4" data-simplebar>
        <div class="cs-widget cs-widget-categories mb-5">
            <ul id="menu">
                    <li><a class="cs-widget-link collapsed" href="#gestion" data-toggle="collapse">Gestión de innovación</a>
                        <ul class="collapse" id="gestion" data-parent="#menu">
                            <li><a class="cs-widget-link" href="#">Innovación abierta <small class="text-muted pl-1 ml-2">5</small></a></li>
                            <li><a class="cs-widget-link" href="#">Innovación pública <small class="text-muted pl-1 ml-2">12</small></a></li>
                            <li><a class="cs-widget-link" href="#">Innovación social <small class="text-muted pl-1 ml-2">0</small></a></li>
                        </ul>
                    </li>
                    <li><a class="cs-widget-link collapsed" href="#ecosistema" data-toggle="collapse">Ecosistema de innovación</a>
                        <ul class="collapse" id="ecosistema" data-parent="#menu">
                            <li><a class="cs-widget-link" href="#">Mapa de iniciativas</a></li>
                            <li><a class="cs-widget-link" href="#">Analítica</a></li>
                        </ul>
                    </li>
                    <li><a class="cs-widget-link collapsed" href="#recursos" data-toggle="collapse">Recursos</a>
                        <ul class="collapse" id="recursos" data-parent="#menu">
                            <li><a class="cs-widget-link" href="{{ route('app.escritorio.fondos') }}">Fondos <small class="text-muted pl-1 ml-2">{{ App\Models\Fondo::count() }}</small></a></li>
                            <li><a class="cs-widget-link" href="{{ route('app.escritorio.eventos') }}">Eventos <small class="text-muted pl-1 ml-2">{{ App\Models\Evento::count() }}</small></a></li>
                            <li><a class="cs-widget-link" href="{{ route('app.escritorio.material') }}">Publicaciones y Herramientas <small class="text-muted pl-1 ml-2">{{ App\Models\MaterialAprendizaje::count() }}</small></a></li>
                        </ul>
                    </li>
                </ul>
        </div>
    </div>
</div>
