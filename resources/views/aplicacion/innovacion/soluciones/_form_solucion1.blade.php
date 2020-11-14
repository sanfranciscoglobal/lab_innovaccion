<div class="panel-heading">
    <h3 class="panel-title">Paso 1</h3>
</div>
<div class="panel-body">
    

    <div class="row">
        <div class="col-12">
            <div class="form-group">
                <label class="control-label">* Sector al que perteneces</label>
                <select style="width:100%;" id="tipo_poblacion" name="sector_solucion"
                        class="form-control select2"
                        data-ajax--url="{{route('api.tipo-poblacion.select2')}}"
                        data-ajax--data-type="json"
                        data-ajax--cache="true"
                        data-close-on-select="false"
                        required="required">
                    {{-- @if($model->iniciativaPoblaciones)
                        @foreach($model->iniciativaPoblaciones as $poblacion)
                            <option value="{{$poblacion->tipo_poblacion_id}}"
                                    selected>{{$poblacion->tipoPoblacion->descripcion}}</option>
                        @endforeach
                    @endif --}}
                </select>

            </div>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label">* ¿Estás de acuerdo en recibir retroalimentación de otros agentes que interactúan en la plataforma?</label>
        <div class="custom-control custom-switch">
            <input class="custom-control-input" type="checkbox" id="retro-switch" name="retroalimentacion">
            <label id='label-retro' class="custom-control-label" for="retro-switch">No</label>
            <div class="invalid-feedback" id='retro-error'></div>
        </div>
    </div>
    <div class="retroal d-none">
        <div class="form-group">
            <label class="control-label">* ¿Tienes disponibilidad para trabajar con diversos actores provenientes de distintos sectores, e intercambiar información para implementar tu solución?</label>
            <div class="custom-control custom-switch">
                <input class="custom-control-input" type="checkbox" id="dispo-switch" name="disponibilidad">
                <label id='label-disponi' class="custom-control-label" for="dispo-switch">No</label>
                <div class="invalid-feedback" id='disponi-error'></div>
            </div>
        </div>
        <div class='disponi d-none'>
            
            <div class="row">
                <div class="col-12">
                    <div class="form-group">
                        <label class="control-label">* Nombre de la Solución</label>
                        <input type="text" required="required" class="form-control" placeholder="Nombre de la Solución"
                            name="nombre_solucion"
                            />
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="form-group">
                        <label class="control-label">
                            * Descripción de la Solución
                            <span class="text-primary">(max. 100 palabras) (min. 50 palabras)</span>
                        </label>
                        <textarea
                            oninput="window.countWords('descripcion_iniciativa','descripcion_iniciativa_enfoque-error','btn-siguiente-descripcion');"
                            class="form-control"
                            name="descripcion_iniciativa"
                            id="descripcion_iniciativa"
                            rows="20" required="required"></textarea>
                        <span style="color: gray" id="count-words"></span>
                        <div class="invalid-feedback" id='descripcion_iniciativa_enfoque-error'></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="form-group">
                        <label for="mat_files">Cargar un archivo complementario</label>
    
                        {{-- @if ($method=='PUT')
    
                            <input class="form-control dropify" type="file" id="mat_adjuntar" value="" name="mat_files[]"
                            data-default-file=
                                    "@foreach ($material->articuloss as $articulo)
                                        {{$articulo->nombre}}
                                        <br>
    
                                    @endforeach"
    
                            multiple/>
                        @else --}}
                        <input class="form-control dropify"  accept="text/*" type="file" id="mat_adjuntar" data-allowed-file-extensions='["pdf", "txt"]' name="mat_files"/>
                
    
                    </div>
                </div>
            </div>
            <button class="btn btn-primary nextBtn pull-right" type="button">Siguiente</button>
        </div>

    </div>
        
        


   
</div>