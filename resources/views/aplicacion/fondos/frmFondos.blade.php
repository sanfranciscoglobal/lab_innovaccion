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
                            <h1 class="h3 mb-2 text-nowrap">Registro de Fondos Concursables</h1>
                            <a class="btn btn-link text-danger font-weight-medium btn-sm mb-2" href="#"><i class="fe-trash-2 font-size-base mr-2"></i>Eliminar cuenta </a>
                        </div>
                        <!-- Content-->
                        <div class="row">
                            <div class="col-12">
                                <h2 class="h4 mb-2 text-nowrap">Procedencia de los fondos</h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-3">
                                <label for="fondos_propios">
                                    <input class="fondos" type="radio" id="fondos_propios" value="1" name="fondos_procedencia" required>
                                    Fondos propios
                                </label>
                            </div>
                            <div class="col-sm-4">
                                <label for="fondos_otros">
                                    <input class="fondos" type="radio" id="fondos_otros" value="2" name="fondos_procedencia">
                                    Fondos de otra organización
                                </label>
                            </div>
                            <div class="col-12">
                                <div class="row to-hide d-none">
                                    <div class="col mb-4 mt-4">
                                        <hr />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="col-md-12 to-hide d-none">
                                            <span>Datos de los fondos</span>
                                            <div class="form-group">
                                                <label for="org_nombre">* Nombre de la organización</label>
                                                <input class="form-control" type="text" id="org_nombre" value="" name="fondo_org_nombre" placeholder="Razón social" required>
                                            </div>
                                        </div>
                                        <div class="col-md-12 to-hide d-none">
                                            <div class="form-group">
                                                <label for="org_nombre">* Nombre del fondo</label>
                                                <input class="form-control" type="text" id="org_nombre" value="" name="fondo_org_nombre" placeholder="Nombre del programa" required>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-md-6 to-hide f-propios d-none">
                                                    <div class="form-group">
                                                        <label for="fondo_fecha_inicio">* Fecha de inicio</label>
                                                        <input class="form-control" type="date" id="fondo_fecha_inicio" value="" name="fondo_fecha_inicio" placeholder="Nombre del programa" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 to-hide f-propios d-none">
                                                    <div class="form-group">
                                                        <label for="fondo_fecha_cierre">* Fecha de cierre</label>
                                                        <input class="form-control" type="date" id="fondo_fecha_cierre" value="" name="fondo_fecha_cierre" placeholder="Nombre del programa" required>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 to-hide d-none">
                                            <div class="form-group">
                                                <label for="org_web">* Para más información</label>
                                                <input class="form-control" type="url" id="org_web" value="" name="fondo_url" placeholder="URL de la página oficial del fondo" required>
                                            </div>
                                        </div>
                                        <div class="col-md-12 to-hide f-propios d-none">
                                            <div class="form-group">
                                                <label for="org_web">* Logotipo</label>
                                                <input class="form-control" type="file" id="org_web" value="" name="fondo_file" title="URL de la página oficial del fondo" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4 to-hide d-none">
                                        <div class="form-group">
                                            <span>Redes Sociales</span>
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
                                </div>
                            </div>
                            <div class="col-12">
                                <hr class="mt-2 mb-4">
                                <div class="d-flex flex-wrap justify-content-between align-items-center">
                                    <div class="custom-control custom-checkbox d-block">
                                        <input class="custom-control-input" type="checkbox" id="verificada" name="verificada" required>
                                        <label class="custom-control-label" for="verificada">* Declaro que conozco los términos y condiciones de esta plataforma y autorizo que se publiquen todos los datos registrados en este formulario.</label>
                                    </div>
                                    <button class="btn btn-primary mt-3 mt-sm-0" type="submit"><i class="fe-save font-size-lg mr-2"></i>Enviar</button>
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
        $('.fondos').change(function(){
            if($(this).is(':checked')){
                if ($(this).val() > 0){
                    $('.to-hide').removeClass('d-none');
                    if($(this).val() == 2){
                        $('.f-propios .form-control').removeAttr('required');
                        $('.f-propios').addClass('d-none');
                    }else{
                        $('.f-propios .form-control').attr('required', true);
                        $('.f-propios').removeClass('d-none');
                    }
                }
            }
        })
    })

</script>
@endsection
