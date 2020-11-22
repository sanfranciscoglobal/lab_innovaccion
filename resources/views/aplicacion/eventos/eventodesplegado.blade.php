@extends('layouts.aplicacion.app')

@section('content')
    <section class="container my-lg-2 pt-5 pb-lg-5">
        <div class="row align-items-center">
            <div class="col-lg-5 py-3 py-lg-0 mt-lg-5">
                <h1 class="mt-5">{{$evento->nombre}}</h1>
                <div class="py-3">
                    <p style="margin-bottom: 0">{{date('d M, Y', strtotime( $evento->fecha))}} <br>
                        {{date('H\Hi', strtotime( $evento->hora))}}</p>

                </div>
            </div>
            <div class="col py-3 py-lg-0 mt-lg-5"><img src="{{ asset('img/layout/home/laboratorio-side-bkg.png') }}" alt="Side banner"></div>
        </div>
    </section>
    <section class="container bg-secondary">
        @php
            $imagen1 = asset('img/logo/thinkia_color.svg');
            if(isset($evento->user->perfil_id)){
                if(isset($evento->user->perfil->avatar)){
                    $imagen1 = asset('storage/perfil/'.$evento->user->perfil->avatar);
                }
            }
        @endphp
        <div class="card mb-5">
            <div class="card-body">
                <div class="px-0 px-xl-2 pt-0" >
                    <a class="media meta-link font-size-sm align-items-center">
                        <img  width="42" src="{{ $imagen1 }}"
                            alt="Sanomi Smith" />
                        <div class="media-body pl-2 ml-1 mt-n1" ><h3 class="font-weight-semibold" style=" padding-top:15px;margin-bottom: 0">{{$evento->nombre}}</h3>
                                <p class="font-weight-semibold ml-1" style="margin-bottom: 0; color: #a13d8f">{{$evento->organizador}}</p></div>
                    </a>
                    <div class="mt-3 font-weight-bold text-primary">
                        <p style="margin-bottom: 0"><small >{{date('d M, Y', strtotime( $evento->fecha))}}</small></p>
                        <p><small >{{date('H\Hi', strtotime( $evento->hora))}}</small></p>
                    </div>
                </div>
                <div class="px-2 px-xl-2 pt-0" >
                    <p>{{$evento->descripcion}}</p>
                    <span class="font-weight-bold e-presencial text-primary"><i class="fe-map-pin font-size-xl mr-2"></i> Ubicación</span>
                    <span class="font-weight-bold e-virtual text-primary"><i class="fe-link font-size-xl mr-2"></i> Link del Evento</span>
                </div>
                
            </div>

            <div class="card-footer text-center font-size-sm text-muted">

                <div class="row e-virtual">
                    <div class="col">
                        
                        <div class="form-group">
                            <a Target="_blank" href="{{$evento->url}}">
                            <input  disabled class="form-control bx-label" style="cursor: pointer; background:white" type="text" value="{{isset($evento->url)?$evento->url:null}}">
                            </a>
                        </div>
                    </div>
                </div>

                <div class="row e-presencial">
                    <div class="col">
                        <div class="form-group">
                            <label  class="form-control" style="text-align: left">{{isset($evento->ubicacion)?$evento->ubicacion:old('ubicacion')}}</label>
                            </div>
                    </div>
                </div>
                <div class="row  e-presencial ">
                    <div class="col">
                        <div id="map" style="width:100%; height: 350px;"></div>
                        <input type="hidden" type="text" id="lat" name="org_lat" value="{{isset($evento->org_lat)?$evento->org_lat:'0'}}">
                        <input type="hidden" type="text" id="long" name="org_long" value="{{isset($evento->org_long)?$evento->org_long:'0'}}">
                    </div>
                </div>
                <div class="row" style="margin-top:3%;padding-left:50%;">
                    <a href="{{route('eventos')}}" class="btn btn-sm btn-primary">Cerrar</a>
                </div>
                
            </div>
            
        </div>
       
    </section>

@endsection
@section('footer')
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC9Hl2qksxsEhVC2vJTEM-oMypYDh9UOvQ&libraries=places&callback" async defer></script>
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
    var baseURL = '{{ URL::to('/') }}';
    function initMap() {
        navigator.geolocation.getCurrentPosition(function(position) {

            var latUsuario = 0;
            var lonUsuario = 0;
            var zoom = 16;
            var dragMarker = true;
            var placeSearch, autocomplete;

            if (
                jQuery('input[id="lat"]').val() != 0 &&
                jQuery('input[id="long"]').val()  != 0
            ){

                latUsuario = jQuery('#lat').val();
                lonUsuario = jQuery('#long').val();
                zoom = zoom;
                dragMarker = false;
            }

            // var map;
            var marker;
            var myLatlng = new google.maps.LatLng(latUsuario, lonUsuario);
            var geocoder = new google.maps.Geocoder();
            var infowindow = new google.maps.InfoWindow();

            var options = {

                componentRestrictions: {country: 'ec'}
            };

            map = new google.maps.Map(document.getElementById('map'), {
                center: myLatlng,
                zoom: zoom,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            });
            marker = new google.maps.Marker({
                position: myLatlng,
                map: map,
                //icon: baseURL + '/images/markers/me_icon.png',
                draggable: dragMarker,
                animation: google.maps.Animation.DROP,
                title: 'Arrastre para seleccionar la ubicación'
            });
            geocoder.geocode({ 'latLng': myLatlng }, function (results, status) {
                if (status == google.maps.GeocoderStatus.OK) {
                    if (results[0]) {
                        jQuery('input[id="lat"],input[id="long"]').show();
                        jQuery('input[id="evento_direccion"]').val(results[0].formatted_address);
                        jQuery('input[id="lat"]').val(marker.getPosition().lat());
                        jQuery('input[id="long"]').val(marker.getPosition().lng());
                        infowindow.setContent(results[0].formatted_address);
                        infowindow.open(map, marker);
                    }
                }
            });

        });
    };


    $(function(){

        let tipo = {{ old('tipo', (int)$evento->tipo) ?? 'null' }};
        if (tipo==0){
            $('.e-presencial').addClass('d-none');
            
        }
        else{
            initMap();
            $('.e-virtual').addClass('d-none');
            
        }
    });

</script>
    
@endsection