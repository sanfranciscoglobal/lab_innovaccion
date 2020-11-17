@extends('layouts.aplicacion.app')

@section('content')
    <form class="needs-validation" novalidate role="form" action="{{ $URL }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method($method)
    <div class="position-relative bg-purple-gradient" style="height: 480px;">
        <div class="cs-shape cs-shape-bottom cs-shape-slant bg-secondary d-none d-lg-block">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 3000 260">
                <polygon fill="currentColor" points="0,257 0,260 3000,260 3000,0"></polygon>
            </svg>
        </div>
    </div>
    <div class="container bg-overlay-content pb-4 mb-md-3" style="margin-top: -350px;">
        <div class="row">
            <!-- Content-->
            <div class="col-lg-8 offset-lg-2">
                <div class="d-flex flex-column h-100 bg-light rounded-lg box-shadow-lg p-4">
                    <div class="py-2 p-md-3">
                        <!-- Title + Delete link-->
                        <div class="d-sm-flex align-items-center justify-content-between text-center text-sm-left">
                            <h1 class="h3 mb-2 text-nowrap">Información de Usuario</h1>
                            @if ($method == 'PUT')
                            <button type="button" class="btn btn-link text-danger font-weight-medium btn-sm mb-2" data-toggle="modal" data-target="#deleteAlert"><i class="fe-trash-2 font-size-base mr-2"></i>Eliminar usuario</button>
                            @endif
                        </div>
                        <div class="d-sm-flex pb-4 text-left text-muted text-sm-left">
                            <p>Llena los siguientes campos para completar exitosamente tu registro. Recuerda que los campos con asterisco* son obligatorios</p>
                        </div>
                        <!-- Content-->
                        <div class="row">
                            <div class="col-sm-8">
                                <div class="form-group">
                                    <label for="account-fn">Nombre</label>
                                    <input class="form-control" type="text" id="account-fn" value="{{ old('name', $user->name) }}" name="name" readonly>
                                    @error('name')<div class="invalid-feedback d-inline">{{ $message }}</div>@enderror
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="account-ln">* Teléfono</label>
                                    <input class="form-control @error('celular') is-invalid @enderror" type="text" id="account-ln" value="{{ old('celular', $perfil->celular) }}" name="celular" pattern="(09(9|8))?[0-9]{7}" required>
                                    <span class="muted-text">Ejemplo. 0987654321 ó 2279183</span>
                                    @error('celular')<div class="invalid-feedback d-inline">{{ $message }}</div>@enderror
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="form-group">
                                    <label for="account-email">Correo electrónico</label>
                                    <input class="form-control" type="email" id="account-email" value="{{ old('email', $user->email) }}" name="email" readonly>
                                    @error('email')<div class="invalid-feedback d-inline">{{ $message }}</div>@enderror
                                </div>
                                <div class="form-group">
                                    <span>* Propósito del registro (¿Qué acción voy a realizar?):</span>
                                    <div class="custom-control custom-radio">
                                        <input class="custom-control-input" type="radio" id="mapear" name="proposito" value="1" required {{ old('proposito', $perfil->proposito) == 1 ? 'checked' : '' }}>
                                        <label class="custom-control-label" for="mapear">Mapear una iniciativa</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input class="custom-control-input" type="radio" id="compartir" name="proposito" value="2" {{ old('proposito', $perfil->proposito) == 2 ? 'checked' : '' }}>
                                        <label class="custom-control-label" for="compartir">Compartir información de recursos (fondos, publicaciones y eventos)</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input class="custom-control-input" type="radio" id="participar" name="proposito" value="3" {{ old('proposito', $perfil->proposito) == 3 ? 'checked' : '' }}>
                                        <label class="custom-control-label" for="participar">Participar en innovación (identificar problemas, proveer soluciones)</label>
                                    </div>
                                    @error('proposito')<div class="invalid-feedback d-inline">{{ $message }}</div>@enderror
                                </div>
                                <div class="form-group">
                                    <span>* Tipo de Registro</span>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="custom-control custom-radio">
                                                <input class="custom-control-input tipo_registro" type="radio" id="tipo_individual" name="tipo_reg" value="1" required {{ old('tipo_reg', $perfil->tipo_reg) == '1' ? 'checked' : '' }}>
                                                <label class="custom-control-label" for="tipo_individual">Individual</label>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="custom-control custom-radio">
                                                <input class="custom-control-input tipo_registro" type="radio" id="tipo_oganizacion" name="tipo_reg" value="0" {{ old('tipo_reg', $perfil->tipo_reg) == '0' ? 'checked' : '' }}>
                                                <label class="custom-control-label" for="tipo_oganizacion">Organización</label>
                                            </div>
                                        </div>
                                        @error('tipo_reg')<div class="invalid-feedback d-inline">{{ $message }}</div>@enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="avatar">Imagen de Perfil</label>
                                    @if($method == 'POST')
                                    <div class="cs-file-drop-area">
                                        <div class="cs-file-drop-icon fe-upload"></div>
                                        <span class="cs-file-drop-message">ARRASTRA Y SUELTA AQUÍ PARA SUBIR</span>
                                        <input type="file" class="cs-file-drop-input" id="avatar" name="avatar" title="Avatar del usuario" accept="image/gif, image/jpeg, image/png">
                                        <button type="button" class="cs-file-drop-btn btn btn-primary btn-sm">O selecciona archivo</button>
                                        <div class="invalid-feedback">Agrega una imagen antes de enviar.</div>
                                    </div>
                                    @else
                                    @php
                                        $avatar = asset('img/logo/logo-icon-footer.png');
                                        if(isset(Auth::user()->perfil_id)){
                                            if(isset(Auth::user()->perfil->avatar)){
                                                $avatar = asset('storage/perfil/'.Auth::user()->perfil->avatar);
                                            }
                                        }
                                        @endphp
                                    <input type="file" class="dropify" id="avatar" name="avatar" title="Avatar del usuario" data-default-file="{{$avatar}}" accept="image/gif, image/jpeg, image/png">
                                    @endif
                                    @error('avatar')<div class="invalid-feedback d-inline">{{ $message }}</div>@enderror
                                </div>
                            </div>
                            <div class="col-md-7 to-hide d-none">
                                <div class="form-group">
                                    <label for="org_nombre">* Nombre de la organización a la que pertenece</label>
                                    <input class="form-control req @error('organizacion') is-invalid @enderror" type="text" id="org_nombre" value="{{ old('organizacion', $perfil->organizacion) }}" name="organizacion" placeholder="Nombre de la Organización" required>
                                    @error('organizacion')<div class="invalid-feedback d-inline">{{ $message }}</div>@enderror
                                </div>
                            </div>
                            <div class="col-md-5 to-hide d-none">
                                <div class="form-group">
                                    <label for="org_web">* Página Web de la Organización</label>
                                    <input class="form-control req @error('web') is-invalid @enderror" type="text" pattern="^(?:http(s)?:\/\/)?[\w.-]+(?:\.[\w\.-]+)+[\w\-\._~:/?#[\]@!\$&'\(\)\*\+,;=.]+$" id="org_web" value="{{ old('web', $perfil->web) }}" name="web" placeholder="https://www.sitioweb.com" required>
                                    @error('web')<div class="invalid-feedback d-inline">{{ $message }}</div>@enderror
                                </div>
                            </div>
                            <div class="col-md-7 to-hide d-none">
                                <div class="form-group">
                                    <label for="org_tipo">* Tipo de organización</label>
                                    <select class="form-control req @error('tipo_org') is-invalid @enderror" name="tipo_org" required>
                                        <option value="">Seleccione uno</option>
                                        <option value="1" {{ old('tipo_org', $perfil->tipo_org) == 1 ? 'selected' : '' }}>Academia</option>
                                        <option value="2" {{ old('tipo_org', $perfil->tipo_org) == 2 ? 'selected' : '' }}>Sector Privado</option>
                                        <option value="3" {{ old('tipo_org', $perfil->tipo_org) == 3 ? 'selected' : '' }}>Sector Público</option>
                                        <option value="4" {{ old('tipo_org', $perfil->tipo_org) == 4 ? 'selected' : '' }}>Organización de la sociedad civil</option>
                                    </select>
                                    @error('tipo_org')<div class="invalid-feedback d-inline">{{ $message }}</div>@enderror
                                </div>
                                <div class="row to-hide d-none">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label for="org_direccion">* Ubicación de su organización</label>
                                            <input class="form-control req @error('direccion') is-invalid @enderror" type="text" id="direccion" value="{{ old('direccion', $perfil->direccion) }}" name="direccion" placeholder="Dirección del lugar" required>
                                        </div>
                                        @error('direccion')<div class="invalid-feedback d-inline">{{ $message }}</div>@enderror
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="org_canton" class="control-label">Cantón</label><br>
                                            <select class="form-control custom-select select2" style="width:100%" id="org_canton" name="canton_id" data-ajax--url="{{route('api.canton.select2')}}" data-ajax--data-type="json" data-ajax--cache="true" data-close-on-select="false">
                                                <option value="" disabled selected>Selecciona uno</option>
                                                @if ($perfil->canton_id)
                                                <option value="{{ $perfil->canton_id }}" selected>{{ $perfil->canton->nombre }}</option>
                                                @endif
                                            </select>
                                            <div class="invalid-feedback">Selecciona un canton.</div>
                                            <div class="valid-feedback">Ok!</div>
                                            @error('canton_id')<div class="invalid-feedback d-inline">{{ $message }}</div>@enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div id="map" style="width: 100%; height: 350px;"></div>
                                        <input type="hidden" type="text" id="latitud" name="latitud" value="{{ old('latitud', $perfil->latitud) }}">
                                        <input type="hidden" type="text" id="longitud" name="longitud" value="{{ old('longitud', $perfil->longitud) }}">
                                        @error('latitud')<div class="invalid-feedback d-inline">{{ $message }}</div>@enderror
                                        @error('longitud')<div class="invalid-feedback d-inline">{{ $message }}</div>@enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5 to-hide d-none">
                                <div class="form-group">
                                    <span>Redes Sociales de la Organización</span>
                                    <div class="form-group">
                                        <label for="org_twitter">Twitter</label>
                                        <input class="form-control @error('twitter') is-invalid @enderror" type="text" pattern="^(?:http(s)?:\/\/)?[\w.-]+(?:\.[\w\.-]+)+[\w\-\._~:/?#[\]@!\$&'\(\)\*\+,;=.]+$" id="org_twitter" value="{{ old('twitter', $perfil->twitter) }}" name="twitter" placeholder="Link a tu usuario">
                                        @error('twitter')<div class="invalid-feedback d-inline">{{ $message }}</div>@enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="org_facebook">Facebook</label>
                                        <input class="form-control @error('facebook') is-invalid @enderror" type="text" pattern="^(?:http(s)?:\/\/)?[\w.-]+(?:\.[\w\.-]+)+[\w\-\._~:/?#[\]@!\$&'\(\)\*\+,;=.]+$" id="org_facebook" value="{{ old('facebook', $perfil->facebook) }}" name="facebook" placeholder="Link a tu usuario">
                                        @error('facebook')<div class="invalid-feedback d-inline">{{ $message }}</div>@enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="org_linkedin">LinkedIn</label>
                                        <input class="form-control @error('linkedin') is-invalid @enderror" type="text" pattern="^(?:http(s)?:\/\/)?[\w.-]+(?:\.[\w\.-]+)+[\w\-\._~:/?#[\]@!\$&'\(\)\*\+,;=.]+$" id="org_linkedin" value="{{ old('linkedin', $perfil->linkedin) }}" name="linkedin" placeholder="Link a tu usuario">
                                        @error('linkedin')<div class="invalid-feedback d-inline">{{ $message }}</div>@enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="org_instagram">Instagram</label>
                                        <input class="form-control @error('instagram') is-invalid @enderror" type="text" pattern="^(?:http(s)?:\/\/)?[\w.-]+(?:\.[\w\.-]+)+[\w\-\._~:/?#[\]@!\$&'\(\)\*\+,;=.]+$" id="org_instagram" value="{{ old('instagram', $perfil->instagram) }}" name="instagram" placeholder="Link a tu usuario">
                                        @error('instagram')<div class="invalid-feedback d-inline">{{ $message }}</div>@enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <hr class="mt-2 mb-4">
                                <div class="d-flex flex-wrap justify-content-between align-items-center">
                                    <div class="custom-control custom-checkbox d-block">
                                        <input class="custom-control-input @error('terminos') is-invalid @enderror" type="checkbox" id="verificada" name="terminos" value="1" required {{ old('terminos', $perfil->terminos) == true ? 'checked' : '' }}>
                                        <label class="custom-control-label" for="verificada">* Yo certifico que esta información es verídica.</label>
                                        @error('terminos')<div class="invalid-feedback d-inline">{{ $message }}</div>@enderror
                                    </div>
                                    <button class="btn btn-primary mt-3 mt-sm-0" type="submit"><i class="fe-save font-size-lg mr-2"></i>Guardar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </form>

    @if ($method == 'PUT')
    <!-- danger modal -->
    <div class="modal fade" id="deleteAlert" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header bg-danger text-white">
                    <h4 class="modal-title text-white"><i class="fe-alert-triangle mr-2"></i> Eliminar Usuario</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="text-white">&times;</span>
                    </button>
                </div>
                <form action="{{ route('app.user.delete', $user->id) }}" method="POST" role="form">
                    @csrf
                    @method('DELETE')
                    <div class="modal-body">
                        <div class="text-danger">Está seguro que desea eliminar este usuario?</div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-primary btn-sm">Eliminar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @endif
