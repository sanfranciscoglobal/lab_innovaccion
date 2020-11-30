<div class="panel-heading">
    <h3 class="panel-title">Paso 1</h3>
</div>
<div class="panel-body">
    <form method="POST" enctype='multipart/form-data' class="needs-validation" novalidate>
        @csrf
        @method($method)
        <input type="hidden" name="step" value="1">
        <input type="hidden" name="problema_id" value="{{ $problema->id }}">
        <input type="hidden" name="convocatoria_id" value="{{ $problema->tipo_convocatoria_id }}">
        <div class="row">
            <div class="col-12">
                <div class="form-group">
                    <label class="control-label">* Sector al que perteneces</label>
                    <div class= "m-0 p-0 w-100 form-group">
                        
                        <select style="width:100%;" id="sector_solucion" name="sectorsolucion_id"
                            class="form-control select2"
                            data-ajax--url="{{route('api.sector-solucion.select2')}}"
                            data-ajax--data-type="json"
                            data-ajax--cache="true"
                            data-placeholder="Seleccione un sector"
                            required="required">
                                @if ($solucion->sectorsolucion_id)
                                <option value="{{$solucion->sectorsolucion_id}}"
                                    selected>{{$solucion->sectorsolucionid->nombre}}</option>
                                @endif
                                
                        </select>
 
                        <div class="invalid-tooltip">Por favor seleccione un sector.</div>
                        <div class="valid-tooltip">Bien!</div>
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label ">* ¿Estás de acuerdo en recibir retroalimentación de otros agentes que interactúan en la plataforma?</label>
            <div class="custom-control custom-switch">
                <input class="custom-control-input conditional" type="checkbox" id="retro-switch" name="retroalimentacion"  {{($solucion->id == null) ? '' : 'checked'}} data-target="retroalimentacion">
                <label id='label-retro' class="custom-control-label" for="retro-switch">{{$solucion->id == null ? 'No' : 'Si'}}</label>
                <div class="invalid-feedback" id='retro-error'></div>
            </div>
        </div>
        <div class="controls-container has-parent retroalimentacion {{$solucion->id == null ? 'd-none' : ''}}">
            <div class="form-group">
                <label class="control-label">* ¿Tienes disponibilidad para trabajar con diversos actores provenientes de distintos sectores, e intercambiar información para implementar tu solución?</label>
                <div class="custom-control custom-switch">
                    <input class="custom-control-input conditional" data-target="disponibilidad" type="checkbox" id="dispo-switch" name="disponibilidad" {{$solucion->id == null ? '' : 'checked'}}>
                    <label id='label-disponi' class="custom-control-label" for="dispo-switch">{{$solucion->id == null ? 'No' : 'Si'}}</label>
                    <div class="invalid-feedback" id='disponi-error'></div>
                </div>
            </div>
            <div class='has-parent disponibilidad {{$solucion->id == null ? 'd-none' : ''}}'>
                
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <label class="control-label">* Nombre de la Solución</label>
                            <input type="text" required="required" class="form-control" value="{{ old('nombre', $solucion->nombre) }}" placeholder="Nombre de la Solución" name="nombre">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <label class="control-label">
                                * Descripción de la Solución
                                <span class="text-primary">(min. 25 palabras) (max. 100 palabras)</span>
                            </label>
                            <textarea
                                oninput="window.countWords('descripcion_iniciativa','descripcion_error','btn-siguiente',25,100,'count-words');"
                                class="form-control"
                                name="descripcion"
                                id="descripcion_iniciativa"
                            rows="6" descripcion required="required">{{old('descripcion', $solucion->descripcion)}}</textarea>
                            <span style="color: gray" id="count-words"></span>
                            <div class="invalid-feedback" id='descripcion_error'></div>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <label for="mat_files">Cargar un archivo complementario (max. 10MB)</label>

                            {{-- @if($method == 'POST')
                                <div class="cs-file-drop-area">
                                    <div class="cs-file-drop-icon fe-upload"></div>
                                    <span class="cs-file-drop-message">ARRASTRA Y SUELTA AQUÍ PARA SUBIR</span>
                                    <input type="file" class="cs-file-drop-input" title="Avatar del usuario" name="archivo" id="pdf" accept=".pdf" size="10000000">
                                    <button type="button" class="cs-file-drop-btn btn btn-primary btn-sm">O selecciona archivo</button>
                                    <div class="invalid-feedback">Agrega un archivo antes de enviar.</div>
                                </div>
                                
                                @else
                                @php
                                    $img = null;
                                    if(Storage::disk('soluciones')->exists($solucion->archivo)){
                                        $img =  asset('storage/soluciones/'.$solucion->archivo);
                                    }
                                    @endphp
                                <input type="file" class="dropify" title="Avatar del usuario" name="archivo" id="pdf" data-default-file="{{$img}}" accept=".pdf" size="10000000">
                                <small id="emailHelp" class="form-text text-muted">Max. 10Mb</small>
                            @endif --}}
                            @if ($method=='PUT')

                                <input class="form-control dropify" data-max-file-size="10M" type="file" id="archivo" accept=".pdf" size="10000000" name="archivo"
                                data-default-file="{{asset('storage/soluciones/'.$solucion->archivo)}}">
                            @else
                                <input class="form-control dropify" data-max-file-size="10M" type="file" id="archivo" accept=".pdf" size="10000000" name="archivo">
                            @endif
               
                            @error('archivo')<div class="invalid-feedback d-inline">{{ $message }}</div>@enderror
        
                    
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">

                            <label for="pdf">* Quiero que la descripción de mi propuesta:</label>
                            <div class="custom-control custom-radio mb-3">
                                <input class="custom-control-input form-control" type="radio" id="estado-1" name="estado_descrip" value="1"  {{ old('estado_descrip', $solucion->estado_descrip) == '1' ? 'checked' : '' }} required>
                                <label class="custom-control-label" for="estado-1">Se publique abiertamente.</label>
                            </div>
                            <div class="custom-control custom-radio mb-3">
                                <input class="custom-control-input form-control" type="radio" id="estado-2" name="estado_descrip" value="0" {{ old('estado_descrip', $solucion->estado_descrip) == '0' ? 'checked' : '' }} required>
                                <label class="custom-control-label" for="estado-2">Solo la pueda ver el proponente del problema.</label>
                            </div>
                            @error('estado_descrip')<div class="invalid-feedback d-inline">{{ $message }}</div>@enderror
                        </div>
                    </div>
                </div>

                <button class="btn btn-primary pull-right" id='btn-siguiente' type="submit" formaction="{{ $url.'?continue=1' }}">Guargar y continuar</button>
                <button class="btn btn-link" type="submit" id='btn-siguiente' formaction="{{ $url.'?continue=0' }}">Guardar</button>
                
            </div>

        </div>
    </form>
        
</div>

