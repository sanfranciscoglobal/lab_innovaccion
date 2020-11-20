
    <div class="bg-overlay-content pb-2 mb-md-3" style="margin-top: -50px;">
        <div class="row">
 
                        <!-- Title + Delete link-->
                        
                  
                                <div  style="margin: 2% 0% 0% 1%; position:absolute; z-index:10; width: 90%;">
                                    <div class="offset-lg-2 offset-rg-2 align-items-center">
                                        <div class="d-flex flex-column h-100 bg-light rounded-lg box-shadow-lg p-2">
                                            <div class="row">
                                                <div class="col-3">
                                                    <a class="btn btn-primary"  style="border-color:#fd972b;background: #fd972b;" href="{{route('app.iniciativas.create')}}" >Registra tu iniciativa</a>
                                                </div>
                                                <div class="col ">
                                                    Encuentra tu inovación
                                                </div>
                                                <div class="col-2">
                                                    <input type="search" id="pac-input"  class="form-control"   placeholder="Buscar"/>
                                                </div>
                                                <div style="width:37%">
                                                    <div class="row" >
                                                        <div class="col-3">
                                                            <a class="btn btn-primary" href="#" >MAPA</a>
                                                        </div>
                                                        <div class="col-4">
                                                            <a class="btn btn-primary" href="#modal-signin" >ACTORES</a>
                                                        </div>
                                                        <div class="col">
                                                            <a class="btn btn-primary" href="#modal-signin" >ANALÍTICA</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                               
                                    
                                        <div id="map" style="width: 100%; height: 750px;"></div>
                                        <input type="hidden" type="text" id="latitud" name="latitud" value="1">
                                        <input type="hidden" type="text" id="longitud" name="longitud" value="1">
                                        @error('latitud')<div class="invalid-feedback d-inline">{{ $message }}</div>@enderror
                                        @error('longitud')<div class="invalid-feedback d-inline">{{ $message }}</div>@enderror

        <div  style="margin: 40% 0% 0% 1%; position:absolute; z-index:10; width: 85%;">
            <div class="offset-lg-3 offset-rg-2 align-items-center">
                <div class=" d-flex flex-column h-100 bg-light rounded-lg box-shadow-lg p-2">
                <form action="{{route('web.iniciativas.data')}}" method="POST">
                                @method('POST')
                                @csrf
                    <div class="row ">
                        <div class="col-xs-12 center-block text-center pt-1">
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
                                <div class="col-2">
                                <button type="submit" class="btn btn-primary btn-filter-submit" style="border-color:#fd972b;background: #fd972b;" >
                                    Aplicar
                                </button>
                                </div>
                   
                            </div>
                    

                    
                    
                    
                    
                    
                    <p class="text-center pt-1 mt-3">
                    
                        <button type="button" class="btn btn-primary mr-3 btn-filter-submit"
                    
                                data-action="{{route('web.iniciativas.exportar-excel')}}">
                    
                            Descargar datos
                    
                        </button>


                    
                    
                    
                    </p>
                </form>
                </div>
            </div>
        </div>                            
                          
                      
            <!-- Content-->
            
        </div>
    </div>


    

