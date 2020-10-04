@extends('layouts.aplicacion.app')

@section('content')
    <form role="form" action="{{$url}}" method="POST" enctype="multipart/form-data">
    @csrf
        <div class="position-relative bg-purple-gradient" style="height: 480px;">
        <div class="cs-shape cs-shape-bottom cs-shape-slant bg-secondary d-none d-lg-block">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 3000 260">
                <polygon fill="currentColor" points="0,257 0,260 3000,260 3000,0"></polygon>
            </svg>
        </div>
    </div>
    <div class="container bg-overlay-content pb-4 mb-md-3" style="margin-top: -350px;">
        <div class="row">
            <!-- Content-->
            <div class="col-lg-8 offset-lg-2">
                <div class="d-flex flex-column h-100 bg-light rounded-lg box-shadow-lg p-4">
                    <div class="py-2 p-md-3">
                        <!-- Title + Delete link-->
                        <div class="d-sm-flex align-items-center justify-content-between pb-4 text-center text-sm-left">
                            <h1 class="h3 mb-2 text-nowrap">Registro de Eventos</h1>
                            <a class="btn btn-link text-danger font-weight-medium btn-sm mb-2" href="#"><i class="fe-trash-2 font-size-base mr-2"></i>Eliminar evento </a>
                        </div>
                        <!-- Content-->
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="organizador">* Nombre del Organizador</label>
                                    <input class="form-control" type="text" id="organizador" value="" name="organizador" placeholder="Nombre del organizador" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-7">
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="nombre">* Nombre del Evento</label>
                                            <input class="form-control" type="text" id="nombre" value="" name="nombre" placeholder="Nombre del evento" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="fecha">* Fecha</label>
                                            <input class="form-control" type="date" id="fecha" value="" name="fecha" required>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="hora">* Hora</label>
                                            <input class="form-control" type="time" id="hora" value="" name="hora" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="descripcion">* Descripción del Evento <span style="color: gray">(max. 100 palabras)</span></label>
                                            <textarea id="descripcion" class="form-control" name="descripcion" rows="6" placeholder="Describa su evento" required ></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <label for="evento_virtual">
                                                    <input class="lugar" type="radio" id="evento_virtual" value="0" name="tipo" required>
                                                    Virtual
                                                </label>
                                            </div>
                                            <div class="col-sm-9">
                                                <label for="evento_presencial">
                                                    <input class="lugar" type="radio" id="evento_presencial" value="1" name="tipo">
                                                    Presencial
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="row to-hide d-none">
                                            <div class="col mb-4 mt-4">
                                                <hr />
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="col-md-12 to-hide e-virtual d-none">
                                                    <div class="form-group">
                                                        <label for="url">* URL del Evento</label>
                                                        <input class="form-control" type="url" id="url" value="" name="url" placeholder="Ejem. https://link-del-evento.com?u=lkasdf78ia4l5" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 to-hide e-presencial d-none">
                                                    <div class="row">
                                                        <div class="col">
                                                            <div class="form-group">
                                                                <label for="org_web">* Cantón</label>
                                                                <select class="form-control" name="canton">
                                                                    <option value="">Seleccione un cantón</option>
                                                                    <option value="1">Cantón 1</option>
                                                                    <option value="2">Cantón 2</option>
                                                                    <option value="3">Cantón 3</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col">
                                                            <div class="form-group">
                                                                <label for="ubicacion">* Ubicación del Evento</label>
                                                                <input class="form-control" type="text" id="ubicacion" value="" name="ubicacion" placeholder="Direccion del evento" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col">
                                                            <div id="map" style="width:100%; height: 350px;"></div>
                                                            <input type="hidden" type="text" id="lat" name="org_lat" value="">
                                                            <input type="hidden" type="text" id="long" name="org_long" value="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="form-group">
                                    <label for="imagen">* Images del Evento</label>
                                    <input type="file" onchange="loadFile(event)" accept="image/gif, image/jpeg, image/png" id="imagen" value="" name="imagen" required>
                                    <div class="evento-image-placeholder mt-3">
                                        <div id="evento-image-box" class="necesidad-image-box">
                                            <img id="output" class="img-fluid" src="http://placehold.it/300x300/?text=Imagen%20Destacada">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <hr class="mt-2 mb-4">
                                <div class="d-flex flex-wrap justify-content-between align-items-center">
                                    <div class="custom-control custom-checkbox d-block">
                                        <input class="custom-control-input" type="checkbox" id="verificada" name="terminos" value="1"  required>
                                        <label class="custom-control-label" for="verificada">* Declaro que conozco los términos y condiciones de esta plataforma y autorizo que se publiquen todos los datos registrados en este formulario.</label>
                                    </div>
                                    <button class="btn btn-primary mt-3 mt-sm-0" type="submit"><i class="fe-save font-size-lg mr-2"></i>Enviar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </form>
