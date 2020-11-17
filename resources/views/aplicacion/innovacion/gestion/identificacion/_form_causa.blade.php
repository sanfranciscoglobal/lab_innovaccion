<form method="POST" enctype='multipart/form-data' class="needs-validation" novalidate>
@csrf
@method('PUT')
<input type="hidden" name="tipo_convocatoria_id" value="{{ $tipo }}">
<div class="panel-heading">
    <h3 class="panel-title">Descripción de las causas</h3>
</div>
<div class="panel-body">
    <div class="row">
        <div class="col-12">
            @include('aplicacion.innovacion.gestion.identificacion.tipo-'.$tipo.'.inputs-causa')
        </div>
    </div>

    <button class="btn btn-primary pull-right" type="submit" formaction="{{ $url2.'?continue=1' }}" {{$problema->id == null ? 'disabled' : ''}}>Guargar y continuar</button>
    <button class="btn btn-link" type="submit" formaction="{{ $url2.'?continue=0' }}" {{$problema->id == null ? 'disabled' : ''}}>Guardar</button>
</div>
</form>