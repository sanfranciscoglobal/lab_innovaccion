{{-- @extends('layouts.aplicacion.app')

@section('content')
    <section class="container my-lg-2 pt-5 pb-lg-7">
        <div class="row align-items-center">
            <div class="col-lg-5 py-3 py-lg-0 mt-lg-5">
                <h1 class="mt-5">Hacer detalle</h1>
                <div class="py-4">
                    <p class="cs-callout">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
                </div>
                <a class="cs-video-btn cs-video-btn-primary cs-video-btn-sm mr-3"
                    href="https://www.youtube.com/watch?v=hTu0a4o97dU"></a><span class="font-size-sm text-muted">Ver
                    video</span>
            </div>
        </div>
    </section>
    <section class="container mb-5 pb-3 pb-lg-0 mb-lg-7 mt-lg-4">
    </section>
@endsection --}}
@php
  $month_mini = array("","ENE", "FEB", "MAR", "ABR", "MAY", "JUN", "JUL", "AGO", "SEP", "OCT", "NOV", "DIC");
@endphp
@extends('layouts.aplicacion.app')
@section('header-css')
    <style>
        .cs-sidebar { background: #f2f2f2; }

    </style>
@endsection
@section('content')
    <section class="container my-lg-2 pt-5 pb-lg-5">
        <div class="row align-items-center">
            <div class="col-lg-5 py-3 py-lg-0 mt-lg-5">
                <h1 class="mt-5 text-primary">{{ $material->nombre_publicacion }}</h1>
                @if ($material->tipo==0)
                    <div class="py-3">
                        <p style="margin-bottom: 0">{{date('d M , Y', strtotime( $material->fecha_publicacion))}}</p>

                    </div>
                @endif

            </div>
            <div class="col py-3 py-lg-0 mt-lg-5"><img src="{{ asset('img/img_pages/herramientas.png') }}" alt="Side banner"></div>
        </div>
    </section>

        @php
            $imagen1 = asset('img/logo/favicon/android-chrome-192x192.png');
            if(isset($material->user->perfil_id)){
                if(Storage::disk('perfil')->exists($material->user->perfil->avatar)){
                    $imagen1 = asset('storage/perfil/'.$material->user->perfil->avatar);
                }
            }

        @endphp

    <div class="cs-sidebar-enabled cs-sidebar-right" >

        <div class="container">

            <div class="row">
                <!-- Content-->
                <div class="col-lg-9 cs-content py-4 mb-2 mb-sm-0 pb-sm-5 " >

                    <div class="card mb-5">
                        <div class="card-body">
                            <div class="px-0 px-xl-2 pt-0" >
                                <a class="media meta-link font-size-sm align-items-center">
                                    <img  class='rounded-circle' width="42" src="{{ $imagen1}}"
                                        alt="Sanomi Smith" />
                                        <div class="media-body pl-2 ml-1 mt-n1" ><h3 class="font-weight-semibold" style=" padding-top:15px;margin-bottom: 0">{{$material->categoria->nombre}}</h3>

                                            <p class="font-weight-semibold ml-1" style="margin-bottom: 0; color: #a13d8f">{{$material->user->name}}</p>

                                        </div>
                                </a>
                                @if ($material->tipo==0)
                                    <div class="mt-3 text-primary font-weight-semibold">
                                        <span class="font-weight-bold e-presencial"><i class="fe-user font-size-xl mr-2"></i> Autor de la publicación</span>
                                        <div class="form-group">
                                            <input  disabled class="form-control bx-label" style="cursor: auto; background:white" type="text" value="{{$material->autor_publicacion}}">

                                        </div>
                                    </div>
                                @endif
                                <div class="mt-3 text-primary font-weight-semibold">
                                    <span class="font-weight-bold e-presencial"><i class="fe-book font-size-xl mr-2"></i> Descripción</span>
                                    <textarea  class="form-control"
                                    style="cursor: default ; background:white" disabled
                                    >{{isset($material->descripcion_publicacion)?$material->descripcion_publicacion:null}}</textarea>
                                </div>

                                    <div class="mt-3 text-primary font-weight-semibold">
                                        <span class="font-weight-bold e-presencial"><i class="fe-file font-size-xl mr-2"></i> Archivos</span>
                                        <ul class="list-group">
                                            @foreach ($material->articuloss as $articulo)

                                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                                    <span>
                                                        <i class="czi-message text-muted mr-2"></i>
                                                        {{$articulo->nombre}}
                                                    </span>
                                                    <a class="badge badge-lg" href="{{route('material.download',$articulo->nombre)}}"><i class="fe-download text-muted mr-2"></i></a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>

                                <div class="mt-3 text-primary font-weight-semibold">

                                    <span class="font-weight-bold e-presencial"><i class="fe-link font-size-xl mr-2"></i> Fuente de la publicación</span>

                                    <div class="form-group">



                                        <a  href="{{$material->fuente_publicacion}}">
                                        <input  class="form-control bx-label" style="cursor: pointer; background:white" type="text" value="{{isset($material->fuente_publicacion)?$material->fuente_publicacion:null}}">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="px-2 px-xl-2 pt-0" >
                                <span class="font-weight-bold e-presencial"><i class="fe-message-square font-size-xl mr-2"></i> Comentarios </span>
                                    <br>
                                    <br>


                                @foreach ($comentarios as $comment)
                                    @php
                                        // use Carbon\Carbon
                                        $imagen = asset('img/layout/home/profile4.jpg');
                                        if(isset($comment->user->perfil_id)){
                                            if(isset($comment->user->perfil->avatar)){
                                                $imagen = asset('storage/perfil/'.$comment->user->perfil->avatar);
                                            }
                                        }

                                        $fecha_actual= new DateTime(date('d-m-Y'));
                                        $date2 = new DateTime($comment->created_at);
                                        $diferencia_en_dias = $fecha_actual->diff($date2);


                                    @endphp
                                    <p>{{$comment->comentario}}</p>
                                    <div class="row">
                                        <a class="media meta-link font-size-sm align-items-center" href="#">
                                            <img class="rounded-circle" width="42" src="{{ $imagen}}"
                                                alt="Sanomi Smith" />
                                            <div class="media-body pl-2 ml-1 mt-n1 text-primary"><span class="font-weight-semibold ml-1">{{$comment->user->name}}</span><br>
                                            <span>hace {{$diferencia_en_dias->days}} días</span></div>
                                        </a>
                                    </div>

                                    <br>
                                    <hr>
                                @endforeach

                                {{-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                    Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                <div class="row">
                                    <a class="media meta-link font-size-sm align-items-center" href="#">
                                        <img class="rounded-circle" width="42" src="{{ asset('img/layout/home/profile2.jpg') }}"
                                            alt="Sanomi Smith" />
                                        <div class="media-body pl-2 ml-1 mt-n1 text-primary"><span class="font-weight-semibold ml-1">Barbara Palson</span><br>
                                            <span>Hace 3 días</span></div>
                                    </a>
                                </div>
                                <br>
                                <hr> --}}
                            </div>


                        </div>

                        <div class="card-footer text-center font-size-sm text-muted">

                            <form action="{{route("material-de-aprendizaje.comentario",[$material->id, $material->slug])}}" class="needs-validation" novalidate>
                                <input type="hidden" name="material_id" value="{{$material->id}}">
                                <div class="pb-2">
                                    <div class="card h-100 border-0 box-shadow pt-4 pb-5 mx-1 text-left" style="padding: 2%; background:#f2f2f2">
                                        <div class="row">
                                            <div class="col-12">
                                                <h3>Escribe un comentario</h3>

                                                {{-- <div class="form-group">
                                                    <label for="nombre"><i class="fe-user font-size-lg mr-2"></i>*Tu nombe</label>
                                                    <input class="form-control" type="text" id="nombre" name="nombre_user" required>
                                                    @error('nombre')<div class="invalid-feedback d-inline">{{ $message }}</div>@enderror
                                                </div>
                                                <div class="form-group">
                                                    <label  for="correo"><i class="fe-mail font-size-lg mr-2"></i>*Tu correo</label>
                                                    <input type='email' class="form-control" id="correo" name='correo_user' required>
                                                    @error('correo')<div class="invalid-feedback d-inline">{{ $message }}</div>@enderror
                                                </div> --}}
                                                <div class="form-group">
                                                    <label for="comentario"><i class="fe-message-square font-size-lg mr-2"></i>*Comentario</label>
                                                    <textarea id="comentario" class="form-control" name="comentario" placeholder="Escriba su comentario" required rows="6"
                                                    ></textarea>
                                                    <br>
                                                    @error('comentario')<div class="invalid-feedback d-inline">{{ $message }}</div>@enderror

                                                </div>
                                            </div>
                                        </div>
                                        <button class="btn btn-primary mt-3 mt-sm-0" id='submitbutton' type="submit"><i class="fe-send font-size-lg mr-2"></i>Enviar</button>

                                    </div>
                                </div>
                            </form>

                            <div class="row" style="margin-top:3%;padding-left:50%;">
                                <a href="{{route('material')}}" class="btn btn-sm btn-primary">Cerrar</a>
                            </div>


                        </div>


                    </div>
                </div>
                <!-- Sidebar-->
                <div class="cs-sidebar col-lg-3 pt-lg-5"  >
                    <div class="cs-offcanvas-collapse cs-offcanvas-right" id="blog-sidebar">
                        <div class="cs-offcanvas-cap navbar-box-shadow px-4 mb-3">
                            <h5 class="mt-1 mb-0">Ver mas</h5>
                            <button class="close lead" type="button" data-toggle="offcanvas"
                                data-offcanvas-id="blog-sidebar"><span aria-hidden="true">&times;</span></button>
                        </div>
                        <div class="cs-offcanvas-body px-4 pt-3 pt-lg-0 pr-lg-0 pl-lg-2 pl-xl-4" data-simplebar>
                            <!-- Search-->
                            <form action="{{route('material.searchnombre')}}" method="POST">
                                @csrf
                                @method("POST")
                                <div class="cs-widget mb-5">
                                    <h3 class="cs-widget-title">Buscar</h3>
                                    <div class="input-group-overlay">
                                        <div class="input-group-prepend-overlay"><span class="input-group-text"><i
                                                    class="fe-search"></i></span></div>
                                        <input class="form-control prepended-form-control" type="text" name="buscador" placeholder="Buscar">
                                    </div>
                                </div>

                            </form>
                            <!-- Tipos-->
                            <div class="cs-widget cs-widget-categories mb-4">
                                <h3 class="cs-widget-title">Tipos</h3>
                                <ul>
                                    <li><a class="cs-widget-link" href="{{ route('material') }}">Publicaciones y Herramientas<small
                                        class="text-muted pl-1 ml-2">{{ App\Models\MaterialAprendizaje::count() }}</small></a></li>
                                    <li><a class="cs-widget-link" href="{{ route('material.search',0) }}">Publicaciones<small
                                                class="text-muted pl-1 ml-2">{{ App\Models\MaterialAprendizaje::where('tipo','0')->count() }}</small></a></li>
                                    <li><a class="cs-widget-link" href="{{ route('material.search',1) }}">Herramientas<small
                                                class="text-muted pl-1 ml-2">{{ App\Models\MaterialAprendizaje::where('tipo','1')->count() }}</small></a></li>
                                </ul>
                            </div>
                            <!-- Categories-->
                            <div class="cs-widget cs-widget-categories mb-5">
                                <h3 class="cs-widget-title">Categorías</h3>
                                <ul>
                                    @foreach ($categorias as $categoria)
                                        <li><a class="cs-widget-link" href="{{ route('material.searchcategoria',$categoria->id) }}">{{$categoria->nombre}}<small
                                            class="text-muted pl-1 ml-2">{{ App\Models\MaterialAprendizaje::where('tema_tratado',$categoria->id)->count() }}</small></a></li>
                                    @endforeach
                                </ul>
                            </div>
                            <!-- Featured posts-->
                            {{-- <div class="cs-widget mt-n1 mb-5">
                                <h3 class="cs-widget-title pb-1">Publicaciones en tendencia</h3>
                                <div class="media align-items-center pb-1 mb-3"><a class="d-block" href="#"><img
                                            class="rounded" width="64" src="img/pexels-pixabay-416405.jpg" alt="Post" /></a>
                                    <div class="media-body pl-2 ml-1">
                                        <h4 class="font-size-md nav-heading mb-1"><a class="font-weight-medium"
                                                href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit</a></h4>
                                        <p class="font-size-xs text-muted mb-0">por John Doe</p>
                                    </div>
                                </div>
                                <div class="media align-items-center pb-1 mb-3"><a class="d-block" href="#"><img
                                            class="rounded" width="64" src="img/pexels-pixabay-416405.jpg" alt="Post" /></a>
                                    <div class="media-body pl-2 ml-1">
                                        <h4 class="font-size-md nav-heading mb-1"><a class="font-weight-medium" href="#">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</a></h4>
                                        <p class="font-size-xs text-muted mb-0">por Susan Mayer</p>
                                    </div>
                                </div>
                                <div class="media align-items-center"><a class="d-block" href="#"><img class="rounded"
                                            width="64" src="img/pexels-pixabay-416405.jpg" alt="Post" /></a>
                                    <div class="media-body pl-2 ml-1">
                                        <h4 class="font-size-md nav-heading mb-1"><a class="font-weight-medium"
                                                href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit.</a></h4>
                                        <p class="font-size-xs text-muted mb-0">por Daniel Adams</p>
                                    </div>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
