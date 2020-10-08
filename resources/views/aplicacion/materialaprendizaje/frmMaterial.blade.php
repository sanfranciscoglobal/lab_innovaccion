@extends('layouts.aplicacion.app')

@section('header-css')
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet">
@endsection

@section('content')
    <form role="form" action="{{route('app.material-de-aprendizaje.post')}}" method="POST" enctype="multipart/form-data">
    @csrf
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
                            <a class="btn btn-link text-danger font-weight-medium btn-sm mb-2" href="#"><i class="fe-trash-2 font-size-base mr-2"></i> Eliminar entrada</a>
                        </div>
                        <!-- Content-->
                        <div class="row">
                            <div class="col-lg-9">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="mat_nombre">* Nombre de la publicación</label>
                                            <input class="form-control" type="text" id="mat_nombre" value="" name="nombre_publicacion" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <!--textarea id="mat_content" class="form-control ckeditor" name="mat_content" rows="20"></textarea-->
                                            <textarea id="mat_content" class="form-control ckeditor" name="mat_content" rows="20"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-8">
                                        <div class="form-group">
                                            <label for="mat_url">* Fuente de la publicación</label>
                                            <input class="form-control" type="url" id="mat_url" value="" name="fuente_publicacion" required>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-group">
                                            <label for="mat_autor">* Autor</label>
                                            <input class="form-control" type="text" id="mat_autor" value="" name="autor_publicacion" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="mat_files">Adjuntar archivos</label>
                                            <input class="form-control" type="file" id="mat_autor" value="" name="mat_files[]" multiple>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label for="mat_fecha">* Fecha de publicación</label>
                                    <input class="form-control" type="date" id="mat_fecha" value="" name="fecha_publicacion" required>
                                </div>
                                <div class="form-group">
                                    <label for="mat_tema">* Tema tratado</label>
                                    <select class="form-control select2" name="tema_tratado" required>
                                        <option value="">Seleccione un tema</option>
                                        <option value="1">Tema 1</option>
                                        <option value="2">Tema 2</option>
                                        <option value="3">Tema 3</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="mat_tipo">* Tipo de Documento</label>
                                    <select class="form-control select2" name="tipo_documento" required>
                                        <option value="">Seleccione un Tipo</option>
                                        <option value="1">Tipo 1</option>
                                        <option value="2">Tipo 2</option>
                                        <option value="3">Tipo 3</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="evento_img">* Imagen de portada</label>
                                    <input type="file" onchange="loadFile(event)" accept="image/gif, image/jpeg, image/png" id="evento_img" value="" name="imagen_portada" required>
                                    <div class="evento-image-placeholder mt-3">
                                        <div id="evento-image-box" class="necesidad-image-box">
                                            <img id="output" class="img-fluid" src="http://placehold.it/300x300/?text=Imagen%20Destacada">
                                        </div>
                                    </div>
                                </div>
                                <hr class="mt-2 mb-4">
                                <div class="custom-control custom-checkbox d-block">
                                    <input class="custom-control-input" type="checkbox" id="verificada" name="terminos" required>
                                    <label class="custom-control-label" for="verificada">* Declaro que conozco los términos y condiciones de esta plataforma y autorizo que se publiquen todos los datos registrados en este formulario.</label>
                                </div>
                                <br />
                                <button class="btn btn-primary mt-3 mt-sm-0" type="submit"><i class="fe-save font-size-lg mr-2"></i>Publicar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </form>
@endsection
@section('footer')
<script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
<script>
    $(document).ready(function(){
        $('.select2').select2();
    })

    CKEDITOR.replace('wysiwyg-editor', {
        filebrowserUploadUrl: "{{route('app.ckeditor.image-upload', ['_token' => csrf_token() ])}}",
        filebrowserUploadMethod: 'form'
    });
    CKEDITOR.config.height = 400;

    var loadFile = function(event) {
        var image = document.getElementById('output');
        image.src = URL.createObjectURL(event.target.files[0]);
    };
</script>
@endsection
