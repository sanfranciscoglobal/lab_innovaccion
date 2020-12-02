@php
    $contactos = $model->iniciativaContactos??[];
@endphp
<div class="panel-heading">
    <h3 class="panel-title">Información de contacto</h3>
</div>
<div class="d-sm-flex pb-4 text-left text-muted text-sm-left">
    <p>Llena los siguientes campos para completar exitosamente tu registro. Recuerda que los campos con asterisco* son
        obligatorios.</p>
</div>
<div class="panel-body">
    <div class="contact_container">
        <div class="contact_placeholder" data-iterator="0">
            <div class="form-group">
                <label class="control-label">* Nombre de la pesona encargada de la Iniciativa</label>
                <input name="iniciativa_contacto[0][nombre_persona]" maxlength="200" type="text" required="required"
                       class="form-control" placeholder="Nombre del encargado"
                       value="{{(isset($contactos[0]))?$contactos[0]->nombre_persona:''}}">
            </div>
            <div class="form-group">
                <label for="account-ln">Teléfono</label>
                <input class="form-control"
                       type="text"
                       name="iniciativa_contacto[0][celular]"
                       value="{{(isset($contactos[0]))?$contactos[0]->celular:''}}"
                       {{--name="celular"--}}
                       pattern="(09(9|8))?[0-9]{7}">
                <span class="muted-text">Ejemplo. 0987654321 ó 2279183</span>
                {{--<div class="invalid-feedback">Ingresar un teléfono valido</div>--}}
            </div>
            {{--<div class="form-group">--}}
            {{--<label class="control-label">Teléfono móvil</label>--}}
            {{--<input name="iniciativa_contacto[0][celular]" type="text" required="required" class="form-control"--}}
            {{--value="{{(isset($contactos[0]))?$contactos[0]->celular:''}}">--}}
            {{--</div>--}}
            <div class="form-group">
                <label class="control-label">* Correo electrónico</label>
                <input name="iniciativa_contacto[0][correo_electronico]" maxlength="200" type="email"
                       required="required" class="form-control"
                       value="{{(isset($contactos[0]))?$contactos[0]->correo_electronico:''}}">
            </div>
        </div>
    </div>
    <div class="contact_container is-hidden {{(isset($contactos[1]))?'':'d-none'}}">
        <div class="contact_placeholder" data-iterator="0">
            <hr/>
            <p class="text-right mt-2">
                <span id="remove_contact" class="btn btn-sm btn-danger">
                    <i class="fe-trash font-size-lg mr-2"></i> Quitar contacto (2)
                </span>
            </p>
            <div class="form-group">
                <label class="control-label">* Nombre de la pesona encargada de la Iniciativa (2)</label>
                <input name="iniciativa_contacto[1][nombre_persona]" maxlength="200" type="text" class="form-control"
                       placeholder="Nombre del contacto"
                       value="{{(isset($contactos[1]))?$contactos[1]->nombre_persona:''}}">
            </div>
            <div class="form-group">
                <label for="account-ln">Teléfono</label>
                <input class="form-control"
                       type="text"
                       name="iniciativa_contacto[1][celular]"
                       value="{{(isset($contactos[1]))?$contactos[1]->celular:''}}"
                       pattern="(09(9|8))?[0-9]{7}">
                <span class="muted-text">Ejemplo. 0987654321 ó 2279183</span>
                {{--<div class="invalid-feedback">Ingresar un teléfono valido</div>--}}
            </div>
            <div class="form-group">
                <label class="control-label">* Correo electrónico (2)</label>
                <input name="iniciativa_contacto[1][correo_electronico]" maxlength="200" type="email"
                       class="form-control" value="{{(isset($contactos[1]))?$contactos[1]->correo_electronico:''}}"/>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 text-right">
            <button id="add_contact" class="btn btn-sm btn-primary" type="button">
                <i class="fe-plus font-size-lg mr-2"></i> Agregar nuevo contacto
            </button>
        </div>
    </div>

    <div class="col-12">
        <hr class="mt-2 mb-4">
        <div class="d-flex flex-wrap justify-content-between align-items-center text-justify">
            <div class="custom-control custom-checkbox d-block">
                <input class="custom-control-input @error('terminos') is-invalid @enderror" type="checkbox"
                       id="verificada" name="iniciativa_verificada" value="1"
                       required>
                <label class="custom-control-label" for="verificada">
                    * Declaro que conozco los términos y condiciones de
                    esta plataforma y autorizo que se publiquen todos los datos
                    registrados en este formulario.
                </label>
                @error('terminos')
                <div class="invalid-feedback d-inline">{{ $message }}</div>
                @enderror
            </div>
        </div>
    </div>
    {{--<div class="form-group">--}}
    {{--<input class="custom-control-input" type="checkbox" id="verificada" name="iniciativa_verificada"--}}
    {{--required="required">--}}
    {{--<label class="custom-control-label" for="verificada">* Declaro que conozco los términos y condiciones de esta--}}
    {{--plataforma y autorizo que se publiquen todos los datos registrados en este formulario.</label>--}}
    {{--</div>--}}
    <div class="py-2">
        <button class="btn btn-primary submitBtn float-right" type="submit">
            <i class="fe-save font-size-lg mr-2"></i> Registra tu iniciativa
        </button>
    </div>

    <div id="error-message" class="text-danger"></div>
</div>