@extends('layouts.aplicacion.app')

@section('content')
    <form class="needs-validation" novalidate role="form" action="{{ $URL }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method($method)
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
                            @if ($method == 'PUT')
                            <button type="button" class="btn btn-link text-danger font-weight-medium btn-sm mb-2" data-toggle="modal" data-target="#deleteAlert"><i class="fe-trash-2 font-size-base mr-2"></i>Eliminar usuario</button>
                            @endif
                        </div>
                        <!-- Content-->
                        <div class="row">
                            <div class="col-sm-8">
                                <div class="form-group">
                                    <label for="account-fn">Nombre</label>
                                    <input class="form-control" type="text" id="account-fn" value="{{ old('name', $user->name) }}" name="name" readonly>
                                    @error('name')<div class="invalid-feedback d-inline">{{ $message }}</div>@enderror
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="account-ln">* Celular</label>
                                    <input class="form-control @error('celular') is-invalid @enderror" type="text" id="account-ln" value="{{ old('celular', $perfil->celular) }}" name="celular" pattern="09(9|8)[0-9]{7}" required>
                                    <span class="muted-text">Ex. 0987654321</span>
                                    @error('celular')<div class="invalid-feedback d-inline">{{ $message }}</div>@enderror
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="form-group">
                                    <label for="account-email">Email</label>
                                    <input class="form-control" type="email" id="account-email" value="{{ old('email', $user->email) }}" name="email" readonly>
                                    @error('email')<div class="invalid-feedback d-inline">{{ $message }}</div>@enderror
                                </div>
                                <div class="form-group">
                                    <span>* Propósito del registro (¿Qué acción voy a realizar?):</span>
                                    <label for="mapear">
                                        <input type="radio" id="mapear" name="proposito" value="1" required {{ old('proposito', $perfil->proposito) == 1 ? 'checked' : '' }}>
                                        Mapear una iniciativa
                                    </label>
                                    <label for="compartir">
                                        <input type="radio" id="compartir" name="proposito" value="2" {{ old('proposito', $perfil->proposito) == 2 ? 'checked' : '' }}>
                                        Compartir información de recursos (fondos, publicaciones y eventos)
                                    </label>
                                    <label for="participar">
                                        <input type="radio" id="participar" name="proposito" value="3" {{ old('proposito', $perfil->proposito) == 3 ? 'checked' : '' }}>
                                        Participar en innovación (identificar problemas, proveer soluciones)
                                    </label>
                                    @error('proposito')<div class="invalid-feedback d-inline">{{ $message }}</div>@enderror
                                </div>
                                <div class="form-group">
                                    <span>* Tipo de Registro</span>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <label for="tipo_individual">
                                                <input class="tipo_registro" type="radio" id="tipo_individual" name="tipo_reg" value="1" required {{ old('tipo_reg', $perfil->tipo_reg) == 1 ? 'checked' : '' }}>
                                                Individual
                                            </label>
                                        </div>
                                        <div class="col-md-3">
                                            <label for="tipo_oganizacion">
                                                <input class="tipo_registro" type="radio" id="tipo_oganizacion" name="tipo_reg" value="0" {{ old('tipo_reg', $perfil->tipo_reg) == '0' ? 'checked' : '' }}>
                                                Organización
                                            </label>
                                        </div>
                                        @error('tipo_reg')<div class="invalid-feedback d-inline">{{ $message }}</div>@enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="org_web">Imágen de Perfil</label>
                                    <input class="form-control dropify @error('avatar') is-invalid @enderror" type="file" id="avatar" name="avatar" title="Avatar del usuario">
                                    @error('avatar')<div class="invalid-feedback d-inline">{{ $message }}</div>@enderror
                                </div>
                            </div>
                            <div class="col-md-7 to-hide d-none">
                                <div class="form-group">
                                    <label for="org_nombre">* Nombre de la organización a la que pertenece</label>
                                    <input class="form-control req @error('organizacion') is-invalid @enderror" type="text" id="org_nombre" value="{{ old('organizacion', $perfil->organizacion) }}" name="organizacion" placeholder="Organización Ecuador" required>
                                    @error('organizacion')<div class="invalid-feedback d-inline">{{ $message }}</div>@enderror
                                </div>
                            </div>
                            <div class="col-md-5 to-hide d-none">
                                <div class="form-group">
                                    <label for="org_web">* Página Web de la Organización</label>
                                    <input class="form-control req @error('web') is-invalid @enderror" type="url" id="org_web" value="{{ old('web', $perfil->web) }}" name="web" placeholder="https://www.sitioweb.com" required>
                                    @error('web')<div class="invalid-feedback d-inline">{{ $message }}</div>@enderror
                                </div>
                            </div>
                            <div class="col-md-7 to-hide d-none">
                                <div class="form-group">
                                    <label for="org_tipo">* Tipo de organización</label>
                                    <select class="form-control req @error('tipo_org') is-invalid @enderror" name="tipo_org" required>
                                        <option value="">Seleccione uno</option>
                                        <option value="1" {{ old('tipo_org', $perfil->tipo_org) == 1 ? 'selected' : '' }}>Academia</option>
                                        <option value="2" {{ old('tipo_org', $perfil->tipo_org) == 2 ? 'selected' : '' }}>Sector Privado</option>
                                        <option value="3" {{ old('tipo_org', $perfil->tipo_org) == 3 ? 'selected' : '' }}>Sector Público</option>
                                        <option value="4" {{ old('tipo_org', $perfil->tipo_org) == 4 ? 'selected' : '' }}>Organización de la sociedad civil</option>
                                    </select>
                                    @error('tipo_org')<div class="invalid-feedback d-inline">{{ $message }}</div>@enderror
                                </div>
                                <div class="row to-hide d-none">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label for="org_direccion">* Ubicación de su organización</label>
                                            <input class="form-control req @error('direccion') is-invalid @enderror" type="text" id="org_direccion" value="{{ old('direccion', $perfil->direccion) }}" name="direccion" placeholder="Busqueda de lugar" required>
                                        </div>
                                        @error('direccion')<div class="invalid-feedback d-inline">{{ $message }}</div>@enderror
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="org_canton" class="control-label">Cantón</label><br>
                                            <select class="form-control select2 @error('canton_id') is-invalid @enderror" style="width:100%" id="org_canton" name="canton_id" data-ajax--url="{{route('api.canton.select2')}}" data-ajax--data-type="json" data-ajax--cache="true" data-close-on-select="false">
                                                @if ($perfil->cantin_id)
                                                <option value="{{ $perfil->canton_id }}" selected>{{ $perfil->canton->nombre }}</option>
                                                @endif
                                            </select>
                                            @error('canton_id')<div class="invalid-feedback d-inline">{{ $message }}</div>@enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div id="map" style="width: 100%; height: 350px;"></div>
                                        <input type="hidden" type="text" id="lat" name="latitud" value="{{ old('latitud', $perfil->latitud) }}">
                                        <input type="hidden" type="text" id="long" name="longitud" value="{{ old('longitud', $perfil->longitud) }}">
                                        @error('latitud', 'longitud')<div class="invalid-feedback d-inline">{{ $message }}</div>@enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5 to-hide d-none">
                                <div class="form-group">
                                    <span>Redes Sociales de la Organización</span>
                                    <div class="form-group">
                                        <label for="org_twitter">Twitter</label>
                                        <input class="form-control @error('twitter') is-invalid @enderror" type="url" id="org_twitter" value="{{ old('twitter', $perfil->twitter) }}" name="twitter" placeholder="Link a tu usuario">
                                        @error('twitter')<div class="invalid-feedback d-inline">{{ $message }}</div>@enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="org_facebook">Facebook</label>
                                        <input class="form-control @error('facebook') is-invalid @enderror" type="url" id="org_facebook" value="{{ old('facebook', $perfil->facebook) }}" name="facebook" placeholder="Link a tu usuario">
                                        @error('facebook')<div class="invalid-feedback d-inline">{{ $message }}</div>@enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="org_linkedin">LinkedIn</label>
                                        <input class="form-control @error('linkedin') is-invalid @enderror" type="url" id="org_linkedin" value="{{ old('linkedin', $perfil->linkedin) }}" name="linkedin" placeholder="Link a tu usuario">
                                        @error('linkedin')<div class="invalid-feedback d-inline">{{ $message }}</div>@enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="org_instagram">Instagram</label>
                                        <input class="form-control @error('instagram') is-invalid @enderror" type="url" id="org_instagram" value="{{ old('instagram', $perfil->instagram) }}" name="instagram" placeholder="Link a tu usuario">
                                        @error('instagram')<div class="invalid-feedback d-inline">{{ $message }}</div>@enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <hr class="mt-2 mb-4">
                                <div class="d-flex flex-wrap justify-content-between align-items-center">
                                    <div class="custom-control custom-checkbox d-block">
                                        <input class="custom-control-input @error('terminos') is-invalid @enderror" type="checkbox" id="verificada" name="terminos" value="1" required {{ old('terminos', $perfil->terminos) == true ? 'checked' : '' }}>
                                        <label class="custom-control-label" for="verificada">* Yo certifico que esta información es verídica.</label>
                                        @error('terminos')<div class="invalid-feedback d-inline">{{ $message }}</div>@enderror
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

    @if ($method == 'PUT')
    <!-- danger modal -->
    <div class="modal fade" id="deleteAlert" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header bg-danger text-white">
                    <h4 class="modal-title text-white"><i class="fe-alert-triangle mr-2"></i> Eliminar Usuario</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="text-white">&times;</span>
                    </button>
                </div>
                <form action="{{ route('app.user.delete', $user->id) }}" method="POST" role="form">
                    @csrf
                    @method('DELETE')
                    <div class="modal-body">
                        <div class="text-danger">Está seguro que desea eliminar este usuario?</div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-primary btn-sm">Eliminar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @endif
