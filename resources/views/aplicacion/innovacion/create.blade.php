@extends('layouts.aplicacion.app')

@section('content')
    <form role="form" action="{{-- --}}" method="POST">
    <div class="position-relative bg-purple-gradient" style="height: 480px;">
        <div class="cs-shape cs-shape-bottom cs-shape-slant bg-secondary  d-lg-block">
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
                            <h1 class="h3 mb-2 text-nowrap">Registro de Innivación</h1>
                            <a class="btn btn-link text-danger font-weight-medium btn-sm mb-2" href="#"><i class="fe-trash-2 font-size-base mr-2"></i>Eliminar fondo </a>
                        </div>
                        <!-- Content-->
                        <div class="row">
                            <div class="col-12">
                                <h2 class="h4 mb-2 text-nowrap">Tipo de Convocatoria</h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-3">
                                <label for="tipo_abierta">
                                    <input class="innovacion_tipo" type="radio" id="tipo_abierta" value="1" name="tipo_innovacion" required>
                                    Innovación Abierta
                                </label>
                            </div>
                            <div class="col-sm-3">
                                <label for="tipo_social">
                                    <input class="innovacion_tipo" type="radio" id="tipo_social" value="2" name="tipo_innovacion">
                                    Innovación Social
                                </label>
                            </div>
                            <div class="col-sm-3">
                                <label for="tipo_publica">
                                    <input class="innovacion_tipo" type="radio" id="tipo_publica" value="3" name="tipo_innovacion">
                                    Innovación Pública
                                </label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mb-4 mt-4">
                                <hr />
                            </div>
                        </div>
                        <div id="control-1" class="row controls d-none">
                            @include('aplicacion.innovacion._form_abierta')
                        </div>
                        <div id="control-2" class="row controls d-none">
                            @include('aplicacion.innovacion._form_social')
                        </div>
                        <div id="control-3" class="row controls d-none">
                            @include('aplicacion.innovacion._form_publica')
                        </div>
                        <div class="row send-button d-none">
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="innovacion_fecha_inicio">* Fecha de inicio</label>
                                            <input class="form-control" type="date" id="innovacion_fecha_inicio" min="<?php echo date('d/m/Y'); ?>" value="" name="innovacion_fecha_inicio" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="innovacion_fecha_cierre">* Fecha de fin</label>
                                            <input class="form-control" type="date" id="innovacion_fecha_cierre" min="<?php echo date('d/m/Y'); ?>" value="" name="innovacion_fecha_cierre" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label class="control-label">* Descripción de la Convocatoria (max.100 palabras) </label>
                                    <textarea class="form-control ck-editor" name="descripcion_convocatoria" id="descripcion_convocatoria"
                                              rows="10" required="required"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="innovacion_imagen">* Imagen</label>
                                    <input type="file" class="dropify" name="innovacion_imagen" id="innovacion_imagen" required
                                            {{--data-default-file="http://placehold.it/300x300/?text=Imagen%20Destacada"--}}>
                                </div>
                            </div>
                            <div class="col-12">
                                <hr class="mt-2 mb-4">
                                <div class="d-flex flex-wrap justify-content-between align-items-center">
                                    <div class="custom-control custom-checkbox d-block">
                                        <input class="custom-control-input" type="checkbox" id="verificada" name="verificada" required>
                                        <label class="custom-control-label" for="verificada">* Declaro que conozco los términos y condiciones de esta plataforma y autorizo que se publiquen todos los datos registrados en este formulario.</label>
                                    </div>
                                    <button class="btn btn-primary mt-3 mt-sm-0" type="submit"><i class="fe-save font-size-lg mr-2"></i> Publicar</button>
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
<script>
    $(document).ready(function(){

        $('.innovacion_tipo').change(function(){
            if($(this).is(':checked')){
                if ($(this).val() > 0){
                    $('.send-button').removeClass('d-none');
                    $('.controls').addClass('d-none');
                    $('#control-'+ $(this).val()).removeClass('d-none');
                    $('.controls .form-control').removeAttr('required');
                    $('#control-'+ $(this).val()+' .form-control').attr('required', true);
                }
            }
        })

    })

</script>
@endsection
