@extends('layouts.aplicacion.app')

@section('header-css')
    {{--<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet">--}}
    <style>
        .stepwizard-step p {
            margin-top: 0px;
            color: #666;
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
            opacity: 1 !important;
            color: #bbb;
        }

        .stepwizard-row:before {
            top: 14px;
            bottom: 0;
            position: absolute;
            content: " ";
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
        .has-error .select2-selection {
            border-color: darkred;
        }

        .has-error input[type="checkbox"] + label,
        .has-error input[type="radio"] + label {
            color: darkred !important;
            border: 1px solid darkred;
            padding: 0 10px;
            background: rgba(139, 0, 0, 0.397);
        }
    </style>
@endsection

@section('content')
    @include('includes.validation-error-admin')
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
                    {{--<div class="py-2 p-md-3">--}}
                    {{--<a href="{{route('app.iniciativa.index')}}" class="btn btn-primary btn-sm">--}}
                    {{--<i class="fe fe-back"></i>--}}
                    {{--</a>--}}
                    {{--</div>--}}
                    <div class="py-2 p-md-3">
                        <!-- Timeline -->
                        <div class="stepwizard">
                            <div class="stepwizard-row setup-panel">
                                <div class="stepwizard-step col-xs-3">
                                    <a href="#step-1" type="button" class="btn btn-success btn-circle">1</a>
                                    <p>
                                        <small>Propiedad</small>
                                    </p>
                                </div>
                                <div class="stepwizard-step col-xs-3">
                                    <a href="#step-2" type="button" class="btn btn-default btn-circle"
                                       disabled="disabled">2</a>
                                    <p>
                                        <small>Identificación</small>
                                    </p>
                                </div>
                                <div class="stepwizard-step col-xs-3">
                                    <a href="#step-3" type="button" class="btn btn-default btn-circle"
                                       disabled="disabled">3</a>
                                    <p>
                                        <small>Descripción</small>
                                    </p>
                                </div>
                                <div class="stepwizard-step col-xs-3">
                                    <a href="#step-4" type="button" class="btn btn-default btn-circle"
                                       disabled="disabled">4</a>
                                    <p>
                                        <small>Contacto</small>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- END Timeline -->
                        <form action="{{ route("app.iniciativas.store") }}" method="POST" enctype='multipart/form-data'
                              class="needs-validation" novalidate>
                            @csrf
                            @method('POST')

                            <div class="panel panel-primary setup-content" id="step-1">
                                @include('aplicacion.iniciativa._form_origen')
                            </div>

                            <div class="panel panel-primary setup-content" id="step-2">
                                @include('aplicacion.iniciativa._form_actor')
                            </div>

                            <div class="panel panel-primary setup-content" id="step-3">
                                @include('aplicacion.iniciativa._form_descripcion')
                            </div>

                            <div class="panel panel-primary setup-content" id="step-4">
                                @include('aplicacion.iniciativa._form_contacto')
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('footer')
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC9Hl2qksxsEhVC2vJTEM-oMypYDh9UOvQ&libraries=places&callback=initMap" async defer></script>
    <script type="text/javascript">
        //initMap();
        var input = document.getElementById('evento_direccion');
        var selectPath = '{{route('api.canton.select2')}}';
        console.log(selectPath);
        var options = {
            //types: ["locality", "political", "geocode"],
            //types: ['(cities)'],
            componentRestrictions: {country: 'ec'}
        };
        var map,
            myLatlng,
            currentAddressInput,
            autocomplete,
            marker,
            geocoder,
            infowindow,
            Latlng,
            infoService;

        $(document).ready(function () {
            //$('#map').hide();
            //var addressContainers = $('.direccion');
            // Stepper
            var navListItems = $('div.setup-panel div a'),
                allWells = $('.setup-content'),
                allSiguienteBtn = $('.nextBtn'),
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
                console.log(curInputs);
                for (var i = 0; i < curInputs.length; i++) {
                    if (!curInputs[i].validity.valid) {
                        isValid = false;
                        $(curInputs[i]).closest(".form-group").addClass("has-error");
                        if (encontro != true) {
                            encontro = true;
                            $("html, body").animate({
                                scrollTop: $(curInputs[i]).offset().top - 130
                            }, 500)
                        }
                    }
                }

                if (isValid) {
                    nextStepWizard.removeAttr('disabled').trigger('click');
                    $("html, body").animate({
                        scrollTop: 0
                    }, 500)
                }
            });

            submitBtn.click(function () {
                var allInputs = $('form').find("input,select,textarea"),
                    isValid = true;
                for (var i = 0; i < allInputs.length; i++) {
                    if (!allInputs[i].validity.valid) {
                        isValid = false;
                        var panelParent = $(allInputs[i]).closest('.panel').attr('id');
                        $(allInputs[i]).closest(".form-group").addClass("has-error");
                        $('#error-message').html('<strong>Atención!</strong> Por favor revise los pasos anteriores, le falta completar algunos datos.');
                        $('a[href="#' + panelParent + '"]').addClass('panel-error');
                        console.log($(allInputs[i]).closest('.panel').attr('id'))
                    }
                }
            });

            $('div.setup-panel div a.btn-success').trigger('click');


            // Cambio de lugar en mapa
            $('.iniciativa_propiedad').change(function () {
                if ($(this).is(':checked')) {
                    if ($(this).val() > 0) {
                        $('.info-box').addClass('d-none');
                        $('.info-box.opc-' + $(this).val()).removeClass('d-none');
                        if ($(this).val() == 1) {
                            $('.opc-1 .form-control').attr('required', true);
                            //initMap();
                        } else {
                            $('.opc-1 .form-control').removeAttr('required');
                        }
                    }
                }
            });


            /* Agregar otro bloque para agregar otra ciudad */
            $('#add_city').click(function () {
                var addressIterator = document.getElementsByClassName("ubicaciones").length;
                console.log("Hay " + addressIterator + " elementos");

                //var addressIterator = addressContainers.length++;

                var html = '';
                html += '<div class="form-group ubicaciones direccion" data-row="' + addressIterator + '">';
                html += '<div class="row">';
                html += '<div class="col-lg-12">';
                html += '<label class="control-label">Dirección Sucursal</label>';
                html += '<input maxlength="200" type="text" required="required" data-adresscontainer="' + addressIterator + '" class="form-control ubicacion ubicacion-' + addressIterator + '"';
                html += 'placeholder="Escriba la dirección" name="Ubicaciones[' + addressIterator + '][direccion]"';
                html += 'value=""/>';
                html += '<input type="hidden" class="lat lat-' + addressIterator + '" name="Ubicaciones[' + addressIterator + '][latitud]" value="">';
                html += '<input type="hidden" class="long long-' + addressIterator + '" name="Ubicaciones[' + addressIterator + '][longitud]" value="">';
                html += '<input type="hidden" class="localidad localidad-' + addressIterator + '" name="Ubicaciones[' + addressIterator + '][localidad]" value="">';
                html += '<input type="hidden" class="area1 area1-' + addressIterator + '" name="Ubicaciones[' + addressIterator + '][area1]" value="">';
                html += '<input type="hidden" class="area2 area2-' + addressIterator + '" name="Ubicaciones[' + addressIterator + '][area2]" value="">';
                html += '</div>';
                html += '</div></div>';

                $('#sedes-container').append(html);
                var newInput = document.getElementsByClassName('ubicacion-' + addressIterator)[0];
                newInput.focus();
                autocomplete = new google.maps.places.Autocomplete(newInput, options);
                autocomplete.addListener('place_changed', setnewAddress);
            })

            $(document).on('focus', '.ubicacion', function () {
                currentAddressInput = $(this).data('adresscontainer');
                $('#map').show();
            })

        });

        function initMap() {
            navigator.geolocation.getCurrentPosition(function (position) {
                var latUsuario = position.coords.latitude;
                var lonUsuario = position.coords.longitude;
                var zoom = 16;
                var dragMarker = true;
                var placeSearch;
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
                myLatlng = new google.maps.LatLng(latUsuario, lonUsuario);
                geocoder = new google.maps.Geocoder();
                infowindow = new google.maps.InfoWindow();
                autocomplete = new google.maps.places.Autocomplete(input, options);

                map = new google.maps.Map(document.getElementById('map'), {
                    center: myLatlng,
                    zoom: zoom,
                    mapTypeId: google.maps.MapTypeId.ROADMAP
                });
                console.log(map);
                marker = new google.maps.Marker({
                    position: myLatlng,
                    map: map,
                    //icon: baseURL + '/images/markers/me_icon.png',
                    draggable: dragMarker,
                    animation: google.maps.Animation.DROP,
                    title: 'Arrastre para seleccionar la ubicación'
                });
                geocoder.geocode({'latLng': myLatlng}, function (results, status) {
                    if (status == google.maps.GeocoderStatus.OK) {
                        if (results[0]) {
                            //jQuery('input[id="lat"],input[id="long"]').show();
                            jQuery('input.ubicacion-' + currentAddressInput).val(results[0].formatted_address);
                            jQuery('input.lat-' + currentAddressInput).val(marker.getPosition().lat());
                            jQuery('input.long-' + currentAddressInput).val(marker.getPosition().lng());

                            $.each(results[0].address_components, function (index, value) {
                                if (value.types.indexOf('locality') > -1) {
                                    jQuery('input.localidad-' + currentAddressInput).val(value.short_name);
                                }
                                if (value.types.indexOf('administrative_area_level_1') > -1) {
                                    jQuery('input.area1-' + currentAddressInput).val(value.short_name);
                                }
                                if (value.types.indexOf('administrative_area_level_2') > -1) {
                                    jQuery('input.area2-' + currentAddressInput).val(value.short_name);
                                }
                            })
                            infowindow.setContent(results[0].formatted_address);
                            infowindow.open(map, marker);
                        }
                    }
                });

                google.maps.event.addListener(marker, 'dragend', function () {
                    geocoder.geocode({'latLng': marker.getPosition()}, function (results, status) {
                        if (status == google.maps.GeocoderStatus.OK) {
                            if (results[0]) {
                                jQuery('input.ubicacion-' + currentAddressInput).val(results[0].formatted_address);
                                jQuery('input.lat-' + currentAddressInput).val(marker.getPosition().lat());
                                jQuery('input.long-' + currentAddressInput).val(marker.getPosition().lng());
                                $.each(results[0].address_components, function (index, value) {
                                    if (value.types.indexOf('locality') > -1) {
                                        jQuery('input.localidad-' + currentAddressInput).val(value.short_name);
                                    }
                                    if (value.types.indexOf('administrative_area_level_1') > -1) {
                                        jQuery('input.area1-' + currentAddressInput).val(value.short_name);
                                    }
                                    if (value.types.indexOf('administrative_area_level_2') > -1) {
                                        jQuery('input.area2-' + currentAddressInput).val(value.short_name);
                                    }
                                })
                                infowindow.setContent(results[0].formatted_address);
                                infowindow.open(map, marker);
                            }
                        }
                    });
                });

                autocomplete.addListener('place_changed', setnewAddress);

            });
        }

        function setnewAddress() {
            var place = autocomplete.getPlace();
            Latlng = new google.maps.LatLng(place.geometry.location.lat(), place.geometry.location.lng());
            marker.setPosition(Latlng);
            infowindow.setContent(place.formatted_address);
            console.log(place)
            map.panTo(Latlng);
            $.each(place.address_components, function (index, value) {
                if (value.types.indexOf('locality') > -1) {
                    jQuery('input.localidad-' + currentAddressInput).val(value.short_name);
                }
                if (value.types.indexOf('administrative_area_level_1') > -1) {
                    jQuery('input.area1-' + currentAddressInput).val(value.short_name);
                }
                if (value.types.indexOf('administrative_area_level_2') > -1) {
                    jQuery('input.area2-' + currentAddressInput).val(value.short_name);
                }
            })
            jQuery('input.lat-' + currentAddressInput).val(place.geometry.location.lat());
            jQuery('input.long-' + currentAddressInput).val(place.geometry.location.lng());
        }

        /* activar otro contacto */
        $('#add_contact').click(function () {
            $('.is-hidden').toggleClass('d-none')
            $(this).toggleClass('d-none');
        });

        $('#remove_contact').click(function () {
            $('.is-hidden').toggleClass('d-none')
            $('#add_contact').toggleClass('d-none');
            $('.is-hidden input').each(function () {
                $(this).val('');
            })
        })
    </script>
@endsection
