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

        .amcharts-amexport-item.amcharts-amexport-item-level-0 {
            border: 2px solid transparent;
            background-color: #30173c !important;
            opacity: 1 !important;
            top: -35px !important;
            width: 150px !important;
            font-size: 12px;
            padding-top: 3px;
            margin-right: 10px;
        }

        .amcharts-amexport-item.amcharts-amexport-item-level-0 a {
            color: #fff !important;
        }

        .bg-size-contain {
            background-size: contain;
            background-repeat: no-repeat;
            background-position: right;
        }

        .custom-page-ul li {
            margin-bottom: 0;
        }

    </style>
@endsection
@section('content')
    <section class="container mt-4 pt-5">
        <div class="row align-items-center">
            <div class="col-lg-6 py-3 py-lg-0 mt-lg-5">
                <h1 class="mt-5 text-primary">Analíticas</h1>
                <div class="py-3 text-justify ">
                    <div class="cs-callout">
                        <p class="">
                            ¡ Se parte del ecosistema de innovación !
                            <br><br>

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
                    <a class="cs-video-btn cs-video-btn-primary cs-video-btn-sm mr-3 mt-0 mb-4" style="cursor: default"
                       href="https://www.youtube.com/watch?v=hTu0a4o97dU"></a>
                    <span class="font-size-sm text-muted">Ver
                    video</span>
                </div>
            </div>
            <div class="col-sm-0 col-md-6 py-8 bg-size-contain order-md-2 overflow-hidden "
                 style="background-image: url('{{ asset('img/img_pages/analiticas.png') }}')">
            </div>
        </div>

    </section>

    <section class="row searchbar-container bg-secondary mt-2">
    <div class="col-md-4 col-12">
        @include('web.iniciativas._filter_analitica', compact('cantones','tipoInstituciones','odsCategorias','tipoPoblaciones','buscar'))
    </div>
    <div class="col-md-8 col-12">
        <div class="row">
        <div class="container mt-2">
            <span class="sr-only">Loading...</span>
        </div>

        <div id="chartdiv" class="mt-5 w-100" style="height: 500px">

        </div>
        <div class="col pb-2">
                <a href="{{route('app.iniciativas.create')}}"
                class="font-weight-bold btn btn-primary float-right"
                style="border-color:#fd972b;background: #fd972b;">Registra tu iniciativa
                </a>
         
                        <a href="/mapa"
                           class="btn btn-primary font-weight-bold btn btn-primary mr-3 btn-filter-submit"
                           style="border-color:#7A3240;background:#7A3240 "
                           data-action="">
                            <img src="{{ asset('images/Group 161.svg')}}"/>
                            Ver mapa completo
                        </a>
        </div>
        {{--<div class="row">--}}
        {{--<div class="col text-center mt-2 mb-5">--}}
        {{--<div class="btn-group dropdown">--}}
        {{--<button id="tipo-grafica" type="button" class="btn btn-primary dropdown-toggle"--}}
        {{--data-toggle="dropdown"--}}
        {{--aria-haspopup="true" aria-expanded="false">--}}
        {{--Tipo de gráfico--}}
        {{--</button>--}}
        {{--<div class="dropdown-menu dropdown-menu-right">--}}
        {{--<a style="cursor: pointer;" class="nav-link-style dropdown-item grafica"--}}
        {{--data-analitica="barras">Barras</a>--}}
        {{--<a style="cursor: pointer;" class="nav-link-style dropdown-item grafica"--}}
        {{--data-analitica="pastel">Pastel</a>--}}
        {{--<a style="cursor: pointer;" class="nav-link-style dropdown-item grafica"--}}
        {{--data-analitica="radar">Radar</a>--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--</div>--}}
    </div>
    </section>                            
    {{--<section class="searchbar-container bg-secondary mt-2">--}}
    {{--<div class="container">--}}
    {{--<div class="card">--}}
    {{--<div id="option-type" class="card-body text-center">--}}
    {{--<div class="custom-control custom-radio custom-control-inline">--}}
    {{--<input class="custom-control-input tipo-grafica" type="radio" id="ex-radio-4"--}}
    {{--name="tipo-grafica" value="ods"--}}
    {{--checked>--}}
    {{--<label class="custom-control-label tipo-grafica" for="ex-radio-4">Iniciativas por ODS</label>--}}
    {{--</div>--}}
    {{--<div class="custom-control custom-radio custom-control-inline">--}}
    {{--<input class="custom-control-input tipo-grafica" type="radio" id="ex-radio-5"--}}
    {{--name="tipo-grafica"--}}
    {{--value="poblacion">--}}
    {{--<label class="custom-control-label" for="ex-radio-5">Iniciativas por poblaci&oacute;n</label>--}}
    {{--</div>--}}
    {{--<div class="custom-control custom-radio custom-control-inline">--}}
    {{--<input class="custom-control-input" type="radio" id="ex-radio-6" name="tipo-grafica"--}}
    {{--value="agente">--}}
    {{--<label class="custom-control-label tipo-grafica" for="ex-radio-6">Iniciativas por tipo de--}}
    {{--agente</label>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</section>--}}

    
