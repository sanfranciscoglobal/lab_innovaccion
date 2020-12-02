@extends('aplicacion.escritorio.escritorio')
@section('contenido')
    <style scoped>
        .carousel-item {
            min-height: 550px;
        }

        @media (max-width: 768px) {
            .carousel-item {
                min-height: 350px !important;
            }

            #bannerluces {
                background-image: url({{ asset('img/layout/home/light-bulb-with-drawing-graph_2.jpg')}}) !important;
            }
        }

        @media (min-width: 992px) and (max-width: 1250px) {
            .itemhome {
                min-width: 50%;
            }
        }
    </style>

    <div class="col-lg-9">
        <div class="d-flex flex-column h-100 bg-light rounded-lg box-shadow-lg">
            <div class="bkg-black border"
                 style="background-image:url({{asset('img/pexels-pixabay-373543.jpg')}}); background-position:center; background-size:cover; height: 300px;">
                {{--<div class="carousel-caption text-white ">--}}
                {{--<div class="container">--}}
                {{--<div class="row">--}}
                {{--<div class="col-sm-12 slide-container d-flex flex-column justify-content-center align-items-center text-center">--}}
                {{--<h2 class="fs-36 bolder"></h2>--}}
                {{--<p class="fs-22"></p>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--</div>--}}
            </div>


            {{--<section id="funciones">--}}
            <div class="container-fluid px-lg-3">
                <div class="row justify-content-center">
                    <div class="itemhome col-md-5  col-lg-4 my-3">
                        <div class="bg-light box-shadow-lg rounded-lg p-4 mb-grid-gutter text-center text-sm-left h-100">
                            <img class="d-inline-block mb-4 mt-2" width="80"
                                 src="{{ asset('img/home/Gestion_Innovacion.png') }}"
                                 alt="Icon"/>
                            <a href="{{route('innovaciones')}}" class="media meta-link "><h3
                                        class="fs-14 mb-2 uppercase text-mora"> Gestión de la Innovación </h3></a>
                            <a href="{{route('app.escritorio.problemas')}}" class="btn btn-outline-primary btn-sm">
                                Convocatorias <span
                                        class="badge badge-primary ml-1">{{ App\Models\Convocatoria::where('user_id', Auth::id())->count() }}</span>
                            </a>
                        </div>
                    </div>
                    <div class="itemhome col-md-5  col-lg-4 my-3">
                        <div class="bg-light box-shadow-lg rounded-lg p-4 mb-grid-gutter text-center text-sm-left h-100">
                            <img class="d-inline-block mb-4 mt-2" width="80"
                                 src="{{ asset('img/home/Ecosistema_Innovacion.png') }}"
                                 alt="Icon"/>
                            <a href="/iniciativas" class="media meta-link ">
                                <h3 class="fs-14 mb-2 uppercase text-uva">Ecosistema de Innovación</h3>
                            </a>
                            <a href="{{route('app.iniciativas.index')}}" class="btn btn-outline-primary btn-sm">
                                Iniciativas <span
                                        class="badge badge-primary ml-1">{{ App\Models\Iniciativas::where('user_id', Auth::id())->count() }}</span>
                            </a>
                        </div>
                    </div>
                    <div class="itemhome col-md-5 col-lg-4 my-3">
                        <div class="bg-light box-shadow-lg rounded-lg p-4 mb-grid-gutter text-sm-left h-100">
                            <img class="d-inline-block mb-4 mt-2" width="80"
                                 src="{{ asset('img/home/Recursos.png') }}"
                                 alt="Icon"/>
                            <h3 class="fs-14 mb-2 uppercase text-tomate">Recursos</h3>
                            <a href="{{route('app.escritorio.fondos')}}"
                               class="text-left btn btn-outline-primary btn-sm d-block my-1">
                                Fondos <span
                                        class="badge badge-primary ml-1">{{ App\Models\Fondo::where('user_id', Auth::id())->count() }}</span>
                            </a>

                            <a href="{{route('app.escritorio.eventos')}}"
                               class="text-left btn btn-outline-primary btn-sm d-block my-1">
                                Eventos <span
                                        class="badge badge-primary ml-1">{{ App\Models\Evento::where('user_id', Auth::id())->count() }}</span>
                            </a>

                            <a href="{{route('app.escritorio.material')}}"
                               class="btn btn-outline-primary btn-sm d-block">
                                Publicaciones y Herramientas <span
                                        class="badge badge-primary ml-1">{{ App\Models\MaterialAprendizaje::where('user_id', Auth::id())->count() }}</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            {{--</section>--}}



            {{--<div class="py-2 p-md-3">--}}
            {{--<img src="{{asset('img/pexels-pixabay-373543.jpg')}}" alt="" class="w-100">--}}
            {{--<div class="d-sm-flex align-items-center justify-content-between pb-4 text-center text-sm-left">--}}
            {{--<h1 class="h3 mb-2 text-nowrap">Problemas Reportados <span--}}
            {{--class="badge badge-secondary ml-1">18</span></h1>--}}
            {{--</div>--}}

            {{--<div class="row mt-4">--}}
            {{--<div class="col-sm-8">--}}
            {{--<span class="text-muted">Se muestran 4 de 18 problemas</span>--}}
            {{--</div>--}}
            {{--<div class="col-sm-4 text-right">--}}
            {{--<button type="button" class="btn btn-primary">Cargar más problemas</button>--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--</div>--}}
        </div>
    </div>
@endsection
