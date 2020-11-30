    <div class="col-12">
        <div class="form-group">
            <label for="innovacion_publica_sector_productivo" class="control-label">* Sector productivo</label>


            <div class= "m-0 p-0 w-100 form-group">
                                                                    
                <select style="width:100%;" id="innovacion_publica_sector_productivo" name="innovacion_sector_productivo3[]"
                    class="form-control custom-select select2"
                    data-ajax--url="{{route('api.tipo-sector.select2','3')}}"
                    data-ajax--data-type="json"
                    data-ajax--cache="true"
                    data-placeholder="Seleccione uno o varios sectores"
                    data-close-on-select="false"
                    required="required" multiple>
                    @if($convocatoria->consectores && $convocatoria->tipoconvocatoria_id=='3')
                        @foreach($convocatoria->consectores as $sector)
                            <option value="{{$sector->sector_id}}"
                                selected>{{$sector->sectorid->nombre}}</option>
                        @endforeach
                    @endif
                </select>
                <div class="invalid-tooltip">Por favor seleccione al menos un sector.</div>
                <div class="valid-tooltip">Bien!</div>
            </div>
            
        </div>
    </div>
    <div class="col-12">
        <div class="form-group">
            
            <label for="innovacion_publica_subsector_productivo" class="control-label">* Subsector productivo</label>
            <div class= "m-0 p-0 w-100 form-group">
                                                                        
                <select style="width:100%;" id="innovacion_publica_subsector_productivo" name="innovacion_subsector_productivo3[]"
                    class="form-control custom-select select2"
                    data-placeholder="Seleccione uno o varios subsectores"
                    data-close-on-select="false"
                    required="required" multiple>
      
                </select>
                <div class="invalid-tooltip">Por favor seleccione al menos un subsector.</div>
                <div class="valid-tooltip">Bien!</div>
            </div>
            
        </div>
    </div>
    <div class="col-12">
        <div class="form-group">
            <label for="innovacion_publica_ods" class="control-label">* Objetivo de Desarrollo Sostenible (ODS)</label>

            <div class= "m-0 p-0 w-100 form-group">
                                                                    
                <select style="width:100%;" id="innovacion_publica_ods" name="innovacion_ods3[]"
                    class="form-control custom-select select2"
                    data-ajax--url="{{route('api.ods-categoria.select2')}}"
                    data-ajax--data-type="json"
                    data-placeholder="Seleccione uno o varios ODS"
                    data-ajax--cache="true"
                    data-close-on-select="false"
                    required="required" multiple>
                    @if($convocatoria->conods && $convocatoria->tipoconvocatoria_id=='3')
                        @foreach($convocatoria->conods as $objetivo)
                            <option value="{{$objetivo->ods_id}}"
                                selected>ODS {{$objetivo->ods_id}}:{{$objetivo->objetivoid->nombre}}</option>
                        @endforeach
                    @endif
                </select>
                <div class="invalid-tooltip">Por favor seleccione al menos un ODS.</div>
                <div class="valid-tooltip">Bien!</div>
            </div>
            
        </div>
    </div>
