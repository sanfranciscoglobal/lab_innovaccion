<div class="info-box opc-1 d-none">
    <div class="panel-heading">
        <h3 class="panel-title">Identificación de la organización</h3>
    </div>
    <div class="d-sm-flex pb-4 text-left text-muted text-sm-left">
        <p>Llena los siguientes campos para completar exitosamente tu registro. Recuerda que los campos con asterisco*
            son obligatorios</p>
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
                    <input type="text" class="form-control" placeholder="Siglas"
                           id="siglas" name="siglas"
                           value="{{($model->iniciativaActor)?$model->iniciativaActor->siglas:''}}"/>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="form-group">
                    <label for="sitio_web">Sitio web</label>
                    <input pattern="^(?:http(s)?:\/\/)?[\w.-]+(?:\.[\w\.-]+)+[\w\-\._~:/?#[\]@!\$&'\(\)\*\+,;=.]+$"
                           class="form-control @error('sitio_web') is-invalid @enderror"
                           type="text"
                           id="sitio_web"
                           value="{{ old('sitio_web', ($model->iniciativaActor)?$model->iniciativaActor->sitio_web:'') }}"
                           name="sitio_web"
                           placeholder="Link del sitio web">
                    @error('info')
                    <div class="invalid-feedback d-inline">{{ $message }}</div>
                    @enderror
                    <div class="invalid-feedback" id='url-error'></div>

                    {{--<label class="control-label">Sitio web</label>--}}
                    {{--<input maxlength="200" type="url" class="form-control" placeholder="Ejem. https://www.sitioweb.com"--}}
                    {{--id="sitio_web" name="sitio_web"--}}
                    {{--value="{{($model->iniciativaActor)?$model->iniciativaActor->sitio_web:''}}"/>--}}
                </div>
            </div>
            <div class="col-lg-12">
                <div class="form-group">
                    <label class="control-label">* Tipo de Institución</label><br/>
                    <select style="width:100%;" id="tipo_institucion" name="tipo_institucion[]"
                            class="form-control select2"
                            data-ajax--url="{{route('api.tipo-institucion.select2')}}"
                            data-ajax--data-type="json"
                            data-ajax--cache="true"
                            data-close-on-select="false"
                            data-placeholder="Seleccionar tipo institución"
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
                    <label class="control-label">
                        * Enfoque: ¿Qué trabajo hace la organización?
                        <span class="text-primary">(min. 25 palabras) (max. 100 palabras)</span>
                    </label>

                    <textarea
                            oninput="window.countWords('enfoque','enfoque-error','submit-actor-id',25,100);"
                            name="enfoque"
                            id="enfoque"
                            class="form-control"
                            placeholder="Ingrese el enfoque"
                            rows="6"
                            {{--oninvalid="setCustomValidity('Por favor complete este campo.')"--}}
                            {{--onchange="try{setCustomValidity('')}catch(e){}"--}}
                            required
                    >{{($model->iniciativaActor)?$model->iniciativaActor->enfoque:''}}</textarea>
                    <span style="color: gray" id="count-words"></span>
                    <div class="invalid-feedback" id='enfoque-error'></div>
                </div>
            </div>
        </div>

        {{--<div class="row">--}}
        {{--<div class="col-lg-8">--}}
        {{--<div class="form-group">--}}
        {{--<label class="control-label">* Ubicaci&oacute;n de la iniciativa</label>--}}
        {{--<select style="width:100%;" id="ubicaciones" class="form-control select2" name="ubicaciones[]"--}}
        {{--data-ajax--url="{{route('api.canton.select2')}}"--}}
        {{--data-ajax--data-type="json"--}}
        {{--data-ajax--cache="true"--}}
        {{--data-close-on-select="false"--}}
        {{--required="required" multiple>--}}

        {{--@if($model->iniciativaUbicaciones)--}}
        {{--@foreach($model->iniciativaUbicaciones as $ubicacion)--}}
        {{--<option value="{{$ubicacion->canton_id}}"--}}
        {{--selected>{{$ubicacion->canton->nombre}}</option>--}}
        {{--@endforeach--}}
        {{--@endif--}}
        {{--</select>--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--<div class="col-lg-4">--}}
        {{--<div class="form-group">--}}
        {{--<label class="control-label">* Canton</label><br/>--}}
        {{--<select style="width:100%;" id="canton_id" class="form-control select2" name="canton_id"--}}
        {{--data-ajax--url="{{route('api.canton.select2')}}"--}}
        {{--data-ajax--data-type="json"--}}
        {{--data-ajax--cache="true"--}}
        {{--required="required">--}}
        {{--@if($model->iniciativaActor)--}}
        {{--<option value="{{$model->iniciativaActor->canton_id}}"--}}
        {{--selected>{{$model->iniciativaActor->canton->nombre}}</option>--}}
        {{--@endif--}}
        {{--</select>--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--</div>--}}

        @if($model->iniciativaUbicaciones->count() > 0)
            @foreach($model->iniciativaUbicaciones as $key => $ubicacion)
                <div class="form-group ubicaciones direccion border-bottom-light" data-row="{{$key}}">
                    <div class="row">
                        <div class="col-lg-12">
                            <label class="control-label">Dirección Principal</label>
                            <input maxlength="200" type="text" required="required"
                                   class="form-control ubicacion ubicacion-{{$key}}"
                                   placeholder="Escriba la dirección"
                                   data-adresscontainer="{{$key}}"
                                   name="Ubicaciones[{{$key}}][direccion]"
                                   value="{{$ubicacion->direccion}}"
                                   data-latitud="{{$ubicacion->latitud}}"
                                   data-longitud="{{$ubicacion->longitud}}"
                                   @if($key==0) id="evento_direccion" @endif
                            />
                            <input type="hidden" class="lat lat-{{$key}}" name="Ubicaciones[{{$key}}][latitud]"
                                   value="{{$ubicacion->latitud}}">
                            <input type="hidden" class="long long-{{$key}}" name="Ubicaciones[{{$key}}][longitud]"
                                   value="{{$ubicacion->longitud}}">
                            <input type="hidden" class="localidad localidad-{{$key}}"
                                   name="Ubicaciones[{{$key}}][localidad]"
                                   value="{{$ubicacion->localidad}}">
                            <input type="hidden" class="area1 area1-{{$key}}" name="Ubicaciones[{{$key}}][area1]"
                                   value="{{$ubicacion->area1}}">
                            <input type="hidden" class="area2 area2-{{$key}}" name="Ubicaciones[{{$key}}][area2]"
                                   value="{{$ubicacion->area2}}">
                        </div>
                    </div>
                </div>
            @endforeach
        @else
            <div class="form-group ubicaciones direccion border-bottom-light" data-row="0">
                <div class="row">
                    <div class="col-lg-12">
                        <label class="control-label">Dirección Principal</label>
                        <input maxlength="200" type="text" required="required"
                               class="form-control ubicacion ubicacion-0"
                               placeholder="Escriba la dirección" id="evento_direccion" data-adresscontainer="0"
                               name="Ubicaciones[0][direccion]"
                               value="{{($model->iniciativaActor)?$model->iniciativaActor->direccion:''}}"/>
                        <input type="hidden" class="form-control lat lat-0" name="Ubicaciones[0][latitud]" value="">
                        <input type="hidden" class="form-control long long-0" name="Ubicaciones[0][longitud]" value="">
                        <input type="hidden" class="form-control localidad localidad-0" name="Ubicaciones[0][localidad]"
                               value="">
                        <input type="hidden" class="form-control area1 area1-0" name="Ubicaciones[0][area1]" value="">
                        <input type="hidden" class="form-control area2 area2-0" name="Ubicaciones[0][area2]" value="">
                    </div>
                </div>
            </div>
        @endif

        <div id="sedes-container"></div>
        <div class="row my-3">
            <div class="col-lg-4 offset-lg-8">
                <button id="add_city" class="btn btn-sm btn-primary" type="button">
                    <i class="fe-map-pin mr-2"></i>Agregar sucursal
                </button>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div id="map" style="width:100%; height: 350px;"></div>
            </div>
        </div>
        <button class="btn btn-primary nextBtn pull-right mt-4" type="button" id="submit-actor-id">Siguiente</button>
    </div>
</div>
{{--<div class="info-box opc-2 d-none">--}}
{{--<h3 class="text-center">Haga clic en siguiente</h3>--}}
{{--<button class="btn btn-primary nextBtn pull-right" id="submit-actor-id" type="button">Siguiente</button>--}}
{{--</div>--}}
