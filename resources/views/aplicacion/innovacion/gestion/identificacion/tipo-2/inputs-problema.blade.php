<div class="form-group">
    <div class="controls-container mb-3">
        <label class="control-label">* El problema detectado no es confidencial, por lo tanto, puede ser tratado de forma abierta con actores externos a ti, tu equipo u organización</label>
        <div class="row">
            <div class="col-sm-6 col-lg-1">
                <div class="custom-control custom-radio">
                    <input class="custom-control-input conditional" data-target="confidencial" type="radio" id="confidencial-1" name="confidencial" value="1" {{ old('confidencial', $problema->confidencial) == '1' ? 'checked' : '' }} required>
                    <label class="custom-control-label" for="confidencial-1">Si</label>
                </div>
            </div>
            <div class="col-sm-6 col-lg-1">
                <div class="custom-control custom-radio">
                    <input class="custom-control-input conditional" data-target="confidencial" type="radio" id="confidencial-2" name="confidencial" value="0" {{ old('confidencial', $problema->confidencial) == '0' ? 'checked' : '' }}>
                    <label class="custom-control-label" for="confidencial-2">No</label>
                </div>
            </div>
            @error('confidencial')<div class="invalid-feedback d-inline">{{ $message }}</div>@enderror
        </div>
        <div class="message-for-no d-none">
            <p>Esta convocatoria busca generar porcesos de innovación social que requieren la interacción de diversos actores del sistema nacional de innovación.</p>
        </div>
    </div>
    <div class="controls-container mb-3 has-parent confidencial {{ old('datos', $problema->datos) ? '' : 'd-none' }}">
        <label class="control-label">* Tú, tu equipo u organización tienen disponibilidad para interactuar con otros actores para entregar datos e información para resolver el problema detectado</label>
        <div class="row">
            <div class="col-sm-6 col-lg-1">
                <div class="custom-control custom-radio">
                    <input class="custom-control-input conditional" data-target="entregadatos" type="radio" id="entregadatos-1" name="datos" value="1" {{ old('datos', $problema->datos) == '1' ? 'checked' : '' }} required>
                    <label class="custom-control-label" for="entregadatos-1">Si</label>
                </div>
            </div>
            <div class="col-sm-6 col-lg-1">
                <div class="custom-control custom-radio">
                    <input class="custom-control-input conditional" data-target="entregadatos" type="radio" id="entregadatos-2" name="datos" value="0" {{ old('datos', $problema->datos) == '0' ? 'checked' : '' }}>
                    <label class="custom-control-label" for="entregadatos-2">No</label>
                </div>
            </div>
            @error('datos')<div class="invalid-feedback d-inline">{{ $message }}</div>@enderror
        </div>
        <div class="message-for-no d-none">
            <p>Esta convocatoria busca generar porcesos de innovación social que requieren la interacción de diversos actores del sistema nacional de innovación.</p>
        </div>
    </div>
    <div class="controls-container mb-3 has-parent entregadatos {{ old('nombre', $problema->nombre) ? '' : 'd-none' }}">
        <div class="form-group">
            <label for="nombre">* Nombre del problema (150 caractéres)</label>
            <input type="text" class="form-control" name="nombre" id="nombre" minlength="10" maxlength="150" value="{{ old('nombre', $problema->nombre) }}" required>
        </div>
        @error('nombre')<div class="invalid-feedback d-inline">{{ $message }}</div>@enderror
    </div>
    <div class="controls-container mb-3 has-parent entregadatos {{ old('problema', $problema->problema) ? '' : 'd-none' }}">
        <label class="control-label">* Describe cuál es el problema detectado (500 caractéres)</label>
        <textarea class="form-control" id="problema" rows="5" name="problema" required placeholder="Ejemplo. HE DETECTADO QUE SE PRODUCE EL PROBLEMA DE dificultad en el acabado de las artesanías por falta de equipos, LO CUAL PROVOCA reducción en las ventas." minlength="20" maxlength="500" oninput="window.countCharacters('problema','problema_error','submit',25,500,'count_words_1');">{{ old('problema', $problema->problema) }}</textarea>  
        <span style="color: gray" id="count_words_1"></span>
        <div class="invalid-feedback" id="problema_error"></div>
        @error('problema')<div class="invalid-feedback d-inline">{{ $message }}</div>@enderror
    </div>
    <div class="controls-container mb-3 has-parent entregadatos {{ old('confidencial', $problema->confidencial) ? '' : 'd-none' }}">
        <label for="archivo">* Carga un archivo complementario (Max. 10Mb)</label>
        @php
            $img = asset('img/logo/logo-icon-footer.png');
            if(Storage::disk('problemas')->exists($problema->archivo)){
                $img =  asset('storage/problemas/'.$problema->archivo);
            }
            @endphp
        <input type="file" class="dropify" title="Avatar del usuario" name="archivo" id="pdf" data-default-file="{{$img}}" accept=".pdf" data-max-file-size="10M" @if($method == 'POST') required @endif>
        @error('archivo')<div class="invalid-feedback d-inline">{{ $message }}</div>@enderror
    </div>
</div>
