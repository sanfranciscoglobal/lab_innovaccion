@php
    $causas = json_decode($problema->causas, true);
    $efectos = json_decode($problema->efectos, true);
    $keyword = json_decode($problema->keyword, true);
@endphp
<div class="form-group">
    <div class="controls-container mb-3">
        <label class="control-label">* Describe tres causas que consideres que están provocando el problema, ordenándolas desde la más importante hasta la menos importante (500 caractéres)</label>
        <textarea class="form-control" id="textarea-input" rows="3" name="causas[1]" required minlength="10" maxlength="280" placeholder="Ejemplo:
        Proceso deficiente en la cosecha.
        Inadecuados contenedores para el transporte de la materia prima.
        Actividades culturales y de cuidado en el cultivo.">{{ old('causas.1', $causas[1]) }}</textarea>
        @error('causas.1')<div class="invalid-feedback d-inline">{{ $message }}</div>@enderror
        <textarea class="form-control" id="textarea-input" rows="3" name="causas[2]" required minlength="10" maxlength="280" placeholder="Ejemplo:
        Proceso deficiente en la cosecha.
        Inadecuados contenedores para el transporte de la materia prima.
        Actividades culturales y de cuidado en el cultivo.">{{ old('causas.2', $causas[2]) }}</textarea>
        @error('causas.2')<div class="invalid-feedback d-inline">{{ $message }}</div>@enderror
        <textarea class="form-control" id="textarea-input" rows="3" name="causas[3]" required minlength="10" maxlength="280" placeholder="Ejemplo:
        Proceso deficiente en la cosecha.
        Inadecuados contenedores para el transporte de la materia prima.
        Actividades culturales y de cuidado en el cultivo.">{{ old('causas.3', $causas[3]) }}</textarea>
        @error('causas.3')<div class="invalid-feedback d-inline">{{ $message }}</div>@enderror
    </div>
    <div class="controls-container mb-3">
        <label class="control-label">* Describe los tres principales efectos que provoca el problema, ordenándolos desde el de mayor impacto hasta el de menor impacto</label>
        <textarea class="form-control" id="textarea-input" rows="3" name="efectos[1]" placeholder="Ejemplo:
        Proceso deficiente en la cosecha.
        Inadecuados contenedores para el transporte de la materia prima.
        Actividades culturales y de cuidado en el cultivo." required minlength="10" maxlength="280">{{ old('efectos.1', $efectos[1]) }}</textarea>
        @error('efectos.1')<div class="invalid-feedback d-inline">{{ $message }}</div>@enderror
        <textarea class="form-control" id="textarea-input" rows="3" name="efectos[2]" placeholder="Ejemplo:
        Proceso deficiente en la cosecha.
        Inadecuados contenedores para el transporte de la materia prima.
        Actividades culturales y de cuidado en el cultivo." required minlength="10" maxlength="280">{{ old('efectos.2', $efectos[2]) }}</textarea>
        @error('efectos.2')<div class="invalid-feedback d-inline">{{ $message }}</div>@enderror
        <textarea class="form-control" id="textarea-input" rows="3" name="efectos[3]" required minlength="10" maxlength="280" placeholder="Ejemplo:
        Proceso deficiente en la cosecha.
        Inadecuados contenedores para el transporte de la materia prima.
        Actividades culturales y de cuidado en el cultivo.">{{ old('efectos.3', $efectos[3]) }}</textarea>
        @error('efectos.3')<div class="invalid-feedback d-inline">{{ $message }}</div>@enderror
    </div>
    <div class="controls-container mb-3">
        <label for="pdf">* Cuál es el eslabón de la cadena productiva en donde se produce el problema</label>
        <div class="custom-control custom-radio mb-3">
            <input class="custom-control-input form-control" type="radio" id="eslabon-1" name="eslabon" value="1"  {{ old('eslabon', $problema->eslabon) == '1' ? 'checked' : '' }} required>
            <label class="custom-control-label" for="eslabon-1">Relación con los proveedores y logística (Se refiere a la calidad de gestión que realizan los proveedores y el despliegue que permite incorporar esas acciones a la producción de la empresa/proyecto/equipo; ejemplo: acuerdo de entrega vía terrestre directamente en las bodegas)</label>
        </div>
        <div class="custom-control custom-radio mb-3">
            <input class="custom-control-input form-control" type="radio" id="eslabon-2" name="eslabon" value="2" {{ old('eslabon', $problema->eslabon) == '2' ? 'checked' : '' }}>
            <label class="custom-control-label" for="eslabon-2">Características de los insumos y su rendimiento (Se refiere a la calidad de cada insumo adquirido para ser procesado en el proceso productivo, y la capacidad que tienen para poder eleborar un producto con el mejor desempeño; ejemplo: nivel de humedad en el trigo recibido para molienda)</label>
        </div>
        <div class="custom-control custom-radio mb-3">
            <input class="custom-control-input form-control" type="radio" id="eslabon-3" name="eslabon" value="3" {{ old('eslabon', $problema->eslabon) == '3' ? 'checked' : '' }}>
            <label class="custom-control-label" for="eslabon-3">Desarrollo del proceso productivo directo, recursos y talento humano (Se refiere a las actividades especificas que deben ser desarrolladas para producir los bienes o servicios, incluyendo los insumos necesarios y el equipo de trabajo; ejemplo: conocimientos requeridos para alcanzar más eficiencia en el control dela productividad)</label>
        </div>
        <div class="custom-control custom-radio mb-3">
            <input class="custom-control-input form-control" type="radio" id="eslabon-4" name="eslabon" value="4" {{ old('eslabon', $problema->eslabon) == '4' ? 'checked' : '' }}>
            <label class="custom-control-label" for="eslabon-4">Obetnción de productos terminados o semiterminados (Se refiere a la calidad obtenida en los bienes o servicios de acuerdo a lo requeridopor el mercado objetivo; ejemplo: nivel de PH en las esencias que serán vendidad a una insdutria que produce un medicamento)</label>
        </div>
        <div class="custom-control custom-radio mb-3">
            <input class="custom-control-input form-control" type="radio" id="eslabon-5" name="eslabon" value="5" {{ old('eslabon', $problema->eslabon) == '5' ? 'checked' : '' }}>
            <label class="custom-control-label" for="eslabon-5">Relación con los clientes y el mercado (Se refiere a la capacidad comercial de la empresa/proyecto/equipo, dentro de su mercado objetivo en función de las ventas logradas; ejemplo: niveles de ventas menores en comparación al período anterior)</label>
        </div>
        @error('eslabon')<div class="invalid-feedback d-inline">{{ $message }}</div>@enderror
    </div>
    <div class="controls-container mb-3">
        <label class="control-label">* Describe qué es lo que está pasando en el eslabón de la cadena productiva que señalaste (500 caractéres)</label>
        <textarea class="form-control" id="textarea-input" rows="3" name="descripcion_grupo" minlength="10" maxlength="500" placeholder="Ejemplo:
        LA CADENA PRODUCTIVA SE HA VISTO AFECTADA PORQUE el proveedor entrega materia prima que no cumple con los estándares requeridos, LO CUAL OCASIONA uso de más tiempo y mano de obra en la clasificación de la materia prima que encarece el producto y limita el acceso a más producto exportable." required>{{ old('descripcion_grupo', $problema->descripcion_grupo) }}</textarea>
        @error('eslabon')<div class="invalid-feedback d-inline">{{ $message }}</div>@enderror
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
