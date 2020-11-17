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
                            @method('PUT')
                            <div class="row">
                                <div class="col-12 text-right py-2">
                                    <a href="" data-toggle="modal" data-target="#deleteModal"
                                       data-id="{{ $model->id }}"
                                       class="nav-link-style text-danger">
                                        <i class="fe-trash-2 mr-2"></i>
                                        Eliminar Iniciativa
                                    </a>
                                    {{--<a href="{{route('app.iniciativas.destroy',$model->id)}}" class="text-danger">
                                    <i class="fe-trash-2 mr-2"></i>Eliminar Iniciativa</a>
                                    --}}
                                </div>
                            </div>

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
    @include('includes.forms.modal-delete',['name_route'=>'app.iniciativas.destroy'])
@endsection

@section('footer')
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC9Hl2qksxsEhVC2vJTEM-oMypYDh9UOvQ&libraries=places&callback=window.initMap"
            async defer></script>

    <script>
        window.deleteModalAjax('deleteModal');
        //var input = document.getElementById('evento_direccion');

        $(document).ready(function () {
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


            iniciativaOrigen();

            $(document).on('change', '.iniciativa_propiedad', function () {
                iniciativaOrigen();
            });

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

            /* Agregar otro bloque para agregar otra ciudad */
            $('#add_city').click(function () {
                window.addSearchMap();
            });

            $(".ubicacion").each(function (index) {
                var input = ($(this))[0];
                setTimeout(function () {
                    window.currentAddressInput = $(input).data('adresscontainer');
                    window.initSearchMap(input);
                }, 1000);

            });

            $(document).on('focus', '.ubicacion', function () {
                window.currentAddressInput = $(this).data('adresscontainer');
                $('#map').show();
            })
        });

        function iniciativaOrigen() {
            $('.iniciativa_propiedad').each(function (element) {
                if ($(this).is(':checked')) {
                    if ($(this).val() > 0) {
                        $('.info-box').addClass('d-none');
                        $('.info-box.opc-' + $(this).val()).removeClass('d-none');

                        if ($(this).val() == 1) {
                            $('.opc-1 .form-control').attr('required', true);
                        } else {
                            $('.opc-1 .form-control').removeAttr('required');
                        }
                    }
                }
            });
        }
    </script>
@endsection