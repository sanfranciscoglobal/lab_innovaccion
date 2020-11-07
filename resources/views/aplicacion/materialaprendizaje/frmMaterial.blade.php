@extends('layouts.aplicacion.app')

@section('header-css')
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet">
@endsection

@section('content')

    <form role="form" action="{{$url}}" method="POST" enctype="multipart/form-data">

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
                            <span style="color: gray">Llena los siguientes campos para completar exitosamente tu registro.</span> 
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
                                                <label for="publicacion">
                                                    <input class="lugar" selected type="radio" id="publicacion" value="0" name="tipo" required>
                                                    Publicación
                                                </label>
                                            </div>
                                            <div class="col-sm-9">
                                                <label for="herramienta">
                                                    <input class="lugar" type="radio" id="herramienta" value="1" name="tipo">
                                                    Herramienta
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 m-publicacion m-herramienta d-none">
                                        <div class="form-group">
                                            <label id='label_nombre' for="mat_nombre">* Nombre de la publicación<span style="color: gray">(max. 250 caracteres)</span> </label>
                                            <input class="form-control" type="text" id="mat_nombre" placeholder="Nombre de la publicación" value="{{isset($material->nombre_publicacion)?$material->nombre_publicacion:old('nombre_publicacion')}}" maxlength='150' name="nombre_publicacion" oninvalid="setCustomValidity('Por favor complete este campo.')" onchange="try{setCustomValidity('')}catch(e){}" required>
                                            @error('nombre_publicacion')<div class="invalid-feedback d-inline">{{ $message }}</div>@enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-8 m-publicacion m-herramienta d-none">
                                        <div class="form-group">
                                            <label for="mat_url" id="label_url">* Fuente de la publicación</label>
                                            <input class="form-control" oninput="validateURL()" type="text" id="mat_url"  value="{{isset($material->fuente_publicacion)?$material->fuente_publicacion:old('fuente_publicacion')}}" name="fuente_publicacion" oninvalid="setCustomValidity('Ingrese una dirección web valida.')" onchange="try{setCustomValidity('')}catch(e){}" required>
                                            <div class="invalid-feedback" id='url-error'></div>
                                        </div>
                                    </div>
                                    <div class="col-4 m-publicacion d-none" >
                                        <div class="form-group">
                                            <label for="mat_autor">* Autor</label>
                                            <input class="form-control" type="text" id="mat_autor" placeholder="Autor" maxlength='150' value="{{isset($material->autor_publicacion)?$material->autor_publicacion:old('autor_publicacion')}}" name="autor_publicacion" oninvalid="setCustomValidity('Por favor complete este campo.')" onchange="try{setCustomValidity('')}catch(e){}" required>
                                            @error('autor_publicacion')<div class="invalid-feedback d-inline">{{ $message }}</div>@enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-8 m-publicacion d-none">
                                        {{-- <div class="form-group">
                                            <label for="mat_fecha">* Fecha de publicación</label>
                                            <input class="form-control" type="date" id="mat_fecha" value="{{isset($material->fecha_publicacion)?$material->fecha_publicacion:old('fecha_publicacion')}}" name="fecha_publicacion" oninvalid="setCustomValidity('Por favor seleccione una fecha.')" onchange="try{setCustomValidity('')}catch(e){}" required>
                                        </div> --}}
                                        <div class="form-group">
                                            <label class="form-label">* Fecha de publicación</label>
                                            <div class="input-group-overlay">
                                            <input class="form-control appended-form-control cs-date-picker js-input" type="text" placeholder="Elija una fecha" data-datepicker-options='{"altFormat": "F j, Y", "dateFormat": "Y/m/d"}' id="mat_fecha" value="{{isset($material->fecha_publicacion)?$material->fecha_publicacion:old('fecha_publicacion')}}" name="fecha_publicacion"  oninvalid="setCustomValidity('Por favor seleccione una fecha.')" onchange="try{setCustomValidity('')}catch(e){}"  required>
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
                                    <div class="col-12 m-publicacion m-herramienta d-none">
                                        <div class="form-group">
                                            <label for="mat_files">Adjuntar archivos</label>

                                            @if ($method=='PUT')

                                                <input class="form-control dropify" type="file" id="mat_adjuntar" value="" name="mat_files[]"
                                                data-default-file=
                                                        "@foreach ($material->articuloss as $articulo)
                                                            {{$articulo->nombre}}
                                                            <br>

                                                        @endforeach"

                                                multiple/>
                                            @else
                                                <input class="form-control dropify" type="file" id="mat_adjuntar" value="" name="mat_files[]" multiple/>
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
                                    <select class="form-control select2" name="tema_tratado" oninvalid="setCustomValidity('Por favor seleccione una opción de la lista.')" onchange="try{setCustomValidity('')}catch(e){}" required>
                                        <option value="">Seleccione un tema</option>
                                        <option value="Tema 1" {{old('tema_tratado',$material->tema_tratado)=="Tema 1"? 'selected':''}}>Tema 1</option>
                                        <option value="Tema 2" {{old('tema_tratado',$material->tema_tratado)=="Tema 2"? 'selected':''}}>Tema 2</option>
                                        <option value="Tema 3" {{old('tema_tratado',$material->tema_tratado)=="Tema 3"? 'selected':''}}>Tema 3</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="mat_tipo">* Tipo de Documento</label>
                                    <select class="form-control select2" name="tipo_documento" oninvalid="setCustomValidity('Por favor seleccione una opción de la lista.')" onchange="try{setCustomValidity('')}catch(e){}" required>
                                        <option value="">Seleccione un Tipo</option>
                                        <option value="Tipo 1" {{old('tipo_documento',$material->tipo_documento)=="Tipo 1"? 'selected':''}}>Tipo 1</option>
                                        <option value="Tipo 2" {{old('tipo_documento',$material->tipo_documento)=="Tipo 2"? 'selected':''}}>Tipo 2</option>
                                        <option value="Tipo 3" {{old('tipo_documento',$material->tipo_documento)=="Tipo 3"? 'selected':''}}>Tipo 3</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    {{-- <label for="evento_img">* Imagen asociada a la temática</label>


                                    @if ($method=='PUT')
                                        <input type="file" class="dropify" accept="image/gif, image/jpeg, image/png" id="evento_img" value="" name="imagen_portada" data-default-file="{{asset('storage/materiales').'/'.$material->imagen_portada}}">                            
                                    @else
                                        <input type="file" class="dropify" accept="image/gif, image/jpeg, image/png" id="evento_img" value="" name="imagen_portada" oninvalid="setCustomValidity('Por favor seleccion una imagen.')" onchange="try{setCustomValidity('')}catch(e){}" required>
                                    @endif --}}
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
                                    <button class="btn btn-primary mt-3 mt-sm-0" id='submitbutton' type="submit"><i class="fe-save font-size-lg mr-2"></i>Publicar</button>
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
                            <button type="submit"  class="btn btn-primary btn-sm">Eliminar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endif
