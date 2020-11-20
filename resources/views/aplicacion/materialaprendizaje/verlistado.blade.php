@extends('layouts.aplicacion.app')

@section('content')

    <section class="container my-lg-2 pt-5 pb-lg-5">
        <div class="row align-items-center">
            <div class="col-lg-5 py-3 py-lg-0 mt-lg-5">
                <h1 class="mt-5 text-primary">Publicaciones y Herramientas</h1>
                <div class="py-3">
                    <p class="cs-callout">¡Compartamos material de lectura y herramientas para fortalecer nuestras habilidades y conocimientos de innovación!<br>
                        Publica artículos, blogs, libros, y herramientas entre otros para construir una cultura de innovación.</p>
                    
                </div>
                <a class="cs-video-btn cs-video-btn-primary cs-video-btn-sm mr-3" style="cursor: default" href="https://www.youtube.com/watch?v=hTu0a4o97dU"></a>
                <span class="font-size-sm text-muted">Ver
                    video</span>
            </div>
            <div class="col py-3 py-lg-0 mt-lg-5"><img src="{{ asset('img/layout/home/material-baner1.png') }}" alt="Side banner"></div>
        </div>
    </section>

    <div class="cs-sidebar-enabled cs-sidebar-right">
        
        <div class="container">
            
            <div class="row">
                <!-- Content-->
                <div class="col-lg-9 cs-content py-4 mb-2 mb-sm-0 pb-sm-5">
                    
                    {{-- <nav aria-label="breadcrumb">
                        <ol class="py-1 my-2 breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Blog</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">List right sidebar</li>
                        </ol>
                    </nav>
                    <h1 class="mb-5">Blog</h1> --}}
                
                    <!-- Post-->
                    <div class="row">
                        <div class="col">
                            {{-- <h2 class="h3 text-center text-primary">Indicaciones</h2> --}}
                            <p class="text-center font-size-lg">Publica el artículo o herramienta en el formulario a continuación.</p>
                            @if ($autentificacion)
                            <p class="text-center"><a class="btn" style="background: #a13d8f;color:#fafafc" href="{{route('app.material-de-aprendizaje.post')}}">Publica un artículo o herramienta.</a>
                            </p>
                            <p class="font-size-lg">Revisa y descarga el material de aprendiaje y deja tus comentarios en los foros respectivos de cada publicación.</p>
                        @endif
                            
                        </div>
                    </div>
                    <div class="row">
                       
                        @foreach ($materiales as $material)
                        @php
                            $imagen = asset('img/layout/home/profile2.jpg');
                            if(isset($material->user->perfil_id)){
                                if(isset($material->user->perfil->avatar)){
                                    $imagen = asset('storage/perfil/'.$material->user->perfil->avatar);
                                }
                            }
                        @endphp
                        <div class="col col-lg-6">
                            <div class="pb-2">
                                <article class="card h-100 border-0 box-shadow pt-4 pb-5 mx-1">
                                    @if ($material->tipo==0)
                                        <span class="badge badge-lg badge-floating badge-floating-right text-white" style="background:#ff7f00 ">Publicación</span>
                                    @else
                                        <span class="badge badge-lg badge-floating badge-floating-right text-white" style="background:#ff7f00 ">Herramienta</span>
                                    @endif
                                    <div class="card-body pt-5 px-4 px-xl-5">
                                        <h2 class="h4 nav-heading mb-4 text-primary">
                                            {{$material->nombre_publicacion}}
                                        </h2>
                                        
                                        <p><span class="mr-auto">{{$material->tema_tratado}}</span> </p>
                                        <p><span class="mr-auto">{{$material->tipo_documento}}</span></p>
                                    
                                    </div>
                                    <div class="px-4 px-xl-5 pt-2">
                                        
                                            <a class="media meta-link font-size-sm align-items-center" href="#">
                                                <img class="rounded-circle" width="42" src="{{ $imagen }}"
                                                    alt="Sanomi Smith" />
                                                <div class="media-body pl-2 ml-1 mt-n1 text-primary">por<span class="font-weight-semibold ml-1">{{$material->user->name}}</span></div>
                                            </a>
                                        
                                        
                                        <div class="row">
                                            <div class="col">
                                                <a class="btn btn-primary" href="{{route('material.detalle',$material->id)}}">Ver publicación</a>
                                            </div>
                                            <div class="col">
                                                <div class="mt-3 text-right text-nowrap">
                                                    <a class="meta-link font-size-xs" href="#">
                                                        <i class="fe-message-square mr-1"></i>&nbsp;6</a><span class="meta-divider"></span>
                                                    <span class="meta-link font-size-xs " ><i class="fe-calendar mr-1 mt-n1"></i>&nbsp;{{date('M d, Y', strtotime( $material->fecha_publicacion))}}</span>
                                                </div>
                                            </div>
                                        </div>
                                
                                    </div>
                                </article>
                            </div>
                        </div>
                            
                            
                        @endforeach
                        <div class="col-12">{{ $materiales->links() }}</div>
                        
                    </div>
                    
                </div>
                <!-- Sidebar-->
                <div class="cs-sidebar col-lg-3 pt-lg-5">
                    <div class="cs-offcanvas-collapse cs-offcanvas-right" id="blog-sidebar">
                        <div class="cs-offcanvas-cap navbar-box-shadow px-4 mb-3">
                            <h5 class="mt-1 mb-0">Ver mas</h5>
                            <button class="close lead" type="button" data-toggle="offcanvas"
                                data-offcanvas-id="blog-sidebar"><span aria-hidden="true">&times;</span></button>
                        </div>
                        <div class="cs-offcanvas-body px-4 pt-3 pt-lg-0 pr-lg-0 pl-lg-2 pl-xl-4" data-simplebar>
                            <!-- Search-->
                            <div class="cs-widget mb-5">
                                <h3 class="cs-widget-title">Buscar</h3>
                                <div class="input-group-overlay">
                                    <div class="input-group-prepend-overlay"><span class="input-group-text"><i
                                                class="fe-search"></i></span></div>
                                    <input class="form-control prepended-form-control" type="text" placeholder="Buscar">
                                </div>
                            </div>
                            <!-- Categories-->
                            <div class="cs-widget cs-widget-categories mb-5">
                                <h3 class="cs-widget-title">Categorías</h3>
                                <ul>
                                    <li><a class="cs-widget-link" href="#">Innovación<small
                                                class="text-muted pl-1 ml-2">23</small></a></li>
                                    <li><a class="cs-widget-link" href="#">Innovación abierta<small
                                                class="text-muted pl-1 ml-2">14</small></a></li>
                                    <li><a class="cs-widget-link" href="#">Design Thinking<small
                                                class="text-muted pl-1 ml-2">7</small></a></li>
                                    <li><a class="cs-widget-link" href="#">Tecnología<small
                                                class="text-muted pl-1 ml-2">19</small></a></li>
                                    <li><a class="cs-widget-link" href="#">Fondos<small
                                                class="text-muted pl-1 ml-2">35</small></a></li>
                                    <li><a class="cs-widget-link" href="#">Servicios &amp; Vacation<small
                                                class="text-muted pl-1 ml-2">28</small></a></li>
                                </ul>
                            </div>
                            <!-- Featured posts-->
                            <div class="cs-widget mt-n1 mb-5">
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
