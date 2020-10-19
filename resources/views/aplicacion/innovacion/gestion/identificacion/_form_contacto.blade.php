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
                <input class="custom-control-input" type="checkbox" id="verificada" name="iniciativa_verificada"
                    required="required">
                <label class="custom-control-label" for="verificada">* Declaro que conozco los términos y condiciones de esta
                    plataforma y autorizo que se publiquen todos los datos registrados en este formulario.</label>
            </div>
            <button class="btn btn-success submitBtn pull-right" type="submit">
                <i class="fe-save font-size-lg mr-2"></i> Guardar
            </button>
            <div id="error-message" class="text-danger"></div>
        </div>
    </div>
</div>
