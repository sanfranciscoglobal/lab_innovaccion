@extends('layouts.aplicacion.app')

@section('content')
  
    <div class="position-relative bg-purple-gradient" style="height: 480px;">
        <div class="cs-shape cs-shape-bottom cs-shape-slant bg-secondary d-none d-lg-block">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 3000 260">
                <polygon fill="currentColor" points="0,257 0,260 3000,260 3000,0"></polygon>
            </svg>
        </div>
    </div>
    <div class="container bg-overlay-content pb-4 mb-md-3" style="margin-top: -350px;">
        <div class="row">
            <!-- Content-->
            <div class="col-lg-8 offset-lg-2">
                <div class="d-flex flex-column h-100 bg-light rounded-lg box-shadow-lg p-4">
                    <div class="py-2 p-md-3">
                        <!-- Title + Delete link-->
                        
                              
                                <div class="row to-hide d-none">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label for="org_direccion">* Ubicación de su organización</label>
                                            <input class="form-control req @error('direccion') is-invalid @enderror" type="text" id="direccion" value="" name="direccion" placeholder="Dirección del lugar" required>
                                        </div>
                                        @error('direccion')<div class="invalid-feedback d-inline">{{ $message }}</div>@enderror
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="org_canton" class="control-label">Cantón</label><br>
                                            <select class="form-control custom-select select2" style="width:100%" id="org_canton" name="canton_id" data-ajax--url="" data-ajax--data-type="json" data-ajax--cache="true" data-close-on-select="false">
                                                <option value="" disabled selected>Selecciona uno</option>
                                               
                                            </select>
                                            <div class="invalid-feedback">Selecciona un canton.</div>
                                            <div class="valid-feedback">Ok!</div>
                                            @error('canton_id')<div class="invalid-feedback d-inline">{{ $message }}</div>@enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div id="map" style="width: 100%; height: 350px;"></div>
                                        <input type="hidden" type="text" id="latitud" name="latitud" value="1">
                                        <input type="hidden" type="text" id="longitud" name="longitud" value="1">
                                        @error('latitud')<div class="invalid-feedback d-inline">{{ $message }}</div>@enderror
                                        @error('longitud')<div class="invalid-feedback d-inline">{{ $message }}</div>@enderror
                                    </div>
                                </div>
                           
                            
                        </div>
                    </div>
                </div>
            </div>
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
