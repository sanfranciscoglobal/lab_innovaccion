@extends('layouts.aplicacion.app')

@section('header-css')
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet">
<style>
.stepwizard-step p {
    margin-top: 0px;
    color:#666;
}
.stepwizard-row {
    display: table-row;
}
.stepwizard {
    display: table;
    width: 100%;
    position: relative;
}
.stepwizard-step button[disabled] {
    /*opacity: 1 !important;
    filter: alpha(opacity=100) !important;*/
}
.stepwizard .btn.disabled, .stepwizard .btn[disabled], .stepwizard fieldset[disabled] .btn {
    opacity:1 !important;
    color:#bbb;
}
.stepwizard-row:before {
    top: 14px;
    bottom: 0;
    position: absolute;
    content:" ";
    width: 100%;
    height: 1px;
    background-color: #ccc;
    z-index: 0;
}
.stepwizard-step {
    display: table-cell;
    text-align: center;
    position: relative;
}
.stepwizard-step .btn-default:not(.btn-success) {
    background: white;
    border: 1px solid;
}
.stepwizard-step .btn-default.panel-error {
    color: red;
}
.btn-circle {
    width: 30px;
    height: 30px;
    text-align: center;
    padding: 6px 0;
    font-size: 12px;
    line-height: 1.428571429;
    border-radius: 15px;
}
.has-error .form-control,
.has-error .select2-selection{
    border-color: darkred;
}
.has-error input[type="checkbox"]+label,
.has-error input[type="radio"]+label{
    color: darkred!important;
    border: 1px solid darkred;
    padding: 0 10px;
    background: rgba(139, 0, 0, 0.397);
}
</style>
@endsection

