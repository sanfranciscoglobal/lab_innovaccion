<form method="POST" enctype='multipart/form-data' class="needs-validation" novalidate action="{{ $url3 }}">
@csrf
@method('PUT')
<input type="hidden" name="tipo_convocatoria_id" value="{{ $tipo }}">
<div class="d-sm-flex pb-4 text-left text-muted text-sm-left">
    <p>Llena los siguientes campos para completar exitosamente tu registro. Recuerda que los campos con asterisco* son obligatorios.</p>
</div>
<div class="panel-heading">
    <h3 class="panel-title">Información de contacto</h3>
</div>
<div class="panel-body">
    <div class="row">
        @include('aplicacion.innovacion.gestion.identificacion.tipo-'.$tipo.'.inputs-contacto')
    </div>
    <div class="row">
        <div class="col-sm-12">
            <hr/>
            <div class="form-group custom-control custom-checkbox">
                <input class="custom-control-input" type="checkbox" id="verificada" name="terminos" value="1"
                    required="required" {{ old('terminos', $problema->terminos) == '1' ? 'checked' : '' }}>
                <label class="custom-control-label" for="verificada">* Declaro que conozco los términos y condiciones de esta
                    plataforma y autorizo que se publiquen todos los datos registrados en este formulario.</label>
            </div>
            <button class="btn btn-primary" type="submit" {{$problema->id == null ? 'disabled' : ''}}>
                <i class="fe-save font-size-lg mr-2"></i> Guardar
            </button>
            <div id="error-message" class="text-danger"></div>
        </div>
    </div>
</div>
</form>