@endsection
@section('footer')
{{--<script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>--}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
<script src="https://npmcdn.com/flatpickr/dist/flatpickr.min.js"></script>
<script src="https://npmcdn.com/flatpickr/dist/l10n/es.js"></script>
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
         var pattern_1 = /^(http|https|ftp):\/\/(([A-Z0-9][A-Z0-9_-]*)(\.[A-Z0-9][A-Z0-9_-]*)+.(com|org|net|dk|at|us|tv|info|uk|co.uk|biz|se)$)(:(\d+))?\/?/i;
         var pattern_2 = /^(www)((\.[A-Z0-9][A-Z0-9_-]*)+.(com|org|net|dk|at|us|tv|info|uk|co.uk|biz|se)$)(:(\d+))?\/?/i;       
         if((pattern_1.test($URL) || pattern_2.test($URL) )){
            $("#url-error").removeClass('d-inline');
            $('#mat_url').removeClass('is-invalid');
            $('#submitbutton').removeAttr('disabled');
            
         } else{
            $("#url-error").html('Url invalido');
            $("#url-error").addClass('d-inline');
            $('#mat_url').addClass('is-invalid');
            $('#submitbutton').attr('disabled','disabled');
         }
       }

    // CKEDITOR.replace('wysiwyg-editor', {
    //     filebrowserUploadUrl: "{{route('app.ckeditor.image-upload', ['_token' => csrf_token() ])}}",
    //     filebrowserUploadMethod: 'form'
    // });
    // CKEDITOR.config.height = 400;

   
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
                    $('#mat_adjuntar').removeAttr('required');
                    document.getElementById("mat_url").placeholder='Fuente de la publicación';
                    document.getElementById("mat_nombre").placeholder='Nombre de la publicación';

                }else{
                    if ($(this).val() == 1){
                        $('.m-publicacion .form-control').removeAttr('required');
                        $('.m-publicacion').addClass('d-none');
                        $('.m-herramienta .form-control').attr('required', true);
                        $('.m-herramienta').removeClass('d-none');
                        $("#label_url").html('* Fuente de la herramienta' );
                        $("#label_nombre").html('* Nombre de la herramienta <span style="color: gray">(max. 250 caracteres)</span>');
                        $('#mat_adjuntar').removeAttr('required');
                        document.getElementById("mat_url").placeholder='Fuente de la herramienta';
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


        flatpickr('.js-input', {
    "altInput":true,
    "locale": "es"  // locale for this instance only
    });
</script>
@endsection
