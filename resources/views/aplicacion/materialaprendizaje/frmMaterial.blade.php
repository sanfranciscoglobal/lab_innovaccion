@extends('layouts.aplicacion.app')

@section('header-css')
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet">
@endsection

@section('content')

    <form role="form" action="{{$url}}" id='frm' class="needs-validation" novalidate method="POST" enctype="multipart/form-data">

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
            <div class="col-12 col-lg-8 offset-lg-2">
                <div class="d-flex flex-column h-100 bg-light rounded-lg box-shadow-lg p-4">
                    <div class="py-2 p-md-3">
                        <!-- Title + Delete link-->
                        <div class="d-sm-flex align-items-center justify-content-between pb-4 text-center text-sm-left">
                            <h1 class="h3 mb-2 text-nowrap">Registro de Publicación o Herramienta</h1>
                            @if ($method=='PUT')
                                <a class="btn btn-link text-danger font-weight-medium btn-sm mb-2" data-toggle="modal" data-target="#deleteAlert"><i class="fe-trash-2 font-size-base mr-2"></i>Eliminar material </a>
                            @endif


                        </div>
                        <div class="d-sm-flex align-items-center justify-content-between pb-4 text-center text-sm-left">
                            <span style="color: gray">Llena los siguientes campos para completar exitosamente tu registro. Recuerda que los campos con asterisco* son obligatorios.</span> 
                        </div>
                        
                        <!-- Content-->
                        <div class="row">
                            <div class="col-lg-9">
                                
                                {{-- <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <!--textarea id="mat_content" class="form-control ckeditor" name="mat_content" rows="20"></textarea-->
                                            <textarea id="mat_content" class="form-control " name="mat_content" rows="20"></textarea>
                                        </div>
                                    </div>
                                </div> --}}
                                <div class="row">
                                    <div class="col">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <div class="custom-control custom-radio">
                                                    <input class="lugar custom-control-input" type="radio" id="publicacion" value="0" name="tipo" required>
                                                    <label class="custom-control-label" for="publicacion">Publicación</label>
                                                </div>
                                                {{-- <label for="publicacion">
                                                    <input class="lugar" selected type="radio" id="publicacion" value="0" name="tipo" required>
                                                    Publicación
                                                </label> --}}
                                            </div>
                                            <div class="col-sm-9">
                                                <div class="custom-control custom-radio">
                                                    <input class="lugar custom-control-input" type="radio" id="herramienta" value="1" name="tipo">
                                                    <label class="custom-control-label" for="herramienta">Herramienta</label>
                                                </div>
                                                {{-- <label for="herramienta">
                                                    <input class="lugar" type="radio" id="herramienta" value="1" name="tipo">
                                                    Herramienta
                                                </label> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 ">
                                        <div class="form-group m-publicacion m-herramienta d-none">
                                            <label id='label_nombre' for="mat_nombre">* Nombre de la publicación<span style="color: gray">(max. 250 caracteres)</span> </label>
                                            <input class="form-control" type="text" id="mat_nombre" placeholder="Nombre de la publicación" value="{{isset($material->nombre_publicacion)?$material->nombre_publicacion:old('nombre_publicacion')}}" maxlength='150' name="nombre_publicacion" oninvalid="setCustomValidity('Por favor complete este campo.')" onchange="try{setCustomValidity('')}catch(e){}" required>
                                            @error('nombre_publicacion')<div class="invalid-feedback d-inline">{{ $message }}</div>@enderror
                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-8 ">
                                        <div class="form-group m-publicacion m-herramienta d-none">
                                            <label for="mat_url" id="label_url">* Fuente de la publicación</label>
                                            <input pattern="^(?:http(s)?:\/\/)?[\w.-]+(?:\.[\w\.-]+)+[\w\-\._~:/?#[\]@!\$&'\(\)\*\%\+,;=.]+$"  class="form-control" oninput="validateURL()" type="text" id="mat_url"  value="{{isset($material->fuente_publicacion)?$material->fuente_publicacion:old('fuente_publicacion')}}" name="fuente_publicacion" oninvalid="setCustomValidity('Ingrese una dirección web valida.')" onchange="try{setCustomValidity('')}catch(e){}" required>
                                            <div class="invalid-feedback" id='url-error'></div>
                                        </div>
                                    </div>
                                    <div class="col-4 " >
                                        <div class="form-group m-publicacion d-none">
                                            <label for="mat_autor">* Autor</label>
                                            <input class="form-control" type="text" id="mat_autor" placeholder="Autor" maxlength='150' value="{{isset($material->autor_publicacion)?$material->autor_publicacion:old('autor_publicacion')}}" name="autor_publicacion" oninvalid="setCustomValidity('Por favor complete este campo.')" onchange="try{setCustomValidity('')}catch(e){}" >
                                            @error('autor_publicacion')<div class="invalid-feedback d-inline">{{ $message }}</div>@enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-8 m-publicacion d-none">
                                        
                                        <div class="form-group">
                                            <label class="form-label">* Fecha de publicación</label>
                                            <div class="input-group-overlay">
                                            <input class="form-control appended-form-control cs-date-picker" type="text" placeholder="Elija una fecha" data-datepicker-options='{"altInput": true, "allowInput":true,"altFormat": "F j, Y", "dateFormat": "Y/m/d"}' id="mat_fecha" value="{{isset($material->fecha_publicacion)?$material->fecha_publicacion:old('fecha_publicacion')}}" name="fecha_publicacion"  oninvalid="setCustomValidity('Por favor seleccione una fecha.')" onchange="try{setCustomValidity('')}catch(e){}"  required>
                                                <div class="input-group-append-overlay">
                                                    <span class="input-group-text">
                                                    <i class="fe-calendar"></i>
                                                    </span>
                                                </div>
                                            </div>
                                            @error('fecha_publicacion')<div class="invalid-feedback d-inline">{{ $message }}</div>@enderror
                                        </div>



                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="mat_adjuntar">Adjuntar archivos <span style="color: gray">(max. 2Mb)</span></label>
                                            
                                            @if ($method=='PUT')

                                                <input class="form-control dropify" data-max-file-size="2M" type="file" id="mat_adjuntar" name="mat_files[]"
                                                data-default-file=
                                                        "@foreach ($material->articuloss as $articulo)
                                                            {{$articulo->nombre}}
                                                            <br>
                                                        @endforeach"

                                                multiple>
                                            @else
                                                <input class="form-control dropify" data-max-file-size="2M" type="file" id="mat_adjuntar" name="mat_files[]" multiple>
                                                @error('mat_files')<div class="invalid-feedback d-inline">{{ $message }}</div>@enderror
                                            @endif
                                            

                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                {{-- <div class="form-group">
                                    <label for="mat_fecha">* Fecha de publicación</label>
                                    <input class="form-control" type="date" id="mat_fecha" value="{{isset($material->fecha_publicacion)?$material->fecha_publicacion:old('fecha_publicacion')}}" name="fecha_publicacion" required>
                                </div> --}}
                                <div class="form-group">
                                    <label for="mat_tema">* Tema tratado</label>
                                    <div class="row">
                                        <div class="col w-100 form-group">
                                         
                                          <select class="form-control custom-select select2" id="mat_tema" name='tema_tratado' required>
                                            <option value="">Seleccione un tema</option>
                                            <option value="Tema 1" {{old('tema_tratado',$material->tema_tratado)=="Tema 1"? 'selected':''}}>Tema 1</option>
                                            <option value="Tema 2" {{old('tema_tratado',$material->tema_tratado)=="Tema 2"? 'selected':''}}>Tema 2</option>
                                            <option value="Tema 3" {{old('tema_tratado',$material->tema_tratado)=="Tema 3"? 'selected':''}}>Tema 3</option>
                                          </select>
                                          <div class="invalid-feedback">Seleccione un tema.</div>
                                          <div class="valid-feedback">Ok!</div>
                                        </div>
                                    </div>


                                    {{-- <select class="form-control select2" name="tema_tratado" oninvalid="setCustomValidity('Por favor seleccione una opción de la lista.')" onchange="try{setCustomValidity('')}catch(e){}" required>
                                        <option value="">Seleccione un tema</option>
                                        <option value="Tema 1" {{old('tema_tratado',$material->tema_tratado)=="Tema 1"? 'selected':''}}>Tema 1</option>
                                        <option value="Tema 2" {{old('tema_tratado',$material->tema_tratado)=="Tema 2"? 'selected':''}}>Tema 2</option>
                                        <option value="Tema 3" {{old('tema_tratado',$material->tema_tratado)=="Tema 3"? 'selected':''}}>Tema 3</option>
                                    </select> --}}
                                </div>
                                <div class="form-group">
                                    <label for="mat_tipo">* Tipo de Documento</label>
                                    <div class="row">
                                        <div class="col w-100 form-group">
                                          
                                          <select class="form-control custom-select select2" id="mat_tipo" name='tipo_documento' required>
                                            <option value="">Seleccione un Tipo</option>
                                            <option value="Tipo 1" {{old('tipo_documento',$material->tipo_documento)=="Tipo 1"? 'selected':''}}>Tipo 1</option>
                                            <option value="Tipo 2" {{old('tipo_documento',$material->tipo_documento)=="Tipo 2"? 'selected':''}}>Tipo 2</option>
                                            <option value="Tipo 3" {{old('tipo_documento',$material->tipo_documento)=="Tipo 3"? 'selected':''}}>Tipo 3</option>
                                          </select>
                                          <div class="invalid-feedback">Seleccione un tipo.</div>
                                          <div class="valid-feedback">Ok!</div>
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="form-group">
                                    
                                    <img class="dropify" disabled id="evento_img" data-default-file="">
                                    
                                </div>
                                <hr class="mt-2 mb-4">
                                <div class="custom-control custom-checkbox d-block">
                                    <input class="custom-control-input" type="checkbox" id="verificada" name="terminos" value="1"  oninvalid="setCustomValidity('Por favor marca esta casilla si tu quieres continuar.')" onchange="try{setCustomValidity('')}catch(e){}" required>
                                    <label class="custom-control-label" for="verificada">* Declaro que conozco los términos y condiciones de esta plataforma y autorizo que se publiquen todos los datos registrados en este formulario.</label>
                                </div>
                                <br />
                                @if ($method=='PUT')
                                    <button class="btn btn-primary mt-3 mt-sm-0" id='submitbutton' type="submit"><i class="fe-save font-size-lg mr-2"></i>Actualizar</button>
                                @else
                                    <button class="btn btn-primary mt-3 mt-sm-0" id='submitbutton' type="submit"><i class="fe-save font-size-lg mr-2"></i>Guardar</button>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </form>
    @if ($method=='PUT')
        {{-- <div class="modal fade" id="deleteAlert" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header bg-warning text-white">
                        <h4 class="modal-title text-white"><i class="fe-alert-triangle mr-2"></i> Eliminar Material</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true" class="text-white">&times;</span>
                            </button>
                    </div>

                    <form action="{{ route('app.material-de-aprendizaje.delete',$material->id) }}" role="form" method="POST">
                        @csrf
                        @method('DELETE')
                        <div class="modal-body">
                            <div class="text-warning">Está seguro que desea eliminar este material?</div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Cerrar</button>
                            <button type="submit"  class="btn btn-primary btn-sm">Eliminar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div> --}}

        <div class="modal fade" id="deleteAlert" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header bg-warning text-white">
                        <h4 class="modal-title text-white"><i class="fe-alert-triangle mr-2"></i> Eliminar Material</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true" class="text-white">&times;</span>
                            </button>
                    </div>

                    <form action="{{ route('app.material-de-aprendizaje.delete',$material->id) }}" role="form" method="POST">
                        @csrf
                        @method('DELETE')
                        <div class="modal-body">
                            <div class="text-warning">Está seguro que desea eliminar este material?</div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Cerrar</button>
                            <button type="submit" class="btn btn-warning btn-sm">Eliminar</button>
                        </div>


                    </form>
                </div>
            </div>
        </div>
    @endif
@endsection
@section('footer')
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
<script>
    @if ($method=='PUT')

        @foreach ($material->articuloss as $articulo)
           console.log("{{$articulo->nombre}}");

        @endforeach
    @endif
    $(document).ready(function(){
        $('.select2').select2();
    })

    function validateURL() {
         var $URL= document.getElementById("mat_url").value;
         var pattern=/^(?:http(s)?:\/\/)?[\w.-]+(?:\.[\w\.-]+)+[\w\-\._~:/?#[\]@!\$&'\(\)\*\+\%,;=.]+$(:(\d+))?\/?/i;
        if(pattern.test($URL) ){
            // $("#url-error").removeClass('d-inline');
            $('#mat_url').removeClass('is-invalid');
            // $('#submitbutton').removeAttr('disabled');
            
         } else{
            // $("#url-error").html('Url inválido');
            // $("#url-error").addClass('d-inline');
            $('#mat_url').addClass('is-invalid');
            // $('#submitbutton').attr('disabled','disabled');
         }
       }

   
</script>
<script>
     $(document).ready(function(){
        $('.lugar').change(function(){
            if($(this).is(':checked')){

                if ($(this).val() == 0){
                    //$('.to-hide').removeClass('d-none');
                    $('.m-herramienta .form-control').removeAttr('required');
                    $('.m-herramienta').addClass('d-none');
                    $('.m-publicacion .form-control').attr('required', true);
                    $('.m-publicacion').removeClass('d-none');
                    $("#label_url").html('* Fuente de la publicación');
                    $("#label_nombre").html('* Nombre de la publicación <span style="color: gray">(max. 250 caracteres)</span>');
                    $('#frm').removeClass('was-validated');
                    document.getElementById("mat_url").placeholder='Link de la publicación';
                    document.getElementById("mat_nombre").placeholder='Nombre de la publicación';

                }else{
                    if ($(this).val() == 1){
                        $('#mat_autor').removeAttr('required');
                        $('.m-publicacion .form-control').removeAttr('required');
                        $('.m-publicacion').addClass('d-none');
                        $('.m-herramienta .form-control').attr('required', true);
                        $('.m-herramienta').removeClass('d-none');
                        
                        $("#label_url").html('* Fuente de la herramienta' );
                        $("#label_nombre").html('* Nombre de la herramienta <span style="color: gray">(max. 250 caracteres)</span>');
                        $('#frm').removeClass('was-validated');
                        document.getElementById("mat_url").placeholder='Link de la herramienta';
                        document.getElementById("mat_nombre").placeholder='Nombre de la herramienta';
                    
                    }

                }
            }
        });

    });
    
</script>
<script>

        $(function(){

        let tipo = {{ old('tipo', (int)$material->tipo) ?? 'null' }};

        switch(tipo){
            case 0:
                $('#publicacion').trigger('click');
                break;
            case 1:
                $('#herramienta').trigger('click');
                break;
            default:
                break;
        }

        });

</script>

@endsection
