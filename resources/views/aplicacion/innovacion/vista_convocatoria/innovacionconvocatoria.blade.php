@extends('layouts.aplicacion.app')
@section('content')
<br />
    <section class="container my-lg-2 pt-5 pb-lg-5">
        <div class="row align-items-center">
            <div class="col-lg-5 py-3 py-lg-0 mt-lg-5">
                <h1 class="mt-5 text-primary uppercase"></h1>
                <div class="py-3">
                    <p class="text-justify cs-callout">

                    ¡ Compártenos tus retos para resolverlos juntos !</br>
                    ¡ Busquemos soluciones de manera abierta !</br></br>

                    Registra tus retos a través de nuestras convocatorias abiertas. Impulsaremos la innovación en el sector productivo, en la gestión pública y en los requerimientos de la ciudadanía. Para cada una de estas convocatorias soluciones factibles serán propuestas desde diversos actores combinando experticias y conocimientos.

                    </p>

                    <h2 class="text-primary uppercase">Metodología</h1>
                    <div class="py-3">
                    <p class="text-justify">
                        Cada convocatoria permite registrar problemas y recibir soluciones en un espacio de trabajo basado en la innovación abierta, pública y social.

                    </p>
                    <p class="text-justify">
                        Por innovación abierta nos referimos a que las organizaciones se abran a recibir aportes de actores externos, reconociendo el potencial de la inteligencia colectiva.
                    <p class="text-justify">
                        Cada convocatoria de innovación abierta tiene un proceso de difusión para el público en general permitiendo que actores de diversos sectores participen. Los problemas que buscan resolver estas convocatorias son desafíos de desarrollo y las soluciones deben aportar al bienestar social de forma inclusiva y sostenible, con énfasis en grupos vulnerables.
                    </div>

                    <div class="text-justify shadow-lg p-3 mb-5 btn-purple-gradient text-color-white rounded" style="">
                        <strong>Indicaciones</strong>
                        <ul>
                            <li>Revisa si se ha abierto una convocatoria de innovación de tu interés.</li>
                            <li>Registra tu reto en función de tus necesidades y el trabajo que realizas.</li>
                            <li>Si no has registrado un reto, revisa qué problemas están registrados en cada convocatoria y anímate a proveer ideas. </li>
                            <li>Propón una solución factible para uno o más de los problemas registrados.</li>
                            <li>Prepárate para implementar tu idea junto al requirente de soluciones.</li>

                        </ul>
                    </div>
                </div>
            </div>

            <div class="col py-3 py-lg-0 mt-lg-5"><img src="{{ asset('img/img_pages/gestion_innovacion.png') }}" alt="Side banner"></div>
        </div>

        <div id="video-gallery">
          <a href="https://www.youtube.com/embed/DMtuYk8g5bU?controls=0" class="mr-3" loadYoutubeThumbnail='false' style="text-decoration:none;">
            <span class="custom-cs-video-btn custom-cs-video-btn-primary"></span>
            <span style="display: inline-flex;" class="font-size-lg p-2">Ver video</span>
          </a>
        </div>

    </section>
    <section id="searchsection">
        <div class="container-fluid pl-lg-8 pr-lg-8 mt-5 mb-5">
            <h4 class="text-center pt-3 pt-md-2 mb-5 uppercase text-mora">Convocatorias</h4>
            <div class="row justify-content-center">
                <div class="itemhome col-md-5 col-lg-3 my-3" >
                    <div class="bg-light box-shadow-lg rounded-lg p-4 mb-grid-gutter text-center h-100">
                        <img class="d-inline-block mb-4 mt-2" width="100" src="{{ asset('img/productivo.svg') }}"
                            alt="Icon" />
                        <h3 class="fs-14 mb-2 uppercase text-center" style="color: #ef9231;">sector productivo</h3>
                        <p class="font-size-sm mb-0 text-justify">
                        Las convocatorias de innovación del sector productivo se organizan por actividad económica para recoger los retos que afrontan los productores de bienes y servicios.
                        </p>
                    </div>
                </div>
                <div class="itemhome col-md-5  col-lg-3 my-3" >
                    <div class="bg-light box-shadow-lg rounded-lg p-4 mb-grid-gutter text-center h-100">
                        <img class="d-inline-block mb-4 mt-2" width="100" src="{{ asset('img/gestion_publica.svg') }}"
                            alt="Icon" />
                        <h3 class="fs-14 mb-2 uppercase text-center" style="color: #bb2027;">gestión pública </h3>
                        <p class="font-size-sm mb-0 text-justify">
                        Las convocatorias de innovación en la gestión pública tienen dos ejes: recogen los retos que afrontan las instituciones públicas y las experiencias ciudadanas al utilizar los servicios públicos.

                        </p>
                    </div>
                </div>
                <div class="itemhome col-md-5 col-lg-3 my-3" >
                    <div class="bg-light box-shadow-lg rounded-lg p-4 mb-grid-gutter text-center h-100">
                        <img class="d-inline-block mb-4 mt-2" width="100" src="{{ asset('img/ciudadania.svg') }}"
                        alt="Icon" />
                        <h3 class="fs-14 mb-2 uppercase text-center"style="color: #803580;">Ciudadanía</h3>
                        <p class="font-size-sm mb-0 text-justify">
                        Las convocatorias de innovación ciudadana invitan a la sociedad civil organizada y a todo tipo de colectivo a compartir sus retos para trabajar por un mayor bienestar social.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="searchbar-container" style="background: #f2f2f2">
    <form class="container" action="{{route('convocatorias.search')}}" method="POST">
            @csrf
            @method("POST")
            <div class="row">
            <div class="col d-sm-flex align-items-center px-4 pt-4 pb-3">
                <div class="row">
                    <div class="col-md-5 col-6 col-sm-12 form-group w-100 mb-sm-4 mr-sm-3">
                        <label class="w-100 form-label font-weight-bold pb-1" for="tipoconvocatoria" style="color: #a13d8f">Tipo de convocatoria</label>

                        <select class="form-control custom-select select2" id="tipoconvocatoria" name="tipoconvocatoria" data-clean>
                            @if ($busqueda)
                            <option value="" selected hidden>Todos</option>
                            <option value="1" {{ old('tipoconvocatoria', $busqueda->tipoconvocatoria) == '1' ? 'selected' : '' }}>Sector Productivo</option>
                            <option value="2" {{ old('tipoconvocatoria', $busqueda->tipoconvocatoria) == '2' ? 'selected' : '' }}>Ciudadanía</option>
                            <option value="3" {{ old('tipoconvocatoria', $busqueda->tipoconvocatoria) == '3' ? 'selected' : '' }}>Gestión Pública</option>

                            @else
                            <option value="" selected hidden>Todos</option>
                            <option value="1" >Sector Productivo</option>
                            <option value="2" >Ciudadanía</option>
                            <option value="3" >Gestión Pública</option>

                            @endif

                        </select>

                    </div>
                    <div class="col-md-5 col-6 col-sm-12 form-group w-100 mb-sm-4 mr-sm-3">
                        <label class="w-100 form-label font-weight-bold pb-1" for="estadoconvocatoria" style="color: #a13d8f">Estado de la convocatoria</label>

                        <select class="form-control custom-select select2" id="estadoconvocatoria" name="estadoconvocatoria" data-clean>
                            @if ($busqueda)
                            <option value="" selected hidden>Todos</option>
                            <option value="2" {{ old('estadoconvocatoria', $busqueda->estadoconvocatoria) == '2' ? 'selected' : '' }}>Abierta</option>
                            <option value="3" {{ old('estadoconvocatoria', $busqueda->estadoconvocatoria) == '3' ? 'selected' : '' }}>Cerrada</option>

                            @else
                            <option value="" selected hidden>Todos</option>
                            <option value="2">Abierta</option>
                            <option value="3">Cerrada</option>
                            @endif
                        </select>


                    </div>
                    <div class="col-md-1 col-sm-12 text-center text-sm-left mt-2 mt-sm-4 mb-4">
                        <button class="btn " style="background: #ff7f00; color:#fafafc;" type="submit">Filtrar</button>
                     </div>

                    <div class="col-12 form-group w-100 mb-sm-4 mr-sm-3">
                        <label for="innovacion_abierta_ods" class="control-label  font-weight-bold pl-3" style="color: #a13d8f">ODS</label>
                        <div class= "m-0 p-0 w-100 form-group">

                            <select style="width:100%;" id="innovacion_abierta_ods" name="ods[]"
                                class="form-control custom-select select2"
                                data-ajax--url="{{route('api.ods-categoria.select2')}}"
                                data-ajax--data-type="json"
                                data-placeholder="Seleccione uno o varios ODS"
                                data-ajax--cache="true"
                                data-close-on-select="false"
                                multiple>
                                @if($busqueda)
                                    @if($busqueda->ods)
                                        @foreach($busqueda->ods as $odsid)
                                            <option value="{{$odsid}}"
                                                selected>{{ App\Models\OdsCategoria::obtenerODSNombre($odsid) }}</option>
                                        @endforeach
                                    @endif
                                @endif
                            </select>
                        </div>
                    </div>
                </div>



              </div>

            </div>



        </form>
    </section>

    <div class="position-relative" style=" height: 420px; background:linear-gradient(0deg, rgba(180,6,94,1) 0%, rgba(239,147,0,1) 100%);">
        <div class="cs-shape cs-shape-bottom cs-shape-curve bg-secondary">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 3000 185.4">
                <path fill="currentColor" d="M3000,0v185.4H0V0c496.4,115.6,996.4,173.4,1500,173.4S2503.6,115.6,3000,0z">
                </path>
            </svg>
        </div>
    </div>
    <section class="container bg-overlay-content pt-5 pt-md-6" style="margin-top: -420px;">
        <h2 class="text-light text-center pt-3 pt-md-2 uppercase">CONVOCATORIAS</h2>

        <div class="row mb-4">
        @foreach ($convocatorias as $convocatoria)

        @if($convocatoria->id = 7)
        <div class="col-lg-6 col-sm-6 mb-grid-gutter">
            <div class="pb-2">
                <article class="card h-100 border-0 box-shadow pt-4 pb-5 mx-1">
                    @if (($convocatoria->fecha_cierre) >= (date('Y-m-d')))
                        @if ($convocatoria->tipoconvocatoria_id == 1)
                            <span class="badge badge-lg badge-floating badge-floating-right text-white" style="background: #ef9231;">{{$convocatoria->tipoconvocatoriaid->nombre}}</span>
                        @elseif ($convocatoria->tipoconvocatoria_id == 2)
                            <span class="badge badge-lg badge-floating badge-floating-right text-white" style="background: #803580;">{{$convocatoria->tipoconvocatoriaid->nombre}}</span>
                        @elseif ($convocatoria->tipoconvocatoria_id == 3)
                            <span class="badge badge-lg badge-floating badge-floating-right text-white" style="background: #bb2027;">{{$convocatoria->tipoconvocatoriaid->nombre}}</span>

                        @endif
                    @else
                        <span class="badge badge-lg badge-floating badge-floating-right text-white" style="background:gray;">{{$convocatoria->tipoconvocatoriaid->nombre}}</span>
                    @endif
                    <div class="row pt-3 no-gutters">
                        <div class="col-md-4 justify-content-md-center">
                            <div class="card-body text center">
                                <h1 class="text-center font-weight-bold font-size-lg m-0">INICIO</h1>
                                <h1 class="text-center m-0" style="color:#cc3e39">{{date('d', strtotime( $convocatoria->fecha_inicio))}}</h1>
                                <p class="text-center font-weight-bold font-size-lg m-0">{{date('M', strtotime( $convocatoria->fecha_inicio))}}</p>

                                <div class="row justify-content-center mt-2">
                                    <a href="https://www.facebook.com/sharer/sharer.php?u={{ route("innovaciongestion.ver",[$convocatoria->id, $convocatoria->slug]) }}" type="button" class="col-5 btn btn-outline-secondary btn-sm btn-icon"><i class="fe-facebook"></i></a>
                                    <a href="https://twitter.com/intent/tweet?url={{ route("innovaciongestion.ver",[$convocatoria->id, $convocatoria->slug]) }}&text={{ $convocatoria->tipoconvocatoriaid->nombre }}" type="button" class="col-5 btn btn-outline-secondary btn-sm btn-icon ml-2"><i class="fe-twitter"></i></a>
                                    {{-- <a href="#" type="button" class="col-5 btn btn-outline-secondary btn-sm btn-icon mt-2"><i class="fe-instagram"></i></a> --}}
                                    <a href="https://www.linkedin.com/shareArticle?url={{ route("innovaciongestion.ver",[$convocatoria->id, $convocatoria->slug]) }}&title={{ $convocatoria->tipoconvocatoriaid->nombre }}&source=LinkedIn" type="button" class="col-5 btn btn-outline-secondary btn-sm btn-icon ml-2 mt-2"><i class="fe-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="card-body ">
                                @php
                                    $nombre=$convocatoria->nombre;
                                    $nombrelim=substr($nombre, 0, 70);
                                @endphp

                                {{-- <h3 class="card-title" ><a style="color: #cc3e39" href="{{route("innovaciongestion.ver",[$convocatoria->id, $convocatoria->slug])}}">{{$nombrelim}}</a> </h3> --}}
                                <h3 class="card-title" ><a style="color: #cc3e39" href="cambio-climatico">{{$nombrelim}}</a> </h3>
                                {{-- @if ($convocatoria->tipoconvocatoria_id == 2)
                                    @foreach ($convocatoria->conods as $objetivo)
                                        <h3 class="card-title" ><a style="color: #cc3e39" href="{{route("innovaciongestion.ver",[$convocatoria->id, $convocatoria->slug])}}">{{$objetivo->objetivoid->nombre}}</a> </h3>
                                    @endforeach
                                @else
                                    @foreach ($convocatoria->consectores as $sector)
                                        <h3 class="card-title"><a style="color: #cc3e39" href="{{route("innovaciongestion.ver",[$convocatoria->id, $convocatoria->slug])}}">{{$sector->sectorid->nombre}}</a> </h3>
                                    @endforeach
                                @endif--}}
                                @php
                                    $descripcion=$convocatoria->descripcion;
                                    $descripcionlim=substr($descripcion, 0, 700);
                                @endphp

                                <p class="card-text font-size-sm" >{{$descripcionlim}}</p>
                            </div>
                        </div>

                    </div>
                    <h2 class="text-right font-size-lg pr-4">FINALIZA <span style="color:#cc3e39">{{date('d', strtotime( $convocatoria->fecha_cierre))}}</span> {{date('M', strtotime( $convocatoria->fecha_cierre))}}</h2>

                </article>
            </div>
        </div>
        @endif
        @if($convocatoria->id = 6)
        <div class="col-lg-6 col-sm-6 mb-grid-gutter">
            <div class="pb-2">
                <article class="card h-100 border-0 box-shadow pt-4 pb-5 mx-1">
                    @if (($convocatoria->fecha_cierre) >= (date('Y-m-d')))
                        @if ($convocatoria->tipoconvocatoria_id == 1)
                            <span class="badge badge-lg badge-floating badge-floating-right text-white" style="background: #ef9231;">{{$convocatoria->tipoconvocatoriaid->nombre}}</span>
                        @elseif ($convocatoria->tipoconvocatoria_id == 2)
                            <span class="badge badge-lg badge-floating badge-floating-right text-white" style="background: #803580;">{{$convocatoria->tipoconvocatoriaid->nombre}}</span>
                        @elseif ($convocatoria->tipoconvocatoria_id == 3)
                            <span class="badge badge-lg badge-floating badge-floating-right text-white" style="background: #bb2027;">{{$convocatoria->tipoconvocatoriaid->nombre}}</span>

                        @endif
                    @else
                        <span class="badge badge-lg badge-floating badge-floating-right text-white" style="background:gray;">{{$convocatoria->tipoconvocatoriaid->nombre}}</span>
                    @endif
                    <div class="row pt-3 no-gutters">
                        <div class="col-md-4 justify-content-md-center">
                            <div class="card-body text center">
                                <h1 class="text-center font-weight-bold font-size-lg m-0">INICIO</h1>
                                <h1 class="text-center m-0" style="color:#cc3e39">{{date('d', strtotime( $convocatoria->fecha_inicio))}}</h1>
                                <p class="text-center font-weight-bold font-size-lg m-0">{{date('M', strtotime( $convocatoria->fecha_inicio))}}</p>

                                <div class="row justify-content-center mt-2">
                                    <a href="https://www.facebook.com/sharer/sharer.php?u={{ route("innovaciongestion.ver",[$convocatoria->id, $convocatoria->slug]) }}" type="button" class="col-5 btn btn-outline-secondary btn-sm btn-icon"><i class="fe-facebook"></i></a>
                                    <a href="https://twitter.com/intent/tweet?url={{ route("innovaciongestion.ver",[$convocatoria->id, $convocatoria->slug]) }}&text={{ $convocatoria->tipoconvocatoriaid->nombre }}" type="button" class="col-5 btn btn-outline-secondary btn-sm btn-icon ml-2"><i class="fe-twitter"></i></a>
                                    {{-- <a href="#" type="button" class="col-5 btn btn-outline-secondary btn-sm btn-icon mt-2"><i class="fe-instagram"></i></a> --}}
                                    <a href="https://www.linkedin.com/shareArticle?url={{ route("innovaciongestion.ver",[$convocatoria->id, $convocatoria->slug]) }}&title={{ $convocatoria->tipoconvocatoriaid->nombre }}&source=LinkedIn" type="button" class="col-5 btn btn-outline-secondary btn-sm btn-icon ml-2 mt-2"><i class="fe-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="card-body ">
                                @php
                                    $nombre=$convocatoria->nombre;
                                    $nombrelim=substr($nombre, 0, 70);
                                @endphp

                                {{-- <h3 class="card-title" ><a style="color: #cc3e39" href="{{route("innovaciongestion.ver",[$convocatoria->id, $convocatoria->slug])}}">{{$nombrelim}}</a> </h3> --}}
                                <h3 class="card-title" ><a style="color: #cc3e39" href="minga-de-nutricion">{{$nombrelim}}</a> </h3>
                                {{-- @if ($convocatoria->tipoconvocatoria_id == 2)
                                    @foreach ($convocatoria->conods as $objetivo)
                                        <h3 class="card-title" ><a style="color: #cc3e39" href="{{route("innovaciongestion.ver",[$convocatoria->id, $convocatoria->slug])}}">{{$objetivo->objetivoid->nombre}}</a> </h3>
                                    @endforeach
                                @else
                                    @foreach ($convocatoria->consectores as $sector)
                                        <h3 class="card-title"><a style="color: #cc3e39" href="{{route("innovaciongestion.ver",[$convocatoria->id, $convocatoria->slug])}}">{{$sector->sectorid->nombre}}</a> </h3>
                                    @endforeach
                                @endif--}}
                                @php
                                    $descripcion=$convocatoria->descripcion;
                                    $descripcionlim=substr($descripcion, 0, 700);
                                @endphp

                                <p class="card-text font-size-sm" >{{$descripcionlim}}</p>
                            </div>
                        </div>

                    </div>
                    <h2 class="text-right font-size-lg pr-4">FINALIZA <span style="color:#cc3e39">{{date('d', strtotime( $convocatoria->fecha_cierre))}}</span> {{date('M', strtotime( $convocatoria->fecha_cierre))}}</h2>

                </article>
            </div>
        </div>
        @endif
        @endforeach


    </div>

    <div class="col-12">{{ $convocatorias->links() }}</div>
    </section>

    {{-- <section class="container">
        <h2 class="text-primary text-center pt-3 pt-md-2 uppercase">CONVOCATORIAS pasadas</h2>

        <div class="row mb-4">
        @foreach ($convocatorias_antiguas as $convocatoria)
        <div class="col-lg-4 col-sm-6 mb-grid-gutter">
            <div class="pb-2">
                <article class="card h-100 border-0 box-shadow pt-4 pb-5 mx-1">
                    @if (($convocatoria->fecha_cierre) >= (date('Y-m-d')))
                        <span class="badge badge-lg badge-floating badge-floating-right text-white" style="background:#ff7f00 ">{{$convocatoria->tipoconvocatoriaid->nombre}}</span>
                    @else
                        <span class="badge badge-lg badge-floating badge-floating-right text-white btn-primary">{{$convocatoria->tipoconvocatoriaid->nombre}}</span>
                    @endif
                    <div class="row pt-3 no-gutters">
                        <div class="col-md-4 justify-content-md-center">
                            <div class="card-body text center">
                                <h1 class="text-center font-weight-bold font-size-lg m-0">INICIO</h1>
                                <h1 class="text-center m-0" style="color:#cc3e39">{{date('d', strtotime( $convocatoria->fecha_inicio))}}</h1>
                                <p class="text-center font-weight-bold font-size-lg m-0">{{date('M', strtotime( $convocatoria->fecha_inicio))}}</p>

                                <div class="row justify-content-center mt-2">
                                    <button type="button" class="col-5 btn btn-outline-secondary btn-sm btn-icon"><i class="fe-facebook"></i></button>
                                    <button type="button" class="col-5 btn btn-outline-secondary btn-sm btn-icon ml-2"><i class="fe-twitter"></i></button>
                                    <button type="button" class="col-5 btn btn-outline-secondary btn-sm btn-icon mt-2"><i class="fe-instagram"></i></button>
                                    <button type="button" class="col-5 btn btn-outline-secondary btn-sm btn-icon ml-2 mt-2"><i class="fe-linkedin"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="card-body ">
                                @if ($convocatoria->tipoconvocatoria_id == 2)
                                    @foreach ($convocatoria->conods as $objetivo)
                                        <h3 class="card-title" ><a style="color: #cc3e39" href="{{route("innovaciongestion.ver",[$convocatoria->id, $convocatoria->slug])}}">{{$objetivo->objetivoid->nombre}}</a> </h3>
                                    @endforeach
                                @else
                                    @foreach ($convocatoria->consectores as $sector)
                                        <h3 class="card-title"><a style="color: #cc3e39" href="{{route("innovaciongestion.ver",[$convocatoria->id, $convocatoria->slug])}}">{{$sector->sectorid->nombre}}</a> </h3>
                                    @endforeach
                                @endif
                                <p class="card-text font-size-sm">{{$convocatoria->descripcion}}</p>
                            </div>
                        </div>

                    </div>
                    <h2 class="text-right font-size-lg pr-4">FINALIZA <span style="color:#cc3e39">{{date('d', strtotime( $convocatoria->fecha_cierre))}}</span> {{date('M', strtotime( $convocatoria->fecha_cierre))}}</h2>

                </article>
            </div>
        </div>
        @endforeach

    </div>

    <div class="col-12">{{ $convocatorias->links() }}</div>
    </section> --}}

