@extends('layouts.aplicacion.app')
@section('header-css')
    <style>

        @media (min-width: 992px) and (max-width: 1250px) {
            .itemhome {
                min-width: 50%;
            }
        }

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

        .bg-size-contain {
            background-size: contain;
            background-repeat: no-repeat;
            background-position: right;
        }

    </style>
    <script type="text/javascript">
            $( document ).ready(function() {
            $('#myModal').modal('toggle')
        });

    </script>
@endsection
@section('content')
    <input id="marker" value="{{ asset('images/hotspot_active.svg')}}" hidden>
    <input id="marker1" value="{{ asset('images/hotspot.svg')}}" hidden>
    <section class="container my-lg-2 pt-5 pb-lg-3">
        <div class="row align-items-center">
            <div class="text-justify col-lg-6 py-4  mt-lg-5">
                <h1 class="mt-5 text-primary">Mapa de iniciativas</h1>
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

                    <div id="video-gallery">
                        <a href="https://www.youtube.com/embed/lBGiDZIQ0qk?controls=0" class="mr-3"
                           loadYoutubeThumbnail='false' style="text-decoration:none;">
                            <span class="custom-cs-video-btn custom-cs-video-btn-primary"></span>
                            <span style="display: inline-flex;" class="font-size-lg p-2">Ver video</span>
                        </a>
                    </div>
                    <div class="text-left" style="padding-top: 30px!important">
                        <a href="#myModal" class="trigger-btn" data-toggle="modal"><strong> <i class="fas fa-exclamation"></i> &nbsp;&nbsp; Mejora la visualización de mapa</strong></a>
                    </div>
                </div>
            </div>
            <div class="d-sm-none d-lg-block  col-sm-0 col-md-6 py-8 bg-size-contain order-md-2 overflow-hidden "
                 style="background-image: url('{{ asset('img/img_pages/mapa_iniciativas.png') }}');">
            </div>
        </div>

    </section>

    <section class="searchbar-container bg-secondary">
        {{-- <div class="text-justify col-lg-6 mt-lg-5">
            <span><strong>Nota:</strong>¡ Desactiva tu ubicación de tu navegador para una mejorar visualización del mapa !</span>
        </div> --}}
        @include('web.iniciativas.mapa')
    </section>

    <div class="modal fade" id="myModal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content border-0">
                <div class="cs-view show" id="modal-signin-view">
                    <div class="modal-header border-0 bg-purple-gradient px-4">
                        <h4 class="modal-title text-light">Instrucciones</h4>
                        <button class="close text-light" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body px-4">
                        <p class="font-size-ms text-muted">
                            Desactiva tu ubicación para una mejor visualización del mapa
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection

@section('scripts')


    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDk1o4ccLlIVCRKZUEmgfwVz5h-KrqnnDU&libraries=places&callback=initMap"
            async defer></script>

    <script>
        lightGallery(document.getElementById('video-gallery'));

        iniciativas = @json($iniciativas->toArray());
        locations = []
        c = 0
        for (i = 0; i < iniciativas.length; i++) {
            // console.log(iniciativas[i]);
            /*descripcion=""
            des=iniciativas[0].iniciativa_informacion.descripcion_iniciativa.match(/.{1,15}/g)
            for(z=0;z<des.length;z++){
                descripcion+="<b>"+des[z]+"</b></br>"
            }*/
            txtods = ""
            ods = iniciativas[i].iniciativa_ods;
            for (z = 0; z < ods.length; z++) {
                txtods = ods[z].id + ", ";
            }
            txtpobla = "";
            pobla = iniciativas[i].iniciativa_poblaciones_completo;
            for (z = 0; z < pobla.length; z++) {
                txtpobla = pobla[z].descripcion + ", ";
            }

            let route = "{{ route('web.iniciativas.show', 0) }}";
            route = route.replace("/0", "/" + iniciativas[i].id);
            info = '<div class="">'
                + '<b size="6" style="color:#4e2561">' + iniciativas[i].iniciativa_informacion.nombre_iniciativa + '</b></br>'
                + '<b size="5" style="color:#fd972b">Descripción de la iniciativa:</b></br>'
                + '<div class="">' + iniciativas[i].iniciativa_informacion.descripcion_iniciativa + '</div></br>'
                // +'<b size="5" style="color:#fd972b">Componente innovador</b></br>'
                // + '<div ">'+iniciativas[i].iniciativa_informacion.componente_innovador+"</div></br>"
                // +'<b size="5" style="color:#fd972b">ODS vinculados:</b></br>'
                // + '<div  ">'+txtods.slice(0, -2)+".</div></br>"
                // +'<b size="5" style="color:#fd972b">Grupo objetivo:</b></br>'
                // + '<div  ">'+txtpobla.slice(0, -2)+".</div></br>"
                + '</div><a href="' + route + '">Ver más</a>'
            for (j = 0; j < iniciativas[i].iniciativa_ubicaciones.length; j++) {
                locations.push([])
                locations[c].push(info)
                locations[c].push(iniciativas[i].iniciativa_ubicaciones[j].latitud)
                locations[c].push(iniciativas[i].iniciativa_ubicaciones[j].longitud)
                c++;
            }
        }

    </script>

    <script type="text/javascript">
        $(document).ready(function () {
            $(document).on('click', '.btn-filter-submit', function () {
                var action = $(this).data('action');
                $('#filter-iniciativas').attr('action', action);
                $('#filter-iniciativas').submit();
                // console.log(action);
            });

            $(document).on('click', ".export", function (e) {
                var action = $(this).data('action');
                $('#filter-iniciativas').attr('action', action);
                $('#filter-iniciativas').submit();
                // console.log(action);
            });

            @if($scroll)
            $('html, body').animate({
                scrollTop: $("#mapacabezagrande").offset().top
            }, 1000);
            @endif
        });
    </script>
    <script src="{{ asset('js/mapacompleto.js') }}"></script>

@endsection
