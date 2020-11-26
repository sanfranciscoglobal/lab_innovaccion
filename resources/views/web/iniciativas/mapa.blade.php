
    <div class="bg-overlay-content pb-2 mb-md-3" style="margin-top: -50px;">
        <div class="row">
 
                        <!-- Title + Delete link-->
                        
                  
                        <div style="top:15px; position:absolute; z-index:10;  width: 100%;">
                                    <div class="ml-lg-5 mx-md-3  align-items-center ">
                                        <div style="background-color: rgba(255, 255,255, 0.7);" class="d-flex flex-column h-100 rounded-lg box-shadow-lg p-2">
                                            <div class="row justify-content-center center-block text-center">
                                                <div class="col-lg-2 col-xl-2  col-md-3 col-sm-3 col-3 py-2">
                                                    <a style="border-color:#FF7F00;background: #FF7F00;white-space: normal;font-size: 16px;" href="http://127.0.0.1:8000/app/iniciativas/create" class="btn btn-primary btn-block">Registra tu iniciativa</a>
                                                </div>
                                                <div class="col-lg-2 col-xl-2  col-md-4 col-sm-3 col-3 pt-3" style="color: #5A5B75;">
                                                    <p>Encuentra tu innovación</p>
                                                </div>
                                                <div class="col-lg-3 col-md-2 col-sm-4 col-4 py-2">
                                                <div class="input-group">
                                                        <span class="input-group-prepend">
                                                            <div class="input-group-text  border-right-0"><i class="fa fa-search"></i></div>
                                                        </span>
                                                        <input id="pac-input" style=" border-top-right-radius:15px;; border-bottom-right-radius:15px;" class="form-control py-2 border-left-0 border" placeholder="Buscar" type="" value="Buscar" id="example-search-input">
                                                        <span class="input-group-append">
                                                        
                                                        </span>
                                                 </div>
                                                    
                                                </div>
                                                
                                                    
                                                <div class="col-lg-2 col-xl-1  col-md-2 col-sm-2 col-3 py-2 px-2">
                                                    <a class="btn btn-primary btn-block" style="border-color:#8B8B8B;background:#8B8B8B" href="#">MAPA</a>
                                                </div>
                                                <div class="col-lg-2 col-xl-1  col-md-2 col-sm-2 col-3 py-2 px-2">
                                                    <a href="#modal-signin" class="btn btn-primary btn-block">ACTORES</a>
                                                </div>
                                                <div class="col-lg-2 col-xl-1  col-md-2 col-sm-2 col-3 py-2 px-2">
                                                    <a href="#modal-signin" class="btn btn-primary btn-block">ANALÍTICA</a>
                                                </div>
                                                  
                                            </div>
                                        </div>
                                    </div>
            </div>
                               
            <div id="map" style="width: 100%; height: 750px;">
            </div>  

            <!-- Filtros-->    
            <div  style="bottom:20px; position:absolute; z-index:10; width: 100%;">
                                                <div class="px-lg-7 align-items-center">
                                                    <div class=" d-flex flex-column h-100 rounded-lg box-shadow-lg p-2" style="background-color: rgba(255, 255,255, 0.7);">
                                                    <form action="{{route('web.iniciativas.data')}}" method="POST">
                                                                    @method('POST')
                                                                    @csrf
                                                        <div class="row justify-content-center">
                                                            <div class="w-100 center-block text-center pt-1">
                                                            <h2 style="color:#531c6a">Filtros</h2> 
                                                                <div class="row pt-1 ml-2 mr-2 align-items-center">
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
                                                                            
                                                                        </select>
                                                                    </div>
                                                                    <div class="col-lg-2 col-xl-1  col-md-2 col-sm-3">
                                                                    <button type="submit" class="mt-3 btn btn-primary btn-filter-submit" style="border-color:#FF7F00;background: #FF7F00;" >
                                                                        Aplicar
                                                                    </button>
                                                                    </div>
                                                    
                                                                </div>
                                                        

                                                        
                                                        
                                                        
                                                        
                                                        
                                                        <p style="display: flex;" class="text-center pt-1 mt-3 justify-content-center">
    
                                                            
                                                                <button  type="button" class=" btn btn-primary mr-3 btn-filter-submit"
                                                            
                                                                        data-action="{{route('web.iniciativas.exportar-excel')}}">
                                                            
                                                                    Descargar datos
                                                            
                                                                </button>
                                                                <button type="button" class="btn btn-primary mr-3 btn-filter-submit"
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


    

     