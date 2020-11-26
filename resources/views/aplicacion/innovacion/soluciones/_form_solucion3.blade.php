<form method="POST" enctype='multipart/form-data' class="needs-validation" novalidate action="{{ $url2 }}">
    @csrf
    @method('PUT')
    <div class="panel-heading">
        <h3 class="panel-title">Paso 3</h3>
    </div>
    <div class="panel-body">
        <div class="row">

            <div class="col-md-8">
                <div class="col-md-12">             
                    <div class="form-group">
                        <label class="control-label">* Teléfono móvil</label>
                        <input name="telefono" type="text" required="required" pattern="(09(9|8))?[0-9]{7}" class="form-control" value="{{$solucion->telefono}}">
                    </div>
                    <div class="form-group">
                        <label class="control-label">Sitio web</label>
                        <input pattern="^(?:http(s)?:\/\/)?[\w.-]+(?:\.[\w\.-]+)+[\w\-\._~:/?#[\]@!\$&%'\(\)\*\+,;=.]+$"  name="web" maxlength="200" type="text"
                             class="form-control" value="{{$solucion->web}}">
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 to-hide">
                <div class="form-group">
                    <span>Redes Sociales</span>
                    <div class="form-group">
                        <label for="org_facebook">Facebook relacionado a la solución</label>
                        <input pattern="^(?:http(s)?:\/\/)?[\w.-]+(?:\.[\w\.-]+)+[\w\-\._~:/?#[\]@!\$&%'\(\)\*\+,;=.]+$"  class="form-control @error('facebook') is-invalid @enderror" type="url" id="org_facebook" name="facebook" value="{{$solucion->facebook}}" placeholder="Link a tu usuario">
                        @error('facebook')<div class="invalid-feedback d-inline">{{ $message }}</div>@enderror
                    </div>
                    <div class="form-group">
                        <label for="org_instagram">Instagram relacionado a la solución</label>
                        <input pattern="^(?:http(s)?:\/\/)?[\w.-]+(?:\.[\w\.-]+)+[\w\-\._~:/?#[\]@!\$&%'\(\)\*\+,;=.]+$" class="form-control @error('instagram') is-invalid @enderror" type="url" id="org_instagram" name="instagram" value="{{$solucion->instagram}}" placeholder="Link a tu usuario">
                        @error('instagram')<div class="invalid-feedback d-inline">{{ $message }}</div>@enderror
                    </div>
                    <div class="form-group">
                        <label for="org_linkedin">LinkedIn relacionado a la solución</label>
                        <input pattern="^(?:http(s)?:\/\/)?[\w.-]+(?:\.[\w\.-]+)+[\w\-\._~:/?#[\]@!\$&%'\(\)\*\+,;=.]+$" class="form-control @error('linkedin') is-invalid @enderror" type="url" id="org_linkedin" name="linkedin" value="{{$solucion->linkedin}}" placeholder="Link a tu usuario">
                        @error('linkedin')<div class="invalid-feedback d-inline">{{ $message }}</div>@enderror
                    </div>
                    <div class="form-group">
                        <label for="org_twitter">Twitter relacionado a la solución</label>
                        <input pattern="^(?:http(s)?:\/\/)?[\w.-]+(?:\.[\w\.-]+)+[\w\-\._~:/?#[\]@!\$&%'\(\)\*\+%;=.]+$" class="form-control @error('twitter') is-invalid @enderror" type="url" id="org_twitter"  name="twitter" value="{{$solucion->twitter}}" placeholder="Link a tu usuario">
                        @error('twitter')<div class="invalid-feedback d-inline">{{ $message }}</div>@enderror
                    </div>  
                    <div class="form-group">
                        <label for="org_instagram">YouTube relacionado a la solución</label>
                        <input pattern="^(?:http(s)?:\/\/)?[\w.-]+(?:\.[\w\.-]+)+[\w\-\._~:/?#[\]@!\$&%'\(\)\*\+\,;=.]+$" class="form-control @error('youtube') is-invalid @enderror" type="url" id="org_youtube" name="youtube" value="{{$solucion->youtube}}" placeholder="Link a tu usuario">
                        @error('youtube')<div class="invalid-feedback d-inline">{{ $message }}</div>@enderror
                    </div>
                </div>
            </div>
        </div>
        

        <div class="col-12">
            <hr class="mt-2 mb-4">
            <div class="d-flex flex-wrap justify-content-between align-items-center">
                <div class="custom-control custom-checkbox d-block">
                    <input class="custom-control-input" type="checkbox" id="verificada" name="terminos" value="1" required>
                    <label class="custom-control-label" for="verificada">* Declaro que conozco los términos y condiciones de esta plataforma y autorizo que se publiquen todos los datos registrados en este formulario.</label>
                
                </div>
                <button class="btn btn-primary mt-3 mt-sm-0" id='submitbutton' type="submit" {{$solucion->id == null ? 'disabled' : ''}} ><i class="fe-save font-size-lg mr-2"></i>Guardar</button>
                
            </div>
        </div>
    </div>
</form>