<form method="POST" enctype='multipart/form-data' class="needs-validation" novalidate>
    @csrf
    @method('PUT')
    <div class="panel-heading">
        <h3 class="panel-title">Identificación de la organización</h3>
    </div>
    <div class="panel-body">

       <div class="row">
           <div class="col-12">
                <div class="form-group">

                    <label class="control-label">* Tipo de innovación propuesta</label>
                    <div class= "m-0 p-0 w-100 form-group">
                        
                        <select style="width:100%;" id="tipo_propuesta" name="tipo_institucion[]"
                            class="form-control select2"
                            data-ajax--url="{{route('api.tipo-propuesta.select2')}}"
                            data-ajax--data-type="json"
                            data-ajax--cache="true"
                            data-allow-clear="true"
                            data-placeholder="Seleccione uno o varios tipos"
                            data-close-on-select="false"
                            required="required" multiple>
                            @if($solucion->tipopropuestas)
                                @foreach($solucion->tipopropuestas as $propuesta)
                                    <option value="{{$propuesta->tipoinnovacion_id}}"
                                            selected>{{$propuesta->tipoinnovacionid->nombre}}</option>
                                @endforeach
                            @endif
                        </select>
 
                        <div class="invalid-tooltip">Por favor seleccione uno o varios tipos.</div>
                        <div class="valid-tooltip">Bien!</div>
                    </div>

                    
                    
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="form-group">


                    <label class="control-label">* Nivel actual de desarrollo de la solución</label>
                    <div class= "m-0 p-0 w-100 form-group">
                        
                        <select style="width:100%;" id="tipo_poblacion2" name="nivelsolucion_id"
                            class="form-control select2"
                            data-ajax--url="{{route('api.nivel-solucion.select2')}}"
                            data-ajax--data-type="json"
                            data-ajax--cache="true"
                            data-placeholder="Seleccione un nivel"
                            required="required">
                            @if($solucion->nivelsolucion_id)
                                <option value="{{$solucion->nivelsolucion_id}}"
                                    selected>{{$solucion->nivelsolucionid->nombre}}</option>
                                
                            @endif
                        </select>
 
                        <div class="invalid-tooltip">Por favor seleccione un nivel.</div>
                        <div class="valid-tooltip">Bien!</div>
                    </div>

                    
                    
    
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="form-group">
                    <label class="control-label">* Escribe tres palabras o conceptos clave que se refieran a la solución</label><br>
                    <label class="control-label">Campo 1</label>
                    <input maxlength="200" type="text" required="required" class="form-control"
                           placeholder="Ejemplo:Desarrollo de una plataforma web" name="concepto1"
                            value="{{$solucion->concepto1}}">
                    <label class="control-label">Campo 2</label>
                    <input maxlength="200" type="text" required="required" class="form-control"
                           placeholder="Ejemplo:Reingeniería de proceso" name="concepto2"
                           value="{{$solucion->concepto2}}">
                    <label class="control-label">Campo 3</label>
                    <input maxlength="200" type="text" required="required" class="form-control"
                           placeholder="Ejemplo:Turnero web" name="concepto3"
                           value="{{$solucion->concepto3}}">
                </div>
            </div>
            
        </div>
        
        {{-- <button class="btn btn-primary nextBtn pull-right mt-4" type="button">Siguiente</button> --}}
        <button class="btn btn-primary pull-right" type="submit" {{$solucion->id == null ? 'disabled' : ''}} formaction="{{ $url1.'?continue=1' }}">Guargar y continuar</button>
        <button class="btn btn-link" type="submit" {{$solucion->id == null ? 'disabled' : ''}}  formaction="{{ $url1.'?continue=0' }}">Guardar</button>
    </div>
</form>