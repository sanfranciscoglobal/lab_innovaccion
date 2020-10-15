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
                        <form action="{{ route("app.iniciativas.update", $model->id) }}" method="POST"
                              enctype='multipart/form-data'
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
    {{--<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBeRzOQr6pAx5Ts1MUHxJRfX6ZjK3ZWJ40&libraries=places&callback=initMap"--}}
    {{--async defer></script>--}}

    {{--<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>--}}
    <script>
        {{--var baseURL = '{{ URL::to('/') }}';--}}
        {{--var input = document.getElementById('evento_direccion');--}}
        $(document).ready(function () {
            // $('#iniciativa_org_tipo').select2();
            // $('#iniciativa_poblacion').select2();
            // $('#iniciativa_ods').select2();

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
                        if (encontro != true) {
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
            })
        });

        // var loadFile = function (event) {
        //     var image = document.getElementById('output');
        //     image.src = URL.createObjectURL(event.target.files[0]);
        // };

        // function initMap() {
        //     navigator.geolocation.getCurrentPosition(function (position) {
        //         var latUsuario = position.coords.latitude;
        //         var lonUsuario = position.coords.longitude;
        //         var zoom = 16;
        //         var dragMarker = true;
        //         var placeSearch, autocomplete;
        //         /*
        //         if (
        //             jQuery('#necesidad_lat').length > 0 &&
        //             jQuery('#necesidad_long').length > 0
        //         ){
        //             latUsuario = jQuery('#necesidad_lat').val();
        //             lonUsuario = jQuery('#necesidad_long').val();
        //             zoom = zoom;
        //             dragMarker = false;
        //         }*/
        //
        //         // var map;
        //         var marker;
        //         var myLatlng = new google.maps.LatLng(latUsuario, lonUsuario);
        //         var geocoder = new google.maps.Geocoder();
        //         var infowindow = new google.maps.InfoWindow();
        //
        //
        //         var options = {
        //             //types: ["locality", "political", "geocode"],
        //             //types: ['(cities)'],
        //             componentRestrictions: {country: 'ec'}
        //         };
        //         var autocomplete = new google.maps.places.Autocomplete(input, options);
        //
        //         map = new google.maps.Map(document.getElementById('map'), {
        //             center: myLatlng,
        //             zoom: zoom,
        //             mapTypeId: google.maps.MapTypeId.ROADMAP
        //         });
        //         marker = new google.maps.Marker({
        //             position: myLatlng,
        //             map: map,
        //             //icon: baseURL + '/images/markers/me_icon.png',
        //             draggable: dragMarker,
        //             animation: google.maps.Animation.DROP,
        //             title: 'Arrastre para seleccionar la ubicación'
        //         });
        //         geocoder.geocode({'latLng': myLatlng}, function (results, status) {
        //             if (status == google.maps.GeocoderStatus.OK) {
        //                 if (results[0]) {
        //                     jQuery('input[id="lat"],input[id="long"]').show();
        //                     jQuery('input[id="evento_direccion"]').val(results[0].formatted_address);
        //                     jQuery('input[id="lat"]').val(marker.getPosition().lat());
        //                     jQuery('input[id="long"]').val(marker.getPosition().lng());
        //                     infowindow.setContent(results[0].formatted_address);
        //                     infowindow.open(map, marker);
        //                 }
        //             }
        //         });
        //
        //         google.maps.event.addListener(marker, 'dragend', function () {
        //             geocoder.geocode({'latLng': marker.getPosition()}, function (results, status) {
        //                 if (status == google.maps.GeocoderStatus.OK) {
        //                     if (results[0]) {
        //                         jQuery('input[id="evento_direccion"]').val(results[0].formatted_address);
        //                         jQuery('input[id="lat"]').val(marker.getPosition().lat());
        //                         jQuery('input[id="long"]').val(marker.getPosition().lng());
        //                         infowindow.setContent(results[0].formatted_address);
        //                         infowindow.open(map, marker);
        //                     }
        //                 }
        //             });
        //         });
        //
        //         autocomplete.addListener('place_changed', setnewAddress);
        //
        //         function setnewAddress() {
        //             var place = autocomplete.getPlace();
        //             console.log(place.formatted_address);
        //             var Latlng = new google.maps.LatLng(place.geometry.location.lat(), place.geometry.location.lng());
        //             marker.setPosition(Latlng);
        //             //infowindow.setContent(place.formatted_address);
        //             //infowindow.hideInfoWindow();
        //             //infowindow.showInfoWindow();
        //             map.panTo(Latlng);
        //             jQuery('input[id="lat"]').val(place.geometry.location.lat());
        //             jQuery('input[id="long"]').val(place.geometry.location.lng());
        //         }
        //     });
        // }

        /* Agregar otro bloque para agregar otra ciudad */

        // $('#add_city').click(function () {
        //
        // })

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
