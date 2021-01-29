<?php $routeName = Route::currentRouteName(); ?>
<form id="filter-iniciativas" action="{{route('web.iniciativas.index')}}" method="POST">
    @method('POST')
    @csrf

    <div class="container bg-light rounded-lg box-shadow-lg my-4 p-4">
        <div class="d-block">
            <div class="w-100 m-0 row justify-content-between mb-3">
                <a href="{{route('web.iniciativas.mapa')}}" class="col m-1 font-weight-bold btn btn-primary">
                    MAPA
                </a>

                @if($routeName !== 'web.iniciativas.index')
                <a href="{{route('web.iniciativas.index')}}" class="col m-1 font-weight-bold btn btn-primary">
                    ACTORES
                </a>
                @endif

                @if($routeName !== 'web.iniciativas.analiticas')
                <a href="{{route('web.iniciativas.analiticas')}}" class="col m-1 font-weight-bold btn btn-primary btn-block">
                    ANALÍTICA
                </a>
                @endif
            </div>

            <div class="w-100 m-0 row mb-3 w-100" id="c-tipo-grafica">
                <h6 class="text-primary font-weight-bold">
                    Tipo de gr&aacute;fico
                </h6>
                <select id="tipo-grafica" class="form-control form-control-sm"
                        placeholder="Seleccionar data">
                    <option value="barras">Barras</option>
                    <option value="pastel">Pastel</option>
                    <option value="radar">Radar</option>
                </select>
            </div>

            <div class="w-100 m-0 row mb-3">
                <h6 class="w-100 text-primary font-weight-bold">
                Variable
                </h6>
                <div class="col custom-control custom-radio">
                    <input class="custom-control-input" type="radio" name="tipo-informacion" id="tipo-informacion" value="ods">
                    <label class="custom-control-label text-primary font-weight-bold" for="tipo-informacion">
                        ODS
                    </label>
                </div>
                <div class="col custom-control custom-radio">
                    <input class="custom-control-input" type="radio" name="tipo-informacion" id="tipo-informacion1" value="poblacion">
                    <label class="custom-control-label text-primary font-weight-bold" for="tipo-informacion1">
                        Población
                    </label>
                </div>
                <div class="col custom-control custom-radio">
                    <input class="custom-control-input" type="radio" name="tipo-informacion" id="tipo-informacion2" value="agente">
                    <label class="custom-control-label text-primary font-weight-bold" for="tipo-informacion2">
                        Agente
                    </label>
                </div>
            </div>

            <div class="w-100 m-0">
                <h6 class="w-100 text-primary font-weight-bold">
                    FILTROS
                </h6>
                <div class="form-group" id="c-tipo-institucion">
                    <label class="w-100 font-weight-bold text-warning" for="tipo_institucion">
                        Tipo Instituci&oacute;n
                    </label>
                    <select id="tipo_institucion"
                        name="tipo_institucion[]"
                        class="form-control custom-select select2"
                        data-ajax--url="{{route('api.tipo-institucion.select2')}}"
                        data-ajax--data-type="json"
                        data-ajax--cache="true"
                        data-close-on-select="false"
                        data-placeholder="Seleccionar tipo institución"
                        style="width:100%;"
                        multiple>
                        @if(isset($tipoInstituciones))
                        @foreach($tipoInstituciones as $tipoInstitucion)
                        <option value="{{$tipoInstitucion->id}}"
                        selected="selected">{{$tipoInstitucion->descripcion}}</option>
                        @endforeach
                        @endif
                    </select>
                </div>
                <div class="form-group">
                    <label class="w-100 text-warning font-weight-bold" for="tipo_poblacion">
                        Población Objetivo
                    </label>
                    <select style="width:100%;"
                        id="tipo_poblacion"
                        name="tipo_poblacion[]"
                        class="form-control select2 pl-1"
                        data-ajax--url="{{route('api.tipo-poblacion.select2')}}"
                        data-ajax--data-type="json"
                        data-ajax--cache="true"
                        data-close-on-select="false"
                        data-placeholder="Seleccionar población objetivo"
                        multiple>
                        @if(isset($tipoPoblaciones))
                        @foreach($tipoPoblaciones as $tipoPoblacion)
                        <option value="{{$tipoPoblacion->id}}"
                        selected="selected">{{$tipoPoblacion->descripcion}}</option>
                        @endforeach
                        @endif
                    </select>
                </div>
                <div class="form-group">
                    <label class="w-100 font-weight-bold text-warning" for="ods_categorias">
                        ODS
                    </label>
                    <select id="ods_categorias" class="form-control custom-select select2"
                        name="ods_categorias[]"
                        data-ajax--url="{{route('api.ods-categoria.select2')}}"
                        data-ajax--data-type="json"
                        data-ajax--cache="true"
                        data-close-on-select="false"
                        style="width:100%;"
                        data-placeholder="Seleccionar ODS"
                        multiple>
                        @if(isset($odsCategorias))
                        @foreach($odsCategorias as $odsCategoria)
                        <option value="{{$odsCategoria->id}}"
                        selected="selected">{{$odsCategoria->nombre}}</option>
                        @endforeach
                        @endif
                    </select>
                </div>
            </div>


            <div class="w-100 m-0 mb-3">
                <button type="submit" class="btn btn-block btn-warning font-weight-bold btn-filter-submit">
                    Aplicar
                </button>
            </div>

            <div class="w-100 m-0">
                <div class="dropdown">
                    <button class="btn btn-block btn-primary dropdown-toggle font-weight-bold "
                            data-toggle="dropdown">Descargar Datos
                        <span class="caret"></span>
                    </button>

                    <ul class="dropdown-menu">
                        <li class="dropdown-item">
                            <a type="button" type="button" class="nav-link-style export"
                            data-action="{{route('web.iniciativas.exportar.csv')}}">
                                <i class="fe-download"></i> .CSV
                            </a>
                        </li>

                        <li class="dropdown-item">
                            <a type="button" class="nav-link-style export"
                            data-action="{{route('web.iniciativas.exportar.json')}}">
                                <i class="fe-download"></i> .JSON
                            </a>
                        </li>

                        <li class="dropdown-item">
                            <a type="button" class="nav-link-style export"
                            data-action="{{route('web.iniciativas.exportar.excel')}}">
                                <i class="fe-download"></i> .XLSX
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</form>

