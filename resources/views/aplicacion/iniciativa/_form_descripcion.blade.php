{{--<div class="info-box">--}}
<div class="panel-heading">
    <h3 class="panel-title">Información de la Iniciativa de Innovación</h3>
</div>
<div class="d-sm-flex pb-4 text-left text-muted text-sm-left">
    <p>
        Llena los siguientes campos para completar exitosamente tu registro. Recuerda que los campos con asterisco*
        son obligatorios
    </p>
</div>
<div class="panel-body">
    <div class="row">
        <div class="col-12">
            <div class="form-group">
                <label class="control-label">* Nombre de la Iniciativa</label>
                <input type="text" required="required" class="form-control" placeholder="Nombre de la Iniciativa"
                       name="nombre_iniciativa"
                       value="{{($model->iniciativaInformacion)?$model->iniciativaInformacion->nombre_iniciativa:''}}"/>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-4">
            <div class="form-group">
                <label class="control-label">* Año de inicio</label>
                <input type="number"
                       min="1900"
                       max="{{date('Y')}}"
                       required="required"
                       class="form-control"
                       name="anio"
                       value="{{($model->iniciativaInformacion)?$model->iniciativaInformacion->anio:date('Y')}}"/>
            </div>
        </div>
        <div class="col-8">
            <div class="form-group">
                <label class="control-label">* ¿Esta vigente?</label>
                <div class="custom-control custom-switch">
                    <input class="custom-control-input" type="checkbox" id="vigencia-switch" name="vigencia"
                           checked>
                    <label class="custom-control-label" for="vigencia-switch">Active para marcar como
                        vigente</label>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-7">
            <div class="row">
                <div class="col-12">
                    <div class="form-group">
                        <label class="control-label">* Población objetivo de la Iniciativa</label>
                        <select style="width:100%;" id="tipo_poblacion" name="tipo_poblacion[]"
                                class="form-control select2"
                                data-ajax--url="{{route('api.tipo-poblacion.select2')}}"
                                data-ajax--data-type="json"
                                data-ajax--cache="true"
                                data-close-on-select="false"
                                data-placeholder="Seleccionar población objetivo"
                                required="required" multiple>
                            @if($model->iniciativaPoblaciones)
                                @foreach($model->iniciativaPoblaciones as $poblacion)
                                    <option value="{{$poblacion->tipo_poblacion_id}}"
                                            selected>{{$poblacion->tipoPoblacion->descripcion}}</option>
                                @endforeach
                            @endif
                        </select>

                        <div class="invalid-feedback">Por favor seleccione población objetivo de la iniciativa</div>
                        <div class="valid-feedback">Bien!</div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="form-group">
                        <label class="control-label">* Trabajo de la Iniciativa por ODS</label>
                        <select id="ods_categorias" class="form-control select2" name="ods_categorias[]"
                                data-ajax--url="{{route('api.ods-categoria.select2')}}"
                                data-ajax--data-type="json"
                                data-ajax--cache="true"
                                data-close-on-select="false"
                                data-placeholder="Seleccionar ODS"
                                required="required" multiple>
                            @if($model->iniciativaOds)
                                @foreach($model->iniciativaOds as $ods)
                                    <option value="{{$ods->ods_categoria_id}}"
                                            selected>{{$ods->odsCategoria->nombre}}</option>
                                @endforeach
                            @endif
                        </select>
                        <div class="invalid-feedback">Por favor seleccione trabajo de la iniciativa por ODS</div>
                        <div class="valid-feedback">Bien!</div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="form-group">
                        <label class="control-label">* Componente Innovador <span class="text-primary">(min. 85 caractéres) (max. 350 caractéres)</span></label>
                        <textarea
                                oninput="window.countCharacters('componente_innovador','componente_innovador_error','btn-siguiente-descripcion',85,350,'count_words_3');"
                                name="componente_innovador"
                                id="componente_innovador"
                                class="form-control"
                                placeholder="Componente Innovador"
                                {{--oninvalid="setCustomValidity('Por favor complete este campo.')"--}}
                                {{--onchange="try{setCustomValidity('')}catch(e){}"--}}
                                rows="6"
                                {{--maxlength="350"--}}
                                required
                        >{{($model->iniciativaInformacion)?$model->iniciativaInformacion->componente_innovador:''}}</textarea>

                        <span style="color: gray" id="count_words_3"></span>
                        <div class="invalid-feedback" id='componente_innovador_error'></div>

                        {{--<input type="text" required="required" class="form-control" placeholder="Componente Innovador"--}}
                        {{--name="componente_innovador"--}}
                        {{--value="{{($model->iniciativaInformacion)?$model->iniciativaInformacion->componente_innovador:''}}"/>--}}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="form-group">
                        <label class="control-label">
                            * Descripción de la Iniciativa
                            <span class="text-primary">(min. 25 palabras) (max. 100 palabras)</span>
                        </label>
                        <textarea
                                oninput="window.countWords('descripcion_iniciativa','descripcion_error','btn-siguiente-descripcion',25,100,'count_words_2');"
                                name="descripcion_iniciativa"
                                id="descripcion_iniciativa"
                                class="form-control"
                                placeholder="Describa la iniciativa"
                                {{--oninvalid="setCustomValidity('Por favor complete este campo.')"--}}
                                {{--onchange="try{setCustomValidity('')}catch(e){}"--}}
                                rows="6"
                                required
                        >{{($model->iniciativaInformacion)?$model->iniciativaInformacion->descripcion_iniciativa:''}}</textarea>
                        <span style="color: gray" id="count_words_2"></span>
                        <div class="invalid-feedback" id='descripcion_error'></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-5">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="evento_img">* Logotipo <span style="color: gray">(max. 2 MB)</span></label>
                        @if($model->logo)
                            {{--{{\App\Helpers\Archivos::validarUrlImagenIniciativa($model->iniciativaInformacion->logo)}}--}}
                            <input type="file"
                                   class="form-control dropify"
                                   accept="image/gif, image/jpeg, image/png"
                                   name="logo"
                                   id="logo"
                                   @if($model->logo)
                                   data-default-file="{{asset('storage/iniciativas/'.$model->logo)}}"
                                   @else
                                   required="required"
                                   @endif
                                   data-max-file-size="2M"
                            >
                        @else
                            <input type="file"
                                   class="form-control dropify"
                                   accept="image/gif, image/jpeg, image/png"
                                   name="logo"
                                   id="logo"
                                   data-show-errors="true"
                                   required="required"
                                   data-max-file-size="2M"
                            >
                        @endif
                        <div class="invalid-feedback" id='logo_error'>Inserta una imagen.</div>
                        <div class="valid-feedback">Bien!</div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <span>Redes Sociales</span>
                <div class="form-group">
                    <label for="iniciativa_facebook">Facebook</label>
                    <input class="form-control" type="url" id="url_facebook" name="url_facebook"
                           value="{{($model->iniciativaInformacion)?$model->iniciativaInformacion->url_facebook:''}}"
                           placeholder="Link a tu usuario"
                    >
                </div>
                <div class="form-group">
                    <label for="iniciativa_instagram">Instagram</label>
                    <input class="form-control" type="url" id="url_instagram" name="url_instagram"
                           value="{{($model->iniciativaInformacion)?$model->iniciativaInformacion->url_instagram:''}}"
                           placeholder="Link a tu usuario">
                </div>
                <div class="form-group">
                    <label for="iniciativa_twitter">Twitter</label>
                    <input class="form-control" type="url" id="url_twitter" name="url_twitter"
                           value="{{($model->iniciativaInformacion)?$model->iniciativaInformacion->url_twitter:''}}"
                           placeholder="Link a tu usuario">
                </div>
                <div class="form-group">
                    <label for="iniciativa_linkedin">LinkedIn</label>
                    <input class="form-control" type="url" id="url_linkedin" name="url_linkedin"
                           value="{{($model->iniciativaInformacion)?$model->iniciativaInformacion->url_linkedin:''}}"
                           placeholder="Link a tu usuario">
                </div>
                <div class="form-group">
                    <label for="iniciativa_youtube">Youtube</label>
                    <input class="form-control" type="url" id="url_youtube" name="url_youtube"
                           value="{{($model->iniciativaInformacion)?$model->iniciativaInformacion->url_youtube:''}}"
                           placeholder="Link a tu usuario">
                </div>
            </div>
        </div>
    </div>
    <button class="btn btn-primary nextBtn pull-right" id="btn-siguiente-descripcion" type="button">Siguiente
    </button>
</div>
{{--</div>--}}
