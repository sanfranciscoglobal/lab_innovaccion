@php
    $causas = json_decode($problema->causas, true) ?? null;
    $efectos = json_decode($problema->efectos, true) ?? null;
    $keyword = json_decode($problema->keyword, true) ?? null;
@endphp
<div class="form-group">
    <div class="controls-container mb-3">
        <label class="control-label">* Describe tres causas que consideres que están provocando el problema, ordenándolas desde la más importante hasta la menos importante</label>
        <textarea class="form-control mb-2" id="textarea-input" rows="1" name="causas[1]" placeholder="Ejemplo: Proceso deficiente en la cosecha." required minlength="10" maxlength="280">{{ old('causas.1', $causas[1]) }}</textarea>
        @error('causas.1')<div class="invalid-feedback d-inline">{{ $message }}</div>@enderror
        <textarea class="form-control mb-2" id="textarea-input" rows="1" name="causas[2]" placeholder="Ejemplo: Inadecuados contenedores para el transporte de la materia prima." required minlength="10" maxlength="280">{{ old('causas.2', $causas[2]) }}</textarea>
        @error('causas.2')<div class="invalid-feedback d-inline">{{ $message }}</div>@enderror
        <textarea class="form-control mb-2" id="textarea-input" rows="1" name="causas[3]" placeholder="Ejemplo: Actividades culturales y de cuidado en el cultivo." required minlength="10" maxlength="280">{{ old('causas.3', $causas[3]) }}</textarea>
        @error('causas.3')<div class="invalid-feedback d-inline">{{ $message }}</div>@enderror
    </div>
    <div class="controls-container mb-3">
        <label class="control-label">* Describe los tres principales efectos que provoca el problema, ordenándolos desde el de mayor impacto hasta el de menor impacto</label>
        <textarea class="form-control mb-2" id="textarea-input" rows="1" name="efectos[1]" placeholder="Ejemplo: Proceso deficiente en la cosecha." required minlength="10" maxlength="280">{{ old('efectos.1', $efectos[1]) }}</textarea>
        @error('efectos.1')<div class="invalid-feedback d-inline">{{ $message }}</div>@enderror
        <textarea class="form-control mb-2" id="textarea-input" rows="1" name="efectos[2]" placeholder="Ejemplo: Inadecuados contenedores para el transporte de la materia prima." required minlength="10" maxlength="280">{{ old('efectos.2', $efectos[2]) }}</textarea>
        @error('efectos.2')<div class="invalid-feedback d-inline">{{ $message }}</div>@enderror
        <textarea class="form-control mb-2" id="textarea-input" rows="1" name="efectos[3]" placeholder="Ejemplo: Actividades culturales y de cuidado en el cultivo." required minlength="10" maxlength="280">{{ old('efectos.3', $efectos[3]) }}</textarea>
        @error('efectos.3')<div class="invalid-feedback d-inline">{{ $message }}</div>@enderror
    </div>
    <div class="controls-container mb-3">
        <label for="pdf">* Describe cómo le afecta al sector/grupo social en el cual detecatse el problema (500 caractéres)</label>
        <textarea class="form-control" id="textarea-input" rows="4" name="descripcion_grupo" minlength="10" maxlength="500" placeholder="CUANDO el grupo comunitario de mujeres QUIEREN comercializar mayores volúmenes SON AFECTADOS POR las características del producto que no aprovecha con acabados, imagén, empaque, información un mejor desempeño en el mercado." required>{{ old('descripcion_grupo', $problema->descripcion_grupo) }}</textarea>
        @error('descripcion_grupo')<div class="invalid-feedback d-inline">{{ $message }}</div>@enderror
    </div>
    <div class="controls-container mb-3">
        <label class="control-label">* Escribe tres palabras o conceptos clave que se refieran al problema detectado</label>
        <input class="form-control mb-2" type="text" name="keyword[1]" placeholder="Concepto 1" required value="{{ old('keyword.1', $keyword[1]) }}" minlength="3" maxlength="50">
        @error('keyword.1')<div class="invalid-feedback d-inline">{{ $message }}</div>@enderror
        <input class="form-control mb-2" type="text" name="keyword[2]" placeholder="Concepto 2" required value="{{ old('keyword.2', $keyword[2]) }}" minlength="3" maxlength="50">
        @error('keyword.2')<div class="invalid-feedback d-inline">{{ $message }}</div>@enderror
        <input class="form-control mb-2" type="text" name="keyword[3]" placeholder="Concepto 3" required value="{{ old('keyword.3', $keyword[3]) }}" minlength="3" maxlength="50">
        @error('keyword.3')<div class="invalid-feedback d-inline">{{ $message }}</div>@enderror
    </div>
</div>
