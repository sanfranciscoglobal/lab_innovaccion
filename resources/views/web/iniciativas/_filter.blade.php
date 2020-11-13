<form id="filter-iniciativas" class="container" action="{{route('web.iniciativas.index')}}" method="POST">
    @method('POST')
    @csrf
    <div class="row">
        <div class="col-md-3 col-sm-6">
            <span class="text-black-50 d-block" for="from-destination">Ciudad</span>
            <select id="canton_id" class="form-control custom-select select2"
                    name="canton_id[]"
                    data-ajax--url="{{route('api.canton.select2')}}"
                    data-ajax--data-type="json"
                    data-ajax--cache="true"
                    style="width:100%;"
                    data-placeholder="Seleccionar ciudad"
                    multiple>
                @foreach($cantones as $canton)
                    <option value="{{$canton->id}}" selected>{{$canton->nombre}}</option>
                @endforeach
            </select>
        </div>
        <div class="col-md-3 col-sm-6">
            <span class="text-black-50 d-block" for="to-destination">Tipo Instituci&oacute;n</span>
            <select id="tipo_institucion" name="tipo_institucion[]"
                    class="form-control custom-select select2"
                    data-ajax--url="{{route('api.tipo-institucion.select2')}}"
                    data-ajax--data-type="json"
                    data-ajax--cache="true"
                    data-close-on-select="false"
                    data-placeholder="Seleccionar tipo institución"
                    style="width:100%;"
                    multiple>
                @foreach($tipoInstituciones as $tipoInstitucion)
                    <option value="{{$tipoInstitucion->id}}"
                            selected>
                        {{$tipoInstitucion->descripcion}}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="col-md-3 col-sm-6">
            <span style="white-space: nowrap;" class="text-black-50 d-block">Objetivo de Desarrollo Sostenible <small><strong>(ODS)</strong></small></span>
            <select id="ods_categorias" class="form-control custom-select select2" name="ods_categorias[]"
                    data-ajax--url="{{route('api.ods-categoria.select2')}}"
                    data-ajax--data-type="json"
                    data-ajax--cache="true"
                    data-close-on-select="false"
                    style="width:100%;"
                    data-placeholder="Seleccionar ODS"
                    multiple>
                @foreach($odsCategorias as $odsCategoria)
                    <option value="{{$odsCategoria->id}}" selected>
                        {{$odsCategoria->nombre}}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="col-md-3 col-sm-6">
            <span class="text-black-50 d-block">Población Objetivo</span>
            <select style="width:100%;" id="tipo_poblacion" name="tipo_poblacion[]"
                    class="form-control select2"
                    data-ajax--url="{{route('api.tipo-poblacion.select2')}}"
                    data-ajax--data-type="json"
                    data-ajax--cache="true"
                    data-close-on-select="false"
                    data-placeholder="Seleccionar población objetivo"
                    multiple>
                @foreach($tipoPoblaciones as $tipoPoblacion)
                    <option value="{{$tipoPoblacion->id}}" selected>
                        {{$tipoPoblacion->descripcion}}
                    </option>
                @endforeach
            </select>
        </div>

    </div>

    <div class="row">
        <div class="col-md-3 col-sm-6">
            {{--<div class="form-group">--}}
            <span class="text-black-50" for="search-input">Buscar</span>
            <input class="form-control form-control-sm mb-2" type="search" id="buscar" name="buscar"
                   value="{{old('buscar',$buscar)}}"
                   placeholder="Buscar iniciativa">
            {{--</div>--}}
        </div>
    </div>

    <p class="text-center pt-3">
        <button type="button" class="btn btn-outline-primary mr-3 btn-filter-submit"
                data-action="{{route('web.iniciativas.exportar-excel')}}">
            <i class="fe-file-text mr-2"></i>Descargar datos
        </button>

        <button type="button" class="btn btn-primary btn-filter-submit" data-action="{{route('web.iniciativas.index')}}">
            <i class="fe-filter mr-2"></i>Aplicar filtros
        </button>
    </p>
    {{--<div class="d-lg-flex align-items-start px-4 pt-4 pb-3">--}}
    {{--<div class="d-sm-flex align-items-start">--}}
    {{--<div class="form-group w-100 mb-sm-4 mr-sm-3">--}}
    {{--<label class="form-label" for="from-destination">Ciudad</label>--}}
    {{--<select id="canton_id" class="form-control custom-select select2"--}}
    {{--name="canton_id"--}}
    {{--data-ajax--url="{{route('api.canton.select2')}}"--}}
    {{--data-ajax--data-type="json"--}}
    {{--data-ajax--cache="true"--}}
    {{--required="required" multiple>--}}
    {{--@foreach($cantones as $canton)--}}
    {{--<option value="{{$canton->id}}" selected>{{$canton->nombre}}</option>--}}
    {{--@endforeach--}}
    {{--</select>--}}
    {{--</div>--}}
    {{--<div class="form-group w-100 mb-sm-4 mr-sm-3">--}}
    {{--<label class="form-label" for="to-destination">Tipo Instituci&oacute;n</label>--}}
    {{--<select id="tipo_institucion" name="tipo_institucion[]"--}}
    {{--class="form-control custom-select select2"--}}
    {{--data-ajax--url="{{route('api.tipo-institucion.select2')}}"--}}
    {{--data-ajax--data-type="json"--}}
    {{--data-ajax--cache="true"--}}
    {{--data-close-on-select="false"--}}
    {{--required="required" multiple>--}}
    {{--@foreach($tipoInstituciones as $tipoInstitucion)--}}
    {{--<option value="{{$tipoInstitucion->id}}"--}}
    {{--selected>--}}
    {{--{{$tipoInstitucion->descripcion}}--}}
    {{--</option>--}}
    {{--@endforeach--}}
    {{--</select>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="d-sm-flex align-items-start">--}}
    {{--<div class="form-group w-100 mb-sm-4 mr-sm-3">--}}
    {{--<label class="form-label">Objetivo de Desarrollo Sostenible (ODS)</label>--}}
    {{--<select id="ods_categorias" class="form-control custom-select select2" name="ods_categorias[]"--}}
    {{--data-ajax--url="{{route('api.ods-categoria.select2')}}"--}}
    {{--data-ajax--data-type="json"--}}
    {{--data-ajax--cache="true"--}}
    {{--data-close-on-select="false"--}}
    {{--required="required" multiple>--}}
    {{--@foreach($odsCategorias as $odsCategoria)--}}
    {{--<option value="{{$odsCategoria->id}}" selected>--}}
    {{--{{$odsCategoria->nombre}}--}}
    {{--</option>--}}
    {{--@endforeach--}}
    {{--</select>--}}
    {{--</div>--}}
    {{--<div class="form-group w-100 mb-sm-4 mr-sm-3">--}}
    {{--<label class="form-label">Población Objetivo</label>--}}
    {{--<select style="width:100%;" id="tipo_poblacion" name="tipo_poblacion[]"--}}
    {{--class="form-control select2"--}}
    {{--data-ajax--url="{{route('api.tipo-poblacion.select2')}}"--}}
    {{--data-ajax--data-type="json"--}}
    {{--data-ajax--cache="true"--}}
    {{--data-close-on-select="false"--}}
    {{--required="required" multiple>--}}
    {{--@foreach($tipoPoblaciones as $tipoPoblacion)--}}
    {{--<option value="{{$tipoPoblacion->id}}" selected>--}}
    {{--{{$tipoPoblacion->descripcion}}--}}
    {{--</option>--}}
    {{--@endforeach--}}
    {{--</select>--}}
    {{--</div>--}}
    {{--<div class="text-center text-sm-left mt-2 mt-sm-4 mb-4">--}}
    {{--<button class="btn btn-primary" type="submit">Aplicar</button>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
</form>
