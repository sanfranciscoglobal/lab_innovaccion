@extends('layouts.aplicacion.app')

@section('content')
<style scoped>
    .carousel-item {min-height: 550px;}

    @media (max-width: 768px) {
        .carousel-item {
            min-height: 350px!important;
            }
        #bannerluces{
            background-image: url({{ asset('img/layout/home/light-bulb-with-drawing-graph_2.jpg')}})!important;
        }
    }
    @media (min-width: 992px) and (max-width: 1250px) {
        .itemhome{
            min-width: 50%;
        }
    } 
</style>
<section id="home-hero-banner">
    @include('slider_support', ['sliderID' => 'hero', 'slides' => 'home_slides'])
</section>

    <section id="funciones">
        <div class="container-fluid pl-lg-8 pr-lg-8 mt-5 mb-5">
            <div class="row justify-content-center">
                <div class="itemhome col-md-5  col-lg-3 my-3" >
                    <div class="bg-light box-shadow-lg rounded-lg p-4 mb-grid-gutter text-center text-sm-left h-100">
                        <img class="d-inline-block mb-4 mt-2" width="80" src="{{ asset('img/home/Gestion_Innovacion.png') }}"
                            alt="Icon" />
                        <a href="{{route('innovaciones')}}" class="media meta-link "><h3 class="fs-14 mb-2 uppercase text-mora"> Gestión de la Innovación </h3></a>
                        <p class="font-size-sm mb-0 text-justify">Recogemos con convocatorias específicas recogemos los retos que afronta el sector público, privado y la sociedad civil para buscar soluciones viables e innovadoras de manera abierta y colectiva.</p>
                    </div>
                </div>
                <div class="itemhome col-md-5  col-lg-3 my-3" >
                    <div class="bg-light box-shadow-lg rounded-lg p-4 mb-grid-gutter text-center text-sm-left h-100">
                        
                        <img class="d-inline-block mb-4 mt-2" width="80" src="{{ asset('img/home/Ecosistema_Innovacion.png') }}"
                            alt="Icon" />
                        <a href="/iniciativas" class="media meta-link ">
                            <h3 class="fs-14 mb-2 uppercase text-uva">Ecosistema de Innovación</h3>
                        </a>
                        <p class="font-size-sm mb-0 text-justify">Facilitamos la conexión entre agentes innovadores mapeando sus iniciativas para promover lazos de trabajo colaborativo que forjen las bases del ecosistema. </p>
                    </div>
                </div>
                <div class="itemhome col-md-5 col-lg-3 my-3" >
                    <div class="bg-light box-shadow-lg rounded-lg p-4 mb-grid-gutter text-center text-sm-left h-100">
                        <img class="d-inline-block mb-4 mt-2" width="80" src="{{ asset('img/home/Mapa.png') }}"
                            alt="Icon" />
                        <h3 class="fs-14 mb-2 uppercase text-naranja">Mapa</h3>
                        <p class="font-size-sm mb-0 text-justify">Promovemo la generación de datos abiertos del ecosistema y la gestión de innovación para fines informativos e investigativos.</p>
                    </div>
                </div>
                <div class="itemhome col-md-5 col-lg-3 my-3" >
                    <div class="bg-light box-shadow-lg rounded-lg p-4 mb-grid-gutter text-center text-sm-left h-100">
                        <img class="d-inline-block mb-4 mt-2" width="80" src="{{ asset('img/home/Recursos.png') }}"
                            alt="Icon" />
                        <h3 class="fs-14 mb-2 uppercase text-tomate">Recursos</h3>
                        <p class="font-size-sm mb-0 text-justify">Invitamos a compartir y recopilamos publicaciones, eventos, fondos y herramientas para promocionar conocimientos y oportunidades de innovación de manera colectiva.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-secondary bg-gradient-orange-purple">
        <div class=" container-fluid pl-lg-8 pr-lg-8 mt-5 mb-5 row no-gutters">
            <div class="col-md-6 py-7 bg-size-cover order-md-2 overflow-hidden" id="bannerluces"
                style="background-image: url({{ asset('img/layout/home/laboratorio-side-bkg.png') }});">
            </div>
            <div class="col-md-6 px-3  py-2 py-lg-4 order-md-1">
                <div class="ml-md-auto mr-sm-1 py-5 my-sm-0 py-md-2 pl-md-2 pl-lg-5  py-lg-4 text-white">
                    <h2 class="mb-3 pb-1 text-white">Laboratorio de Innovación</h2>
                    <div class="row">
                    <div class="col-sm-6">
                    <p class="text-justify">Thinkia es un espacio que promueve el encuentro de diversos actores - academia, público, privado y sociedad civil - para trabajar de manera colaborativa y creativa en innovación. </p>
                    </div>
                    <div class="col-sm-6">
                    <ul class="list-unstyled font-size-sm">
                        <li class="d-flex align-items-center">
                            <i class="fe-check-circle font-size-lg mr-2"></i>
                            <span class="text-justify">Conoce y conéctate con otros innovadores. </span>
                        </li>
                        <li class="d-flex align-items-center">
                            <i class="fe-check-circle font-size-lg mr-2"></i>
                            <span class="text-justify">Aprende y profundiza sobre metodologías de innovación.</span>
                        </li>
                        <li class="d-flex align-items-center">
                            <i class="fe-check-circle font-size-lg mr-2"></i>
                            <span class="text-justify">Comparte tus retos e intenta darles una solución desde otro enfoque.</span>
                        </li>
                        <li class="d-flex align-items-center">
                            <i class="fe-check-circle font-size-lg mr-2"></i>
                            <span class="text-justify">Propón soluciones efectivas y de ágil implementación.</span>
                        </li>
                    </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Demos-->
    <section class="bg-secondary fondoseccion" id="demos">
        <div class="container pt-5 pb-4 py-md-6 py-lg-7">
            <div class="text-center mb-5 pt-3 pt-lg-4">
                <h3 class=" h1 mb-4 eventos-titulo uppercase">Eventos</span>
                </h3>
                <p class="textoeventos">Mira nuestros próximos eventos</p>
            </div>
            <div class="row">
                <div class="col-lg-4 col-sm-6 mb-grid-gutter">
                    <a class="card card-hover border-0 box-shadow mx-auto" href="#" style="max-width: 400px;">
                        <img class="card-img-top" src="{{ asset('img/layout/home/02.jpg') }}" alt="Life Science" />
                        <div class="card-body">
                            <h3 class="h5 mb-0 text-center textoevento">Hackaton</h3>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6 mb-grid-gutter">
                    <a class="card card-hover border-0 box-shadow mx-auto" href="#" style="max-width: 400px;">
                        <img class="card-img-top" src="{{ asset('img/layout/home/03.jpg') }}" alt="Life Science" />
                        <div class="card-body">
                            <h3 class="h5 mb-0 text-center textoevento">Conferencia de innovación</h3>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6 mb-grid-gutter">
                    <a class="card card-hover border-0 box-shadow mx-auto" href="#" style="max-width: 400px;">
                        <img class="card-img-top" src="{{ asset('img/layout/home/01.jpg') }}" alt="Life Science" />
                        <div class="card-body">
                            <h3 class="h5 mb-0 text-center textoevento">Webinar de innovación</h3>
                        </div>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">
                    <a class="btn font-weight-bold botonmora " style=" width: 150px;" href="/eventos/">Ver todos</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog-->
    <div class="position-relative bg-purple-gradient" style="height: 420px;">
        <div class="cs-shape cs-shape-bottom cs-shape-curve bg-secondary">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 3000 185.4">
                <path fill="currentColor" d="M3000,0v185.4H0V0c496.4,115.6,996.4,173.4,1500,173.4S2503.6,115.6,3000,0z">
                </path>
            </svg>
        </div>
    </div>
    <section class="container bg-overlay-content pt-5 pt-md-6" style="margin-top: -420px;">
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
<<<<<<< HEAD
                            <div  class="scrollable" style="overflow: hidden; max-height:200px">
                            {{$iniciativaInfo->descripcion_iniciativa}}
                            </div>
=======
                            {{$iniciativaInfo->descripcion_iniciativa}} --}}
>>>>>>> 879c76805c61e92985b9eb859d1a5848ba6e129e
                        </div>
                        <div class="px-4 px-xl-5 pt-2">
                            <a class="media meta-link font-size-sm align-items-center" href="#">
                                <img class="rounded-circle" width="42" src="{{ asset('img/layout/home/profile3.jpg') }}"
                                    alt="Sanomi Smith" />
                                {{-- <div class="media-body pl-2 ml-1 mt-n1 text-naranja">por<span class="font-weight-semibold ml-1">
                                {{ $iniciativaAutor->nombre_organizacion }}
                                </span></div> --}}
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
    </section>
    <div class="bg-secondary" style="margin-top: -300px; padding-top: 300px;"></div>
    <!-- Statistics (Digits)-->
    <section class="container py-4 pt-md-6 pt-lg-7 pb-md-5">
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
