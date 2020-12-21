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

        .bg-size-contain {
            background-size: contain;
            background-repeat: no-repeat;
            background-position: right;
        }

    </style>
@endsection
@section('content')
    <section class="container mt-4 pt-5">
        <div class="row align-items-center">
            <div class="col-lg-6 py-3 py-lg-0 mt-lg-5 ">
                <h1 class="mt-5 text-primary">Iniciativas de los actores</h1>
                <div class="py-3 text-justify ">
                    <div class="cs-callout">
                        <p class="">
                            ¡ Se parte del ecosistema de innovación !<br><br>


                            Registra tu iniciativa queremos saber sobre tu trabajo.<br/>
                            Conoce el trabajo de otros en temas de innovación.<br/>
                            Anímate a contactar a actores que trabajen en temas de tu interés.<br/>
                            Construyamos lazos de trabajo colaborativos.<br/>

                        </p>
                    </div>
                    <div class="text-justify shadow-lg p-3 mb-2 btn-purple-gradient text-color-white rounded" style="">
                        <strong>Indicaciones</strong>
                        <ul>
                            <li>Si gustas registrar tu iniciativa pulsa en el botón “Registra tu iniciativa”.</li>
                            <li>Si gustas informarte:
                                <ol type="a">
                                    <li> Indaga en el mapa, al poner el curso sobre la iniciativa obtendrás más
                                        información.
                                    </li>
                                    <li> Pulsa el botón “Actores” y se desplegará la información de quién implementa.
                                    </li>
                                    <li> Pulsa el botón “Analítica” y podrás visualizar la información en gráficos.</li>
                                    <li> Escoge filtros en base a tu interés y se organizará la información.</li>
                                    <li> Pulsa los botones para descargar y tendrás acceso a toda la base de datos en
                                        diferente formatos.
                                    </li>
                                </ol>
                            </li>
                        </ul>
                    </div>
                    <br>
                    <a class="cs-video-btn cs-video-btn-primary cs-video-btn-sm mr-3 mt-0 mb-4" style="cursor: default"
                       href="https://www.youtube.com/watch?v=hTu0a4o97dU"></a>

                    <span class="font-size-sm text-muted">Ver
                    video</span>
                </div>

            </div>
            <div class="col-sm-0 col-md-6 py-8 bg-size-contain order-md-2 overflow-hidden "
                 style="background-image: url('{{ asset('img/img_pages/iniciativas_actores.png') }}');">
            </div>

        </div>

    </section>
    <section class="searchbar-container bg-secondary mt-2">
        @include('web.iniciativas._filter', compact('cantones','tipoInstituciones','odsCategorias','tipoPoblaciones','buscar'))
    </section>

    <section class="container mb-5 pb-3 pb-lg-0 mb-lg-7 mt-lg-7">
        <div class="cs-masonry-grid" data-columns="3">
            <!-- Loop Start -->
            @foreach($iniciativas as $iniciativa)
                <div class="cs-grid-item" data-groups="[&quot;3d&quot;]">
                    <div class="card card-hover border-0 box-shadow mx-auto">
                        <img class="d-block  mx-auto"
                             src="{{ asset('storage/iniciativas/'.$iniciativa->logo) }}"/>
                        <div class="card-body my-2 mx-3">
                            <h3 class="mb-0 text-primary">
                                {{$iniciativa->nombre_iniciativa}}
                            </h3>

                            <label class="mb-0 text-warning">
                                {{$iniciativa->nombre_organizacion}}
                            </label>

                            <div class="clearfix"></div>
                            <a href="{{route('web.iniciativas.show', $iniciativa->id)}}"
                               {{--href="#accordion-example-{{$iniciativa->id}}"--}}
                               class="btn btn-primary btn-sm my-2"
                                    {{--data-toggle="collapse" --}}
                                    {{--role="button" --}}
                                    {{--aria-expanded="false"--}}
                                    {{--aria-controls="multiCollapseExample1"--}}
                            >
                                Ver m&aacute;s
                            </a>
                            <div class="collapse multi-collapse my-2" id="accordion-example-{{$iniciativa->id}}">
                                <div class="card card-body mb-2">
                                    <div class="text-justify">
                                        <label for="" class="text-warning d-block">Componente Innovador</label>
                                        {{$iniciativa->componente_innovador}}
                                    </div>
                                    <div class="text-justify">
                                        @if($iniciativa->iniciativaOds()->count()>0)
                                            <label for="" class="text-warning d-block mt-1">ODS</label>
                                            @foreach($iniciativa->iniciativaOds as $ods)
                                                {{--<span class="text-primary">--}}
                                                {{$ods->OdsCategoria->nombre}}@if(!$loop->last), @endif
                                                {{--</span>--}}
                                            @endforeach
                                        @endif
                                    </div>
                                    <div class="text-justify">
                                        @if($iniciativa->iniciativaPoblaciones()->count()>0)
                                            <label for="" class="text-warning d-block mt-1">Grupo Objetivo</label>
                                            @foreach($iniciativa->iniciativaPoblaciones as $iniciativaPoblacion)
                                                {{$iniciativaPoblacion->tipoPoblacion->descripcion}}@if(!$loop->last)
                                                    , @endif
                                            @endforeach
                                        @endif
                                    </div>
                                    <div class="text-justify">
                                        @if($iniciativaPoblacion->nombre_organizacion)
                                            <label for="" class="text-warning">Nombre de la organización</label>
                                            {{$iniciativaPoblacion->nombre_organizacion}}
                                        @endif
                                    </div>
                                    <div class="text-justify">
                                        @if($iniciativa->iniciativaInstituciones()->count()>0)
                                            <label for="" class="text-warning d-block mt-1">Tipo de organización</label>
                                            @foreach($iniciativa->iniciativaInstituciones as $iniciativaInstitucion)
                                                {{$iniciativaInstitucion->tipoInstitucion->descripcion}}@if(!$loop->last)
                                                    , @endif
                                            @endforeach
                                        @endif
                                    </div>
                                    <div class="text-justify">
                                        @if($iniciativa->iniciativa_actor_enfoque)
                                            <label for="" class="text-warning d-block mt-1">Enfoque</label>
                                            {{$iniciativa->iniciativa_actor_enfoque}}
                                        @endif
                                    </div>

                                    <div class="text-justify">
                                        @foreach($iniciativa->iniciativaContactos as $contacto)
                                            <div for="">{{$contacto->correo_electronico}}</div>
                                            <div for="">{{$contacto->celular}}</div>
                                        @endforeach
                                    </div>

                                    <div class="text-justify">
                                        @if($iniciativa->iniciativa_actor_sitio_web)
                                            <div class="">
                                                <a class="nav-link-style text-warning"
                                                   href="{{url($iniciativa->iniciativa_actor_sitio_web)}}"
                                                   target="_blank">
                                                    {{$iniciativa->iniciativa_actor_sitio_web}}
                                                </a>
                                            </div>
                                        @endif
                                    </div>

                                    <div class="text-justify">
                                        @if($iniciativa->iniciativaActor)
                                            <div class="text-black-50">
                                                {{$iniciativa->iniciativa_ubicaciones_canton_nombres}}
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>


                            {{--</div>--}}

                            {{--<div class="text-justify instituciones">--}}
                            {{--@if($iniciativa->iniciativaInstituciones()->count()>0)--}}
                            {{--@foreach($iniciativa->iniciativaInstituciones as $institucion)--}}
                            {{--<span class="text-primary">--}}
                            {{--{{$institucion->tipoInstitucion->descripcion}}@if(!$loop->last), @endif--}}
                            {{--</span>--}}
                            {{--@endforeach--}}
                            {{--@endif--}}
                            {{--</div>--}}

                            {{--@if($iniciativa->iniciativa_actor_enfoque)--}}
                            {{--<span class="text-warning small">Enfoque</span>--}}
                            {{--<div class="text-justify scrolling" id="scrolling-{{rand(0,100)}}">--}}
                            {{--{{$iniciativa->iniciativa_actor_enfoque}}--}}
                            {{--</div>--}}
                            {{--@endif--}}

                            {{--<div class="text-justify py-2 small">--}}
                            {{--@if($iniciativa->iniciativaContactos()->count()>0)--}}
                            {{--<label class="text-warning">Contacto</label>--}}
                            {{--@foreach($iniciativa->iniciativaContactos as $contacto)--}}
                            {{--<div for="">{{$contacto->correo_electronico}}</div>--}}
                            {{--<div for="">{{$contacto->celular}}</div>--}}
                            {{--@endforeach--}}
                            {{--@endif--}}
                            {{--@if($iniciativa->iniciativa_actor_sitio_web)--}}
                            {{--<div class="">--}}
                            {{--<a class="nav-link-style text-warning"--}}
                            {{--href="{{url($iniciativa->iniciativa_actor_sitio_web)}}" target="_blank">--}}
                            {{--{{$iniciativa->iniciativa_actor_sitio_web}}--}}
                            {{--</a>--}}
                            {{--</div>--}}
                            {{--@endif--}}
                            {{--@if($iniciativa->iniciativaActor)--}}
                            {{--<div class="text-black-50">--}}
                            {{--{{$iniciativa->iniciativa_ubicaciones_canton_nombres}}--}}
                            {{--</div>--}}
                            {{--@endif--}}
                            {{--</div>--}}

                            {{--<span class="text-warning d-block small pt-2">Registro</span>--}}
                            {{--<div class="media meta-link align-items-center">--}}
                            {{--<img class="rounded-circle" width="50"--}}
                            {{--src="{{asset('storage/perfil/'.$iniciativa->user_imagen)}}">--}}
                            {{--<div class="media-body pl-2 ml-1 small">--}}
                            {{--<span class="font-weight-semibold d-block w-100">--}}
                            {{--{{$iniciativa->user_name}}--}}
                            {{--</span>--}}
                            {{--<span class="font-size-sm d-block w-100">--}}
                            {{--<a class="nav-link-style" href="mailto:{{$iniciativa->user_email}}">--}}
                            {{--{{$iniciativa->user_email}}--}}
                            {{--</a>--}}
                            {{--</span>--}}
                            {{--<span class="font-size-sm d-block w-100">--}}
                            {{--<a class="nav-link-style" href="tel:{{$iniciativa->user_celular}}">--}}
                            {{--{{$iniciativa->user_celular}}--}}
                            {{--</a>--}}
                            {{--</span>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                        </div>
                    </div>
                </div>
        @endforeach
        <!-- loop end -->
        </div>
    </section>
    {!! $iniciativas->links() !!}

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

            $(document).on('click', ".export", function (e) {
                $('#filter-iniciativas').attr('action', $(this).data('action'));
                $('#filter-iniciativas').submit();
            });

            @if($scroll)
            $('html, body').animate({
                scrollTop: $("#filter-iniciativas").offset().top
            }, 1000);
            @endif
        });
    </script>
@endsection
