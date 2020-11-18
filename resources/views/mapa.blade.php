@extends('layouts.aplicacion.app')

@section('content')
  
    <div class="position-relative bg-purple-gradient" style="height: 480px;">
        <div class="cs-shape cs-shape-bottom cs-shape-slant bg-secondary d-none d-lg-block">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 3000 260">
                <polygon fill="currentColor" points="0,257 0,260 3000,260 3000,0"></polygon>
            </svg>
        </div>
    </div>
    <div class="bg-overlay-content pb-2 mb-md-3" style="margin-top: -350px;">
        <div class="row">
 
                        <!-- Title + Delete link-->
                        
                  
                                <div  style="margin: 2% 0% 0% 1%; position:absolute; z-index:10; width: 90%;">
                                    <div class="offset-lg-2 offset-rg-2">
                                        <div class="d-flex flex-column h-100 bg-light rounded-lg box-shadow-lg p-2">
                                            <div class="row">
                                                <div class="col-3">
                                                    <a class="btn btn-primary"  style="border-color:#fd972b;background: #fd972b;" href="#modal-signin" >Registra tu iniciativa</a>
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
                                                            <a class="btn btn-primary" href="#modal-signin" >MAPA</a>
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
                               
                                    
                                        <div id="map" style="width: 100%; height: 550px;"></div>
                                        <input type="hidden" type="text" id="latitud" name="latitud" value="1">
                                        <input type="hidden" type="text" id="longitud" name="longitud" value="1">
                                        @error('latitud')<div class="invalid-feedback d-inline">{{ $message }}</div>@enderror
                                        @error('longitud')<div class="invalid-feedback d-inline">{{ $message }}</div>@enderror
                                    
    <div class=" row d-flex flex-column h-100 bg-light rounded-lg box-shadow-lg p-2">
       
        <div class="row align-items-center">
            <div class="col-xs-12 center-block text-center pt-5">
            <h2 style="color:#531c6a">Filtros</h2> 
                <div class="row pt-4 ml-2 mr-2 align-items-center">
                    
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
                                
                            
                      
            <!-- Content-->
            
        </div>
    </div>


    
@endsection
@section('footer')

<script src="{{ asset('js/mapacompleto.js') }}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBeRzOQr6pAx5Ts1MUHxJRfX6ZjK3ZWJ40&libraries=places&callback=initMap" async defer></script>

<script>
    //  SET TO NULL IF NO OLD DATA
    let user_lat = 1;
    let user_lng = 1;
</script>
@endsection