@endsection
@section('footer')
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBeRzOQr6pAx5Ts1MUHxJRfX6ZjK3ZWJ40&libraries=places&callback=initMap" async defer></script>
<script>
    var baseURL = '{{ URL::to('/') }}';
    var input = document.getElementById('evento_direccion');
    $(document).ready(function(){
        $('.lugar').change(function(){
            if($(this).is(':checked')){

                if ($(this).val() == "0"){
                    //$('.to-hide').removeClass('d-none');
                    $('.e-presencial .form-control').removeAttr('required');
                    $('.e-presencial').addClass('d-none');
                    $('.e-virtual .form-control').attr('required', true);
                    $('.e-virtual').removeClass('d-none');

                    }else{
                        if ($(this).val() == "1"){
                            $('.e-virtual .form-control').removeAttr('required');
                            $('.e-virtual').addClass('d-none');
                            $('.e-presencial .form-control').attr('required', true);
                            $('.e-presencial').removeClass('d-none');
                            initMap();
                        }
                      
                    }
                /*
                if ($(this).val() == 0){
                    //$('.to-hide').removeClass('d-none');
                    if($(this).val() == 1){
                        $('.e-virtual .form-control').removeAttr('required');
                        $('.e-virtual').addClass('d-none');
                        $('.e-presencial .form-control').attr('required', true);
                        $('.e-presencial').removeClass('d-none');
                        initMap();
                    }else{
                        $('.e-presencial .form-control').removeAttr('required');
                        $('.e-presencial').addClass('d-none');
                        $('.e-virtual .form-control').attr('required', true);
                        $('.e-virtual').removeClass('d-none');
                      
                    }
                }*/
            }
        })
    })
    var loadFile = function(event) {
        var image = document.getElementById('output');
        image.src = URL.createObjectURL(event.target.files[0]);
    };
    function initMap() {
        navigator.geolocation.getCurrentPosition(function(position) {
            var latUsuario = position.coords.latitude;
            var lonUsuario = position.coords.longitude;
            var zoom = 16;
            var dragMarker = true;
            var placeSearch, autocomplete;
            /*
            if (
                jQuery('#necesidad_lat').length > 0 &&
                jQuery('#necesidad_long').length > 0
            ){
                latUsuario = jQuery('#necesidad_lat').val();
                lonUsuario = jQuery('#necesidad_long').val();
                zoom = zoom;
                dragMarker = false;
            }*/

            // var map;
            var marker;
            var myLatlng = new google.maps.LatLng(latUsuario, lonUsuario);
            var geocoder = new google.maps.Geocoder();
            var infowindow = new google.maps.InfoWindow();


            var options = {
                //types: ["locality", "political", "geocode"],
                //types: ['(cities)'],
                componentRestrictions: {country: 'ec'}
            };
            var autocomplete = new google.maps.places.Autocomplete(input, options);

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

            google.maps.event.addListener(marker, 'dragend', function () {
                geocoder.geocode({ 'latLng': marker.getPosition() }, function (results, status) {
                    if (status == google.maps.GeocoderStatus.OK) {
                        if (results[0]) {
                            jQuery('input[id="evento_direccion"]').val(results[0].formatted_address);
                            jQuery('input[id="lat"]').val(marker.getPosition().lat());
                            jQuery('input[id="long"]').val(marker.getPosition().lng());
                            infowindow.setContent(results[0].formatted_address);
                            infowindow.open(map, marker);
                        }
                    }
                });
            });

            autocomplete.addListener('place_changed', setnewAddress);

            function setnewAddress() {
                var place = autocomplete.getPlace();
                console.log(place.formatted_address);
                var Latlng = new google.maps.LatLng(place.geometry.location.lat(), place.geometry.location.lng());
                marker.setPosition( Latlng );
                //infowindow.setContent(place.formatted_address);
                //infowindow.hideInfoWindow();
                //infowindow.showInfoWindow();
                map.panTo( Latlng );
                jQuery('input[id="lat"]').val(place.geometry.location.lat());
                jQuery('input[id="long"]').val(place.geometry.location.lng());
            }
        });
    }
</script>
@endsection
