@extends('layouts.aplicacion.app')
@section('header-css')
    <style>

        #pac-input {
    height: 37px!important;
    border: 1px solid #aaa;
    }
     .select2-selection--single {
        border-radius: 10px!important;
        padding-top: 2%!important;
        height: 37px!important;
        border: 1px solid #aaa;
        color: #737491!important;
    }


    .select2-selection__arrow {
        margin-right: 2%;
    }
        @media (min-width: 992px) and (max-width: 1250px) {
            .itemhome{
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

        .select2 {
            max-width: none !important;
        }

        .shadow {
            box-shadow: 0 0 0.625rem -0.1875rem rgba(0, 0, 0, 0.5) !important;
        }

    </style>
    <script type="text/javascript">
            $( document ).ready(function() {
            $('#myModal').modal('toggle')
        });
    </script>
@endsection
@section('content')
<input id="morado" value="{{ asset('images/hotspot_active.svg')}}" hidden>
<input id="naranja" value="{{ asset('images/hotspot_naranja.svg')}}" hidden>
<input id="rojo" value="{{ asset('images/hotspot_red.svg')}}" hidden>
<input id="verde" value="{{ asset('images/hotspot_verde.svg')}}" hidden>

<div  class="bg-overlay-content pt-8 pb-0 mb-md-0">
        <div class="">

            <div   style="bottom:0%;right:30%;left:30%;  position:absolute; z-index:10;" >

                <div  style="background-color: rgba(255, 255,255);" class=" d-flex flex-column h-100 rounded-lg box-shadow-lg">
                    <div class="row justify-content-center center-block text-center">
                        <div class="justify-content-center">
                            <ul class="legend justify-content-center center-block text-center py-2 my-2 pb-3 ">
                                <li><span class="notawesome"></span> Iniciativas</li>
                                <li><span class="superawesome"></span> Sector Productivo</li>
                                <li><span class="awesome"></span> Ciudadanía</li>
                                <li><span class="kindaawesome"></span> Gestión Pública</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>


            <div class=" sidebar ">
                <div style="top:14%;  position:absolute; z-index:10;" class="p-3">

                    <div style="border-radius: 50%; background-color: rgba(255, 255,255);" class="  d-flex flex-column h-100  box-shadow-lg">
                        <a data-toggle="collapse" href="#mapacabezagrande" aria-expanded="false" class="btn-primary collapsed" style="border-radius:35%;transition: all ease-in-out;">
                                        <i class=" py-3 px-3 mx-1  fa  fa-filter"></i></a>
                    </div>
                </div>
            <div id="mapacabezagrande"  class="collapse" style="top:10%;  position:absolute; z-index:10;" class="w-25">

                    <div  style="background-color: rgba(255, 255,255);" class=" py-3 d-flex flex-column h-100 rounded-lg box-shadow-lg">
                        <div class="row justify-content-center center-block text-center">


                            <form action="{{route('web.mapaproblemas.data')}}" method="POST">
                                        @method('POST')
                                        @csrf

                            <div class="container justify-content-center pr-0">
                                <div class="w-10 center-block text-left  pt-5">
                                    <div class="text-left" style="padding-top: 10px!important; padding-botton:10px !important;">
                                        <a href="#myModal" class="trigger-btn" data-toggle="modal"><strong> <i class="fas fa-exclamation"></i> &nbsp;&nbsp; Mejora la visualización de mapa</strong></a>
                                    </div>

                                <h4 style="color:#531c6a"><a data-toggle="collapse" href="#mapacabezagrande">
                                    <i style="border-color: #FF7F00;color: white;background: #FF7F00;" class="shadow mr-3 btn fa fa-angle-up "></i></a>Filtros
                                </h4>
                                <span class="p-0 font-weight-bold col-12  d-block" style="font-size: 15px;color:#531c6a "  for="to-destination">Ciudad</span>
                                    <input id="pac-input"  class="form-control" placeholder="Buscar" type=""  autocomplete="off" style="width:300px">
                                </div>
                                <h4 class="pt-3  text-center" style="color:#531c6a">
                                  Retos
                                </h4>
                                <hr />
                                      <div class="pl-4 pr-3">


                                            <div class="row mt-2">
                                            <span class="ml-1 font-weight-bold  d-block" style="font-size: 15px;color:#531c6a "  for="to-destination">Tipo de Institución</span>
                                                <select id="tipo_ins" name="tipo_ins]"
                                                        class="form-control custom-select select2"
                                                        data-ajax--url="{{route('api.tipo-institucion.select2')}}"
                                                        data-ajax--data-type="json"
                                                        data-ajax--cache="true"
                                                        data-close-on-select="false"
                                                        data-placeholder="Seleccionar tipo institución"
                                                        style="width:100%;"
                                                        multiple>

                                                </select>
                                            </div>
                                            <div class="row mt-2">

                                            <span class="ml-1 font-weight-bold  d-block" style="font-size: 15px;color:#531c6a "  for="to-destination">ODS</span>
                                                <select id="ods" class="form-control custom-select select2"
                                                        data-ajax--url="{{route('api.ods-categoria.select2')}}"
                                                        data-ajax--data-type="json"
                                                        data-ajax--cache="true"
                                                        data-close-on-select="false"
                                                        style="width:100%;"
                                                        data-placeholder="Seleccionar ODS"
                                                        multiple>
                                                </select>
                                            </div>
                                            <div class="row mt-2">
                                                <span class="ml-1 font-weight-bold  d-block" style="font-size: 15px;color:#531c6a "  for="to-destination">Tipo de Convocatoria</span>
                                                <select id="tipo_conv"
                                                        class="tipo_conv form-control custom-select select2"
                                                        style="width:300px;"
                                                        data-placeholder="Seleccione tipo de convocatoria">
                                                        <option value="0" default>Todas</option>
                                                        @foreach($convocatorias as $conv)
                                                            <option value="{{$conv->id}}">{{$conv->nombre}}</option>
                                                        @endforeach
                                                </select>
                                            </div>
                                            <div class="row mt-2">
                                                <span class=" ml-1 font-weight-bold  d-block" style="font-size: 15px;color:#531c6a " >Convocatorias</span>
                                                <select style="width:100%;" id="conv"
                                                        class="form-control select2 conv"
                                                        data-placeholder="Seleccione convocatorias"
                                                        multiple>
                                                </select>
                                            </div>
                                        </div>

                                <h4 class="pt-3  text-center" style="color:#531c6a">
                                  Iniciativas
                                </h4>
                                <hr />
                                        <div class="pl-4 pr-3">

                                            <div class="row mt-2 ">
                                                <span class="ml-1  mt-1 mb-1  py-md-0 mt-sm-0 mb-sm-0 font-weight-bold  d-block" style="font-size: 15px;color:#531c6a ">ODS</span>
                                            </div>
                                            <div class="row">
                                                <select id="ods_categorias" class="form-control custom-select select2" name="ods_categorias[]"
                                                        data-ajax--url="{{route('api.ods-categoria.select2')}}"
                                                        data-ajax--data-type="json"
                                                        data-ajax--cache="true"
                                                        data-close-on-select="false"
                                                        style="width:100%;"
                                                        data-placeholder="Seleccionar ODS"
                                                        multiple>
                                                </select>
                                            </div>
                                            <div class="row mt-2">
                                            <span class="ml-1 font-weight-bold  d-block" style="font-size: 15px;color:#531c6a "  for="to-destination">Tipo de Institución</span>
                                                <select id="tipo_institucion" name="tipo_institucion[]"
                                                        class="form-control custom-select select2"
                                                        data-ajax--url="{{route('api.tipo-institucion.select2')}}"
                                                        data-ajax--data-type="json"
                                                        data-ajax--cache="true"
                                                        data-close-on-select="false"
                                                        data-placeholder="Seleccionar tipo institución"
                                                        style="width:100%;"
                                                        multiple>

                                                </select>
                                            </div>
                                            <div class="row mt-2">
                                            <span class="ml-1 font-weight-bold  d-block" style="font-size: 15px;color:#531c6a "  for="to-destination">Población Objetivo</span>
                                            <select style="width:100%;" id="tipo_poblacion" name="tipo_poblacion[]"
                                                    class="form-control select2"
                                                    data-ajax--url="{{route('api.tipo-poblacion.select2')}}"
                                                    data-ajax--data-type="json"
                                                    data-ajax--cache="true"
                                                    data-close-on-select="false"
                                                    data-placeholder="Seleccionar población objetivo"
                                                    multiple>
                                            </select>
                                            </div>
                                        </div>


                                        <div class="row justify-content-center mt-2">
                                            <button type="submit" class="font-weight-bold mt-3 btn btn-primary btn-filter-submit" style="border-color:#FF7F00;background: #FF7F00; width: 150px;" >
                                                Aplicar
                                            </button>

                                        </div>
                                        <div class="row justify-content-center mt-2 mb-5">
                                        <div class="d-flex justify-content-center col-md-5">
                                            <button class="font-weight-bold btn btn btn-primary mr-3 export dropdown-toggle"  data-toggle="dropdown">Descargar Datos
                                            <span class="caret"></span>
                                            </button>

                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a type="button" type="button" class="ml-3 export"
                                                        data-action="{{route('web.iniciativas.exportar.csv')}}">
                                                    <i class="fe-download"></i> .CSV
                                                    </a
                                                ></li>

                                                <li><a type="button" class=" ml-3 export"
                                                        data-action="{{route('web.iniciativas.exportar.json')}}">
                                                    <i class="fe-download"></i> .JSON
                                                </a></li>

                                                <li><a type="button" class=" ml-3 export"
                                                        data-action="{{route('web.iniciativas.exportar.excel')}}">
                                                    <i class="fe-download"></i> .XLSX
                                                    </a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </form>

                        </div>
                    </div>
                </div>
                </div>
                <div id="mapacabezapequeño" style="top:10%;  position:absolute; z-index:10;background-color: rgba(255, 255,255, 0.7);" class="d-none w-100 py-3 rounded-lg box-shadow-lg">
                <div class="row justify-content-center center-block text-center">
                    <div class="row justify-content-center center-block text-center">
                        <div class="col-2">
                                <a id="filtros" href="#modal-mapa-filtros" data-toggle="modal" class="btn btn-primary">
                                    <i class="fas fa-filter"></i>
                                </a >
                        </div>
                        <div class="col">
                                <div class="input-group">
                                        <span class="input-group-prepend">
                                            <div class="input-group-text  border-right-0"><i class="fa fa-search"></i></div>
                                        </span>
                                        <input id="pac-input" style=" border-top-right-radius:15px;; border-bottom-right-radius:15px;" class="form-control py-2 border-left-0 border pac-target-input" placeholder="Buscar" type="" value="Buscar" autocomplete="off">
                                        <span class="input-group-append">

                                        </span>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
               <!-- Title + Delete link-->
            <div id="map" style="width: 97%; height: 1150px;">
            </div>


        </div>


            <!-- Content-->

        </div>
    </div>

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


<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBeRzOQr6pAx5Ts1MUHxJRfX6ZjK3ZWJ40&libraries=places&callback=initMap" async defer></script>

<script>

    iniciativas={!! json_encode($iniciativas ->toArray()) !!};
    convocatoria={!! json_encode($convocatorias ->toArray()) !!};
    locations=[];
        problemas=[];

        c=0
        for(j=0;j<convocatoria.length;j++){
            if(convocatoria[j].convocatorias){
                tipo=convocatoria[j].convocatorias;
                for(p=0;p<tipo.length;p++){
                    if(tipo[p].problemas){
                        pro=tipo[p].problemas
                        for(k=0;k<pro.length;k++){

                            info='<div class="">'
                            +'<b size="6" style="color:#4e2561">'+ pro[k].nombre +'</b></br>'
                                + '<b size="5" style="color:#fd972b">Descripción del problema:</b></br>'
                                + '<div class=".scrollable">'+pro[k].problema+'</div></br>'

                                + '<div ">'+"</div></br>"
                                + '<a class="btn btn-primary" target="_blank" href="/gestion-innovacion/problemas/'+tipo[p].id+'"> Ver más </a>'
                                +'</div>'
                            problemas.push([])
                            problemas[c][0]=info;
                            problemas[c][1]=pro[k].latitud;
                            problemas[c][2]=pro[k].longitud;
                            problemas[c][3]=j;
                            c++;
                        }
                    }
                }
            }
        }
    c=0
    for(i=0;i<iniciativas.length;i++){
        /*descripcion=""
        des=iniciativas[0].iniciativa_informacion.descripcion_iniciativa.match(/.{1,15}/g)
        for(z=0;z<des.length;z++){
            descripcion+="<b>"+des[z]+"</b></br>"
        }*/
        txtods=""
        ods=iniciativas[i].iniciativa_ods;
        for(z=0;z<ods.length;z++){
            txtods=ods[z].id+", ";
        }
        txtpobla="";
        pobla=iniciativas[i].iniciativa_poblaciones_completo;
        for(z=0;z<pobla.length;z++){
            txtpobla=pobla[z].descripcion+", ";
        }
        info='<div class="">'
        +'<b size="6" style="color:#4e2561">'+ iniciativas[i].iniciativa_informacion.nombre_iniciativa +'</b></br>'
        + '<b size="5" style="color:#fd972b">Descripción de la iniciativa:</b></br>'
        + '<div class="">'+iniciativas[i].iniciativa_informacion.descripcion_iniciativa+'</div></br>'
        //+'<b size="5" style="color:#fd972b">Componente innovador</b></br>'
        //+ '<div ">'+iniciativas[i].iniciativa_informacion.componente_innovador+"</div></br>"
        //+'<b size="5" style="color:#fd972b">ODS vinculados:</b></br>'
        //+ '<div  ">'+txtods.slice(0, -2)+".</div></br>"
        //+'<b size="5" style="color:#fd972b">Grupo objetivo:</b></br>'
        //+ '<div  ">'+txtpobla.slice(0, -2)+".</div></br>"
        +'</div>'
        for(j=0;j<iniciativas[i].iniciativa_ubicaciones.length;j++){
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
            $('#mapacabezagrande').collapse('show')
            $(document).on('click', '.btn-filter-submit', function () {
                var action = $(this).data('action');
                $('#filter-iniciativas').attr('action',action);
                $('#filter-iniciativas').submit();
                //console.log(action);
            });
        });
    </script>
<script src="{{ asset('js/mapaproblemas.js') }}"></script>

@endsection
