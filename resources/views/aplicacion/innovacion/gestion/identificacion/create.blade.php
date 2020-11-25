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
                                    <a href="#step-1" type="button" class="btn btn-success btn-circle" id="step-1-btn">1</a>
                                    <p>
                                    <small>Problema</small>
                                    </p>
                                </div>
                                <div class="stepwizard-step col-xs-3">
                                    <a href="#step-2" type="button" class="btn btn-default btn-circle"
                                       disabled="disabled" id="step-2-btn">2</a>
                                    <p>
                                        <small>Causas</small>
                                    </p>
                                </div>
                                <div class="stepwizard-step col-xs-3">
                                    <a href="#step-3" type="button" class="btn btn-default btn-circle"
                                       disabled="disabled" id="step-3-btn">3</a>
                                    <p>
                                        <small>Contacto</small>
                                    </p>
                                </div>
                            </div>
                        </div>
                        @if ($method == 'PUT')
                        <div class="d-flex w-100 justify-content-end">
                            <button type="button" class="btn btn-link text-danger font-weight-medium btn-sm mb-2" data-toggle="modal" data-target="#deleteAlert"><i class="fe-trash-2 font-size-base mr-2"></i>Eliminar problema</button>
                        </div>
                        @endif

                        <!-- END Timeline -->
                        <div class="panel panel-primary setup-content" id="step-1">
                            @include('aplicacion.innovacion.gestion.identificacion._form_problema')
                        </div>

                        <div class="panel panel-primary setup-content" id="step-2">
                            @include('aplicacion.innovacion.gestion.identificacion._form_causa')
                        </div>

                        <div class="panel panel-primary setup-content" id="step-3">
                            @include('aplicacion.innovacion.gestion.identificacion._form_contacto')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @if ($method == 'PUT')
    <!-- danger modal -->
    <div class="modal fade" id="deleteAlert" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header bg-warning text-white">
                    <h4 class="modal-title text-white"><i class="fe-alert-triangle mr-2"></i> Eliminar Problema</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="text-white">&times;</span>
                    </button>
                </div>
                <form action="{{ route('app.problemas.delete', $problema->id) }}" method="POST" role="form">
                    @csrf
                    @method("DELETE")
                    <div class="modal-body">
                        <div class="text-warning">Está seguro que desea eliminar este problema?</div>
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
<script>
    //  SET TO NULL IF NO OLD DATA
    let user_lat = {{ old('latitud', $problema->latitud) ?? 'null' }};
    let user_lng = {{ old('longitud', $problema->longitud) ?? 'null' }};
</script>
<script src="{{ asset('js/maps.js') }}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC9Hl2qksxsEhVC2vJTEM-oMypYDh9UOvQ&libraries=places&callback=initMap" async defer></script>

<script>
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

        $('.conditional').change(function(){
                var input = $(this)
                var target = input.data('target')
                if(input.is(':checked') && input.val() == 1){
                    input.parents('.controls-container').find('.message-for-no').addClass('d-none')
                    $('.'+target).removeClass('d-none')
                    $('.'+target+' .form-control').attr('required', 'required')
                    console.log('si');
                }else{
                    input.parents('.controls-container').find('.message-for-no').removeClass('d-none')
                    $('.'+target).addClass('d-none')
                    $('.'+target+' .form-control').removeAttr('required')
                    console.log('no');
                }
            })
        function mostrarOcultarHijo(padre){}
    });
</script>
<script>
    var step = {{ session('step') ?? 'null' }};
    $(function(){
        console.log(step);
        switch (parseInt(step)) { 
            case 2: 
                $('#step-2-btn').click()
                break;
            case 3: 
                $('#step-3-btn').click()
                break;
            default:
                break;
        }
    });
</script>
@endsection
