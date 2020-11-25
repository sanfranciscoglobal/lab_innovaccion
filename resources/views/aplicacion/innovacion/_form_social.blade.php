    <div class="col-12">
        <div class="form-group">
            <label for="innovacion_sector_productivo" class="control-label">* Objetivo de Desarrollo Sostenible (ODS)</label>
            <div class= "m-0 p-0 w-100 form-group">
                                                                    
                <select style="width:100%;" id="innovacion_sector_productivo" name="innovacion_ods[]"
                    class="form-control custom-select select2"
                    data-ajax--url="{{route('api.ods-categoria.select2')}}"
                    data-ajax--data-type="json"
                    data-placeholder="Seleccione uno o varios ODS"
                    data-ajax--cache="true"
                    data-close-on-select="false"
                    required="required" multiple>
                    @if($convocatoria->conods && $convocatoria->tipoconvocatoria_id=='2')
                        @foreach($convocatoria->conods as $objetivo)
                            <option value="{{$objetivo->ods_id}}"
                                selected>ODS {{$objetivo->ods_id}}: {{$objetivo->objetivoid->nombre}}</option>
                        @endforeach
                    @endif
                </select>
                <div class="invalid-tooltip">Por favor seleccione al menos un ODS.</div>
                <div class="valid-tooltip">Bien!</div>
            </div>

            
        </div>
    </div>
