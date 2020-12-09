@extends('layouts.aplicacion.app')

@section('content')
    <form role="form" id='frm' class="needs-validation" novalidate action="{{$url}}" method="POST" enctype="multipart/form-data">
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
                            <h1 class="h3 mb-2 text-nowrap">Registro de Eventos</h1>
                            @if ($method=='PUT')
                                <a class="btn btn-link text-danger font-weight-medium btn-sm mb-2" data-toggle="modal" data-target="#deleteAlert"><i class="fe-trash-2 font-size-base mr-2"></i>Eliminar evento </a>
                            @endif
                        </div>
                        <div class="d-sm-flex align-items-center justify-content-between pb-4 text-center text-sm-left">
                            <span style="color: gray">Llena los siguientes campos para completar exitosamente tu registro. Recuerda que los campos con asterisco* son obligatorios.</span> 
                        </div>
                        
                        <!-- Content-->
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="organizador">* Nombre del Organizador <span style="color: gray">(máx. 250 caracteres)</span></label>
                                    <input class="form-control" type="text" id="organizador" value="{{isset($evento->organizador)?$evento->organizador:old('organizador')}}" maxlength='150' name="organizador" placeholder="Nombre del organizador"  oninvalid="setCustomValidity('Por favor complete este campo.')" onchange="try{setCustomValidity('')}catch(e){}" required>
                                    @error('organizador')<div class="invalid-feedback d-inline">{{ $message }}</div>@enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-7">
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="nombre">* Nombre del Evento <span style="color: gray">(máx. 250 caracteres)</span></label>
                                            <input class="form-control" type="text" id="nombre" value="{{isset($evento->nombre)?$evento->nombre:old('nombre')}}" maxlength='150' name="nombre" placeholder="Nombre del evento"  oninvalid="setCustomValidity('Por favor complete este campo.')" onchange="try{setCustomValidity('')}catch(e){}" required>
                                            @error('nombre')<div class="invalid-feedback d-inline">{{ $message }}</div>@enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                   
                                    <div class="col">
                                        <div class="form-group">
                                            <label class="form-label">* Fecha</label>
                                            <div class="input-group-overlay">
                                            <input class="form-control appended-form-control cs-date-picker js-input" type="text" placeholder="Elija una fecha" data-datepicker-options='{"altInput": true, "allowInput":true, "ariaDateFormat": "F j, Y", "dateFormat": "Y-m-d"}' id="fecha" value="{{isset($evento->fecha)?$evento->fecha:old('fecha')}}" name="fecha"  oninvalid="setCustomValidity('Por favor seleccione una fecha.')" onchange="try{setCustomValidity('')}catch(e){}"  required>
                                            <div class="input-group-append-overlay">
                                                <span class="input-group-text">
                                                <i class="fe-calendar"></i>
                                                </span>
                                            </div>
                                            </div>
                                            @error('fecha')<div class="invalid-feedback d-inline">{{ $message }}</div>@enderror
                                        </div>
                                    </div>
                                    <div class="col">
                                       
                                        <div class="form-group">
                                            <label class="form-label">* Hora</label>
                                            <div class="input-group-overlay">
                                              <input class="form-control appended-form-control cs-date-picker js-input-hora" type="text" placeholder="Elija una hora"  data-datepicker-options='{"enableTime": true,"noCalendar": true,"allowInput":true, "dateFormat": "H:i"}'  id="hora" value="{{isset($evento->hora)?$evento->hora:old('hora')}}" name="hora"  oninvalid="setCustomValidity('Por favor seleccione una hora.')" onchange="try{setCustomValidity('')}catch(e){}" required>
                                              <div class="input-group-append-overlay">
                                                <span class="input-group-text">
                                                  <i class="fe-calendar"></i>
                                                </span>
                                              </div>
                                            </div>
                                            @error('hora')<div class="invalid-feedback d-inline">{{ $message }}</div>@enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label  class="control-label" for="descripcion">Descripción del Evento <span style="color: gray">(mín. 25 palabras)(máx. 100 palabras)</span></label>

                                            <textarea oninput="countWords();" id="descripcion" class="form-control" name="descripcion" placeholder="Describa su evento" required rows="6"
                                            >{{ old('descripcion', $evento->descripcion ?? null) }}</textarea><span style="color: gray" id="count-words"></span>
                                            <div class="invalid-feedback" id='descripcion-error'></div>


                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <div class="custom-control custom-radio">
                                                    <input class="lugar custom-control-input" type="radio" id="evento_virtual" value="0" name="tipo" required>
                                                    <label class="custom-control-label" for="evento_virtual">Virtual</label>
                                                </div>
                                            
                                            </div>
                                            <div class="col-sm-9">
                                                <div class="custom-control custom-radio">
                                                    <input class="lugar custom-control-input" type="radio" id="evento_presencial" value="1" name="tipo" >
                                                    <label class="custom-control-label" for="evento_presencial">Presencial</label>
                                                </div>
                                           
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
                                                        <label for="url">* Link del Evento</label>
                                                        <input pattern="^(?:http(s)?:\/\/)?[\w.-]+(?:\.[\w\.-]+)+[\w\-\._~:/?#[\]@!\$&%'\(\)\*\+,;=.]+$" class="form-control" type="text" id="url" oninput="validateURL('url')" value="{{isset($evento->url)?$evento->url:old('url')}}" name="url" placeholder="Link del Evento" oninvalid="setCustomValidity('Ingrese una dirección web.')" onchange="try{setCustomValidity('')}catch(e){}">
                                                        <div class="invalid-feedback" id='url-error'></div>
                                                    </div>
                                                </div>
                                                {{-- <div class="col-md-12 to-hide e-presencial d-none">
                                                    <div class="row">
                                                        <div class="col">
                                                            <div class="form-group">
                                                                {{-- <label for="canton_id">* Cantón</label>
                                                                <div class= "m-0 p-0 w-100 form-group">
                                                                    
                                                                    <select style="width:100%;" class="form-control custom-select select2" id='canton_id' name='canton'

                                                                    data-ajax--url="{{route('api.canton.select2')}}"
                                                                    data-ajax--data-type="json"
                                                                    data-ajax--data-cache="true"
                                                                    data-allow-clear="true"
                                                                    data-placeholder="Seleccione un Cantón"
                                                                    >
                                                                       
                                                                    </select>
                                                                    <div class="invalid-tooltip">Por favor seleccione un cantón.</div>
                                                                    <div class="valid-tooltip">Bien!</div>
                                                                </div> 
                                                                
                                                            </div>
                                                            @error('canton_id')<div class="invalid-feedback d-inline">{{ $message }}</div>@enderror
                                                        </div>
                                                    </div>
                                                    
                                                    
                                                </div> --}}
                                                
                                            </div>
                                            
                                        </div>
                                        
                                    </div>
                                    
                                </div>
                                
                            </div>
                            <div class="col-lg-5">
                                {{-- <div class="form-group">
                                    
                                    <label for="imagen">* Imagen del Evento <span style="color: gray">(max. 2 Mb)</span></label>

                                    @if ($method=='PUT')
                                        <input type="file" class="dropify" accept="image/gif, image/jpeg, image/png" id="imagen" maxlength='250' name="imagen" size="2000000" data-default-file="{{asset('storage/eventos').'/'.$evento->imagen}}">

                                    @else
                                        <div class="cs-file-drop-area">
                                            <div class="cs-file-drop-icon fe-upload"></div>
                                            <span class="cs-file-drop-message">Arrastre y suelte para subir</span>
                                            
                                                <input type="file" accept="image/gif, image/jpeg, image/png" id="imagen" maxlength='250' name='imagen' size="2000000" class="cs-file-drop-input" required>
                                            
                                            <button type="button" class="cs-file-drop-btn btn btn-primary btn-sm">O seleccione una imagen</button>

                                            <div class="invalid-feedback">Inserta una imagen.</div>
                                        </div>
                                    
                                    @endif
                                    @error('imagen')<div class="invalid-feedback d-inline">{{ $message }}</div>@enderror
                                </div> --}}
                                <div class="form-group">
                                    <label for="imagen">* Imagen del Evento <span style="color: gray">(máx. 2 MB)</span></label>
                                    @if ($method=='PUT')
                                        <input type="file" 
                                            class="form-control dropify" 
                                            accept="image/gif, image/jpeg, image/png" 
                                            id="imagen" maxlength='250' 
                                            name="imagen"  
                                            data-max-file-size="2M" 
                                            data-default-file="{{asset('storage/eventos').'/'.$evento->imagen}}">
                                        
                                    @else
                                        <input type="file" 
                                                class="form-control dropify" 
                                                accept="image/gif, image/jpeg, image/png" 
                                                id="imagen" maxlength='250' 
                                                name="imagen" 
                                                size="2000000"
                                                required
                                                data-max-file-size="2M">

                                    @endif
                                    <div class="invalid-feedback" id='imagen_error'>Inserta una imagen.</div>
                                    <div class="valid-feedback">Bien!</div>
                                    
                                </div>
                                <div class="form-group">
                                    <label for="imagen">Sitio web del evento</label>
                                    <input pattern="^(?:http(s)?:\/\/)?[\w.-]+(?:\.[\w\.-]+)+[\w\-\._~:/?#[\]@!\$&%'\(\)\*\+,;=.]+$" class="form-control" id='sitioweb' name="sitioweb" oninput="validateURL('sitioweb')" placeholder='Sitio web del Evento' value="{{isset($evento->sitioweb)?$evento->sitioweb:''}}" type="text" id="sitoweb">
                                    @error('sitoweb')<div class="invalid-feedback d-inline">{{ $message }}</div>@enderror
                                </div>

                            </div>
                        </div>
                        <div class="row e-presencial">
                            
                            <div class="col-7">
                                <div class="form-group">
                                    <label for="ubicacion">* Ubicación del Evento <i class="fe-info text-primary" style="font-size: 22px;
                                        margin-top: -6px;" type="button" data-toggle="tooltip" data-placement="right"
                                                                                                                        title="En este campo ingresa las calles que corresponden a tu ubicación y selecciona con el ícono la dirección exacta, de ser necesario."></i></label>
                                    <input class="form-control" type="text" id="direccion" maxlength='250' value="{{isset($evento->ubicacion)?$evento->ubicacion:old('ubicacion')}}" name="ubicacion" placeholder="Dirección del evento" oninvalid="setCustomValidity('Por favor complete este campo.')" onchange="try{setCustomValidity('')}catch(e){}" required>
                                </div>
                            </div>
                            
                            <div class="col-12">
                                <div class="form-group">
                                    <div id="map" style="width:100%; height: 350px;"></div>
                                        <input type="hidden" type="text" id="latitud" name="org_lat" value="{{isset($evento->org_lat)?$evento->org_lat:'0'}}">
                                        <input type="hidden" type="text" id="longitud" name="org_long" value="{{isset($evento->org_long)?$evento->org_long:'0'}}">
                                        <input type="hidden" type="text" id="localidad" name="canton">
                                        <input type="hidden" type="text" id="area1" name="area1" >
                                        <input type="hidden" type="text" id="area2" name="area2" >
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <hr class="mt-2 mb-4">
                                <div class="d-flex flex-wrap justify-content-between align-items-center">
                                    <div class="custom-control custom-checkbox d-block">
                                        <input class="custom-control-input" type="checkbox" id="verificada" name="terminos" value="1" oninvalid="setCustomValidity('Por favor marca esta casilla si tu quieres continuar.')" onchange="try{setCustomValidity('')}catch(e){}" required>
                                        <label class="custom-control-label" for="verificada">* Declaro que conozco los términos y condiciones de esta plataforma y autorizo que se publiquen todos los datos registrados en este formulario.</label>
                                        
                                    </div>
                                    
                                    @if ($method=='PUT')
                                        <button class="btn btn-primary mt-3 mt-sm-0" id='submitbutton' type="submit"><i class="fe-save font-size-lg mr-2"></i>Actualizar</button>
                                    @else
                                        <button class="btn btn-primary mt-3 mt-sm-0" id='submitbutton' type="submit"><i class="fe-save font-size-lg mr-2"></i>Guardar</button>
                                    @endif

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </form>
    @if ($method=='PUT')

        <div class="modal fade" id="deleteAlert" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header bg-warning text-white">
                        <h4 class="modal-title text-white"><i class="fe-alert-triangle mr-2"></i> Eliminar Evento</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true" class="text-white">&times;</span>
                            </button>
                    </div>

                    <form action="{{ route('app.eventos.delete', $evento->id) }}" role="form" method="POST">
                        @csrf
                        @method('DELETE')
                        <div class="modal-body">
                            <div class="text-warning">Está seguro que desea eliminar este evento?</div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Cerrar</button>
                            <button type="submit" class="btn btn-warning btn-sm">Eliminar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div> 
    @endif
@endsection
@section('footer')
<script>
    let user_lat = {{ old('org_lat', $evento->org_lat) ?? 'null' }};
    let user_lng = {{ old('org_long', $evento->org_long) ?? 'null' }};
</script>
{{-- <script src="{{ asset('js/maps.js') }}"></script> --}}
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC9Hl2qksxsEhVC2vJTEM-oMypYDh9UOvQ&libraries=places&callback=initMap" async defer></script>

<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.12.0/jquery.validate.js"></script>
<script>
    //contar palabras
    var maxlength=300;
    var maxword=100;
    function countWords(){
        
        let str = document.getElementById("descripcion").value;
        var spaces=str.match(/\S+/g);
        var words=spaces ? spaces.length:0;
    
        document.getElementById("count-words").innerHTML=words+" palabras";
        if (words>=25 && words<=maxword || words==0){
            $("#descripcion-error").removeClass('d-inline');
            $('#descripcion').removeClass('is-invalid');
            $('#submitbutton').removeAttr('disabled');
        }
        else if (words<25){
            $("#descripcion-error").html('Llene el mínimo de palabras necesarias');
            $("#descripcion-error").addClass('d-inline');
            $('#descripcion').addClass('is-invalid');
            $('#submitbutton').attr('disabled','disabled');   
        }
        else{
            $("#descripcion-error").html('Ha sobrepasado el límite de palabras permitido');
            $("#descripcion-error").addClass('d-inline');
            $('#descripcion').addClass('is-invalid');
            $('#submitbutton').attr('disabled','disabled');  
        }
    };
    //
    //funcion url
    function validateURL(idcaja) {
         var $URL= document.getElementById(idcaja).value;
         var pattern=/^(?:http(s)?:\/\/)?[\w.-]+(?:\.[\w\.-]+)+[\w\-\._~:/?#[\]@!\$&'\(\)\*\+\%,;=.]+$(:(\d+))?\/?/i;;

        if(pattern.test($URL) ){

            $('#'+idcaja).removeClass('is-invalid');

            
         } else{

            $('#'+idcaja).addClass('is-invalid');
            //$('#submitbutton').attr('disabled','disabled');
         }
       }

    //

    var baseURL = '{{ URL::to('/') }}';
    $(document).ready(function(){
        countWords();
        $('.lugar').change(function(){

            if($(this).is(':checked')){
                
                if ($(this).val() == 0){
                    $('.e-presencial .form-control').removeAttr('required');
                    $('.e-presencial').addClass('d-none');
                    $('.e-virtual .form-control').attr('required', true);
                    $('.e-virtual').removeClass('d-none');
                    $('#frm').removeClass('was-validated');
                    

                }else{
                    if ($(this).val() == 1){
                        $('.e-virtual .form-control').removeAttr('required');
                        $('.e-virtual').addClass('d-none');
                        $('.e-presencial .form-control').attr('required', true);
                        $('.e-presencial').removeClass('d-none');
                        $('#frm').removeClass('was-validated');
                        $('#url').removeAttr('required');
                        
                    }

                }
            }
        });
        
    });
    var loadFile = function(event) {
        var image = document.getElementById('output');
        image.src = URL.createObjectURL(event.target.files[0]);
    };

</script>

<script>
    $(function(){

        let tipo = {{ old('tipo', (int)$evento->tipo) ?? 'null' }};

        switch(tipo){
            case 0:
                $('#evento_virtual').trigger('click');
                break;
            case 1:
                $('#evento_presencial').trigger('click');
               
                break;
            default:
                break;
        }

    });
  

</script>
<script>
var input = document.getElementById('direccion');

function initMap() {

    var latCurrentPosition = -0.1626484;
    var lonCurrentPosition = -78.4606464;
    var latUsuario = user_lat != null ? user_lat : latCurrentPosition;
    var lonUsuario = user_lng != null ? user_lng : lonCurrentPosition;
    var zoom = 16;
    var dragMarker = true;
    var placeSearch, autocomplete;
    var marker;
    var myLatlng = new google.maps.LatLng(latUsuario, lonUsuario);
    var geocoder = new google.maps.Geocoder();
    var infowindow = new google.maps.InfoWindow();

    var options = {
        componentRestrictions: { country: 'ec' },
    };
    var autocomplete = new google.maps.places.Autocomplete(input, options);

    map = new google.maps.Map(document.getElementById('map'), {
        center: myLatlng,
        zoom: zoom,
        mapTypeId: google.maps.MapTypeId.ROADMAP,
    });
    marker = new google.maps.Marker({
        position: myLatlng,
        map: map,
        draggable: dragMarker,
        animation: google.maps.Animation.DROP,
        title: 'Arrastre para seleccionar la ubicación',
    });
    geocoder.geocode({ latLng: myLatlng }, function(results, status) {
        if (status == google.maps.GeocoderStatus.OK) {
            if (results[0]) {
                jQuery('input[id="latitud"],input[id="longitud"]').show();
                jQuery('input[id="direccion"]').val(results[0].formatted_address);
                jQuery('input[id="latitud"]').val(marker.getPosition().lat());
                jQuery('input[id="longitud"]').val(marker.getPosition().lng());
                $.each(results[0].address_components, function (index, value) {
                        if (value.types.indexOf('locality') > -1) {
                            jQuery('input[id="localidad"]').val(value.short_name);
                        }

                        if (value.types.indexOf('administrative_area_level_1') > -1) {
                            jQuery('input[id="area1"]').val(value.short_name);
                        }

                        if (value.types.indexOf('administrative_area_level_2') > -1) {
                            jQuery('input[id="area2"]').val(value.short_name);
                        }
                        });
                infowindow.setContent(results[0].formatted_address);
                infowindow.open(map, marker);
            }
        }
    });

    google.maps.event.addListener(marker, 'dragend', function() {
        geocoder.geocode({ latLng: marker.getPosition() }, function(results, status) {
            if (status == google.maps.GeocoderStatus.OK) {
                if (results[0]) {
                    jQuery('input[id="direccion"]').val(results[0].formatted_address);
                    jQuery('input[id="latitud"]').val(marker.getPosition().lat());
                    jQuery('input[id="longitud"]').val(marker.getPosition().lng());
                    $.each(results[0].address_components, function (index, value) {
                        if (value.types.indexOf('locality') > -1) {
                            jQuery('input[id="localidad"]').val(value.short_name);
                        }

                        if (value.types.indexOf('administrative_area_level_1') > -1) {
                            jQuery('input[id="area1"]').val(value.short_name);
                        }

                        if (value.types.indexOf('administrative_area_level_2') > -1) {
                            jQuery('input[id="area2"]').val(value.short_name);
                        }
                        });
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
        marker.setPosition(Latlng);
        infowindow.setContent(place.formatted_address);
        map.panTo(Latlng);
        $.each(place.address_components, function (index, value) {
                if (value.types.indexOf('locality') > -1) {
                    jQuery('input[id="localidad"]').val(value.short_name);
                }

                if (value.types.indexOf('administrative_area_level_1') > -1) {
                    jQuery('input[id="area1"]').val(value.short_name);
                }

                if (value.types.indexOf('administrative_area_level_2') > -1) {
                    jQuery('input[id="area2"]').val(value.short_name);
                }
            });
        jQuery('input[id="latitud"]').val(place.geometry.location.lat());
        jQuery('input[id="longitud"]').val(place.geometry.location.lng());
    }
}



</script>

@endsection
