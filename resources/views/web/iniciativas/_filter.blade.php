<form id="filter-iniciativas" class="container" action="{{route('web.iniciativas.index')}}" method="POST">
    @method('POST')
    @csrf
    <div class=" align-items-center  h-100 bg-light rounded-lg box-shadow-lg p-6">
        <div class="w-100 center-block text-left pl-5 pt-1">


            <div class="">
                <div class="row align-items-center">
                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                        <div class="row">
                            <div class="col py-2 px-2">
                                <a class="font-weight-bold btn btn-primary btn-block" href="#">MAPA</a>
                            </div>
                            <div class="col py-2 pr-2">
                                <a href="#modal-signin" style="border-color:#8B8B8B;background:#8B8B8B"
                                   class="font-weight-bold btn btn-primary btn-block">ACTORES</a>
                            </div>
                            <div class="col col-lg-5 py-2 pr-5">
                                <a href="{{route('web.iniciativas.analiticas')}}"
                                   class="font-weight-bold btn btn-primary btn-block">
                                    ANALÍTICA
                                </a>
                            </div>

                        </div>
                    </div>
                    <div class="my-2 col-md-6 col-lg-2 col-sm-12 ">
                        Encuentra tu innovación
                    </div>
                    <div class="my-2 col-lg-3 col-sm-12 col-md-6">

                        <div class="input-group">
                            <span class="input-group-prepend">
                                <div class="input-group-text  border-right-0"><i class="fa fa-search"></i></div>
                            </span>
                            <input id="pac-input"
                                   style=" border-top-right-radius:15px;; border-bottom-right-radius:15px;"
                                   class="form-control py-2 border-left-0 border pac-target-input" placeholder="Buscar"
                                   type="" value="Buscar" autocomplete="off">
                            <span class="input-group-append">

                            </span>
                        </div>

                    </div>


                    <div class="col-lg-3 col-md-12">
                        <a href="{{route('app.iniciativas.create')}}" class="font-weight-bold btn btn-primary"
                           style="border-color:#fd972b;background: #fd972b;">Registra tu iniciativa</a>
                    </div>
                </div>

                <div class="row pt-1 ml-2 mr-2 align-items-center">
                    <div class="w-100 center-block text-left pl-md-5 pt-1">
                        <h2 style="color:#531c6a" class="align-items-center">Filtros</h2>
                        <div class="row pt-1 ml-md-2 mr-md-2 align-items-center">
                            <div class="col-md-3 col-12">
                                <span class="ml-md-3 font-weight-bold  d-block" style="font-size: 15px;color:#531c6a "
                                      for="to-destination">Tipo Instituci&oacute;n</span>
                                <select id="tipo_institucion" name="tipo_institucion[]"
                                        class="form-control custom-select select2"
                                        data-ajax--url="{{route('api.tipo-institucion.select2')}}"
                                        data-ajax--data-type="json"
                                        data-ajax--cache="true"
                                        data-close-on-select="false"
                                        data-placeholder="Seleccionar tipo institución"
                                        style="width:100%;"
                                        multiple>

                                </select>
                            </div>
                            <div class="col-md-3 col-12">
                                <span class="ml-md-3 py-2 mt-1 mb-1  py-md-0 mt-sm-0 mb-sm-0 font-weight-bold  d-block"
                                      style="font-size: 15px;color:#531c6a ">ODS</span>
                                <select id="ods_categorias" class="form-control custom-select select2"
                                        name="ods_categorias[]"
                                        data-ajax--url="{{route('api.ods-categoria.select2')}}"
                                        data-ajax--data-type="json"
                                        data-ajax--cache="true"
                                        data-close-on-select="false"
                                        style="width:100%;"
                                        data-placeholder="Seleccionar ODS"
                                        multiple>
                                </select>
                            </div>
                            <div class="col-md-3 col-12">
                                <span class="ml-md-3 font-weight-bold  d-block" style="font-size: 15px;color:#531c6a ">Población Objetivo</span>
                                <select style="width:100%;" id="tipo_poblacion" name="tipo_poblacion[]"
                                        class="form-control select2"
                                        data-ajax--url="{{route('api.tipo-poblacion.select2')}}"
                                        data-ajax--data-type="json"
                                        data-ajax--cache="true"
                                        data-close-on-select="false"
                                        data-placeholder="Seleccionar población objetivo"
                                        multiple>
                                </select>
                            </div>
                            <div class="col-lg-2 col-xl-2  col-md-2 col-sm-3 pt-3">
                                <button type="submit" class="font-weight-bold mt-3 btn btn-primary btn-filter-submit"
                                        style="border-color:#FF7F00;background: #FF7F00; width: 150px;">
                                    Aplicar
                                </button>
                            </div>
                        </div>
                        <p style="display: flex;" class="text-center pt-1 mt-3 justify-content-center">

                            <button style="width: 220px;" type="button"
                                    class="col-sm-12 col-md-6 col-lg-3 font-weight-bold btn btn-primary mr-5 btn-filter-submit"
                                    data-action="{{route('web.iniciativas.exportar-excel')}}">
                                Descargar datos
                            </button>
                            <button type="button"
                                    class="col-sm-12 col-md-6 col-lg-3 font-weight-bold btn btn-primary mr-3 btn-filter-submit"
                                    style="border-color:#7A3240;background:#7A3240 "
                                    data-action="{{route('web.iniciativas.exportar-excel')}}">
                                <img src="{{ asset('images/Group 161.svg')}}"/>
                                Ver mapa completo
                            </button>
                        </p>
                    </div>


                    {{--</p>--}}
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
            </div>
        </div>
    </div>
</form>