@endsection
@section('footer')
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCumBYahoH5olLlie5I9Jw6bNh91vaQly4&libraries=places&callback=initMap" async defer></script>
<script>
    var baseURL = '{{ URL::to('/') }}';
    let user_lat = {{ old('latitud', $perfil->latitud) ?? 'null' }};
    let user_lng = {{ old('longitud', $perfil->longitud) ?? 'null' }};
    var input = document.getElementById('org_direccion');
    jQuery(document).ready( function() {
        initMap();
    })
    function initMap() {
        navigator.geolocation.getCurrentPosition(function(position) {
            var latUsuario = user_lat != null ? user_lat : position.coords.latitude;
            var lonUsuario = user_lng != null ? user_lng : position.coords.longitude;
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
    var canton = {{ old('canton_id', $perfil->canton_id) ?? 'null' }};
    if(canton){
        $('#org_canton option[value="SEL1"]').attr('selected', true);
    }

    $(document).ready(function(){
        $('.tipo_registro').change(function(){
            if($(this).is(':checked')){
                if($(this).val() == 0){
                    $('.to-hide').removeClass('d-none');
                    $('.req').attr('required', true);
                }else{
                    $('.to-hide').addClass('d-none');
                    $('.req').attr('required', false);

                }
            }
        })
    })
</script>
<script>
    let tipo_reg = {{ old('tipo_reg', (int)$perfil->tipo_reg) ?? 'null' }} ;
    $(function(){
        if(tipo_reg != null){
            $('.tipo_registro').trigger('change');
        }
    });
</script>
@endsection
