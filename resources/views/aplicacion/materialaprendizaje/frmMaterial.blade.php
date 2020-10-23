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
            <div class="col-12">
                <div class="d-flex flex-column h-100 bg-light rounded-lg box-shadow-lg p-4">
                    <div class="py-2 p-md-3">
                        <!-- Title + Delete link-->
                        <div class="d-sm-flex align-items-center justify-content-between pb-4 text-center text-sm-left">
                            <h1 class="h3 mb-2 text-nowrap">Registro de Material de Aprendizaje</h1>
                            @if ($method=='PUT')
                                <a class="btn btn-link text-danger font-weight-medium btn-sm mb-2" data-toggle="modal" data-target="#deleteAlert"><i class="fe-trash-2 font-size-base mr-2"></i>Eliminar material </a>
                            @endif
                            
                            
                        </div>
                        <!-- Content-->
                        <div class="row">
                            <div class="col-lg-9">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="mat_nombre">* Nombre de la publicación</label>
                                            <input class="form-control" type="text" id="mat_nombre" value="{{isset($material->nombre_publicacion)?$material->nombre_publicacion:old('nombre_publicacion')}}" name="nombre_publicacion" required>
                                        </div>
                                    </div>
                                </div>
                                {{-- <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <!--textarea id="mat_content" class="form-control ckeditor" name="mat_content" rows="20"></textarea-->
                                            <textarea id="mat_content" class="form-control " name="mat_content" rows="20"></textarea>
                                        </div>
                                    </div>
                                </div> --}}
                                <div class="row">
                                    <div class="col-8">
                                        <div class="form-group">
                                            <label for="mat_url">* Fuente de la publicación</label>
                                            <input class="form-control" type="url" id="mat_url" value="{{isset($material->fuente_publicacion)?$material->fuente_publicacion:old('fuente_publicacion')}}" name="fuente_publicacion" required>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-group">
                                            <label for="mat_autor">* Autor</label>
                                            <input class="form-control" type="text" id="mat_autor" value="{{isset($material->autor_publicacion)?$material->autor_publicacion:old('autor_publicacion')}}" name="autor_publicacion" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
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
                                <div class="form-group">
                                    <label for="mat_fecha">* Fecha de publicación</label>
                                    <input class="form-control" type="date" id="mat_fecha" value="{{isset($material->fecha_publicacion)?$material->fecha_publicacion:old('fecha_publicacion')}}" name="fecha_publicacion" required>
                                </div>
                                <div class="form-group">
                                    <label for="mat_tema">* Tema tratado</label>
                                    <select class="form-control select2" name="tema_tratado" required>
                                        <option value="">Seleccione un tema</option>
                                        <option value="Tema 1" {{old('tema_tratado',$material->tema_tratado)=="Tema 1"? 'selected':''}}>Tema 1</option>
                                        <option value="Tema 2" {{old('tema_tratado',$material->tema_tratado)=="Tema 2"? 'selected':''}}>Tema 2</option>
                                        <option value="Tema 3" {{old('tema_tratado',$material->tema_tratado)=="Tema 3"? 'selected':''}}>Tema 3</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="mat_tipo">* Tipo de Documento</label>
                                    <select class="form-control select2" name="tipo_documento" required>
                                        <option value="">Seleccione un Tipo</option>                                                          
                                        <option value="Tipo 1" {{old('tipo_documento',$material->tipo_documento)=="Tipo 1"? 'selected':''}}>Tipo 1</option>
                                        <option value="Tipo 2" {{old('tipo_documento',$material->tipo_documento)=="Tipo 2"? 'selected':''}}>Tipo 2</option>
                                        <option value="Tipo 3" {{old('tipo_documento',$material->tipo_documento)=="Tipo 3"? 'selected':''}}>Tipo 3</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="evento_img">* Imagen de portada</label>
                                  
                                    
                                    @if ($method=='PUT')
                                        <input type="file" class="dropify"  onchange="loadFile(event)" accept="image/gif, image/jpeg, image/png" id="evento_img" value="" name="imagen_portada" data-default-file="{{asset('storage').'/'.$material->imagen_portada}}">                            
                                    @else
                                        <input type="file" class="dropify"  onchange="loadFile(event)" accept="image/gif, image/jpeg, image/png" id="evento_img" value="" name="imagen_portada" required>
                                    @endif
                                   
                                </div>
                                <hr class="mt-2 mb-4">
                                <div class="custom-control custom-checkbox d-block">
                                    <input class="custom-control-input" type="checkbox" id="verificada" name="terminos" value="1" required>
                                    <label class="custom-control-label" for="verificada">* Declaro que conozco los términos y condiciones de esta plataforma y autorizo que se publiquen todos los datos registrados en este formulario.</label>
                                </div>
                                <br />
                                @if ($method=='PUT')
                                    <button class="btn btn-primary mt-3 mt-sm-0" type="submit"><i class="fe-save font-size-lg mr-2"></i>Actualizar</button>
                                @else
                                    <button class="btn btn-primary mt-3 mt-sm-0" type="submit"><i class="fe-save font-size-lg mr-2"></i>Publicar</button>
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
                            <button type="submit" class="btn btn-primary btn-sm">Eliminar</button>
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
<script>
    @if ($method=='PUT')
                          
        @foreach ($material->articuloss as $articulo)
           console.log("{{$articulo->nombre}}");

        @endforeach
    @endif
    $(document).ready(function(){
        $('.select2').select2();
    })

    // CKEDITOR.replace('wysiwyg-editor', {
    //     filebrowserUploadUrl: "{{route('app.ckeditor.image-upload', ['_token' => csrf_token() ])}}",
    //     filebrowserUploadMethod: 'form'
    // });
    // CKEDITOR.config.height = 400;

    var loadFile = function(event) {
        var image = document.getElementById('output');
        image.src = URL.createObjectURL(event.target.files[0]);
    };
   
</script>
@endsection
