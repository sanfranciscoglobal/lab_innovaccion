<div class="panel-heading">
    <h3 class="panel-title">Paso 1</h3>
</div>
<div class="panel-body">
    <form method="POST" enctype='multipart/form-data' class="needs-validation" novalidate>
        @csrf
        @method($method)
        <input type="hidden" name="step" value="1">
        <div class="row">
            <div class="col-12">
                <div class="form-group">
                    <label class="control-label">* Sector al que perteneces</label>
                    <select style="width:100%;" id="sector_solucion" name="sectorsolucion_id"
                            class="form-control select2"
                            data-ajax--url="{{route('api.sector-solucion.select2')}}"
                            data-ajax--data-type="json"
                            data-ajax--cache="true"
                            data-close-on-select="false"
                            required="required">
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
                            <input type="text" required="required" class="form-control" placeholder="Nombre de la Solución" name="nombre">
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
                                name="descripcion"
                                id="descripcion_iniciativa"
                                rows="20" descripcion required="required"></textarea>
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
                            <input class="form-control dropify"  accept="text/*" type="file" id="mat_adjuntar" data-allowed-file-extensions='["pdf", "txt"]' name="archivo"/>
                    
        
                        </div>
                    </div>
                </div>
                <button class="btn btn-primary pull-right" type="submit" formaction="{{ $url.'?continue=1' }}">Guargar y continuar</button>
                <button class="btn btn-link" type="submit" formaction="{{ $url.'?continue=0' }}">Guardar</button>
                {{-- <button class="btn btn-primary nextBtn pull-right" type="button">Siguiente</button> --}}
            </div>

        </div>
    </form>
        
        


   
</div>