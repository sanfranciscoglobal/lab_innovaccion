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


    <section style="background-image: url({{ asset('img/landing/bk-de-que-va-reto.png') }});background-repeat: no-repeat; background-size: auto; background-color: #2a8982;">
        <div class="text-center pt-lg-5 text-white">
            <h3 class="text-white">¿De qué va el Reto?</span></h3>
        </div>
        <div class=" container-fluid pl-lg-8 pr-lg-8 row no-gutters">
            <div class="col-md-12 px-3 order-md-1">
                <div class="ml-md-auto mr-sm-1 my-sm-0 py-md-2 pl-md-2 py-lg-4 text-white">
                    <div class="row">
                        <div class="col-sm-12" style="font-size: 16px !important">
                        <h3 class="text-white">Objetivo Del Reto</h2>
                        <p class="text-justify">El objetivo del reto es incentivar a jóvenes estudiantes de instituciones de educación  superior a desarrollar campañas de comunicación que contribuyan en la reducción de  la DCI.
                            Contribuir a la generación y difusión de conocimiento, y al involucramiento de la  comunidad académica.
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12" style="font-size: 16px !important">
                        <h3 class="text-white">Objetivo De La Campaña</h2>
                        <p class="text-justify">Cambiar comportamientos de las familias con niñas y niños con y en riesgo  de desnutrición a través de una campaña de comunicación que aborde los  siguientes ejes:</p>
                            <ul class="list-unstyled pl-lg-8">
                                <li class="d-flex align-items-center">
                                    <i class="fe-check-circle font-size-lg mr-2"></i>
                                    <span class="text-justify">Lactancia y alimentación complementaria.</span>
                                </li>
                                <li class="d-flex align-items-center">
                                    <i class="fe-check-circle font-size-lg mr-2"></i>
                                    <span class="text-justify">Agua, saneamiento e higiene.</span>
                                </li>
                                <li class="d-flex align-items-center">
                                    <i class="fe-check-circle font-size-lg mr-2"></i>
                                    <span class="text-justify">Chequeos de salud para madres y niños.</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12" style="font-size: 16px !important">
                        <p class="text-justify">La campaña de comunicación <strong>debe tener un alcance nacional</strong> e ir dirigida a los grupos priorizados en Costa, Sierra y Amazonía: <strong> madres y padres de familia y personas a cargo del cuidado de los niños y niñas con o en riesgo de desnutrición.</strong> </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section style="background-image: url({{ asset('img/landing/fondo_minga2.png') }});background-repeat: no-repeat; background-size: auto; background-color: #2a8982;">
        <div class="text-center pt-lg-5 text-white">
            <h3 class="text-white">¿Quiénes organizan el reto? </span></h3>
        </div>
        <div class="row">
            <div class="col-sm-5">
            </div>
            <div class="col-sm-3">
                <img class="justify-content-center" width="200" src="{{ asset('img/logo/thinkia_color_no_slogan.svg') }}" alt="" />
            </div>
            <div class="col-sm-3">
            </div>
        </div>
        <div class=" container-fluid pl-lg-8 pr-lg-8 row no-gutters">
            <div class="col-md-12 px-3 order-md-1">
                <div class="ml-md-auto mr-sm-1 my-sm-0 py-md-2 pl-md-2 py-lg-4 text-white">
                    <div class="row">
                        <div class="col-sm-12" style="font-size: 16px !important">
                        <p class="text-justify">Thinkia - lab de innovación es la herramienta con la cual cuenta el Programa de las  Naciones Unidas para el Desarrollo (PNUD) para promover la innovación abierta como  un método para acelerar los objetivos de desarrollo sostenible. Esta herramienta  está gerenciada por diversos actores: Fundación San Francisco Global y OpenlabEC  (sociedad civil), IMPAQTO (privado), ÉPICO (privado) y FLACSO CTS Lab (academia).
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-5">
            </div>
            <div class="col-sm-3">
                <img class="justify-content-center" width="200" src="{{ asset('img/landing/logos/DIALOGOS_VITALES.png') }}" alt="" />
            </div>
            <div class="col-sm-3">
            </div>
        </div>
        <div class=" container-fluid pl-lg-8 pr-lg-8 row no-gutters">
            <div class="col-md-12 px-3 order-md-1">
                <div class="ml-md-auto mr-sm-1 my-sm-0 py-md-2 pl-md-2 py-lg-4 text-white">
                    <div class="row">
                        <div class="col-sm-12" style="font-size: 16px !important">
                        <p class="text-justify">Diálogos Vitales (DV) nace en marzo del 2020 como una iniciativa ciudadana  autoconvocada y promovida por personas de varios sectores, con el objetivo de  encontrar el camino a la recuperación justa y sostenible del Ecuador a través de la  confianza y la colaboración.  DV cuenta con 10 mesas de trabajo o mingas, una de ellas es la Minga por la Nutrición  en Ecuador, que busca reducir el 2% anual de desnutrición crónica infantil en  Ecuador en niños y niñas durante sus primeros 1000 días de vida.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section style="background-image: url({{ asset('img/landing/fondo_minga_2.png') }});background-repeat: no-repeat; background-size: auto; background-color: #ec9534;">
        <div class="text-center pt-lg-5 text-white">
            <h3 class="text-white">¿Quiénes pueden participar del Reto?</span></h3>
        </div>
        <div class="container-fluid row no-gutters">

            <div class="col-md-12">
                <div class="ml-md-auto mr-sm-1 py-5 my-sm-0 py-md-2 pl-md-2 pl-lg-8  py-lg-4 text-white">
                    <div class="row">
                        <div class="col-sm-6">
                            <ul class="text-justify" style="font-size: 16px !important">
                                <li>Personas ecuatorianas mayores de 18 años.</li>
                                <li>Ser estudiante o egresado de cualquier universidad o instituto técnico y tecnológico del país.
                                    Deben conformarse equipos de mínimo dos personas sin un máximo de participantes</li>
                                <li>Deben conformarse equipos de mínimo dos personas sin un máximo de participantes. Se sugiere que los equipos sean interdisciplinarios, integrando a estudiantes de carreras relacionadas al tema</li>
                                <li>Personas que no tengan relación laboral con la Minga de Nutrición de Diálogos Vitales o las entidades organizadoras: Programa de las Naciones Unidas para el Desarrollo - PNUD, Fundación San Francisco Global, ÉPICO, IMPAQTO, FLACSO  CTS LAB, y OpenlabEC</li>

                            </ul>
                        </div>
                        <div class="col-sm-6">
                            <img class="justify-content-center" width="400" src="{{ asset('img/landing/participa-reto.png') }}" alt="" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="ml-md-auto mr-sm-1 py-5 my-sm-0 py-md-2 pl-md-2 pl-lg-8  py-lg-4 text-white">
                    <div class="row">
                        <div class="col-sm-6">
                            <a class="btn font-weight-bold botonmora " style=" width: 300px;" href="/eventos/">Descarga las bases aquí</a>

                        </div>
                        <div class="col-sm-6">
                            <a class="btn font-weight-bold botonmora " style=" width: 300px;" href="/eventos/">Inscríbete aquí</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section style="background-image: url({{ asset('img/landing/fondo_minga2.png') }});background-repeat: no-repeat; background-size: auto; background-color: #2a8982;">
        <div class="text-center pt-lg-5 text-white">
            <h3 class="text-white">Cronograma</span></h3>
        </div>
        <div class="container-fluid row no-gutters">

            <div class="col-md-12">
                <div class="ml-md-auto mr-sm-1 py-5 my-sm-0 py-md-2 pl-md-2 pl-lg-8  py-lg-4 text-white">
                    <div class="row">
                        <div class="col-sm-6">
                            <p class="text-justify" style="font-size: 16px !important; "> Reto se realizará de forma virtual e incluye las siguientes actividades, las cuales te pedimos leas con detalle para que te organices con tu equipo</p>
                        </div>
                        <div class="col-sm-6">
                            <ul class="list-unstyled" style="font-size: 16px !important;">
                                <li class="d-flex align-items-center">
                                    <i><img class="justify-content-center" width="80" src="{{ asset('img/logo/thinkia_color_no_slogan.svg') }}" alt="" /></i>
                                    <span class="text-justify">Inscripción: 26 de junio al 31 de agosto. </span>
                                </li>
                                <li class="d-flex align-items-center">
                                    <i><img class="justify-content-center" width="80" src="{{ asset('img/logo/thinkia_color_no_slogan.svg') }}" alt="" /></i>
                                    <span class="text-justify">Laboratorio de ideas:  3- 4 de septiembre.</span>
                                </li>
                                <li class="d-flex align-items-center">
                                    <i><img class="justify-content-center" width="80" src="{{ asset('img/logo/thinkia_color_no_slogan.svg') }}" alt="" /></i>
                                    <span class="text-justify">Recepción de propuestas: 10 de octubre.</span>
                                </li>
                                <li class="d-flex align-items-center">
                                    <i><img class="justify-content-center" width="80" src="{{ asset('img/logo/thinkia_color_no_slogan.svg') }}" alt="" /></i>
                                    <span class="text-justify">Prototipando mi idea: 24 - 25 de septiembre.</span>
                                </li>
                                <li class="d-flex align-items-center">
                                    <i><img class="justify-content-center" width="80" src="{{ asset('img/logo/thinkia_color_no_slogan.svg') }}" alt="" /></i>
                                    <span class="text-justify">Mentorías: 26 de septiembre al 8 de octubre.</span>
                                </li>
                                <li class="d-flex align-items-center">
                                    <i><img class="justify-content-center" width="80" src="{{ asset('img/logo/thinkia_color_no_slogan.svg') }}" alt="" /></i>
                                    <span class="text-justify">Selección de finalistas: 11 al 15 de octubre.</span>
                                </li>
                                <li class="d-flex align-items-center">
                                    <i><img class="justify-content-center" width="80" src="{{ asset('img/logo/thinkia_color_no_slogan.svg') }}" alt="" /></i>
                                    <span class="text-justify">Anuncio de ganadores: 18 de octubre.</span>
                                </li>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="text-center pt-lg-5">
            <h3 class="eventos-titulo">Premio</span></h3>
        </div>
        <div class="container-fluid row no-gutters">

            <div class="col-md-12">
                <div class="ml-md-auto mr-sm-1 py-5 my-sm-0 py-md-2 pl-md-2 pl-lg-8 pr-lg-8  py-lg-4">
                    <div class="row">
                        <div class="col-sm-6">
                            <img class="justify-content-center" width="400" src="{{ asset('img/landing/premio-reto.png') }}" alt="" />
                        </div>
                        <div class="col-sm-6">
                            <p class="text-justify" style="font-size: 16px !important;">
                            La propuesta ganadora será anunciada en un evento virtual y su plan de medios será pautado de acuerdo al presupuesto asignado de doce mil dólares (US $12.000), el que será entregado directamente a los medios de comunicación por parte de Diálogos Vitales.</p>
                            <p class="text-justify" style="font-size: 16px !important;">Diálogos Vitales y Thinkia - lab se reservan el derecho de contrastar los montos económicos planteados en el plan de medios directamente con los medios de comunicación, y a realizar los ajustes que considere pertinentes para el pautaje  planificado
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section style="background-image: url({{ asset('img/landing/fondo_minga_2.png') }});background-repeat: no-repeat; background-size: auto; background-color: #ec9534;">
        <div class="text-center pt-lg-5 text-white">
            <h3 class="text-white">Propiedad intelectual</span></h3>
        </div>
        <div class="container-fluid row no-gutters">

            <div class="col-md-12">
                <div class="ml-md-auto mr-sm-1 py-5 my-sm-0 py-md-2 pl-md-2 pl-lg-8 pr-lg-8  py-lg-4 text-white">
                    <div class="row">
                        <div class="col-sm-12">
                            <p class="text-justify" style="font-size: 16px !important;">
                                Los derechos de autoría serán del equipo ganador. Los derechos de uso y reproducción serán cedidos a Diálogos Vitales y Thinkia-lab con una licencia Creative Commons  Atribución-NoComercial 4.0 Internacional (CC BY-NC 4.0).
                            </p>
                        </div>
                        <div class="col-sm-6">
                            <p class="text-justify" style="font-size: 16px !important;">
                                El equipo ganador y las organizaciones mencionadas serán libres de:
                            </p>
                            <ul class="text-justify" style="font-size: 16px !important;">
                                <li> Compartir: copiar y redistribuir el material en cualquier medio o formato.</li>
                                <li> Adaptar: remezclar, transformar y construir a partir del material.</li>
                            </ul>
                            <p class="text-justify" style="font-size: 16px !important;">
                                La licencia no puede revocar estas libertades, en tanto se sigan los siguientes términos:
                            </p>
                            <ul class="text-justify" style="font-size: 16px !important;">
                                <li> Atribución: se debe dar crédito de manera adecuada, brindar un enlace a la licencia, e indicar si se han realizado cambios. Se lo puede hacer en cualquier forma razonable, pero no de forma tal que sugiera que se tiene su uso o tienen el  apoyo de la licenciante.  </li>
                                <li> No comercial: no puede hacerse uso del material con propósitos comerciales.</li>
                                <li>No hay restricciones adicionales: no pueden aplicarse términos legales ni  medidas tecnológicas que restrinjan legalmente a otras a hacer cualquier uso  permitido por la licencia.  </li>
                            </ul>
                            <p class="text-justify" style="font-size: 16px !important;">
                                Más información sobre la licencia Creative Commons Atribución-NoComercial  4.0 Internacional (CC BY-NC 4.0):  https://creativecommons.org/licenses/by-nc/4.0/deed.es
                            </p>
                        </div>
                        <div class="col-sm-6">
                            <img class="justify-content-center" width="400" src="{{ asset('img/landing/premio-propiedad.png') }}" alt="" />
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
