@extends('layouts.aplicacion.app')

@section('content')
    <form class="needs-validation" novalidate role="form" action="{{ $url }}" method="POST" enctype="multipart/form-data">
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
                        <div class="d-sm-flex align-items-center justify-content-between text-center text-sm-left">
                            <h1 class="h3 mb-2 text-nowrap">Registro de Fondos Concursables</h1>
                            @if ($method == 'PUT')
                            <button type="button" class="btn btn-link text-danger font-weight-medium btn-sm mb-2" data-toggle="modal" data-target="#deleteAlert"><i class="fe-trash-2 font-size-base mr-2"></i>Eliminar fondo</button>
                            @endif
                        </div>
                        <div class="d-sm-flex pb-2 text-left text-muted text-sm-left">
                            <p>Llena los siguientes campos para completar exitosamente tu registro. Recuerda que los campos con asterisco* son obligatorios.</p>
                        </div>
                        <!-- Content-->
                        <div class="row">
                            <input type="hidden" id="fondos_otros" value="0" name="fuente">
                            {{-- <div class="col-12">
                                <h2 class="h4 mb-2 text-nowrap">Procedencia de los fondos</h2>
                            </div>
                            <div class="col-12 row">
                                <div class="col-sm-3">
                                    <div class="custom-control custom-radio">
                                        <input class="custom-control-input fondos" type="radio" id="fondos_propios" value="1" name="fuente" required {{ old('fuente', $fondo->fuente) == '1' ? 'checked' : '' }}>
                                        <label class="custom-control-label" for="fondos_propios">Fondos propios</label>
                                    </div>
                                    @error('fuente')<div class="invalid-feedback d-inline">{{ $message }}</div>@enderror
                                </div>
                                <div class="col-sm-4">
                                    <div class="custom-control custom-radio">
                                        <input class="custom-control-input fondos" type="radio" id="fondos_otros" value="0" name="fuente" {{ old('fuente', $fondo->fuente) == '0' ? 'checked' : '' }}>
                                        <label class="custom-control-label" for="fondos_otros">Fondos de otra organización</label>
                                    </div>
                                    @error('fuente')<div class="invalid-feedback d-inline">{{ $message }}</div>@enderror
                                </div>
                                <div class="row to-hide d-none">
                                    <div class="col mb-4 mt-4">
                                        <hr />
                                    </div>
                                </div>
                            </div> --}}

                            <div class="col-12">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="col-md-12">
                                            <span>Datos de los fondos</span>
                                            <div class="form-group">
                                                <label for="org_nombre">* Nombre de la organización</label>
                                                <input class="form-control @error('organizacion') is-invalid @enderror" type="text" id="org_nombre" value="{{ old('organizacion', $fondo->organizacion) }}" name="organizacion" maxlength="250" placeholder="Nombre de Organización" required>
                                                @error('organizacion')<div class="invalid-feedback d-inline">{{ $message }}</div>@enderror
                                            </div>
                                        </div>
                                        {{-- <div class="col-md-12 to-hide f-propios d-none">
                                            <div class="form-group">
                                                <label for="org_fondo">* Nombre del fondo</label>
                                                <input class="form-control @error('nombre_fondo') is-invalid @enderror" type="text" id="org_fondo" value="{{ old('nombre_fondo', $fondo->nombre_fondo) }}" name="nombre_fondo" maxlength="250" placeholder="Nombre del Fondo" required>
                                                @error('nombre_fondo')<div class="invalid-feedback d-inline">{{ $message }}</div>@enderror
                                            </div>
                                        </div> --}}
                                        {{-- <div class="col-12">
                                            <div class="row">
                                                <div class="col-md-6 to-hide f-propios d-none">
                                                    <div class="form-group">
                                                        <label for="fondo_fecha_inicio">* Fecha de inicio</label>
                                                        <div class="input-group-overlay">
                                                            <input class="form-control appended-form-control cs-date-picker cs-date-range" type="text"  id="fondo_fecha_inicio" value="{{ old('fecha_inicio', $fondo->fecha_inicio) }}"  placeholder="Fecha de inicio" required data-datepicker-options='{"altInput": true, "allowInput": true, "altFormat": "F j, Y", "dateFormat": "Y-m-d", "minDate": "today"}' data-linked-input="#fondo_fecha_cierre">
                                                            <div class="input-group-append-overlay">
                                                                <span class="input-group-text">
                                                                    <i class="fe-calendar"></i>
                                                                </span>
                                                            </div>
                                                            <input type="hidden" name="fecha_inicio" class="cs-date-range-ini" required>
                                                        </div>

                                                        @error('fecha_inicio')<div class="invalid-feedback d-inline">{{ $message }}</div>@enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-6 to-hide f-propios d-none">
                                                    <div class="form-group">
                                                        <label for="fondo_fecha_cierre">* Fecha de cierre</label>
                                                        <div class="input-group-overlay ">
                                                            <input class="form-control appended-form-control cs-date-picker" type="text" data-datepicker-options='{"altInput": true, "allowInput": true, "altFormat": "F j, Y", "dateFormat": "Y-m-d"}' id="fondo_fecha_cierre" value="{{ old('fecha_fin', $fondo->fecha_fin) }}" placeholder="Fecha de finalización" required>
                                                            <div class="input-group-append-overlay">
                                                                <span class="input-group-text">
                                                                    <i class="fe-calendar"></i>
                                                                </span>
                                                            </div>
                                                            <input type="hidden" name="fecha_fin" class="cs-date-range-end" required>
                                                        </div>
                                                        @error('fecha_fin')<div class="invalid-feedback d-inline">{{ $message }}</div>@enderror
                                                    </div>
                                                </div>
                                            </div>
                                        </div> --}}
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="org_web">* Para más información</label>
                                                <input pattern="^(?:http(s)?:\/\/)?[\w.-]+(?:\.[\w\.-]+)+[\w\-\._~:/?#[\]@!\$&'\(\)\*\+\%,;=.]+$" class="form-control @error('info') is-invalid @enderror" type="text" id="org_web" maxlength="250" value="{{ old('info', $fondo->info) }}" name="info" placeholder="Link de la página web oficial del fondo" required>
                                                @error('info')<div class="invalid-feedback d-inline">{{ $message }}</div>@enderror
                                                <div class="invalid-feedback" id='url-error'></div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="org_logo">* Logotipo <small class="text-muted">(máx. 2MB)</small></label>
                                                @php
                                                    if($fondo->imagen){
                                                        $img = asset('storage/fondos/'.$fondo->imagen);
                                                    } else {
                                                        $img = asset('img/logo/thinkia_color_no_slogan.svg');
                                                    }
                                                    @endphp
                                                <input type="file" class="dropify" name="imagen" title="Imagen del fondo" data-default-file="{{$img}}" data-max-file-size="2M" accept="image/gif, image/jpeg, image/png" id="org_logo">
                                                <div class="invalid-feedback" id='org_logo_error'>Inserta una imagen.</div>
                                                @error('avatar')<div class="invalid-feedback d-inline">{{ $message }}</div>@enderror
                                            </div>
                                        </div>
                                    </div>
                                    {{-- <div class="col-12 col-md-4 to-hide d-none">
                                        <div class="form-group">
                                            <span>Redes Sociales</span>
                                            <div class="form-group">
                                                <label for="org_twitter">Twitter</label>
                                                <input pattern="^(?:http(s)?:\/\/)?[\w.-]+(?:\.[\w\.-]+)+[\w\-\._~:/?#[\]@!\$&'\(\)\*\+\%,;=.]+$" class="form-control @error('twitter') is-invalid @enderror" type="url" id="org_twitter" maxlength="250" value="{{ old('twitter', $fondo->twitter) }}" name="twitter" placeholder="Link a tu usuario">
                                                @error('twitter')<div class="invalid-feedback d-inline">{{ $message }}</div>@enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="org_facebook">Facebook</label>
                                                <input pattern="^(?:http(s)?:\/\/)?[\w.-]+(?:\.[\w\.-]+)+[\w\-\._~:/?#[\]@!\$&'\(\)\*\+\%,;=.]+$" class="form-control @error('facebook') is-invalid @enderror" type="url" id="org_facebook" maxlength="250" value="{{ old('facebook', $fondo->facebook) }}" name="facebook" placeholder="Link a tu usuario">
                                                @error('facebook')<div class="invalid-feedback d-inline">{{ $message }}</div>@enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="org_linkedin">LinkedIn</label>
                                                <input pattern="^(?:http(s)?:\/\/)?[\w.-]+(?:\.[\w\.-]+)+[\w\-\._~:/?#[\]@!\$&'\(\)\*\+\%,;=.]+$" class="form-control @error('linkedin') is-invalid @enderror" type="url" id="org_linkedin" maxlength="250" value="{{ old('linkedin', $fondo->linkedin) }}" name="linkedin" placeholder="Link a tu usuario">
                                                @error('linkedin')<div class="invalid-feedback d-inline">{{ $message }}</div>@enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="org_instagram">Instagram</label>
                                                <input pattern="^(?:http(s)?:\/\/)?[\w.-]+(?:\.[\w\.-]+)+[\w\-\._~:/?#[\]@!\$&'\(\)\*\+\%,;=.]+$" class="form-control @error('instagram') is-invalid @enderror" type="url" id="org_instagram" maxlength="250" value="{{ old('instagram', $fondo->instagram) }}" name="instagram" placeholder="Link a tu usuario">
                                                @error('instagram')<div class="invalid-feedback d-inline">{{ $message }}</div>@enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="org_instagram">Youtube</label>
                                                <input pattern="^(?:http(s)?:\/\/)?[\w.-]+(?:\.[\w\.-]+)+[\w\-\._~:/?#[\]@!\$&'\(\)\*\+\%,;=.]+$" class="form-control @error('youtube') is-invalid @enderror" type="url" id="org_youtube" maxlength="250" value="{{ old('youtube', $fondo->youtube) }}" name="youtube" placeholder="Link a tu usuario">
                                                @error('youtube')<div class="invalid-feedback d-inline">{{ $message }}</div>@enderror
                                            </div>
                                        </div>
                                    </div> --}}
                                </div>
                            </div>

                            <div class="col-12">
                                <hr class="my-3">
                                <div class="d-flex flex-wrap justify-content-between align-items-center">
                                    <div class="custom-control custom-checkbox d-block">
                                        <input class="custom-control-input @error('terminos') is-invalid @enderror" type="checkbox" id="verificada" name="terminos" value="1" required {{ old('terminos', $fondo->terminos) == 1 ? 'checked' : "" }}>
                                        <label class="custom-control-label" for="verificada">* Declaro que conozco los términos y condiciones de esta plataforma y autorizo que se publiquen todos los datos registrados en este formulario.</label>
                                        @error('terminos')<div class="invalid-feedback d-inline">{{ $message }}</div>@enderror
                                    </div>
                                    <button class="btn btn-primary mt-3" id='submitbutton' type="submit"><i class="fe-save font-size-lg mr-2"></i>Guardar</button>
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
                <div class="modal-header bg-warning text-white">
                    <h4 class="modal-title text-white"><i class="fe-alert-triangle mr-2"></i> Eliminar Fondo</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="text-white">&times;</span>
                    </button>
                </div>
                <form action="{{ route('app.fondos.delete', $fondo->id) }}" method="POST" role="form">
                    @csrf
                    @method('DELETE')
                    <div class="modal-body">
                        <div class="text-warning">Está seguro que desea eliminar este fondo?</div>
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
    const fondoImg = @json($fondo->imagen);
    $(document).ready(function(){
        $('.fondos').change(function(){
            if($(this).is(':checked')){
                if ($(this).val() >= 0){
                    $('.to-hide').removeClass('d-none');
                    if($(this).val() == 0){
                        $('.f-propios .form-control').removeAttr('required');
                        $('#org_logo').removeAttr('required');
                        $('.f-propios').addClass('d-none');
                    }else{
                        $('.f-propios .form-control').attr('required', true);
                        $('#org_logo').attr('required', true);
                        $('.f-propios').removeClass('d-none');
                    }
                }
            }
            if(fondoImg){
                $('#org_logo').removeAttr('required');
            }
        })
    });

    $('.cs-date-range').on('change', function(){
        let old = $(this).val().split(' a ');
        $('.cs-date-range-ini').val(old[0]);
        $('.cs-date-range-end').val(old[1]);
    });
</script>
<script>
    let fuente = {{ old('fuente', (int)$fondo->fuente) ?? 'null' }};
    $(function(){
        if(fuente != null){
            $('.fondos').trigger('change');
        }
    });
</script>
@endsection
