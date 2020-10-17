    <div class="col-12">
        <div class="form-group">
            <label for="innovacion_sector_productivo" class="control-label">* Objetivo de Desarrollo Sostenible (ODS)</label>
            <select style="width:100%;" id="innovacion_sector_productivo" name="innovacion_sector_productivo"
                    class="form-control select2"
                    data-ajax--url="{{route('api.ods-categoria.select2')}}"
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
