
    <div  class="bg-overlay-content pb-2 mb-md-3" style="margin-top: -50px;">
        <div class="row">
            <div style="top:15px; position:absolute; z-index:10;  width: 100%;">
                <div class="ml-lg-5 mx-md-3 px-7 align-items-center d-none d-lg-block ">
                    <div id="mapacabezagrande" style="background-color: rgba(255, 255,255, 0.7);" class="py-3 d-flex flex-column h-100 rounded-lg box-shadow-lg p-2">
                        <div class="row justify-content-center center-block text-center">
                        
                            <div class="col-7">
                                
                                <div class="row">
                                    <div class="col-8 pl-5 py-2">
                                        <div class="row">
                                            <div class="col-7 pl-5 py-2">
                                            <a style="border-color:#FF7F00;background: #FF7F00;white-space: normal;font-size: 16px; " href="http://127.0.0.1:8000/app/iniciativas/create" class="font-weight-bold btn btn-primary btn-block">Registra tu iniciativa</a>
                                            </div>
                                            <div style="color: #5A5B75;" class="col-5 pt-3">
                                                <p>Encuentra tu innovación</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4 py-2">
                                        <div class="input-group">
                                                <span class="input-group-prepend">
                                                    <div class="input-group-text  border-right-0"><i class="fa fa-search"></i></div>
                                                </span>
                                                <input id="pac-input" style=" border-top-right-radius:15px;; border-bottom-right-radius:15px;" class="form-control py-2 border-left-0 border pac-target-input" placeholder="Buscar" type="" value="Buscar" autocomplete="off">
                                                <span class="input-group-append">
                                                
                                                </span>
                                        </div>
                                    
                                    </div>
                                
                                </div>
                            </div>
                            <div class="col-5">
                                <div class="row">
                                    <div class="col py-2 px-2">
                                        <a class="font-weight-bold btn btn-primary btn-block" style="border-color:#8B8B8B;background:#8B8B8B" href="#">MAPA</a>
                                    </div>
                                    <div class="col py-2 pr-2">
                                        <a href="#modal-signin" class="font-weight-bold btn btn-primary btn-block">ACTORES</a>
                                    </div>
                                    <div class="col py-2 pr-5">
                                        <a href="#modal-signin" class="font-weight-bold btn btn-primary btn-block">ANALÍTICA</a>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <div id="mapacabezapequeño" style="background-color: rgba(255, 255,255, 0.7);" class="d-block d-lg-none py-3 d-flex flex-column h-100 rounded-lg box-shadow-lg p-2 mx-4">
                        <div class="row justify-content-center center-block text-center">
                            <div class="col-2">
                                <a id="filtros" href="#modal-filtros" data-toggle="modal" class="btn btn-primary">
                                    <i class="fas fa-filter"></i>
                                </a >
                            </div>

                            <div class="col">
                                <div class="input-group">
                                        <span class="input-group-prepend">
                                            <div class="input-group-text  border-right-0"><i class="fa fa-search"></i></div>
                                        </span>
                                        <input id="pac-input" style=" border-top-right-radius:15px;; border-bottom-right-radius:15px;" class="form-control py-2 border-left-0 border pac-target-input" placeholder="Buscar" type="" value="Buscar" autocomplete="off">
                                        <span class="input-group-append">
                                        
                                        </span>
                                </div>
                            </div>
                        </div>
                    </div> 
                </div>
                        <!-- Title + Delete link-->
                <div id="map" style="width: 97%; height: 950px;">
                </div>  

                <!-- Filtros-->    
                <div  id="mapafiltrosgrande" class="d-none d-lg-block" style="bottom:20px; position:absolute; z-index:10; width: 100%;">
                    <div class="px-lg-7 align-items-center">
                        <div class=" d-flex flex-column h-100 rounded-lg box-shadow-lg p-2" style="background-color: rgba(255, 255,255, 0.7);">
                        <form action="{{route('web.iniciativas.data')}}" method="POST">
                                        @method('POST')
                                        @csrf
                            <div class="row justify-content-center">
                                <div class="w-100 center-block text-left pl-5 pt-1">
                                <h2 style="color:#531c6a">Filtros</h2> 
                                    <div class="row pt-1 ml-2 mr-2 align-items-center">
                                        <div class="col">
                                            <span class="ml-3 font-weight-bold  d-block" style="font-size: 15px;color:#531c6a "  for="to-destination">Tipo Instituci&oacute;n</span>
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
                                        <div class="col">
                                            <span class="ml-3 py-2 mt-1 mb-1  py-md-0 mt-sm-0 mb-sm-0 font-weight-bold  d-block" style="font-size: 15px;color:#531c6a " >ODS</span>
                                            <select id="ods_categorias" class="form-control custom-select select2" name="ods_categorias[]"
                                                    data-ajax--url="{{route('api.ods-categoria.select2')}}"
                                                    data-ajax--data-type="json"
                                                    data-ajax--cache="true"
                                                    data-close-on-select="false"
                                                    style="width:100%;"
                                                    data-placeholder="Seleccionar ODS"
                                                    multiple>
                                            </select>
                                        </div>
                                        <div class="col">
                                            <span class="ml-3 font-weight-bold  d-block" style="font-size: 15px;color:#531c6a " >Población Objetivo</span>
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
                                        <button type="submit" class="font-weight-bold mt-3 btn btn-primary btn-filter-submit" style="border-color:#FF7F00;background: #FF7F00; width: 150px;" >
                                            Aplicar
                                        </button>
                                        </div>
                                    </div>
                                    <p style="display: flex;" class="text-center pt-1 mt-3 justify-content-center">
                                            
                                    <button style="width: 220px;" type="button" class=" font-weight-bold btn btn-primary mr-5 btn-filter-submit"
                                            data-action="{{route('web.iniciativas.exportar-excel')}}">
                                        Descargar datos
                                    </button>
                                    <button type="button" class="font-weight-bold btn btn-primary mr-3 btn-filter-submit"
                                            style="border-color:#7A3240;background:#7A3240 "
                                            data-action="{{route('web.iniciativas.exportar-excel')}}">
                                            <img src="{{ asset('images/Group 161.svg')}}"/>
                                        Ver mapa completo
                                    </button>
                                    </p>
                                </div>
                            </form>
                    </div>
                </div>
                    
            </div>
                          
                      
            <!-- Content-->
            
        </div>
    </div>

   