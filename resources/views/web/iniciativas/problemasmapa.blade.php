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
   .sidebar.active {
        height: 100%; /* 100% Full-height */
        width: 0; /* 0 width - change this with JavaScript */
        position: fixed; /* Stay in place */
        z-index: 1; /* Stay on top */
        top: 0;
        left: 0;
        background-color: #111; /* Black*/
        overflow-x: hidden; /* Disable horizontal scroll */
        padding-top: 60px; /* Place content 60px from the top */
        transition: 0.5s; /* 0.5 second transition effect to slide in the sidebar */
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

    </style>
@endsection
@section('content')
<input id="marker" value="{{ asset('images/hotspot_active.svg')}}" hidden>
<input id="marker1" value="{{ asset('images/hotspot_naranja.svg')}}" hidden>
<div  class="bg-overlay-content pb-2 mb-md-3">
        <div class="">
            <div id="mapacabezagrande" class="sidebar" style="top:10%;  position:absolute; z-index:10;" class="w-25">
                
                    <div  style="background-color: rgba(255, 255,255);" class=" py-3 d-flex flex-column h-100 rounded-lg box-shadow-lg">
                        <div class="row justify-content-center center-block text-center">
                        
                            
                            <form action="{{route('web.iniciativas.data')}}" method="POST">
                                        @method('POST')
                                        @csrf
                            
                            <div class="container justify-content-center">
                                <div class="w-10 center-block text-left  pt-5">
                                <h2 style="color:#531c6a"><a data-toggle="collapse" href="#mapacabezagrande">
                                    <i class="shadow px-3 mx-1 btn fa fa-angle-left "></i>Filtros</a>
                                </h2> 
                                <h4 class="pt-3" style="color:#531c6a"><a data-toggle="collapse" href="#mapacabezagrande">
                                  Problemas
                                </h4> 
                                            <div class="row mt-2 mb-5">
                                            <span class="ml-3 font-weight-bold  d-block" style="font-size: 15px;color:#531c6a "  for="to-destination">Ciudad</span>
                                                <input id="pac-input"  class="form-control" placeholder="Buscar" type="" value="Buscar" autocomplete="off">
                                            </div>
                                            <div class="row my-5">
                                                <span class="ml-3 font-weight-bold  d-block" style="font-size: 15px;color:#531c6a "  for="to-destination">Tipo de Convocatoria</span>
                                                <select id="tipo_conv"
                                                        class="form-control custom-select select2"
                                                        style="width:100%;"
                                                        data-placeholder="Seleccione tipo de convocatoria">
                                                        @foreach($convocatorias as $conv)
                                                            <option value="{{$conv->id}}">{{$conv->nombre}}</option>
                                                        @endforeach
                                                </select>
                                            </div>
                                            <div class="row my-5">
                                                <span class=" ml-3 font-weight-bold  d-block" style="font-size: 15px;color:#531c6a " >Convocatorias</span>
                                                <select style="width:100%;" id="conv"
                                                        class="form-control select2"
                                                        data-placeholder="Seleccione convocatorias"
                                                        multiple>
                                                </select>
                                            </div>
                                <h4 class="pt-3" style="color:#531c6a"><a data-toggle="collapse" href="#mapacabezagrande">
                                  Iniciativas
                                </h4> 
                                            <div class="row mt-2 mb-5">
                                                <span class="ml-3 mt-1 mb-1  py-md-0 mt-sm-0 mb-sm-0 font-weight-bold  d-block" style="font-size: 15px;color:#531c6a ">ODS</span>
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
                                           
                                       
                                            
                                        <div class="row justify-content-center">
                                            <button type="submit" class="font-weight-bold mt-3 btn btn-primary btn-filter-submit" style="border-color:#FF7F00;background: #FF7F00; width: 150px;" >
                                                Aplicar
                                            </button>

                                        </div>
                                        <div class="row py-justify-content-center px-4 py-3">
                                            <button style="width: 220px;" type="button"
                                                    class="font-weight-bold btn btn-primary "
                                                    data-action="{{route('web.iniciativas.exportar-excel')}}">
                                                Descargar datos
                                            </button>
                                        </div>
                                </div>
                            </div>
                            </form>

                        </div>
                    </div>
                </div>
                        <!-- Title + Delete link-->
                <div id="map" style="width: 97%; height: 950px;">
                </div>  

                  
               
            </div>
                          
                      
            <!-- Content-->
            
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
                            + '<b size="5" style="color:#fd972b">Descripción del problema:</b></br>'
                            + '<div class=".scrollable">'+pro[k].problema+'</div></br>'
                            +'<b size="5" style="color:#fd972b">Sector productivo</b></br>'
                            + '<div ">'+"</div></br>"
                            + '<a class="btn btn-primary"> Ver más </a>' 
                            +'</div>'
                        problemas.push([])
                        problemas[c][0]=info;
                        problemas[c][1]=pro[k].latitud;
                        problemas[c][2]=pro[k].longitud;
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
        + '<div class="">'+iniciativas[0].iniciativa_informacion.descripcion_iniciativa+'</div></br>'
        +'<b size="5" style="color:#fd972b">Componente innovador</b></br>'
        + '<div ">'+iniciativas[i].iniciativa_informacion.componente_innovador+"</div></br>"
        +'<b size="5" style="color:#fd972b">ODS vinculados:</b></br>' 
        + '<div  ">'+txtods.slice(0, -2)+".</div></br>"
        +'<b size="5" style="color:#fd972b">Grupo objetivo:</b></br>'
        + '<div  ">'+txtpobla.slice(0, -2)+".</div></br>" 
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