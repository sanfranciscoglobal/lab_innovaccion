<form method="POST" enctype='multipart/form-data' class="needs-validation" novalidate>
@csrf
@method('PUT')
<input type="hidden" name="tipo_convocatoria_id" value="{{ $tipo }}">
<div class="panel-heading">
    <h3 class="panel-title">Descripción de las causas</h3>
    @include('includes.validation-error')
</div>
<div class="panel-body">
    <div class="row">
        <div class="col-12">
            @include('aplicacion.innovacion.gestion.identificacion.tipo-'.$tipo.'.inputs-causa')
        </div>
    </div>

    <button class="btn btn-primary pull-right" type="submit" formaction="{{ route("app.problemas.update.fase2", [$problema->id, 'continue' => 1]) }}">Guargar y continuar</button>
    <button class="btn btn-link" type="submit" formaction="{{ route("app.problemas.update.fase2", [$convocatoria->id, $problema->id, 'continue' => 0]) }}">Guardar</button>
</div>
</form>