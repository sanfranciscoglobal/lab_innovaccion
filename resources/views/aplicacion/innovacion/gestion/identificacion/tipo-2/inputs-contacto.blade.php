<div class="col-md-8">
    <!-- Phone Input -->
    <div class="form-group">
        <label for="tel-input">* Teléfono de contacto</label>
        <input class="form-control" type="tel" id="tel-input" name="telefono" value="">
    </div>
    <!-- URL Input -->
    <div class="form-group">
        <label for="url-input">Sitio web</label>
        <input class="form-control" type="url" id="url-input" name="web" value="">
    </div>
    <!-- URL Input -->
    <div class="form-group">
        <label for="url-input">Video relacionado</label>
        <input class="form-control" type="url" id="url-input" name="youtube" value="">
    </div>
    <div class="form-group">
        <label class="control-label">Ubicación</label>
        <input maxlength="200" type="text" required="required" class="form-control"
               placeholder="Enter Company Address" id="evento_direccion" name="direccion"
               value=""/>
    </div>
    <div class="row mb-4">
        <div class="col">
            <div id="map" style="width:100%; height: 350px;"></div>
            <input type="hidden" id="lat" name="latitud" value="">
            <input type="hidden" id="long" name="longitud" value="">
        </div>
    </div>
</div>
<div class="col-md-4">
    <div class="controls-container mb-3">
        <label for="pdf">Foto relacionado al problema identificado (Max. 1Mb)</label>
        <input type="file" class="dropify" name="imagen" id="foto" >
    </div>
    <h4 class="h3">Redes sociales de los problemas identificados</h4>
    <div class="form-group">
        <label for="url-input">Facebook</label>
        <input class="form-control" type="url" id="url-input" name="facebook" value="">
    </div>
    <div class="form-group">
        <label for="url-input">Instagram</label>
        <input class="form-control" type="url" id="url-input" name="instagram" value="">
    </div>
    <div class="form-group">
        <label for="url-input">LinkedIn</label>
        <input class="form-control" type="url" id="url-input" name="linkedin" value="">
    </div>
    <div class="form-group">
        <label for="url-input">Twitter</label>
        <input class="form-control" type="url" id="url-input" name="twitter" value="">
    </div>
</div>
