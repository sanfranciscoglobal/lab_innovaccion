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
                    {{-- <div class="controls-container mb-3">
                        <label for="control-label">* Tipo de innovación propuesta</label>
                        <div class="custom-control custom-radio mb-3">
                            <input class="custom-control-input form-control" type="checkbox" id="tipo_propuesta-1" name="tipo_institucion[]" value="1">
                            <label class="custom-control-label" for="tipo_propuesta-1">Innovación de producto o servicio (cuando la propuesta busca el desarrollo de un bien o servicio nuevo o significativamente mejorado en sus características y/o en sus usos posibles)</label>
                        </div>
                        <div class="custom-control custom-radio mb-3">
                            <input class="custom-control-input form-control" type="checkbox" id="tipo_propuesta-2" name="tipo_institucion[]" value="2" >
                            <label class="custom-control-label" for="tipo_propuesta-2">Innovación del proceso (cuando la propuesta busca el desarrollo de métodos de gestión nuevos o significativamente mejorados por efecto de mejores técnicas, métodos, equipo o software)</label>
                        </div>
                        <div class="custom-control custom-radio mb-3">
                            <input class="custom-control-input form-control" type="checkbox" id="tipo_propuesta-3" name="tipo_institucion[]" value="3" >
                            <label class="custom-control-label" for="tipo_propuesta-3">Innovación de la estructura organizacional (cuando la propuesta busca el desarrollo de nuevos métodos de organización, en las prácticas institucionales, en la planificación y organización del trabajo o a las relaciones de la organización con su entorno)</label>
                        </div>
                        <div class="custom-control custom-radio mb-3">
                            <input class="custom-control-input form-control" type="checkbox" id="tipo_propuesta-4" name="tipo_institucion[]" value="4" >
                            <label class="custom-control-label" for="tipo_propuesta-4">Innovación comercial/comunicacional (cuando la propuesta busca el desarrollo de nuevos métodos de comunicación y difusión, mejoras en la imagen organizacional, en su estrategia de posicionamiento o promoción)</label>
                        </div>
                        
                        @error('tipo_institucion')<div class="invalid-feedback d-inline">{{ $message }}</div>@enderror
                    </div> --}}

                    
                    
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
{{-- <script>
    @if($solucion->tipopropuestas)
        @foreach($solucion->tipopropuestas as $propuesta)
            $checkname='tipo_propuesta-{{$propuesta->tipoinnovacion_id}}';
            document.getElementById($checkname).checked=true;
        @endforeach
    @endif
</script> --}}
