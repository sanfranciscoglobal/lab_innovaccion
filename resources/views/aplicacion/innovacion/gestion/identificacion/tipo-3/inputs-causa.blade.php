@php
    $causas = json_decode($problema->causas, true) ?? [null,null,null,null];
    $efectos = json_decode($problema->efectos, true) ?? [null,null,null,null];
    $keyword = json_decode($problema->keyword, true) ?? [null,null,null,null];
@endphp
<div class="form-group">
    <div class="controls-container mb-3">
        <label class="control-label">* Describe tres causas que consideres que están provocando el problema, ordenándolas desde la más importante hasta la menos importante (500 caractéres)</label>
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
        <label class="control-label">* Cuál es el grupo social más afectado por el problema detectado (280 caractéres)</label>
        <textarea class="form-control" id="grupo_social" rows="3" name="grupo_social"  placeholder="Ejemplo:
        Pequeños productores que no pueden acceder a crédito productivo.
        Niños que no pueden recibir su vacuna." required minlength="10" maxlength="280" oninput="window.countCharacters('grupo_social','grupo_social_error','submit',25,500,'count_words_2');">{{ old('grupo_social', $problema->grupo_social) }}</textarea>
        <span style="color: gray" id="count_words_2"></span>
        <div class="invalid-feedback" id="grupo_social_error"></div>
        @error('grupo_social')<div class="invalid-feedback d-inline">{{ $message }}</div>@enderror
    </div>
    <div class="controls-container mb-3">
        <label class="control-label">* Describe cómo le afecta al grupo social que has señalado (500 caractéres)</label>
        <textarea class="form-control" id="descripcion_grupo" rows="3" name="descripcion_grupo"  placeholder="Ejemplo:
        CUANDO los padres QUIEREN vacunar a sus hijos SON AFECTADOS POR la mala organización el momento de emitir turnos y por las largas esperas que provocan malestar y desorganización.
        CUANDO los productores QUIEREN acceder a crédito para realizar una inversión SON AFECTADOS POR la inexistencia de un proceso claro que establezca los pasos y los requisitos de forma clara, concreta, específica y única." minlength="10" maxlength="500" required oninput="window.countCharacters('descripcion_grupo','descripcion_grupo_error','submit',25,500,'count_words_3');">{{ old('descripcion_grupo', $problema->descripcion_grupo) }}</textarea>
        <span style="color: gray" id="count_words_3"></span>
        <div class="invalid-feedback" id="descripcion_grupo_error"></div>
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
