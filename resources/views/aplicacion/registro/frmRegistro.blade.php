@extends('layouts.aplicacion.app')

@section('content')
    <form role="form" action="{{-- --}}" method="POST">
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
                            <h1 class="h3 mb-2 text-nowrap">Información de Usuario</h1>
                            <a class="btn btn-link text-danger font-weight-medium btn-sm mb-2" href="#"><i class="fe-trash-2 font-size-base mr-2"></i>Eliminar cuenta </a>
                        </div>
                        <!-- Content-->
                        <div class="row">
                            <div class="col-sm-8">
                                <div class="form-group">
                                    <label for="account-fn">Nombre</label>
                                    <input class="form-control" type="text" id="account-fn" value="" name="nombre" readonly>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="account-ln">Celular</label>
                                    <input class="form-control" type="text" id="account-ln" value="" name="celular" required>
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="form-group">
                                    <label for="account-email">Email</label>
                                    <input class="form-control" type="email" id="account-email" value="" name="correo" readonly>
                                </div>
                                <div class="form-group">
                                    <span>* Propósito del registro (¿Qué acción voy a realizar?):</span>
                                    <label for="mapear">
                                        <input type="radio" id="mapear" name="proposito" value="1" required>
                                        Mapear una iniciativa
                                    </label>
                                    <label for="compartir">
                                        <input type="radio" id="compartir" name="proposito" value="2" >
                                        Compartir información de recursos (fondos, publicaciones y eventos)
                                    </label>
                                    <label for="participar">
                                        <input type="radio" id="participar" name="proposito" value="3" >
                                        Participar en innovación (identificar problemas, proveer soluciones)
                                    </label>
                                </div>
                                <div class="form-group">
                                    <span>* Tipo de Registro</span>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <label for="tipo_individual">
                                                <input class="tipo_registro" type="radio" id="tipo_individual" name="tipo_registro" value="1" required>
                                                Individual
                                            </label>
                                        </div>
                                        <div class="col-md-3">
                                            <label for="tipo_oganizacion">
                                                <input class="tipo_registro" type="radio" id="tipo_oganizacion" name="tipo_registro" value="2">
                                                Organización
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-7 to-hide d-none">
                                <div class="form-group">
                                    <label for="org_nombre">* Nombre de la organización a la que pertenece</label>
                                    <input class="form-control" type="text" id="org_nombre" value="" name="org_nombre" placeholder="Organización Ecuador" required>
                                </div>
                            </div>
                            <div class="col-md-5 to-hide d-none">
                                <div class="form-group">
                                    <label for="org_web">* Página Web de la Organización</label>
                                    <input class="form-control" type="url" id="org_web" value="" name="org_web" placeholder="www.pagina.com" required>
                                </div>
                            </div>
                            <div class="col-md-7 to-hide d-none">
                                <div class="form-group">
                                    <label for="org_tipo">* Tipo de organización</label>
                                    <select class="form-control" name="org_tipo" required>
                                        <option value="">Seleccione uno</option>
                                        <option value="1">Academia</option>
                                        <option value="2">Sector Privado</option>
                                        <option value="3">Sector Público</option>
                                        <option value="4">Organización de la sociedad civil</option>
                                    </select>
                                </div>
                                <div class="row to-hide d-none">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label for="org_direccion">* Ubicación de su organización</label>
                                            <input class="form-control" type="text" id="org_direccion" value="" name="org_direccion" placeholder="Busqueda de lugar" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="org_canton">Cantón</label>
                                            <input class="form-control" type="text" id="org_canton" value="" name="org_canton">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div id="map" style="width: 100%; height: 350px;"></div>
                                        <input type="hidden" type="text" id="lat" name="org_lat" value="">
                                        <input type="hidden" type="text" id="long" name="org_long" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5 to-hide d-none">
                                <div class="form-group">
                                    <span>Redes Sociales de la Organización</span>
                                    <div class="form-group">
                                        <label for="org_twitter">Twitter</label>
                                        <input class="form-control" type="url" id="org_twitter" value="" name="org_twitter">
                                    </div>
                                    <div class="form-group">
                                        <label for="org_facebook">Facebook</label>
                                        <input class="form-control" type="url" id="org_facebook" value="" name="org_facebook">
                                    </div>
                                    <div class="form-group">
                                        <label for="org_linkedin">LinkedIn</label>
                                        <input class="form-control" type="url" id="org_linkedin" value="" name="org_linkedin">
                                    </div>
                                    <div class="form-group">
                                        <label for="org_instagram">Instagram</label>
                                        <input class="form-control" type="url" id="org_instagram" value="" name="org_instagram">
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <hr class="mt-2 mb-4">
                                <div class="d-flex flex-wrap justify-content-between align-items-center">
                                    <div class="custom-control custom-checkbox d-block">
                                        <input class="custom-control-input" type="checkbox" id="verificada" name="verificada" required>
                                        <label class="custom-control-label" for="verificada">* Yo certifico que esta información es verídica.</label>
                                    </div>
                                    <button class="btn btn-primary mt-3 mt-sm-0" type="submit"><i class="fe-save font-size-lg mr-2"></i>Guardar</button>
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
    var input = document.getElementById('org_direccion');
    jQuery(document).ready( function() {
        initMap();
    })
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
                icon: baseURL + '/images/markers/me_icon.png',
                draggable: dragMarker,
                animation: google.maps.Animation.DROP,
                title: 'Arrastre para seleccionar la ubicación'
            });
            geocoder.geocode({ 'latLng': myLatlng }, function (results, status) {
                if (status == google.maps.GeocoderStatus.OK) {
                    if (results[0]) {
                        jQuery('input[id="lat"],input[id="long"]').show();
                        jQuery('input[id="org_direccion"]').val(results[0].formatted_address);
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
                            jQuery('input[id="org_direccion"]').val(results[0].formatted_address);
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
<script>
    $(document).ready(function(){
        $('.tipo_registro').change(function(){
            if($(this).is(':checked')){
                if($(this).val() == 2){
                    $('.to-hide').removeClass('d-none');
                    $('.to-hide .form-control').attr('required', true);
                }else{
                    $('.to-hide').addClass('d-none');
                    $('.to-hide .form-control').removeAttr('required');

                }
            }
        })
    })

</script>
@endsection
