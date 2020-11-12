@php
    $causas = json_decode($problema->causas, true);
    $efectos = json_decode($problema->efectos, true);
    $keyword = json_decode($problema->keyword, true);
@endphp
<div class="form-group">
    <div class="controls-container mb-3">
        <label class="control-label">* Describe tres causas que consideres que están provocando el problema, ordenándolas desde la más importante hasta la menos importante (500 caractéres)</label>
        <textarea class="form-control mb-3" id="textarea-input" rows="2" name="causas[1]" placeholder="Ejemplo:
        Proceso deficiente en la cosecha.
        Inadecuados contenedores para el transporte de la materia prima.
        Actividades culturales y de cuidado en el cultivo." required minlength="10" maxlength="280">{{ old('causas.1', $causas[1]) }}</textarea>
        @error('causas.1')<div class="invalid-feedback d-inline">{{ $message }}</div>@enderror
        <textarea class="form-control mb-3" id="textarea-input" rows="2" name="causas[2]" placeholder="Ejemplo:
        Proceso deficiente en la cosecha.
        Inadecuados contenedores para el transporte de la materia prima.
        Actividades culturales y de cuidado en el cultivo." required minlength="10" maxlength="280">{{ old('causas.2', $causas[2]) }}</textarea>
        @error('causas.2')<div class="invalid-feedback d-inline">{{ $message }}</div>@enderror
        <textarea class="form-control mb-3" id="textarea-input" rows="2" name="causas[3]" placeholder="Ejemplo:
        Proceso deficiente en la cosecha.
        Inadecuados contenedores para el transporte de la materia prima.
        Actividades culturales y de cuidado en el cultivo." required minlength="10" maxlength="280">{{ old('causas.3', $causas[3[]]) }}</textarea>
        @error('causas.3')<div class="invalid-feedback d-inline">{{ $message }}</div>@enderror
    </div>
    <div class="controls-container mb-3">
        <label class="control-label">* Describe los tres principales efectos que provoca el problema, ordenándolos desde el de mayor impacto hasta el de menor impacto</label>
        <textarea class="form-control mb-3" id="textarea-input" rows="2" name="efectos[1]" placeholder="Ejemplo:
        Proceso deficiente en la cosecha.
        Inadecuados contenedores para el transporte de la materia prima.
        Actividades culturales y de cuidado en el cultivo." required minlength="10" maxlength="280">{{ old('efectos.1', $efectos[1]) }}</textarea>
        @error('efectos.1')<div class="invalid-feedback d-inline">{{ $message }}</div>@enderror
        <textarea class="form-control mb-3" id="textarea-input" rows="2" name="efectos[2]" placeholder="Ejemplo:
        Proceso deficiente en la cosecha.
        Inadecuados contenedores para el transporte de la materia prima.
        Actividades culturales y de cuidado en el cultivo." required minlength="10" maxlength="280">{{ old('efectos.2', $efectos[2]) }}</textarea>
        @error('efectos.2')<div class="invalid-feedback d-inline">{{ $message }}</div>@enderror
        <textarea class="form-control mb-3" id="textarea-input" rows="2" name="efectos[3]" placeholder="Ejemplo:
        Proceso deficiente en la cosecha.
        Inadecuados contenedores para el transporte de la materia prima.
        Actividades culturales y de cuidado en el cultivo." required>{{ old('efectos.3', $efectos[3]) }}</textarea>
        @error('efectos.3')<div class="invalid-feedback d-inline">{{ $message }}</div>@enderror
    </div>
    <div class="controls-container mb-3">
        <label class="control-label">* Cuál es el grupo social más afectado por el problema detectado (280 caractéres)</label>
        <textarea class="form-control" id="textarea-input" rows="3" name="grupo_social"  placeholder="Ejemplo:
        Pequeños productores que no pueden acceder a crédito productivo.
        Niños que no pueden recibir su vacuna." required minlength="10" maxlength="280">{{ old('grupo_social', $problema->grupo_social) }}</textarea>
        @error('grupo_social')<div class="invalid-feedback d-inline">{{ $message }}</div>@enderror
    </div>
    <div class="controls-container mb-3">
        <label class="control-label">* Describe cómo le afecta al grupo social que has señalado (500 caractéres)</label>
        <textarea class="form-control" id="textarea-input" rows="3" name="descripcion_grupo"  placeholder="Ejemplo:
        CUANDO los padres QUIEREN vacunar a sus hijos SON AFECTADOS POR la mala organización el momento de emitir turnos y por las largas esperas que provocan malestar y desorganización.
        CUANDO los productores QUIEREN acceder a crédito para realizar una inversión SON AFECTADOS POR la inexistencia de un proceso claro que establezca los pasos y los requisitos de forma clara, concreta, específica y única." required>{{ old('descripcion_grupo', $problema->descripcion_grupo) }}</textarea>
        @error('descripcion_grupo')<div class="invalid-feedback d-inline">{{ $message }}</div>@enderror
    </div>
    <div class="controls-container mb-3">
        <label class="control-label">* Escribe tres palabras o conceptos clave que se refieran al problema detectado</label>
        <input class="form-control mb-1" type="text" name="keyword[1]" placeholder="Concepto 1" required value="{{ old('keyword.1', $keyword[1]) }}" minlength="3" maxlength="50">
        @error('keyword.1')<div class="invalid-feedback d-inline">{{ $message }}</div>@enderror
        <input class="form-control mb-1" type="text" name="keyword[2]" placeholder="Concepto 2" required value="{{ old('keyword.2', $keyword[2]) }}" minlength="3" maxlength="50">
        @error('keyword.2')<div class="invalid-feedback d-inline">{{ $message }}</div>@enderror
        <input class="form-control mb-1" type="text" name="keyword[3]" placeholder="Concepto 3" required value="{{ old('keyword.3', $keyword[3]) }}" minlength="3" maxlength="50">
        @error('keyword.3')<div class="invalid-feedback d-inline">{{ $message }}</div>@enderror
    </div>
</div>
