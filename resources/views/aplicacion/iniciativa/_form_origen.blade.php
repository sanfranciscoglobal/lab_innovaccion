<div class="panel-heading">
    <h3 class="panel-title">¿Cuál es el origen de la iniciativa?</h3>
</div>
<div class="panel-body">
    @foreach($iniciativasOrigen as $iniciativaOrigen)
        <div class="form-group">
            <input class="iniciativa_propiedad" type="radio" id="iniciativa_propiedad_{{$iniciativaOrigen->id}}"
                   value="{{$iniciativaOrigen->id}}" name="iniciativa_propiedad" required="required"
                    {{($model->iniciativa_origen_id == $iniciativaOrigen->id)?' checked':' '}}
            >
            <label for="iniciativa_propiedad_{{$iniciativaOrigen->id}}">
                {{$iniciativaOrigen->descripcion}}
            </label>
        </div>
    @endforeach

    <button class="btn btn-primary nextBtn pull-right" type="button">Siguiente</button>
</div>