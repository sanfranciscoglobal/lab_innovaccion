<div class="info-box opc-1 d-none">
    <div class="panel-heading">
        <h3 class="panel-title">Identificación de la organización</h3>
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-lg-8">
                <div class="form-group">
                    <label class="control-label">* Nombre de la organización</label>
                    <input maxlength="200" type="text" required="required" class="form-control"
                           placeholder="Nombre de la organización" name="nombre_organizacion"
                           value="{{($model->iniciativaActor)?$model->iniciativaActor->nombre_organizacion:''}}"/>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="form-group">
                    <label class="control-label">Siglas</label>
                    <input type="text" class="form-control" placeholder="Nombre de la organización"
                           id="siglas" name="siglas"
                           value="{{($model->iniciativaActor)?$model->iniciativaActor->siglas:''}}"/>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8">
                <div class="form-group">
                    <label class="control-label">Sitio web</label>
                    <input maxlength="200" type="url" class="form-control" placeholder="Ejem. https://www.sitioweb.com"
                           id="sitio_web" name="sitio_web"
                           value="{{($model->iniciativaActor)?$model->iniciativaActor->sitio_web:''}}"/>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="form-group">
                    <label class="control-label">* Tipo de Institución</label><br/>
                    <select style="width:100%;" id="tipo_institucion" name="tipo_institucion[]"
                            class="form-control select2"
                            data-ajax--url="{{route('api.tipo-institucion.select2')}}"
                            data-ajax--data-type="json"
                            data-ajax--cache="true"
                            data-close-on-select="false"
                            required="required" multiple>
                        @if($model->iniciativaInstituciones)
                            @foreach($model->iniciativaInstituciones as $institucion)
                                <option value="{{$institucion->tipo_institucion_id}}"
                                        selected>{{$institucion->tipoInstitucion->descripcion}}</option>
                            @endforeach
                        @endif
                    </select>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="form-group">
                    <label class="control-label">* Enfoque: ¿Qué trabajo hace la organización? (max.100
                        palabras) </label>
                    <textarea class="form-control" name="enfoque" id="enfoque" rows="6"
                              required="required">{{($model->iniciativaActor)?$model->iniciativaActor->enfoque:''}}</textarea>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8">
                <div class="form-group">
                    <label class="control-label">* Ubicaci&oacute;n de la iniciativa</label>
                    <select style="width:100%;" id="ubicaciones" class="form-control select2" name="ubicaciones[]"
                            data-ajax--url="{{route('api.canton.select2')}}"
                            data-ajax--data-type="json"
                            data-ajax--cache="true"
                            data-close-on-select="false"
                            required="required" multiple>

                        @if($model->iniciativaUbicaciones)
                            @foreach($model->iniciativaUbicaciones as $ubicacion)
                                <option value="{{$ubicacion->canton_id}}"
                                        selected>{{$ubicacion->canton->nombre}}</option>
                            @endforeach
                        @endif
                    </select>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="form-group">
                    <label class="control-label">* Canton</label><br/>
                    <select style="width:100%;" id="canton_id" class="form-control select2" name="canton_id"
                            data-ajax--url="{{route('api.canton.select2')}}"
                            data-ajax--data-type="json"
                            data-ajax--cache="true"
                            required="required">
                        @if($model->iniciativaActor)
                            <option value="{{$model->iniciativaActor->canton_id}}"
                                    selected>{{$model->iniciativaActor->canton->nombre}}</option>
                        @endif
                    </select>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label">Ubicación</label>
            <input maxlength="200" type="text" required="required" class="form-control"
                   placeholder="Enter Company Address" id="evento_direccion" name="direccion"
                   value="{{($model->iniciativaActor)?$model->iniciativaActor->direccion:''}}"/>
        </div>
        <div class="row">
            <div class="col">
                <div id="map" style="width:100%; height: 350px;"></div>
                <input type="hidden" id="lat" name="latitud" value="">
                <input type="hidden" id="long" name="longitud" value="">
            </div>
        </div>
        <button class="btn btn-primary nextBtn pull-right mt-4" type="button">Siguiente</button>
    </div>
</div>
<div class="info-box opc-2 d-none">
    <h3 class="text-center">Haga clic en siguiente</h3>
    <button class="btn btn-primary nextBtn pull-right" type="button">Siguiente</button>
</div>