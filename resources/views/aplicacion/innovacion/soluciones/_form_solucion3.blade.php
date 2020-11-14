<div class="panel-heading">
    <h3 class="panel-title">Paso 3</h3>
</div>
<div class="panel-body">
    <div class="row">

        <div class="col-md-8">
            <div class="col-md-12">
                
                <div class="form-group">
                    <label class="control-label">* Teléfono móvil</label>
                    <input name="iniciativa_contacto[0][celular]" type="text" required="required" class="form-control">
                </div>
                <div class="form-group">
                    <label class="control-label">* Sitio web</label>
                    <input name="iniciativa_contacto[0][correo_electronico]" maxlength="200" type="email"
                           required="required" class="form-control">
                </div>
            </div>
        </div>
        <div class="col-12 col-md-4 to-hide">
            <div class="form-group">
                <span>Redes Sociales</span>
                <div class="form-group">
                    <label for="org_facebook">Facebook relacionado a la solución</label>
                    <input pattern="^(?:http(s)?:\/\/)?[\w.-]+(?:\.[\w\.-]+)+[\w\-\._~:/?#[\]@!\$&'\(\)\*\+,;=.]+$" class="form-control @error('facebook') is-invalid @enderror" type="url" id="org_facebook" name="facebook" placeholder="Link a tu usuario">
                    @error('facebook')<div class="invalid-feedback d-inline">{{ $message }}</div>@enderror
                </div>
                <div class="form-group">
                    <label for="org_instagram">Instagram relacionado a la solución</label>
                    <input pattern="^(?:http(s)?:\/\/)?[\w.-]+(?:\.[\w\.-]+)+[\w\-\._~:/?#[\]@!\$&'\(\)\*\+,;=.]+$" class="form-control @error('instagram') is-invalid @enderror" type="url" id="org_instagram" name="instagram" placeholder="Link a tu usuario">
                    @error('instagram')<div class="invalid-feedback d-inline">{{ $message }}</div>@enderror
                </div>
                <div class="form-group">
                    <label for="org_linkedin">LinkedIn relacionado a la solución</label>
                    <input pattern="^(?:http(s)?:\/\/)?[\w.-]+(?:\.[\w\.-]+)+[\w\-\._~:/?#[\]@!\$&'\(\)\*\+,;=.]+$" class="form-control @error('linkedin') is-invalid @enderror" type="url" id="org_linkedin" name="linkedin" placeholder="Link a tu usuario">
                    @error('linkedin')<div class="invalid-feedback d-inline">{{ $message }}</div>@enderror
                </div>
                <div class="form-group">
                    <label for="org_twitter">Twitter relacionado a la solución</label>
                    <input pattern="^(?:http(s)?:\/\/)?[\w.-]+(?:\.[\w\.-]+)+[\w\-\._~:/?#[\]@!\$&'\(\)\*\+,;=.]+$" class="form-control @error('twitter') is-invalid @enderror" type="url" id="org_twitter"  name="twitter" placeholder="Link a tu usuario">
                    @error('twitter')<div class="invalid-feedback d-inline">{{ $message }}</div>@enderror
                </div>
                
                
                <div class="form-group">
                    <label for="org_instagram">YouTube relacionado a la solución</label>
                    <input pattern="^(?:http(s)?:\/\/)?[\w.-]+(?:\.[\w\.-]+)+[\w\-\._~:/?#[\]@!\$&'\(\)\*\+,;=.]+$" class="form-control @error('youtube') is-invalid @enderror" type="url" id="org_youtube" name="youtube" placeholder="Link a tu usuario">
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
            <button class="btn btn-primary mt-3 mt-sm-0" id='submitbutton' type="submit"><i class="fe-save font-size-lg mr-2"></i>Guardar</button>
        </div>
    </div>
</div>