@section('content')
    <div class="position-relative bg-purple-gradient" style="height: 480px;">
        <div class="cs-shape cs-shape-bottom cs-shape-slant bg-secondary d-none d-lg-block">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 3000 260">
                <polygon fill="currentColor" points="0,257 0,260 3000,260 3000,0"></polygon>
            </svg>
        </div>
    </div>
    <div class="container bg-overlay-content pb-4 mb-md-3" style="margin-top: -350px;">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="d-flex flex-column h-100 bg-light rounded-lg box-shadow-lg p-4" style="min-height: 380px;">
                    <div class="py-2 p-md-3">
                        <!-- Timeline -->
                        <div class="stepwizard">
                            <div class="stepwizard-row setup-panel">
                                <div class="stepwizard-step col-xs-3">
                                    <a href="#step-1" type="button" class="btn btn-success btn-circle">1</a>
                                    <p><small>Propiedad</small></p>
                                </div>
                                <div class="stepwizard-step col-xs-3">
                                    <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
                                    <p><small>Identificación</small></p>
                                </div>
                                <div class="stepwizard-step col-xs-3">
                                    <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
                                    <p><small>Descripción</small></p>
                                </div>
                                <div class="stepwizard-step col-xs-3">
                                    <a href="#step-4" type="button" class="btn btn-default btn-circle" disabled="disabled">4</a>
                                    <p><small>Contacto</small></p>
                                </div>
                            </div>
                        </div>
                        <!-- END Timeline -->
                        <form role="form" action="{{-- --}}" method="POST" enctype="multipart/form-data">
                            <div class="panel panel-primary setup-content" id="step-1">
                                <div class="panel-heading">
                                     <h3 class="panel-title">¿Cuál es el origen de la iniciativa?</h3>
                                </div>
                                <div class="panel-body">
                                    <div class="form-group">
                                        <input class="iniciativa_propiedad" type="radio" id="iniciativa_propiedad_org" value="1" name="iniciativa_propiedad" required="required">
                                        <label for="iniciativa_propiedad_org">Esta iniciativa pertenece a una organización</label>
                                    </div>
                                    <div class="form-group">
                                        <input class="iniciativa_propiedad" type="radio" id="iniciativa_propiedad_ind" value="2" name="iniciativa_propiedad">
                                        <label for="iniciativa_propiedad_ind">Esta iniciativa es un esfuerzo individual</label>
                                    </div>
                                    <button class="btn btn-primary nextBtn pull-right" type="button">Siguiente</button>
                                </div>
                            </div>

                            <div class="panel panel-primary setup-content" id="step-2">
                                <div class="info-box opc-1 d-none">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Identificación de la organización</h3>
                                    </div>
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-lg-8">
                                                <div class="form-group">
                                                    <label class="control-label">* Nombre de la organización</label>
                                                    <input maxlength="200" type="text" required="required" class="form-control" placeholder="Nombre de la organización" name="iniciativa_org_nombre"/>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label class="control-label">Siglas</label>
                                                    <input type="text" class="form-control" placeholder="Nombre de la organización" name="iniciativa_org_siglas"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-8">
                                                <div class="form-group">
                                                    <label class="control-label">Sitio web</label>
                                                    <input maxlength="200" type="url" class="form-control" placeholder="Ejem. https://www.sitioweb.com" name="iniciativa_org_web"/>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label class="control-label">* Tipo de Institución</label><br />
                                                    <select style="width:100%;" id="iniciativa_org_tipo" class="form-control" name="iniciativa_org_tipo" required="required" multiple>
                                                        <option value="">Seleccione al menos un tipo</option>
                                                        <option value="1">Tipo 1</option>
                                                        <option value="2">Tipo 2</option>
                                                        <option value="3">Tipo 3</option>
                                                        <option value="4">Tipo 4</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label class="control-label">* Enfoque: ¿Qué trabajo hace la organización? (max.100 palabras) </label>
                                                    <textarea class="form-control" name="iniciativa_org_tipo" id="iniciativa_org_tipo" rows="6" required="required"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Company Name</label>
                                            <input maxlength="200" type="text" required="required" class="form-control" placeholder="Enter Company Name" />
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Company Address</label>
                                            <input maxlength="200" type="text" required="required" class="form-control" placeholder="Enter Company Address" />
                                        </div>
                                        <button class="btn btn-primary nextBtn pull-right" type="button">Siguiente</button>
                                    </div>
                                </div>
                                <div class="info-box opc-2 d-none">
                                    <h3 class="text-center">Haga clic en siguiente</h3>
                                    <button class="btn btn-primary nextBtn pull-right" type="button">Siguiente</button>
                                </div>
                            </div>

                            <div class="panel panel-primary setup-content" id="step-3">
                                <div class="panel-heading">
                                     <h3 class="panel-title">Información de la Iniciativa de Innovación</h3>
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label class="control-label">* Nombre de la Iniciativa</label>
                                                <input type="text" required="required" class="form-control" placeholder="Nombre de la Iniciativa" name="iniciativa_iniciativa_nombre"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-4">
                                            <div class="form-group">
                                                <label class="control-label">* Año de inicio</label>
                                                <input type="number" min="1900" max="<?php echo date('Y') ?>" required="required" class="form-control" name="iniciativa_iniciativa_inicio"/>
                                            </div>
                                        </div>
                                        <div class="col-8">
                                            <div class="form-group">
                                                <label class="control-label">* ¿Esta vigente?</label>
                                                <input type="text" required="required" class="form-control" placeholder="Nombre de la Iniciativa" name="iniciativa_iniciativa_nombre"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-7">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label class="control-label">* Población objetivo de la Iniciativa</label>
                                                        <select id="iniciativa_poblacion" class="form-control" name="iniciativa_poblacion" required="required" multiple>
                                                            <option value="">Seleccione al menos un tipo</option>
                                                            <option value="1">Tipo 1</option>
                                                            <option value="2">Tipo 2</option>
                                                            <option value="3">Tipo 3</option>
                                                            <option value="4">Tipo 4</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label class="control-label">* Trabajo de la Iniciativa por ODS</label>
                                                        <select id="iniciativa_ods" class="form-control" name="iniciativa_ods" required="required" multiple>
                                                            <option value="">Seleccione al menos un tipo</option>
                                                            <option value="1">Tipo 1</option>
                                                            <option value="2">Tipo 2</option>
                                                            <option value="3">Tipo 3</option>
                                                            <option value="4">Tipo 4</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label class="control-label">* Componente Innovador</label>
                                                        <input type="text" required="required" class="form-control" placeholder="" name="iniciativa_componente"/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label class="control-label">* Descripción de la Iniciativa (max.100 palabras) </label>
                                                        <textarea class="form-control" name="iniciativa_descripcion" id="iniciativa_descripcion" rows="20" required="required"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-5">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="evento_img">* Logotipo</label>
                                                        <input type="file" onchange="loadFile(event)" accept="image/gif, image/jpeg, image/png" id="evento_img" value="" name="iniciativa_img" required="required">
                                                        <div class="evento-image-placeholder mt-3">
                                                            <div id="evento-image-box" class="necesidad-image-box">
                                                                <img id="output" class="img-fluid" src="http://placehold.it/300x300/?text=Imagen%20Destacada">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <span>Redes Sociales</span>
                                                <div class="form-group">
                                                    <label for="iniciativa_facebook">Facebook</label>
                                                    <input class="form-control" type="url" id="iniciativa_facebook" value="" name="iniciativa_facebook">
                                                </div>
                                                <div class="form-group">
                                                    <label for="iniciativa_instagram">Instagram</label>
                                                    <input class="form-control" type="url" id="iniciativa_instagram" value="" name="iniciativa_instagram">
                                                </div>
                                                <div class="form-group">
                                                    <label for="iniciativa_twitter">Twitter</label>
                                                    <input class="form-control" type="url" id="iniciativa_twitter" value="" name="iniciativa_twitter">
                                                </div>
                                                <div class="form-group">
                                                    <label for="iniciativa_linkedin">LinkedIn</label>
                                                    <input class="form-control" type="url" id="iniciativa_linkedin" value="" name="iniciativa_linkedin">
                                                </div>
                                                <div class="form-group">
                                                    <label for="iniciativa_youtube">Youtube</label>
                                                    <input class="form-control" type="url" id="iniciativa_youtube" value="" name="iniciativa_youtube">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <button class="btn btn-primary nextBtn pull-right" type="button">Siguiente</button>
                                </div>
                            </div>

                            <div class="panel panel-primary setup-content" id="step-4">
                                <div class="panel-heading">
                                     <h3 class="panel-title">Información de contacto</h3>
                                </div>
                                <div class="panel-body">
                                    <div class="contact_container">
                                        <div class="contact_placeholder" data-iterator="0">
                                            <div class="form-group">
                                                <label class="control-label">* Nombre de la pesona encargada de la Iniciativa</label>
                                                <input name="iniciativa_contacto[0][nombre_encargado]" maxlength="200" type="text" required="required" class="form-control" placeholder="Nombre del encargado" />
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label">Teléfono móvil</label>
                                                <input name="iniciativa_contacto[0][telefono]" type="text" required="required" class="form-control" />
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label">* Correo electrónico</label>
                                                <input name="iniciativa_contacto[0][correo]" maxlength="200" type="email" required="required" class="form-control" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="contact_container is-hidden d-none">
                                        <div class="contact_placeholder" data-iterator="0">
                                            <hr />
                                            <p class="text-right mt-2"><span id="remove_contact" class="btn btn-danger"><i class="fe-trash font-size-lg mr-2"></i> Quitar contacto (2)</span></p>
                                            <div class="form-group">
                                                <label class="control-label">* Nombre de la pesona encargada de la Iniciativa (2)</label>
                                                <input name="iniciativa_contacto[1][nombre_encargado]" maxlength="200" type="text" class="form-control" placeholder="Nombre del contacto" />
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label">Teléfono móvil (2)</label>
                                                <input name="iniciativa_contacto[1][telefono]" type="text" class="form-control" />
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label">* Correo electrónico (2)</label>
                                                <input name="iniciativa_contacto[1][correo]" maxlength="200" type="email" class="form-control" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 text-right">
                                            <button id="add_contact" class="btn btn-sm btn-success" type="button"><i class="fe-plus font-size-lg mr-2"></i> Agregar nuevo contacto</button>
                                        </div>
                                    </div>
                                    <hr />
                                    <div class="form-group">
                                        <input class="custom-control-input" type="checkbox" id="verificada" name="iniciativa_verificada" required="required">
                                        <label class="custom-control-label" for="verificada">* Declaro que conozco los términos y condiciones de esta plataforma y autorizo que se publiquen todos los datos registrados en este formulario.</label>
                                    </div>
                                    <button class="btn btn-success submitBtn pull-right" type="submit"><i class="fe-save font-size-lg mr-2"></i> Guardar</button>
                                    <div id="error-message" class="text-danger"></div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('footer')
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBeRzOQr6pAx5Ts1MUHxJRfX6ZjK3ZWJ40&libraries=places&callback=initMap" async defer></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
<script>
    var baseURL = '{{ URL::to('/') }}';
    var input = document.getElementById('evento_direccion');
    $(document).ready(function(){
        $('#iniciativa_org_tipo').select2();
        $('#iniciativa_poblacion').select2();
        $('#iniciativa_ods').select2();

        // Stepper
        var navListItems = $('div.setup-panel div a'),
        allWells = $('.setup-content'),
        allSiguienteBtn = $('.nextBtn');
        submitBtn = $('.submitBtn');

        allWells.hide();

        navListItems.click(function (e) {
            e.preventDefault();
            var $target = $($(this).attr('href')),
                $item = $(this);

            if (!$item.hasClass('disabled')) {
                navListItems.removeClass('btn-success').addClass('btn-default');
                $item.addClass('btn-success');
                allWells.hide();
                $target.show();
                //$target.find('input:eq(0)').focus();
            }
        });

        allSiguienteBtn.click(function () {
            var curStep = $(this).closest(".setup-content"),
                curStepBtn = curStep.attr("id"),
                nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
                curInputs = curStep.find("input,select,textarea"),
                isValid = true,
                encontro = false;

            $(".form-group").removeClass("has-error");
            for (var i = 0; i < curInputs.length; i++) {
                if (!curInputs[i].validity.valid) {
                    isValid = false;
                    $(curInputs[i]).closest(".form-group").addClass("has-error");
                    if(encontro != true){
                        encontro = true;
                        $("html, body").animate({
                            scrollTop: $(curInputs[i]).offset().top - 130
                        }, 500)
                        console.log($(curInputs[i]));
                    }
                }
            }

            if (isValid) nextStepWizard.removeAttr('disabled').trigger('click');
        });

        submitBtn.click(function() {
            var allInputs = $('form').find("input,select,textarea"),
                isValid = true;
            for (var i = 0; i < allInputs.length; i++) {
                if (!allInputs[i].validity.valid) {
                    isValid = false;
                    var panelParent = $(allInputs[i]).closest('.panel').attr('id');
                    $(allInputs[i]).closest(".form-group").addClass("has-error");
                    $('#error-message').html('<strong>Atención!</strong> Por favor revise los pasos anteriores, le falta completar algunos datos.');
                    $('a[href="#'+panelParent+'"]').addClass('panel-error');
                    console.log($(allInputs[i]).closest('.panel').attr('id'))
                }
            }
        });

        $('div.setup-panel div a.btn-success').trigger('click');



        // Cambio de lugar en mapa
        $('.iniciativa_propiedad').change(function(){
            if($(this).is(':checked')){
                if ($(this).val() > 0){
                    $('.info-box').addClass('d-none');
                    $('.info-box.opc-' + $(this).val()).removeClass('d-none');
                    if($(this).val() == 1){
                        $('.opc-1 .form-control').attr('required', true);
                        initMap();
                    }else{
                        $('.opc-1 .form-control').removeAttr('required');
                    }
                }
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

    /* Agregar otro bloque para agregar otra ciudad */
    /*

    */
    $('#add_city').click(function(){

    })

    /* activar otro contacto */
    $('#add_contact').click( function() {
        $('.is-hidden').toggleClass('d-none')
        $(this).toggleClass('d-none');
    })
    $('#remove_contact').click( function() {
        $('.is-hidden').toggleClass('d-none')
        $('#add_contact').toggleClass('d-none');
        $('.is-hidden input').each(function(){
            $(this).val('');
        })
    })
</script>
@endsection
