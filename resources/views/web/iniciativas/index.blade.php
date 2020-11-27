@extends('layouts.aplicacion.app')
@section('header-css')
    <style>
        .card {
            overflow: hidden;
        }

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

        .custom-select {
            width: 250px;
            max-width: 250px;
        }

        .instituciones > label:not(:last-child):after {
            content: ",";
        }

        .scrolling {
            height: 150px;
        }

    </style>
@endsection
@section('content')
    <section class="container my-lg-2 pt-5 pb-lg-3">
        <div class="row align-items-center">
            <div class="col-lg-6 py-3 py-lg-0 mt-lg-5">
                <h1 class="mt-5">Ecosistema de innovación</h1>
                <div class="py-4">
                    <p class="cs-callout">
                        ¡Se parte del ecosistema de innovación!<span class="clearfix"></span>
                        * Registra tu iniciativa queremos saber sobre tu trabajo. <span class="clearfix"></span>
                        * Conoce el trabajo de otros en temas de innovación. <span class="clearfix"></span>
                        * Anímate a contactar a actores que trabajen en temas de tu interés. <span
                                class="clearfix"></span>
                        * Construyamos lazos de trabajo colaborativos. <span class="clearfix"></span>
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="searchbar-container bg-secondary">
        @include('web.iniciativas._filter', compact('cantones','tipoInstituciones','odsCategorias','tipoPoblaciones','buscar'))
    </section>

    <section class="container mb-5 pb-3 pb-lg-0 mb-lg-7 mt-lg-7">
        <div class="cs-masonry-grid" data-columns="3">
            <!-- Loop Start -->
            @foreach($iniciativas as $iniciativa)
                <div class="cs-grid-item" data-groups="[&quot;3d&quot;]">
                    <div class="card card-hover border-0 box-shadow mx-auto">
                        <img class="d-block  mx-auto my-2"
                             src="{{ asset('storage/iniciativas/'.$iniciativa->logo) }}"/>
                        <div class="card-body my-2 mx-3">
                            <h4 class="h5 mb-0">
                                {{$iniciativa->nombre_iniciativa}}
                            </h4>
                            <div class="text-justify my-2 scrolling" id="scrolling-{{rand(0,100)}}">
                                {{$iniciativa->descripcion_iniciativa}}
                            </div>

                            <h3 class="h5 mb-0">
                                {{$iniciativa->nombre_organizacion}}
                            </h3>
<<<<<<< HEAD
                            <p class="text-justify">
                                {{$iniciativa->enfoque}}
                            </p>
                            <h4 class="h5 mb-0">{{$iniciativa->nombre_iniciativa}}</h4>
                            <p class="font-size-sm font-weight-normal text-muted">06/09/2020</p>
                            <p class="text-justify">
                                {{$iniciativa->descripcion_iniciativa}}
                            </p>
                            <div class="media meta-link align-items-center pt-2">
                                <img class="" width="50"
                                     src="{{asset('storage/perfil/'.$iniciativa->user_imagen)}}">
                                <div class="media-body pl-2 ml-1">
                                    <span class="font-weight-semibold d-block w-100">
                                        {{$iniciativa->user_name}}
                                    </span>
                                    <span class="font-size-sm w-100">
                                        <a href="mailto:{{$iniciativa->user_email}}">{{$iniciativa->user_email}}</a>
                                        -
                                        <a href="tel:{{$iniciativa->user_celular}}">{{$iniciativa->user_celular}}</a>
                                    </span>
=======
                            <div class="text-justify instituciones">
                                @if($iniciativa->iniciativaInstituciones()->count()>0)
                                    @foreach($iniciativa->iniciativaInstituciones as $institucion)
                                        <label for="">{{$institucion->tipoInstitucion->descripcion}}</label>
                                    @endforeach
                                @endif
                            </div>

                            @if($iniciativa->iniciativa_actor_enfoque)
                                <div class="text-justify scrolling" id="scrolling-{{rand(0,100)}}">
                                    {{$iniciativa->iniciativa_actor_enfoque}}
>>>>>>> 1b47c352a6aef7475af15c314436bd4ed6a429e8
                                </div>
                            @endif

                            <div class="text-justify py-2">
                                @if($iniciativa->iniciativaContactos()->count()>0)
                                    @foreach($iniciativa->iniciativaContactos as $contacto)
                                        <div for="">{{$contacto->correo_electronico}}</div>
                                        <div for="">{{$contacto->celular}}</div>
                                    @endforeach
                                @endif
                                @if($iniciativa->iniciativa_actor_sitio_web)
                                    <div for="">
                                        <a class="nav-link-style"
                                           href="{{url($iniciativa->iniciativa_actor_sitio_web)}}" target="_blank">
                                            {{$iniciativa->iniciativa_actor_sitio_web}}
                                        </a>
                                    </div>
                                @endif
                                @if($iniciativa->iniciativaActor)
                                    <div for="">
                                        {{$iniciativa->iniciativa_ubicaciones_canton_nombres}}
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
        @endforeach
        <!-- loop end -->
        </div>
    </section>
    @php
        $iniciativas->links()
    @endphp

@endsection

@section('scripts')
    <script type="text/javascript">
        $(document).ready(function () {
            $(document).on('click', '.btn-filter-submit', function () {
                var action = $(this).data('action');
                $('#filter-iniciativas').attr('action', action);
                $('#filter-iniciativas').submit();
                //console.log(action);
            });
        });
    </script>
@endsection