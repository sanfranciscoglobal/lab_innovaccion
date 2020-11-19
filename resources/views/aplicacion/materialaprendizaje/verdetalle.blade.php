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
@section('content')
    <section class="container my-lg-2 pt-5 pb-lg-5">
        <div class="row align-items-center">
            <div class="col-lg-5 py-3 py-lg-0 mt-lg-5">
                <h1 class="mt-5 text-primary">{{ $material->nombre_publicacion }}</h1>
                @if ($material->tipo==0)
                    <div class="py-3">
                        <p style="margin-bottom: 0">{{date('d', strtotime( $material->fecha_publicacion))}} {{$month_mini[date('m', strtotime( $material->fecha_publicacion))]}}</p>
                        
                    </div>    
                @endif
                
            </div>
            <div class="col py-3 py-lg-0 mt-lg-5"><img src="{{ asset('img/layout/home/laboratorio-side-bkg.png') }}" alt="Side banner"></div>
        </div>
    </section>
    <section class="container bg-secondary">

        <div class="card mb-5">
            <div class="card-body">
                <div class="px-0 px-xl-2 pt-0" >
                    <a class="media meta-link font-size-sm align-items-center" href="#">
                        <img  width="42" src="{{ asset('img/layout/home/profile4.jpg') }}"
                            alt="Sanomi Smith" />
                            <div class="media-body pl-2 ml-1 mt-n1" ><h3 class="font-weight-semibold" style=" padding-top:15px;margin-bottom: 0">{{$material->tema_tratado}}</h3>
                                @if ($material->tipo==0)
                                    <p class="font-weight-semibold ml-1" style="margin-bottom: 0; color: #a13d8f">{{$material->autor_publicacion}}</p>    
                                @endif
                            </div>
                    </a>
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
                            <label  class="form-control" style="text-align: left"><a Target="_blank" href="{{$material->fuente_publicacion}}">{{isset($material->fuente_publicacion)?$material->fuente_publicacion:null}}</a></label>
                        </div>
                    </div>
                </div>
                <div class="px-2 px-xl-2 pt-0" >
                    <span class="font-weight-bold e-presencial"><i class="fe-message-square font-size-xl mr-2"></i> Comentarios</span>
                    
                </div>
                
            </div>

            <div class="card-footer text-center font-size-sm text-muted">

                <div class="row e-virtual">
                    <div class="col">
                        <div class="form-group">
                            <label  class="form-control" style="text-align: left">Comentarios</label>
                        </div>
                    </div>
                </div>

                {{-- <div class="row" style="margin-top:3%;padding-left:50%;">
                    <a href="{{route('material')}}" class="btn btn-sm btn-primary">Cerrar</a>
                </div> --}}
                
            </div>
            
        </div>
       
    </section>

@endsection
