<div class="col-md-8">
    <!-- Phone Input -->
    <div class="form-group">
        <label for="tel-input">* Teléfono de contacto</label>
        <input class="form-control" type="tel" id="tel-input" name="telefono" value="{{ old('telefono', $problema->telefono) }}" pattern="(09(9|8))?[0-9]{7}" required>
        @error('telefono')<div class="invalid-feedback d-inline">{{ $message }}</div>@enderror
    </div>
    <!-- URL Input -->
    <div class="form-group">
        <label for="url-input">Sitio web</label>
        <input class="form-control" type="url" id="url-input" name="web" maxlength="250" value="{{ old('web', $problema->web) }}">
        @error('web')<div class="invalid-feedback d-inline">{{ $message }}</div>@enderror
    </div>
    <!-- URL Input -->
    <div class="form-group">
        <label for="url-input">Video relacionado</label>
        <input class="form-control" type="url" id="url-input" name="youtube" maxlength="250" value="{{ old('youtube', $problema->youtube) }}">
        @error('youtube')<div class="invalid-feedback d-inline">{{ $message }}</div>@enderror
    </div>
    <div class="form-group">
        <label class="control-label">* Ubicación <i class="fe-info text-primary" style="font-size: 22px;
            margin-top: -6px;" type="button" data-toggle="tooltip" data-placement="right"
                                                                                            title="En este campo ingresa las calles que corresponden a tu ubicación y selecciona con el ícono la dirección exacta, de ser necesario."></i></label>
        <input maxlength="200" type="text" required="required" class="form-control"
               placeholder="Enter Company Address" id="direccion" name="direccion"
               value="{{ old('direccion', $problema->direccion) }}"/>
        @error('direccion')<div class="invalid-feedback d-inline">{{ $message }}</div>@enderror
    </div>
    <div class="row mb-4">
        <div class="col">
            <div id="map" style="width:100%; height: 350px;"></div>
            <input type="hidden" id="latitud" name="latitud" value="{{ old('latitud', $problema->latitud) }}" required>
            @error('latitud')<div class="invalid-feedback d-inline">{{ $message }}</div>@enderror
            <input type="hidden" id="longitud" name="longitud" value="{{ old('longitud', $problema->longitud) }}" required>
            @error('longitud')<div class="invalid-feedback d-inline">{{ $message }}</div>@enderror
        </div>
    </div>
</div>
<div class="col-md-4">
    {{-- <div class="controls-container mb-3">
        <label for="pdf">Foto relacionado al problema identificado <span style="color: gray">(máx. 1MB)</span></label>
        @if($method == 'POST')
        <div class="cs-file-drop-area">
            <div class="cs-file-drop-icon fe-upload"></div>
            <span class="cs-file-drop-message">ARRASTRA Y SUELTA AQUÍ PARA SUBIR</span>
            <input type="file" class="cs-file-drop-input" title="Avatar del usuario" name="imagen" id="foto" accept="image/gif, image/jpeg, image/png" size="1000000"/>
            <button type="button" class="cs-file-drop-btn btn btn-primary btn-sm">O selecciona archivo</button>
            <div class="invalid-feedback">Agrega una imagen antes de enviar.</div>
        </div>
        <small id="emailHelp" class="form-text text-muted">Max. 1Mb</small>
        @else
        @php
            $img = asset('img/logo/logo-icon-footer.png');
            if(Storage::disk('problemas')->exists($problema->imagen)){
                $img =  asset('storage/problemas/'.$problema->imagen);
            }
        @endphp
        <input type="file" class="dropify" title="Avatar del usuario" name="imagen" id="foto" data-default-file="{{$img}}" accept="image/gif, image/jpeg, image/png" size="1000000">
        <small id="emailHelp" class="form-text text-muted">Max. 2Mb</small>
        @endif
        @error('imagen')<div class="invalid-feedback d-inline">{{ $message }}</div>@enderror
    </div> --}}
    <div class="controls-container mb-3">
        @php
            $img = asset('img/logo/logo-icon-footer.png');
            if(Storage::disk('problemas')->exists($problema->imagen)){
                $img =  asset('storage/problemas/'.$problema->imagen);
            }
        @endphp
        <label for="imagen">Foto relacionado al problema identificado <span style="color: gray">(máx. 2MB)</span></label>
        <input type="file" 
                    class="form-control dropify" 
                    accept="image/gif, image/jpeg, image/png" 
                    id="imagen" maxlength='250' 
                    name="imagen" 
                    size="2000000"
                    data-default-file="{{$img}}"
                    data-max-file-size="2M">
        
        <div class="invalid-feedback" id='imagen_error'>Inserta una imagen.</div>
        <div class="valid-feedback">Bien!</div>
        @error('imagen')<div class="invalid-feedback d-inline">{{ $message }}</div>@enderror
    </div>
    <h4 class="h3">Redes sociales de los problemas identificados</h4>
    <div class="form-group">
        <label for="url-input">Facebook</label>
        <input class="form-control" type="url" id="url-input" name="facebook" maxlength="250" value="{{ old('facebook', $problema->facebook) }}" placeholder="Link a tu usuario">
        @error('facebook')<div class="invalid-feedback d-inline">{{ $message }}</div>@enderror
    </div>
    <div class="form-group">
        <label for="url-input">Instagram</label>
        <input class="form-control" type="url" id="url-input" name="instagram" maxlength="250" value="{{ old('instagram', $problema->instagram) }}" placeholder="Link a tu usuario">
        @error('instagram')<div class="invalid-feedback d-inline">{{ $message }}</div>@enderror
    </div>
    <div class="form-group">
        <label for="url-input">LinkedIn</label>
        <input class="form-control" type="url" id="url-input" name="linkedin" maxlength="250" value="{{ old('linkedin', $problema->linkedin) }}" placeholder="Link a tu usuario">
        @error('linkedin')<div class="invalid-feedback d-inline">{{ $message }}</div>@enderror
    </div>
    <div class="form-group">
        <label for="url-input">Twitter</label>
        <input class="form-control" type="url" id="url-input" name="twitter" maxlength="250" value="{{ old('twitter', $problema->twitter) }}" placeholder="Link a tu usuario">
        @error('twitter')<div class="invalid-feedback d-inline">{{ $message }}</div>@enderror
    </div>
</div>
