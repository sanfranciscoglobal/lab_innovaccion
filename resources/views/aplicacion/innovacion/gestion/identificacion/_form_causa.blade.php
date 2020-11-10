<form method="POST" enctype='multipart/form-data' class="needs-validation" novalidate>
@csrf
@method($method)
<input type="hidden" name="step" value="2">
<div class="panel-heading">
    <h3 class="panel-title">Descripción de las causas</h3>
</div>
<div class="panel-body">
    <div class="row">
        <div class="col-12">
            @include('aplicacion.innovacion.gestion.identificacion.tipo-'.$tipo.'.inputs-causa')
        </div>
    </div>

    <button class="btn btn-primary pull-right" type="submit" formaction="{{ $url.'?continue=1' }}">Guargar y continuar</button>
    <button class="btn btn-link" type="submit" formaction="{{ $url.'?continue=0' }}">Guardar</button>
</div>
</form>