@endsection
@section('footer')
<script>
    $(document.body).on("change","#to-destination",function(){
        $("#from-destination").empty();
        if (this.value==1) {
            $("#from-destination").removeAttr('disabled');
        }
        else {
            $("#from-destination").attr('disabled','disabled');
        }
    });
</script>
<script>
    $(document).ready(function(){
        var listasectores=[];
        var idsubsector;
        $('#tipoconvocatoria').change(function(){
            if ($('#tipoconvocatoria').val()==2){
                idsector='#innovacion_abierta_sector_productivo';
                value=$('#tipoconvocatoria').val()
                recargarlistasectores(idsector,value);
                idsubsector='#innovacion_abierta_subsector_productivo';
                listasectores=[]
                recargarlista(listasectores,idsubsector);
                $("#innovacion_abierta_subsector_productivo").attr('disabled','disabled');
                $("#innovacion_abierta_sector_productivo").attr('disabled','disabled');
            }
            else{
                $("#innovacion_abierta_subsector_productivo").removeAttr('disabled');
                $("#innovacion_abierta_sector_productivo").removeAttr('disabled');
                idsector='#innovacion_abierta_sector_productivo';
                value=$('#tipoconvocatoria').val()
                recargarlistasectores(idsector,value);
                idsubsector='#innovacion_abierta_subsector_productivo';
                listasectores=[]
                recargarlista(listasectores,idsubsector);
            }

        });
        function recargarlistasectores(idsector,value){
            // data-ajax--url="{{route('api.tipo-sector.select2',1)}}"
            // data-ajax--data-type="json"
            //                 data-ajax--data-cache="true"
            if (value==1){
                $.ajax({
                    type:"POST",
                    url:"{{route('api.tipo-sector.select2',1)}}",
                    data: "json",

                    success:function(r){
                        $(idsector).find('option').remove();
                        $(r).each(function(i,v){

                            $(idsector).append('<option value="'+ v.id+'">'+v.text+'</option>');

                        });
                    },
                    error:function(){
                        alert('Ocurrio un error en el servidor ..');
                    }

                });

            }
            else if (value==3){
                $.ajax({

                    type:"POST",
                    url:"{{route('api.tipo-sector.select2',3)}}",
                    data: "json",

                    success:function(r){
                        $(idsector).find('option').remove();
                        $(r).each(function(i,v){

                            $(idsector).append('<option value="'+ v.id+'">'+v.text+'</option>');

                        });
                    },
                    error:function(){
                        alert('Ocurrio un error en el servidor ..');
                    }

                });

            }
            else{
                $.ajax({

                    type:"POST",
                    url:"{{route('api.tipo-sector.select2',2)}}",
                    data: "json",

                    success:function(r){
                        $(idsector).find('option').remove();
                        $(r).each(function(i,v){

                            $(idsector).append('<option value="'+ v.id+'">'+v.text+'</option>');

                        });
                    },
                    error:function(){
                        alert('Ocurrio un error en el servidor ..');
                    }

                });

            }

        };
    });

