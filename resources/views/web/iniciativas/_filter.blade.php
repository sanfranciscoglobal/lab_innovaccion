

<form id="filter-iniciativas" class="container" action="{{route('web.iniciativas.index')}}" method="POST">
    @method('POST')
    @csrf
    <div class=" row d-flex flex-column h-100 bg-light rounded-lg box-shadow-lg p-2">
        <div class="row mt-5 ml-3 mr-3 align-items-center">
            
        
            
            
            <div class="">
                <div class="row">
                <div class="col-4">
                    <a class="btn btn-primary"  >ACTORES</a>
                </div>
                <div class="col-3">
                    <a class="btn btn-primary"  >MAPA</a>
                </div>
                <div class="col-2">
                    <a class="btn btn-primary"  >ANALÍTICA</a>
                </div>
                </div>
            </div>
            <div class="col-2.5 ">
                Encuentra tu inovación
            </div>
            <div class="input-group col-2">
                
                <div class="input-group">
                    <span class="input-group-prepend">
                        <div class="input-group-text bg-transparent border-right-0"><i class="fa fa-search"></i></div>
                    </span>
                    <input style=" border-top-right-radius:15px;; border-bottom-right-radius:15px;" class="form-control py-2 border-left-0 border" placeholder="Buscar" type="" value="Buscar" id="example-search-input">
                    <span class="input-group-append">
                    
                </span>
                </div>
        
            </div>

        
            <div class="col ">
                <a href="{{route('app.iniciativas.create')}}" class="btn btn-primary" style="border-color:#fd972b;background: #fd972b;" >Registra tu iniciativa</a>
            </div>      
        </div>
        <div class="row align-items-center">
            <div class="col-xs-12 center-block text-center pt-5">
            <h2 style="color:#531c6a">Filtros</h2> 
                <div class="row pt-4 ml-2 mr-2 align-items-center">
                    <div class="col">
                        <span class="font-weight-bold  d-block" style="color:#531c6a " for="from-destination">Ciudad</span>
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
                    <div class="col">
                        <span class="font-weight-bold  d-block" style="color:#531c6a "  for="to-destination">Tipo Instituci&oacute;n</span>
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
                    <div class="col">
                        <span class="font-weight-bold  d-block" style="color:#531c6a " >ODS</span>
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
                    <div class="col">
                        <span class="font-weight-bold  d-block" style="color:#531c6a " >Población Objetivo</span>
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
                    <div class="col">
                    <button type="button" class="btn btn-primary btn-filter-submit" style="border-color:#fd972b;background: #fd972b;" data-action="{{route('web.iniciativas.index')}}">
                        Aplicar
                    </button>
                    </div>
                </div>
        

        <p class="text-center pt-3 mt-3">
            <button type="button" class="btn btn-primary mr-3 btn-filter-submit"
                    data-action="{{route('web.iniciativas.exportar-excel')}}">
                Descargar datos
            </button>

        
        </p>
    </div>

    
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

