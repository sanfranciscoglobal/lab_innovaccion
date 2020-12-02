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
    <section class="container mt-4 pt-5">
        <div class="row align-items-center">
            <div class="col-lg-6 py-3 py-lg-0 mt-lg-5">
                <h1 class="mt-5 text-primary">Iniciativas de los actores</h1>
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
            <div class="col-sm-0 col-md-6 py-8 bg-size-cover order-md-2 overflow-hidden "
                 style="background-image: url('{{ asset('img/iniciativas_actores.png') }}');border-radius: 150px 0 0 150px;">
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
                            <h4 class="h5 mb-0 text-primary">
                                {{$iniciativa->nombre_iniciativa}}
                            </h4>
                            {{--<div class="text-justify my-2 scrolling" id="scrolling-{{rand(0,100)}}">--}}
                            {{--<span class="text-warning d-block small">Descripci&oacute;n</span>--}}
                            {{--{{$iniciativa->descripcion_iniciativa}}--}}
                            {{--</div>--}}

                            <h3 class="h5 mb-0 text-primary">
                                {{$iniciativa->nombre_organizacion}}
                            </h3>
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