</script>
<script type="text/javascript">

    $(document).ready(function(){
        var listasectores=[];
        var idsubsector;
        $('#innovacion_abierta_sector_productivo').change(function(){
            idsubsector='#innovacion_abierta_subsector_productivo';
            listasectores=$('#innovacion_abierta_sector_productivo').val();

            recargarlista(listasectores,idsubsector);
        });
    });

    function recargarlista(listasectores,idsubsector){

        if (listasectores.length!=0){
            var subsectorlist=$(idsubsector).val();
            $.ajax({

                type:"POST",
                url:"{{route('api.tipo-subsector.select2')}}",
                data: { listasectores1: JSON.stringify(listasectores)} ,

                success:function(r){
                    $(idsubsector).find('option').remove();
                    $(r).each(function(i,v){
                        if (subsectorlist.includes(v.id.toString())){
                            $(idsubsector).append('<option selected value="'+ v.id+'">'+v.text+'</option>');
                        }
                        else{
                            $(idsubsector).append('<option value="'+ v.id+'">'+v.text+'</option>');
                        }

                    });
                },
                error:function(){
                    alert('Ocurrio un error en el servidor ..');
                }

            });
        }
        else{
            $(idsubsector).find('option').remove();
        }
    };
</script>
<script>
    @if($jumpsection)
        window.location.hash = "searchsection";
    @endif
</script>
<style>
    .select2-selection.select2-selection--multiple {
        width: 100%;
    }

    .select2-container .select2-selection--multiple .select2-selection__rendered {

        white-space: unset !important;
    }

    .select2-selection__rendered {
        width: 100%;
        overflow-y: scroll !important;
        resize: none;

    }

    select2-search__field:placeholder-shown {
        width: auto !important;
    }

    .select2-selection__choice {

    }

    .select2-selection.select2-selection--single {

        border-radius: 10px;
    }

    .select2 {
        max-width: none !important;
    }

</style>

@endsection

@section('scripts')
<script type="text/javascript">
  lightGallery(document.getElementById('video-gallery'));
</script>
@parent
@stop