@endsection
@section('footer')
<script>
    //  SET TO NULL IF NO OLD DATA
    let user_lat = {{ old('latitud', $perfil->latitud) ?? 'null' }};
    let user_lng = {{ old('longitud', $perfil->longitud) ?? 'null' }};
</script>
<script src="{{ asset('js/maps.js') }}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC9Hl2qksxsEhVC2vJTEM-oMypYDh9UOvQ&libraries=places&callback=initMap" async defer></script>

<script>
    var canton = {{ old('canton_id', $perfil->canton_id) ?? 'null' }};
    if(canton){
        $('#org_canton option[value="SEL1"]').attr('selected', true);
    }

    $(document).ready(function(){
        $('.tipo_registro').change(function(){
            if($(this).is(':checked')){
                if($(this).val() == 0){
                    $('.to-hide').removeClass('d-none');
                    $('.req').attr('required', true);
                }else{
                    $('.to-hide').addClass('d-none');
                    $('.req').attr('required', false);

                }
            }
        })
    })
</script>
<script>
    let tipo_reg = {{ old('tipo_reg', (int)$perfil->tipo_reg) ?? 'null' }} ;
    $(function(){
        if(tipo_reg != null){
            $('.tipo_registro').trigger('change');
        }
    });
</script>
@endsection
