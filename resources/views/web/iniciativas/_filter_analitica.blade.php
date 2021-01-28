<?php $routeName = Route::currentRouteName(); ?>
<form id="filter-iniciativas" class="container" action="{{route('web.iniciativas.index')}}" method="POST">
    @method('POST')
    @csrf

    <div class=" align-items-center  h-100 bg-light rounded-lg box-shadow-lg pl-2 pr-5 py-4">
        <div class="w-100 center-block text-left pl-5 pt-1">
            <div class="">
            
                <div class="row align-items-center">
                    <div class="col py-2 px-1">
                        <a class="font-weight-bold btn btn-primary btn-block"
                           href="{{route('web.iniciativas.mapa')}}">MAPA</a>
                    </div>
                    @if($routeName !== 'web.iniciativas.index')
                        <div class="col py-2 pr-1">
                            <a href="{{route('web.iniciativas.index')}}"
                               {{--style="border-color:#8B8B8B;background:#8B8B8B"--}}
                               class="font-weight-bold btn btn-primary btn-block">ACTORES</a>
                        </div>
                    @endif
                    @if($routeName !== 'web.iniciativas.analiticas')
                        <div class="col py-2 pr-3">
                            <a href="{{route('web.iniciativas.analiticas')}}"
                               class="font-weight-bold btn btn-primary btn-block">
                                ANALÍTICA
                            </a>
                        </div>
                    @endif


                </div>
               
                  
                    <div class="row">
                            <div id="c-tipo-grafica">
                                <label class="text-primary font-weight-bold d-block">
                                Tipo de gr&aacute;fico
                                </label>
                                <select id="tipo-grafica" class="form-control custom-select"
                                        placeholder="Seleccionar data">
                                    <option value="barras">Barras</option>
                                    <option value="pastel">Pastel</option>
                                    <option value="radar">Radar</option>
                                </select>
                            </div>
                    </div>
                      

                   
                          
                    <div class="row">
                            
                            <label class="w-100 text-primary font-weight-bold d-block">
                            Variable
                            </label>
                            <input type="radio" id="tipo-informacion" name="tipo-informacion" value="ods">
                            <label class="pt-2 px-1 text-primary font-weight-bold d-block" for="male">ODS</label><br>
                            <input type="radio" id="tipo-informacion1" name="tipo-informacion" value="poblacion">
                            <label class="pt-2 px-1  text-primary font-weight-bold d-block" for="female">Poblaci&oacuten</label><br>
                            <input type="radio" id="tipo-informacion2" name="tipo-informacion" value="agente">
                            <label class="pt-2 px-1  text-primary font-weight-bold d-block" for="other">Agente</label> 
                          
                    </div>  
                    
                <div class="row">
                    <label class="w-100 text-primary font-weight-bold my-2">FILTROS</label>
                    <div id="content-filtros" class="">
                        <div class="row pl-3"   id="c-tipo-institucion">
                        
                            <label class="w-100 font-weight-bold d-block text-warning">
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
                        <div class="row pl-3" >    
                            <label class="w-100 text-warning font-weight-bold  d-block  mt-1">
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
                        <div class="row pl-3" >
                                <label class="w-100 font-weight-bold d-block text-warning d-block">ODS</label>
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
                          
                         

                            <div class="col-12 mt-2 text-center">
                                <button type="submit"
                                        class="font-weight-bold mt-3 btn btn-primary btn-filter-submit"
                                        style="border-color:#FF7F00;background: #FF7F00; width: 150px;">
                                    Aplicar
                                </button>
                                <div class="">
                                    <button class="font-weight-bold btn btn btn-primary mr-3 dropdown-toggle"
                                            data-toggle="dropdown">Descargar Datos
                                        <span class="caret"></span>
                                    </button>

                                    <ul class="dropdown-menu">
                                        <li>
                                            <a type="button" type="button" class="nav-link-style ml-3 export"
                                            data-action="{{route('web.iniciativas.exportar.csv')}}">
                                                <i class="fe-download"></i> .CSV
                                            </a>
                                        </li>

                                        <li>
                                            <a type="button" class="nav-link-style ml-3 export"
                                            data-action="{{route('web.iniciativas.exportar.json')}}">
                                                <i class="fe-download"></i> .JSON
                                            </a>
                                        </li>

                                        <li>
                                            <a type="button" class="nav-link-style ml-3 export"
                                            data-action="{{route('web.iniciativas.exportar.excel')}}">
                                                <i class="fe-download"></i> .XLSX
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>