@endsection

@section('scripts')
    <script src="{{asset('assets/amcharts4/core.js')}}"></script>
    <script src="{{asset('assets/amcharts4/charts.js')}}"></script>
    <script src="{{asset('assets/amcharts4/themes/animated.js')}}"></script>
    <script src="{{asset('analitica/iniciativaOds.js')}}"></script>
    <script src="{{asset('analitica/iniciativaPoblacion.js')}}"></script>
    <script src="{{asset('analitica/iniciativaInstitucion.js')}}"></script>
    <script src="{{asset('analitica/iniciativaOdsInstitucion.js')}}"></script>
    <script type="text/javascript">
        var analitica = 'barras';
        var grafica = 'ods';

        $(document).ready(function () {
            controlesTipoGrafica();
            obtenerIniciativaData(analitica);

            // $(document).on('click', '.grafica', function () {
            //     analitica = $(this).data('analitica');
            //     grafica = $('input[name=tipo-grafica]:checked', '#option-type').val();
            //     tipoGrafica();
            // });

            // $("input[name='tipo-grafica']").change(function () {
            //     grafica = $(this).val();
            //     console.log(grafica);
            //     tipoGrafica();
            // });

            $("#tipo-grafica").change(function () {
                analitica = $(this).val();
                controlesTipoGrafica();
                tipoGrafica();
            });

            $("#tipo-informacion").change(function () {
                grafica = $(this).val();
                controlesTipoGrafica();
                tipoGrafica();
            });
            $("#tipo-informacion1").change(function () {
                grafica = $(this).val();
                controlesTipoGrafica();
                tipoGrafica();
            });
            $("#tipo-informacion2").change(function () {
                grafica = $(this).val();
                controlesTipoGrafica();
                tipoGrafica();
            });
            $(document).on('click', ".btn-filter-submit", function (e) {
                tipoGrafica();
                e.preventDefault();
            });

            $(document).on('click', ".export", function (e) {
                $('#filter-iniciativas').attr('action', $(this).data('action'));
                $('#filter-iniciativas').submit();
            });
        });

        function tipoGrafica() {
            if (grafica == 'ods') {
                obtenerIniciativaData(analitica);
            }

            if (grafica == 'poblacion') {
                obtenerPoblacionData(analitica);
            }

            if (grafica == 'agente') {
                obtenerinstitucionData(analitica);
            }

            if (grafica == 'ods_institucion') {
                obtenerOdsInstitucionData(analitica);
            }
        }

        function controlesTipoGrafica() {
            $('#c-tipo-grafica').show();

            if (grafica == 'ods') {
                $('#c-ods').appendTo('#content-variables');
                $('#c-tipo-institucion').appendTo('#content-filtros');
                $('#c-tipo-poblacion').appendTo('#content-filtros');
            }

            if (grafica == 'poblacion') {
                $('#c-tipo-poblacion').appendTo('#content-variables');
                $('#c-tipo-institucion').appendTo('#content-filtros');
                $('#c-ods').appendTo('#content-filtros');
            }

            if (grafica == 'agente') {
                $('#c-tipo-institucion').appendTo('#content-variables');
                $('#c-tipo-poblacion').appendTo('#content-filtros');
                $('#c-ods').appendTo('#content-filtros');
            }

            if (grafica == 'ods_institucion') {
                $('#c-ods').appendTo('#content-variables');
                $('#c-tipo-institucion').appendTo('#content-variables');
                $('#c-tipo-poblacion').appendTo('#content-filtros');
                $('#c-tipo-grafica').hide();
            }

        }
    </script>
@endsection
