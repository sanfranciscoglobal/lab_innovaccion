@extends('layouts.aplicacion.app')
@section('header-css')
    <style>
       
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
<input id="marker1" value="{{ asset('images/hotspot.svg')}}" hidden>
    <section class="container my-lg-2 pt-5 pb-lg-3">
        <div class="row align-items-center">
            <div class="col-lg-6 py-4  mt-lg-5">
                <h1 class="mt-5">Mapa de iniciativas</h1>
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
            <div class="d-sm-none d-lg-block  col-sm-0 col-md-6 py-8 bg-size-cover order-md-2 overflow-hidden " style="background-image: url('{{ asset('images/banner_mapa_iniciativas.png') }}');border-radius: 150px 0 0 150px;">
            </div>
        </div>
    </section>
    
    <section class="searchbar-container bg-secondary">
        @include('web.iniciativas.mapa')
    </section>

    
       
@endsection

@section('scripts')


<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBeRzOQr6pAx5Ts1MUHxJRfX6ZjK3ZWJ40&libraries=places&callback=initMap" async defer></script>

<script>

    iniciativas={!! json_encode($iniciativas ->toArray()) !!};
    
    locations=[]
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
<script src="{{ asset('js/mapacompleto.js') }}"></script>

@endsection