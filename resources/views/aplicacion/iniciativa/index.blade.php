@extends('aplicacion.escritorio.escritorio')

@section('contenido')
    @include('includes.validation-error-admin')
    <div class="col-lg-9">
        <div class="d-flex flex-column h-100 bg-light rounded-lg box-shadow-lg p-4">
            <div class="py-2 p-md-3">
                <div class="d-sm-flex align-items-center justify-content-between pb-4 text-center text-sm-left">
                    <h1 class="h3 mb-2 text-nowrap">
                        Iniciativas <span class="badge badge-secondary ml-1">{{ $iniciativas->total() }}</span>
                    </h1>
                    <a href="{{route('app.iniciativas.create')}}" class="btn btn-primary">
                        <i class="fe fe-plus mr-1"></i>
                        Crear Iniciativas
                    </a>
                </div>
                {{--<div class="position-relative bg-purple-gradient" style="height: 480px;">--}}
                {{--<div class="cs-shape cs-shape-bottom cs-shape-slant bg-secondary d-none d-lg-block">--}}
                {{--<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 3000 260">--}}
                {{--<polygon fill="currentColor" points="0,257 0,260 3000,260 3000,0"></polygon>--}}
                {{--</svg>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--<div class="container bg-overlay-content pb-4 mb-md-3" style="margin-top: -350px;">--}}
                <div class="row">
                {{--<div class="col-lg-8 offset-lg-2">--}}
                {{--<div class="d-flex flex-column h-100 bg-light rounded-lg box-shadow-lg p-4"--}}
                {{--style="min-height: 380px;">--}}
                {{--<div class="py-2 p-md-3">--}}
                <!-- Review-->
                    {{--<div class="pt-grid-gutter pb-grid-gutter border-bottom text-right">--}}
                    {{--<h3 class="float-left">Iniciativas</h3>--}}
                    {{--<a href="{{route('app.iniciativas.create')}}" class="btn btn-primary btn-sm">--}}
                    {{--<i class="fe fe-plus mr-1"></i>--}}
                    {{--Crear iniciativa--}}
                    {{--</a>--}}
                    {{--</div>--}}

                    @foreach($iniciativas as $iniciativa)
                        <div class="pt-grid-gutter pb-grid-gutter border-bottom">
                            <div class="d-sm-flex align-items-center mb-2 pb-1">
                                <div class="d-flex align-items-center">
                                    {{--<span class="font-size-sm mr-2">--}}
                                    {{--{{$iniciativa->iniciativaInformacion->anio}}--}}
                                    {{--</span>--}}
                                    {{--<h6 class="nav-heading mb-0">--}}
                                    {{--<a href="#">--}}
                                    {{--{{$iniciativa->iniciativaInformacion->nombre_iniciativa}}--}}
                                    {{--</a>--}}
                                    {{--</h6>--}}
                                    <h4 class="nav-heading mb-0">
                                        <a data-toggle="tooltip"
                                           title="Editar"
                                           href="{{route('app.iniciativas.edit',$iniciativa->id)}}"
                                           data-placement="bottom">
                                            <i class="fe-edit mr-2"></i>
                                            {{$iniciativa->iniciativaInformacion->nombre_iniciativa}}
                                        </a>
                                    </h4>
                                </div>
                            </div>
                            <p class="font-size-md text-justify">
                                @if($iniciativa->iniciativaActor)
                                    {!! $iniciativa->iniciativaActor->enfoque !!}
                                @else
                                    {!! $iniciativa->iniciativaInformacion->descripcion_iniciativa !!}
                                @endif

                            </p>
                            <div class="media media-ie-fix align-items-center mr-3">
                                <img class="rounded-circle" width="42"
                                     src="{{asset('storage/iniciativas/'.$iniciativa->iniciativaInformacion->logo)}}"
                                     alt="{{$iniciativa->iniciativaInformacion->logo}}"/>
                                <div class="media-body pl-2 ml-1">
                                    {!! $iniciativa->iniciativa_origen_descripcion !!}
                                    <h6 class="font-size-sm mb-n1">
                                        @if($iniciativa->iniciativaActor)
                                            {!! $iniciativa->iniciativaActor->nombre_organizacion !!}
                                        {{--@else--}}
                                            {{--{!! $iniciativa->iniciativaInformacion->anio !!}--}}
                                        @endif
                                    </h6>
                                    {{--<span class="font-size-xs text-muted">3 days ago</span>--}}

                                </div>

                                {{--<div class="float-right">--}}
                                {{--<a class="btn btn-outline-primary btn-icon" data-toggle="tooltip"--}}
                                {{--title="Editar"--}}
                                {{--href="{{route('app.iniciativas.edit',$iniciativa->id)}}"--}}
                                {{--data-placement="bottom">--}}
                                {{--<i class="fe-edit text-primary"></i>--}}
                                {{--</a>--}}

                                {{--<a href="" data-toggle="modal" data-target="#deleteModal"--}}
                                {{--data-id="{{ $iniciativa->id }}"--}}
                                {{--class="btn btn-outline-danger btn-icon">--}}
                                {{--<i class="fe-trash-2 text-danger"></i>--}}
                                {{--</a>--}}

                                {{--<a type="button" class="btn btn-outline-danger btn-icon" data-toggle="tooltip"--}}
                                {{--title="Eliminar" data-placement="bottom">--}}
                                {{--<i class="fe-trash-2 text-danger"></i>--}}
                                {{--</a>--}}
                                {{--</div>--}}
                            </div>
                        </div>
                    @endforeach
                </div>
                {{ $iniciativas->links() }}
                {{--</div>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--</div>--}}
            </div>
        </div>
    </div>
    @include('includes.forms.modal-delete',['name_route'=>'app.iniciativas.destroy'])
@endsection

@section('footer')
    <script>
        window.deleteModalAjax('deleteModal');
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
