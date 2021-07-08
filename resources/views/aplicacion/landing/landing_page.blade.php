@extends('layouts.aplicacion.app')
@section('header-css')
    <style>
        .card {overflow: hidden;}
        .card-lab-orange .card-body * {
            color: white;
        }

        .card-lab-orange .card-body,
        .card-lab-orange .card-body:before {
            background-color: #FF9F40;
        }

        .card:hover .card-hover-info {
            position: absolute;
            display: block
        }
        .card-hover-info {
            display: none;
            z-index: 99;
            background: white;
        }

        .bg-size-contain {
            background-size: contain;
            background-repeat: no-repeat;
            background-position: right;
        }

    </style>
@endsection
@section('content')
<style scoped>
    .carousel-item {min-height: 750px;}

    #video-gallery-2 {
      position: relative;
      display: table;
      cursor: pointer;
      margin: auto;
      z-index: 3;
      padding-top: 100px;
    }

    @media (max-width: 768px) {
        .carousel-item {
            min-height: 350px!important;
            }
        #bannerluces{
            background-image: url({{ asset('img/layout/home/light-bulb-with-drawing-graph_2.jpg')}})!important;
        }
        #video-gallery-2 {
          padding-top: 70px;
        }
    }
    @media (min-width: 992px) and (max-width: 1250px) {
        .itemhome{
            min-width: 50%;
        }
    }
</style>
<section id="home-hero-banner">
    @include('slider_support_landing', ['sliderID' => 'hero', 'slides' => 'home_slides'])

    {{-- <div id="video-gallery-2">
      <a href="https://www.youtube.com/embed/dAJdK0Uu2Ao?controls=0" class="mr-3" loadYoutubeThumbnail='false' style="text-decoration:none;">
        <span class="custom-cs-video-btn custom-cs-video-btn-primary"></span>
        <span style="display: inline-flex;" class="font-size-lg p-2">¿Qué es Thinkia? Mira el video</span>
      </a>
    </div> --}}

