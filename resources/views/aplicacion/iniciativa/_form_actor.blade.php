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
                           placeholder="Nombre de la organización" name="iniciativa_org_nombre"/>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="form-group">
                    <label class="control-label">Siglas</label>
                    <input type="text" class="form-control" placeholder="Nombre de la organización"
                           name="iniciativa_org_siglas"/>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8">
                <div class="form-group">
                    <label class="control-label">Sitio web</label>
                    <input maxlength="200" type="url" class="form-control" placeholder="Ejem. https://www.sitioweb.com"
                           name="iniciativa_org_web"/>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="form-group">
                    <label class="control-label">* Tipo de Institución</label><br/>
                    <select style="width:100%;" id="iniciativa_org_tipo" class="form-control select2"
                            name="iniciativa_org_tipo"
                            required="required" multiple>
                        <option value="">Seleccione al menos un tipo</option>
                        <option value="1">Tipo 1</option>
                        <option value="2">Tipo 2</option>
                        <option value="3">Tipo 3</option>
                        <option value="4">Tipo 4</option>
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
                              required="required"></textarea>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8">
                <div class="form-group">
                    <label class="control-label">* Ubicaci&oacute;n de la iniciativa</label>
                    <select style="width:100%;" id="ubicaciones" class="form-control select2" name="ubicaciones"
                            data-ajax--url="{{route('api.tipo-institucion.select2')}}"
                            data-ajax--data-type="json"
                            data-ajax--cache="true"
                            data-close-on-select="false"
                            required="required" multiple>
                        {{--<option value="">Seleccione al menos un tipo</option>--}}
                        {{--<option value="1">Tipo 1</option>--}}
                        {{--<option value="2">Tipo 2</option>--}}
                        {{--<option value="3">Tipo 3</option>--}}
                        {{--<option value="4">Tipo 4</option>--}}
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
                            data-close-on-select="false"
                            required="required" multiple>
                        {{--<option value="">Seleccione al menos un tipo</option>--}}
                        {{--<option value="1">Tipo 1</option>--}}
                        {{--<option value="2">Tipo 2</option>--}}
                        {{--<option value="3">Tipo 3</option>--}}
                        {{--<option value="4">Tipo 4</option>--}}
                    </select>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label">Ubicación</label>
            <input maxlength="200" type="text" required="required" class="form-control"
                   placeholder="Enter Company Address"/>
        </div>
        <button class="btn btn-primary nextBtn pull-right" type="button">Siguiente</button>
    </div>
</div>
<div class="info-box opc-2 d-none">
    <h3 class="text-center">Haga clic en siguiente</h3>
    <button class="btn btn-primary nextBtn pull-right" type="button">Siguiente</button>
</div>