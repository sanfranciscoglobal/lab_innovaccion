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
                                                <div class="col">
                                                    <a class="btn btn-primary" href="#modal-signin" >Registra tu iniciativa</a>
                                                </div>
                                                <div class="col-lg-2 ">
                                                    Encuentra tu inovación
                                                </div>
                                                <div class="col-lg-2">
                                                    <input type="search" id="pac-input"  class="form-control"   placeholder="Buscar"/>
                                                </div>
                                                <div class="col">
                                                    <a class="btn btn-primary" href="#modal-signin" >MAPA</a>
                                                </div>
                                                <div class="col">
                                                    <a class="btn btn-primary" href="#modal-signin" >ACTORES</a>
                                                </div>
                                                <div class="col">
                                                    <a class="btn btn-primary" href="#modal-signin" >ANALÍTICA</a>
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
                                    
                               
                                <div class="row">
                                    <div class="col-md-3 col-sm-6">
                                        <span class="text-black-50 d-block" for="from-destination">Ciudad</span>
                                        <select id="canton_id" class="form-control custom-select select2 select2-hidden-accessible" name="canton_id[]" data-ajax--url="http://127.0.0.1:8000/api/obtener-canton-select2" data-ajax--data-type="json" data-ajax--cache="true" style="width:100%;" data-placeholder="Seleccionar ciudad" multiple="" data-select2-id="canton_id" tabindex="-1" aria-hidden="true">
                                                        </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="1" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1" aria-disabled="false"><ul class="select2-selection__rendered"><li class="select2-search select2-search--inline"><input class="select2-search__field" type="search" tabindex="0" autocomplete="off" autocorrect="off" autocapitalize="none" spellcheck="false" role="searchbox" aria-autocomplete="list" placeholder="Seleccionar ciudad" style="width: 225.983px;"></li></ul></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                    </div>
                                    <div class="col-md-3 col-sm-6">
                                        <span class="text-black-50 d-block" for="to-destination">Tipo Institución</span>
                                        <select id="tipo_institucion" name="tipo_institucion[]" class="form-control custom-select select2 select2-hidden-accessible" data-ajax--url="http://127.0.0.1:8000/api/obtener-tipo-institucion-select2" data-ajax--data-type="json" data-ajax--cache="true" data-close-on-select="false" data-placeholder="Seleccionar tipo institución" style="width:100%;" multiple="" data-select2-id="tipo_institucion" tabindex="-1" aria-hidden="true">
                                                        </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="2" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1" aria-disabled="false"><ul class="select2-selection__rendered"><li class="select2-search select2-search--inline"><input class="select2-search__field" type="search" tabindex="0" autocomplete="off" autocorrect="off" autocapitalize="none" spellcheck="false" role="searchbox" aria-autocomplete="list" placeholder="Seleccionar tipo institución" style="width: 225.983px;"></li></ul></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                    </div>
                                    <div class="col-md-3 col-sm-6">
                                        <span style="white-space: nowrap;" class="text-black-50 d-block">Objetivo de Desarrollo Sostenible <small><strong>(ODS)</strong></small></span>
                                        <select id="ods_categorias" class="form-control custom-select select2 select2-hidden-accessible" name="ods_categorias[]" data-ajax--url="http://127.0.0.1:8000/api/obtener-ods-categoria-select2" data-ajax--data-type="json" data-ajax--cache="true" data-close-on-select="false" style="width:100%;" data-placeholder="Seleccionar ODS" multiple="" data-select2-id="ods_categorias" tabindex="-1" aria-hidden="true">
                                                        </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="3" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1" aria-disabled="false"><ul class="select2-selection__rendered"><li class="select2-search select2-search--inline"><input class="select2-search__field" type="search" tabindex="0" autocomplete="off" autocorrect="off" autocapitalize="none" spellcheck="false" role="searchbox" aria-autocomplete="list" placeholder="Seleccionar ODS" style="width: 225.983px;"></li></ul></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                    </div>
                                    <div class="col-md-3 col-sm-6">
                                        <span class="text-black-50 d-block">Población Objetivo</span>
                                        <select style="width:100%;" id="tipo_poblacion" name="tipo_poblacion[]" class="form-control select2 select2-hidden-accessible" data-ajax--url="http://127.0.0.1:8000/api/obtener-tipo-poblacion-select2" data-ajax--data-type="json" data-ajax--cache="true" data-close-on-select="false" data-placeholder="Seleccionar población objetivo" multiple="" data-select2-id="tipo_poblacion" tabindex="-1" aria-hidden="true">
                                                        </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="4" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1" aria-disabled="false"><ul class="select2-selection__rendered"><li class="select2-search select2-search--inline"><input class="select2-search__field" type="search" tabindex="0" autocomplete="off" autocorrect="off" autocapitalize="none" spellcheck="false" role="searchbox" aria-autocomplete="list" placeholder="Seleccionar población objetivo" style="width: 225.983px;"></li></ul></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                    </div>

                                </div>
                           
                            
                        </div>
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
