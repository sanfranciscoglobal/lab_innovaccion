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

    <section  class="container mt-lg-2 pt-5 pt-sm-7  mt-md-4 pt-lg-7 pt-md-5 pb-0">
        <div class="row align-items-center">
            <div class="col-md-6 bg-size-cover order-md-2 py-5">
                <h1 class="mt-5 text-primary">Eventos</h1>
                <div class="py-3 text-justify">
                    <div class="cs-callout">¡Promocionemos charlas, conferencias, y talleres en innovación!</p>
                    Registra tus propios eventos o de otras organizaciones para que los actores del ecosistema de innovación participen.
                    </div>
                </div>
                <div class="shadow-lg p-3 mb-5 btn-purple-gradient text-color-white rounded text-justify" style="">
                    <strong>Indicaciones</strong>
                    <ul>
                        <li>Registra eventos propios o de otros organismos a nivel nacional o internacional en el formulario.</li>
                        <li>Revisa la lista de eventos y participa de estos espacios de intercambio.</li>
                    </ul>
                </div>
            </div>

            <div class="d-none d-md-block col-sm-0 col-md-6 py-8 bg-size-contain order-md-2 overflow-hidden " style="background-image: url('{{ asset('img/img_pages/eventos.png') }}')" alt="Side banner"></div>
        </div>
        <a class="cs-video-btn cs-video-btn-primary cs-video-btn-sm mr-3" style="cursor: default" href="https://www.youtube.com/watch?v=hTu0a4o97dU"></a>
                <span class="font-size-sm text-muted">Ver
                    video</span>
    </section>

    <section class="container bg-overlay-content pt-3 mb-3" id="searchsection" >

            <div class="row">
                <div class="text-center  col-12 col-lg-8 offset-lg-2">
                        <a class="btn btn-primary" style="border-color:#FF7F00;background: #FF7F00;"href="{{ route('app.eventos') }}">Publicar evento</a>
                </div>
            </div>

    </section>
    <section class="searchbar-container bg-overlay-content align-items-center"  style="background: #f2f2f2;">
        <form class="container" action="{{route('eventos.search')}}" method="POST">
            @csrf
            @method("POST")
            <div class="d-sm-flex align-items-center px-4 pt-4 pb-3">
                <div class="form-group w-100 mb-sm-4 mr-sm-3">
                    <label class="form-label font-weight-bold" for="to-destination" style="color: #a13d8f">Tipo de evento</label>
                    <select class="form-control custom-select" id="to-destination" name="tipoevento">
                        @if ($busqueda)
                        <option value="" selected disabled hidden>Seleccione un tipo</option>
                        <option value="2" {{ old('tipoevento', $busqueda->tipoevento) == '2' ? 'selected' : '' }}>Todos</option>
                        <option value="0" {{ old('tipoevento', $busqueda->tipoevento) == '0' ? 'selected' : '' }}>Virtual</option>
                        <option value="1" {{ old('tipoevento', $busqueda->tipoevento) == '1' ? 'selected' : '' }}>Presencial</option>
                        @else
                        <option value="" selected disabled hidden>Seleccione un tipo</option>
                        <option value="2" >Todos</option>
                        <option value="0" >Virtual</option>
                        <option value="1" >Presencial</option>
                        @endif
                    </select>

                </div>
                <div class="form-group w-100 mb-sm-4 mr-sm-3 mt-4">
                    <label class="form-label font-weight-bold" for="from-destination" style="color: #a13d8f">Cantón</label>

                    <select style="width:100%;" id="from-destination" class="form-control select2 " name="canton[]"
                            data-ajax--url="{{route('api.canton.select22')}}"
                            data-ajax--data-type="json"
                            data-ajax--data-cache="true"
                            data-allow-clear="true"
                            data-placeholder="Seleccione un Cantón"
                            data-close-on-select="false"
                            disabled
                            multiple>
                            @if($busqueda)
                                @if($busqueda->canton)
                                    @foreach($busqueda->canton as $cantonid)
                                        <option value="{{$cantonid}}"
                                            selected>{{$cantonid}}</option>
                                    @endforeach
                                @endif
                            @endif

                    </select>
                </div>
                {{-- <div class="d-sm-flex align-items-center">


                </div> --}}
               <div class="text-center text-sm-left mt-2 mt-sm-4 mb-4">
                        <button class="btn " style="background: #ff7f00; color:#fafafc;" type="submit">Filtrar</button>
                    </div>
                </div>
            </div>
        </form>
    </section>
    {{-- <section class="searchbar-container align-items-center" style="background: #f2f2f2">
        <form class="container" action="{{route('eventos.search')}}" method="POST">
            @csrf
            @method("POST")
            <div class="d-sm-flex align-items-center px-4 pt-4 pb-3">
                <div class="form-group w-100 mb-sm-4 mr-sm-3">
                    <label class="form-label font-weight-bold" for="to-destination" style="color: #a13d8f">Tipo de evento</label>
                    <select class="form-control custom-select" id="to-destination" name="tipoevento">
                        <option value="" selected disabled hidden>Seleccione un tipo</option>
                        <option value="2">Todos</option>
                        <option value="0">Virtual</option>
                        <option value="1">Presencial</option>

                    </select>

                </div>
                <div class="form-group w-100 mb-sm-4 mr-sm-3">
                    <label class="form-label font-weight-bold" for="from-destination" style="color: #a13d8f">Cantón</label>

                    <select style="width:100%;" id="from-destination" class="form-control select2 " name="canton[]"
                            data-ajax--url="{{route('api.canton.select2')}}"
                            data-ajax--data-type="json"
                            data-ajax--data-cache="true"
                            data-allow-clear="true"
                            data-placeholder="Seleccione un Cantón"
                            data-close-on-select="false"
                            disabled
                            multiple>
                    </select>
                </div>

               <div class="text-center text-sm-left mt-2 mt-sm-4 mb-4">
                        <button class="btn " style="background: #ff7f00; color:#fafafc;" type="submit">Filtrar</button>
                    </div>
                </div>
            </div>
        </form>
    </section> --}}

    <section class="container mb-5 pb-3 pb-lg-0 mb-lg-7 mt-lg-7">
        <div class="row mb-4">
            @foreach ($eventos as $evento)

                {{-- <div class="col-lg-4 col-sm-6 mb-grid-gutter">

                    <div class="card  border-0 box-shadow mx-auto" style="max-width: 400px;">
                        <a class="media meta-link font-size-sm align-items-center" href="{{route('eventodetalle',$evento->id)}}">
                            <img class="card-img-top" style="height: 58ch" src="{{asset('storage/eventos').'/'.$evento->imagen}}" alt="{{$evento->id}}"/>
                            <div class="card-body text-center">
                                <a class=" meta-link font-size-lg font-weight-bold align-items-center text-primary" href="{{route('eventodetalle',$evento->id)}}">{{$evento->nombre}}</a>
                            </div>
                        </a>


                    </div>
                </div> --}}

                <div class="col-lg-4 col-sm-6 mb-grid-gutter">

                <div class="card card-hover border-0 box-shadow mx-auto">
                    <img class="card-img-top" style="height: 50ch" src="{{asset('storage/eventos').'/'.$evento->imagen}}" alt="{{$evento->id}}" />
                    <div class="card-body">
                        <h3 class="h5 mb-0 text-center">{{$evento->nombre}}</h3>
                    </div>
                    <div class="card-hover-info px-4 py-4 bg-secondary h-100">
                        <h3 class="h5 text-center">{{$evento->nombre}}</h3>
                        <p class="text-center"><span class="organizador">{{$evento->organizador}}</span></p>
                        <div class="mt-3 font-weight-bold font-weight-md text-primary">
                            <p style="margin-bottom: 0; font-size:14;">{{date('d M, Y', strtotime( $evento->fecha))}}</p>
                            <p>{{date('H\Hi', strtotime( $evento->hora))}}</p>
                        </div>
                        <span class="font-weight-bold"><i class="fe-message-square font-size-lg mr-2"></i> Descripción del Evento</span><br>
                        <p class="scrollable"  >{{$evento->descripcion}}</p>


                        <div class="mt-3 text-primary font-weight-semibold text-center">

                            @if ($evento->tipo==0)
                                <span class="font-weight-bold">
                                <a class="btn btn-primary"  href="{{$evento->url}}">
                                    <i class="fe-link font-size-xl mr-2"></i> Link del evento
                                    </a>
                                </span>

                            @else
                                <span class="font-weight-bold">
                                <a class="btn btn-primary" href="https://maps.google.com/?q={{$evento->org_lat}},{{$evento->org_long}}">
                                    <i class="fe-map-pin font-size-xl mr-2"></i> Ubicación

                                    </a>
                                    </span>

                            @endif
                            @if ($evento->sitioweb!=null)
                                <span class="font-weight-bold">
                                <a class="btn btn-primary"  href="{{$evento->sitioweb}}">
                                    <i class="fe-link font-size-xl mr-2"></i> Ver más
                                    </a>
                                </span>
                            @endif


                        </div>
                        
                    </div>
                </div>
            </div>

            @endforeach
            <div class="col-12">{{ $eventos->links() }}</div>
           

        </div>
    </section>


@endsection
@section('footer')
<script>
    $(document.body).on("change","#to-destination",function(){

    $("#from-destination").empty();
    if (this.value==1) {

        $("#from-destination").removeAttr('disabled');

    }
    else{

        $("#from-destination").attr('disabled','disabled');

    }


    });

</script>
<script>
    @if($jumpsection)
        window.location.hash = "searchsection";
    @endif
    @if($busqueda)
        @if($busqueda->tipoevento=='1')
            $("#from-destination").removeAttr('disabled');
        @endif
    @endif
</script>

@endsection