</section>

    <section id="funciones">
        <div class="container-fluid pl-lg-8 pr-lg-8 mt-5">
            <div class="text-center mb-5 pt-3 pt-lg-4">
                <h3 class=" h1 mb-4 eventos-titulo uppercase">Reto Universitario de Innovación</span>
                </h3>
                {{-- <p class="textoeventos">Mira nuestros próximos eventos</p> --}}
            </div>
            <div class="row justify-content-center">

                <div class="itemhome col-md-5  col-lg-4 my-3" >
                    <div class="bg-light box-shadow-lg rounded-lg p-4 mb-grid-gutter text-center text-sm-left h-100">
                        <h3 class="fs-14 mb-2 uppercase text-mora"> ¿Qué es?</h3>
                        <p class="font-size-sm mb-0 text-justify">El Reto Universitario de Innovación es un proceso virtual en el que las y los participantes desarrollarán campañas de comunicación para transformar comportamientos inadecuados en las familias y personas a cargo de niñas y niños con y en riesgo de desnutrición. Así, buscamos contribuir a la disminución del índice de desnutrición crónica infantil (DCI) en Ecuador.</p>
                    </div>
                </div>
                <div class="itemhome col-md-5  col-lg-4 my-3" >
                    <div class="bg-light box-shadow-lg rounded-lg p-4 mb-grid-gutter text-center text-sm-left h-100">

                        <h3 class="fs-14 mb-2 uppercase text-uva">¿Quiénes participan?</h3>

                        <p class="font-size-sm mb-0 text-justify">
                            Este reto está dirigido a equipos conformados por <strong> o personas egresadas de cualquier universidad o instituto técnico y tecnológico de Ecuador</strong>.
                        </p>
                        <p class="font-size-sm mb-0 text-justify">
                            <br>
                            * Todas las personas que participan deben ser mayores de edad (18+ años).
                            <br>
                            * Los equipos deben conformarse por al menos dos personas.
                        </p>
                    </div>
                </div>
                <div class="itemhome col-md-5 col-lg-4 my-3" >
                    <div class="bg-light box-shadow-lg rounded-lg p-4 mb-grid-gutter text-center text-sm-left h-100">
                        <h3 class="fs-14 mb-2 uppercase text-naranja">Áreas de participación</h3>
                        <p class="font-size-sm mb-0 text-justify">
                            <ul>
                                <li>Lactancia y alimentación complementaria. </li>
                                <li>Agua,  saneamiento e higiene. </li>
                                <li>Chequeos de salud para madres y niños </li>
                            </ul>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container-fluid pl-lg-8 pr-lg-8">
            <div class="col-md-12 px-3  py-2 py-lg-4 order-md-1">
                <div class="itemhome" >
                    <div class="bg-light box-shadow-lg rounded-lg p-4 mb-grid-gutter text-center text-sm-left h-100">
                        <h3 class="fs-14 mb-2 uppercase text-mora text-center"> Bases e inscripción</h3>
                        <p class="text-center p-t-10">
                            <a class="btn btn-primary ml-grid-gutter d-none d-lg-inline-block navbar-btn" href="#" >Descargarse las bases</a>
                            <a class="btn btn-primary ml-grid-gutter d-none d-lg-inline-block navbar-btn" href="#" >Inscripción aquí</a>
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section style="background-image: url({{ asset('img/landing/fondo_minga.png') }});background-repeat: no-repeat; background-size: auto; background-color: #ec9534;">
        <div class=" container-fluid pl-lg-8 pr-lg-8 mt-5 row no-gutters">
            <div class="col-md-12 px-3  py-2 py-lg-4 order-md-1">
                <div class="ml-md-auto mr-sm-1 py-5 my-sm-0 py-md-2 pl-md-2 pl-lg-5  py-lg-4 text-white">
                    <h2 class="text-white">Cronograma</h2>
                    <div class="row">
                    <div class="col-sm-6">
                    <p class="text-justify">El Reto se realizará de forma virtual e incluye las siguientes actividades, las cuales te pedimos leas con detalle para que te organices con tu equipo </p>
                    </div>
                    <div class="col-sm-6">
                    <ul class="list-unstyled font-size-sm">
                        <li class="d-flex align-items-center">
                            <i class="fe-check-circle font-size-lg mr-2"></i>
                            <span class="text-justify">Inscripción: 26 de junio al 31 de agosto. </span>
                        </li>
                        <li class="d-flex align-items-center">
                            <i class="fe-check-circle font-size-lg mr-2"></i>
                            <span class="text-justify">Laboratorio de ideas:  3- 4 de septiembre.</span>
                        </li>
                        <li class="d-flex align-items-center">
                            <i class="fe-check-circle font-size-lg mr-2"></i>
                            <span class="text-justify">Recepción de propuestas: 10 de octubre.</span>
                        </li>
                        <li class="d-flex align-items-center">
                            <i class="fe-check-circle font-size-lg mr-2"></i>
                            <span class="text-justify">Prototipando mi idea: 24 - 25 de septiembre.</span>
                        </li>
                        <li class="d-flex align-items-center">
                            <i class="fe-check-circle font-size-lg mr-2"></i>
                            <span class="text-justify">Mentorías: 26 de septiembre al 8 de octubre.</span>
                        </li>
                        <li class="d-flex align-items-center">
                            <i class="fe-check-circle font-size-lg mr-2"></i>
                            <span class="text-justify">Selección de finalistas: 11 al 15 de octubre.</span>
                        </li>
                        <li class="d-flex align-items-center">
                            <i class="fe-check-circle font-size-lg mr-2"></i>
                            <span class="text-justify">Anuncio de ganadores: 18 de octubre.</span>
                        </li>
                    </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section style="background-image: url({{ asset('img/landing/fondo_minga2.png') }});background-repeat: no-repeat; background-size: auto; background-color: #2a8982;">
        <div class=" container-fluid pl-lg-8 pr-lg-8 row no-gutters">
            <div class="col-md-12 px-3  py-2 py-lg-4 order-md-1">
                <div class="ml-md-auto mr-sm-1 py-5 my-sm-0 py-md-2 pl-md-2 pl-lg-5  py-lg-4 text-white">

                    <div class="row mt-40">

                        <div class="col-sm-10">
                        <h2 class="text-white">Premio</h2>
                        <p class="text-justify">La propuesta ganadora será anunciada en un evento virtual y su plan de medios será pautado de acuerdo al presupuesto asignado de doce mil dólares (US $12.000), el que será entregado directamente a los medios de comunicación por parte de Diálogos Vitales.</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- Demos-->
    <section class="bg-secondary" id="demos">
        <div class="container pt-5 pb-4 py-md-6 py-lg-7">
            <div class="text-center mb-5 pt-3 pt-lg-4">
                <h3 class=" h2 mb-4 eventos-titulo uppercase">Organizan</span>
                </h3>
            </div>
            <div class="row">
                <div class="col-sm-3">
                </div>
                <div class="col-sm-3 justify-content-center">
                    <img class="justify-content-center" width="200" src="{{ asset('img/landing/logos/DIALOGOS_VITALES.png') }}" alt="" />
                </div>
                <div class="col-sm-3">
                    <img class="justify-content-center" width="200" src="{{ asset('img/logo/thinkia_color_no_slogan.svg') }}" alt="" />
                </div>
                <div class="col-sm-3">
                </div>
            </div>

        </div>
    </section>
    <section class="bg-secondary" id="demos">
        <div class="container pt-5 pb-4 py-md-6 py-lg-7">
            <div class="text-center mb-5 pt-3 pt-lg-4">
                <h3 class=" h1 mb-4 eventos-titulo uppercase">Diálogos Vitales</span>
                </h3>
            </div>
            <div class="row">
                <div class="col-sm-1">

                </div>
                <div class="col-sm-2">
                    <img class="justify-content-center" width="200" src="{{ asset('img/landing/logos/LOGOS-MIEMBROS-DE-LA-MINGA-09.png') }}" alt="" />
                </div>
                <div class="col-sm-2">
                    <img class="justify-content-center" width="200" src="{{ asset('img/landing/logos/LOGOS-MIEMBROS-DE-LA-MINGA-07.png') }}" alt="" />
                </div>
                <div class="col-sm-2">
                    <img class="justify-content-center" width="200" src="{{ asset('img/landing/logos/LOGOS-MIEMBROS-DE-LA-MINGA-03.png') }}" alt="" />
                </div>
                <div class="col-sm-2">
                    <img class="justify-content-center" width="200" src="{{ asset('img/landing/logos/REDNI.png') }}" alt="" />
                </div>
                <div class="col-sm-2">
                    <img class="justify-content-center" width="200" src="{{ asset('img/landing/logos/LOGOS-MIEMBROS-DE-LA-MINGA-05.png') }}" alt="" />
                </div>
            </div>
            <div class="row">
                <div class="col-sm-1">

                </div>
                <div class="col-sm-2">
                    <img class="justify-content-center" width="200" src="{{ asset('img/landing/logos/LOGOS-MIEMBROS-DE-LA-MINGA-06.png') }}" alt="" />
                </div>
                <div class="col-sm-2">
                    <img class="justify-content-center" width="200" src="{{ asset('img/landing/logos/LOGOS-MIEMBROS-DE-LA-MINGA-13.png') }}" alt="" />
                </div>
                <div class="col-sm-2">
                    <img class="justify-content-center" width="200" src="{{ asset('img/landing/logos/LOGOS-MIEMBROS-DE-LA-MINGA-11.png') }}" alt="" />
                </div>
                <div class="col-sm-2">
                    <img class="justify-content-center" width="200" src="{{ asset('img/landing/logos/KOMM-01.png') }}" alt="" />
                </div>
                <div class="col-sm-2">
                    <img class="justify-content-center" width="200" src="{{ asset('img/landing/logos/Untitled-3-01.png') }}" alt="" />
                </div>
            </div>
            <div class="row">
                <div class="col-sm-1">

                </div>
                <div class="col-sm-2">
                    <img class="justify-content-center" width="200" src="{{ asset('img/landing/logos/LOGOS-MIEMBROS-DE-LA-MINGA-01.png') }}" alt="" />
                </div>
                <div class="col-sm-2">
                    <img class="justify-content-center" width="200" src="{{ asset('img/landing/logos/LOGOS-MIEMBROS-DE-LA-MINGA-02.png') }}" alt="" />
                </div>
                <div class="col-sm-2">
                    <img class="justify-content-center" width="200" src="{{ asset('img/landing/logos/LOGOS-MIEMBROS-DE-LA-MINGA-12.png') }}" alt="" />
                </div>
                <div class="col-sm-2">
                    <img class="justify-content-center" width="200" src="{{ asset('img/landing/logos/CORPORACION-FAVORIT.png') }}" alt="" />
                </div>
                <div class="col-sm-2">
                    <img class="justify-content-center" width="200" src="{{ asset('img/landing/logos/LOGOS-MIEMBROS-DE-LA-MINGA-08.png') }}" alt="" />
                </div>
            </div>
            <div class="row">
                <div class="col-sm-1">

                </div>
                <div class="col-sm-1">
                    {{-- <img class="justify-content-center" width="200" src="{{ asset('img/landing/logos/LOGOS-MIEMBROS-DE-LA-MINGA-01.png') }}" alt="" /> --}}
                </div>
                <div class="col-sm-2">

                </div>
                <div class="col-sm-2">
                    <img class="justify-content-center" width="200" src="{{ asset('img/landing/logos/LOGOS-MIEMBROS-DE-LA-MINGA-11-1.png') }}" alt="" />
                </div>
                <div class="col-sm-2">
                    <img class="justify-content-center" width="200" src="{{ asset('img/landing/logos/LOGOS-MIEMBROS-DE-LA-MINGA-04.png') }}" alt="" />
                </div>
                <div class="col-sm-2">

                </div>
            </div>

        </div>
    </section>
    <section class="bg-secondary" id="demos">
        <div class="container pt-5 pb-4 py-md-6 py-lg-7">
            <div class="text-center mb-5 pt-3 pt-lg-4">
                <h3 class=" h2 mb-4 eventos-titulo uppercase">Thinkia Lab. de Innovación</span>
                </h3>
            </div>
            <div class="row">
                <div class="col-sm-3">

                </div>
                <div class="col-sm-2">

                </div>
                <div class="col-sm-2">
                    <img class="justify-content-center" width="200" src="{{ asset('img/landing/logos/LOGOS-ORGANIZADORES-19-150x150.png') }}" alt="" />
                </div>
                <div class="col-sm-2">

                </div>
                <div class="col-sm-2">

                </div>
            </div>
            <div class="row">
                <div class="col-sm-2">
                    <img class="justify-content-center" width="200" src="{{ asset('img/landing/logos/LOGOS-MIEMBROS-DE-LA-MINGA-21-1.png') }}" alt="" />
                </div>
                <div class="col-sm-2">
                    <img class="justify-content-center" width="200" src="{{ asset('img/landing/logos/LOGOS-MIEMBROS-THINKIA-16.png') }}" alt="" />
                </div>
                <div class="col-sm-2">
                    <img class="justify-content-center" width="200" src="{{ asset('img/landing/logos/LOGOS-MIEMBROS-THINKIA-17.png') }}" alt="" />
                </div>
                <div class="col-sm-2">
                    <img class="justify-content-center" width="200" src="{{ asset('img/landing/logos/LOGOS-MIEMBROS-THINKIA-18.png') }}" alt="" />
                </div>
                <div class="col-sm-2">
                    <img class="justify-content-center" width="200" src="{{ asset('img/landing/logos/LOGOS-MIEMBROS-THINKIA-15.png') }}" alt="" />
                </div>
                <div class="col-sm-2">
                    <img class="justify-content-center" width="200" src="{{ asset('img/landing/logos/LOGOS-MIEMBROS-THINKIA-14.png') }}" alt="" />
                </div>
            </div>

        </div>
    </section>
    <!-- Blog-->


    {{-- <section class="container bg-overlay-content pt-5 pt-md-6" style="margin-top: -420px;">
        <h2 class="text-light text-center pt-3 pt-md-2 mb-5 uppercase">Novedades</h2>
        <div class="cs-carousel">
            <div class="cs-carousel-inner"
                data-carousel-options="{&quot;items&quot;: 2, &quot;controls&quot;: false, &quot;autoHeight&quot;: true, &quot;responsive&quot;: {&quot;0&quot;:{&quot;items&quot;:1, &quot;gutter&quot;: 16},&quot;500&quot;:{&quot;items&quot;:2, &quot;gutter&quot;: 16},&quot;850&quot;:{&quot;items&quot;:3, &quot;gutter&quot;: 16}, &quot;1100&quot;:{&quot;items&quot;:3, &quot;gutter&quot;: 23}}}">
                <!-- Article-->
                @isset($fondos)
                <div class="pb-2">
                    <article class="card card-hover h-100 border-0 box-shadow pt-4 pb-5 mx-1">
                        <span class="badge badge-lg badge-floating badge-floating-right bg-uva text-white">Fondos</span>
                        <div class="card-body pt-5 px-4 px-xl-5">
                            @if($fondos->fuente)
                                <a class="meta-link font-size-sm mb-2" href="#">Propia</a>
                            @else
                                <a class="meta-link font-size-sm mb-2" href="#">Organización</a>
                            @endif
                            <h3 class="h4 nav-heading mb-4">

                                <a href="#">{{ $fondos->nombre_fondo }}</a>
                            </h3>
                            <div  class="scrollable" style="overflow: hidden; max-height:200px">
                            {{ $fondos->info }}
                            </div>
                        </div>

                        <div class="px-4 px-xl-5 pt-2">
                            <a class="media meta-link font-size-sm align-items-center" href="#">
                                <img class="rounded-circle" width="42" src="{{ asset('img/layout/home/profile1.jpg') }}"
                                    alt="Sanomi Smith" />
                                <div class="media-body pl-2 ml-1 mt-n1 text-naranja">por<span class="font-weight-semibold ml-1"> {{ $fondos->organizacion }}</span></div>
                            </a>
                            <div class="mt-3 text-right text-nowrap">
                                <a class="meta-link font-size-xs text-tomate" href="#">
                                    <i class="fe-calendar mr-1 mt-n1"></i>&nbsp;{{$fondos->fecha_inicio}}
                                </a>
                            </div>
                        </div>
                    </article>
                </div>
                <!-- Article-->
                @endisset
                @isset($convocatoria)
                <div class="pb-2">
                    <article class="card card-hover h-100 border-0 box-shadow pt-4 pb-5 mx-1">
                        <span class="badge badge-lg badge-floating badge-floating-right bg-uva text-white">Convocatorias</span>
                        <div class="card-body pt-5 px-4 px-xl-5">

                            <a class="meta-link font-size-sm mb-2" href="#">{{ $convocatoria->tipoconvocatoriaid->nombre}}</a>

                            <h3 class="h4 nav-heading mb-4">
                                <a href="#">Convocatoria # {{ $convocatoria->id}}</a>
                            </h3>
                            <div  class="scrollable" style="overflow: hidden; max-height:200px">
                            {{ $convocatoria->descripcion}}
                            </div>
                        </div>
                        <div class="px-4 px-xl-5 pt-2">
                            <a class="media meta-link font-size-sm align-items-center" href="#">
                                <img class="rounded-circle" width="42" src="{{ asset('img/layout/home/profile2.jpg') }}"
                                    alt="Sanomi Smith" />
                                <div class="media-body pl-2 ml-1 mt-n1 text-naranja">por<span class="font-weight-semibold ml-1">{{$convocatoria->user->name}}</span></div>
                            </a>

                            <div class="mt-3 text-right text-nowrap">
                                <a class="meta-link font-size-xs text-tomate" href="#">
                                    <i class="fe-calendar mr-1 mt-n1"></i>&nbsp;{{ $convocatoria->fecha_inicio}}
                                </a>
                            </div>
                        </div>
                    </article>
                </div>
                @endisset
                <!-- Article-->
                @isset($iniciativaInfo)
                @isset($iniciativaAutor)
                <div class="pb-2">
                    <article class="card card-hover h-100 border-0 box-shadow pt-4 pb-5 mx-1">
                        <span class="badge badge-lg badge-floating badge-floating-right bg-uva text-white">Iniciativas</span>
                        <div class="card-body pt-5 px-4 px-xl-5">
                            <a class="meta-link font-size-sm mb-2" href="#">Categoría 1</a>
                            {{-- <h3 class="h4 nav-heading mb-4">
                                <a href="#">{{$iniciativaInfo->nombre_iniciativa}}</a>
                            </h3>
                            {{$iniciativaInfo->descripcion_iniciativa}} --}
                        </div>
                        <div class="px-4 px-xl-5 pt-2">
                            <a class="media meta-link font-size-sm align-items-center" href="#">
                                <img class="rounded-circle" width="42" src="{{ asset('img/layout/home/profile3.jpg') }}"
                                    alt="Sanomi Smith" />
                                {{-- <div class="media-body pl-2 ml-1 mt-n1 text-naranja">por<span class="font-weight-semibold ml-1">
                                {{ $iniciativaAutor->nombre_organizacion }
                                </span></div> --}
                            </a>
                            <div class="mt-3 text-right text-nowrap">
                                <a class="meta-link font-size-xs text-tomate" href="#">
                                    <i class="fe-calendar mr-1 mt-n1"></i>&nbsp;22 Ago
                                </a>
                            </div>
                        </div>
                    </article>
                </div>
                @endisset
                @endisset
                <!-- Article-->
                @isset($materiales)
                <div class="pb-2">
                    <article class="card card-hover h-100 border-0 box-shadow pt-4 pb-5 mx-1">
                        <span class="badge badge-lg badge-floating badge-floating-right bg-uva text-white">Publicaciones y herramientas</span>
                        <div class="card-body pt-5 px-4 px-xl-5">
                        @if($materiales->tipo)
                                    <a class="meta-link font-size-sm mb-2" href="#">Publicación</a>
                                @else
                                    <a class="meta-link font-size-sm mb-2" href="#">Herramienta</a>
                                @endif
                            <h3 class="h4 nav-heading mb-4">

                                {{ $materiales->nombre_publicacion }}
                            </h3>
                            <div  class="scrollable" style="overflow: hidden; max-height:200px">
                            {{ $materiales->fuente_publicacion }}
                            </div>
                        </div>
                        <div class="px-4 px-xl-5 pt-2">
                            <a class="media meta-link font-size-sm align-items-center" href="#">
                                <img class="rounded-circle" width="42" src="{{ asset('img/layout/home/profile4.jpg') }}"
                                    alt="Sanomi Smith" />
                                <div class="media-body pl-2 ml-1 mt-n1 text-naranja">por<span class="font-weight-semibold ml-1">
                                {{ $materiales->autor_publicacion }}
                                </span></div>
                            </a>
                            <div class="mt-3 text-right text-nowrap">
                                <a class="meta-link font-size-xs text-tomate" href="#">
                                    <i class="fe-calendar mr-1 mt-n1 "></i>&nbsp;{{ $materiales->fecha_publicacion }}
                                </a>
                            </div>
                        </div>
                    </article>
                </div>
                @endisset
            </div>
        </div>
    </section> --}}
    {{-- <div class="bg-secondary" style="margin-top: -300px; padding-top: 300px;"></div> --}}
    <!-- Statistics (Digits)-->
    <section class="container py-5">
        <div class="row pb-lg-4 pt-3 justify-content-center">
            <div class="col-lg-2 col-md-3 col-sm-4 col-6 text-center mb-grid-gutter">
                <h3 class="display-2 font-weight-normal mb-0 colornumero">{{ App\Models\Convocatoria::count() }}</h3>
                <p class="text-muted font-size-lg mb-0 colornumero">Convocatorias</p>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-4 col-6 text-center mb-grid-gutter">
                <h3 class="display-2 font-weight-normal mb-0 colornumero">{{ App\Models\Iniciativas::count() }}</h3>
                <p class="text-muted font-size-lg mb-0 colornumero">Iniciativas</p>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-4 col-6 text-center mb-grid-gutter">
                <h3 class="display-2 font-weight-normal mb-0 colornumero">{{ App\Models\Fondo::count() }}</h3>
                <p class="text-muted font-size-lg mb-0 colornumero">Fondos </p>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-4 col-6 text-center mb-grid-gutter">
                <h3 class="display-2 font-weight-normal mb-0 colornumero">{{ App\Models\MaterialAprendizaje::where('tipo','0')->count() }}</h3>
                <p class="text-muted font-size-lg mb-0 colornumero">Publicaciones</p>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-4 col-6 text-center mb-grid-gutter">
                <h3 class="display-2 font-weight-normal mb-0 colornumero">{{ App\Models\MaterialAprendizaje::where('tipo','1')->count() }}</h3>
                <p class="text-muted font-size-lg mb-0 colornumero">Herramientas</p>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-4 col-6 text-center mb-grid-gutter">
                <h3 class="display-2 font-weight-normal mb-0 colornumero">{{ App\Models\Evento::count() }}</h3>
                <p class="text-muted font-size-lg mb-0 colornumero">Eventos</p>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
<script type="text/javascript">
  lightGallery(document.getElementById('video-gallery'));
  lightGallery(document.getElementById('video-gallery-2'));
</script>
@parent
@stop
