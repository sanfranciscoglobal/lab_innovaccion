@extends('layouts.aplicacion.app')
@php
  $month_mini = array("","ENE", "FEB", "MAR", "ABR", "MAY", "JUN", "JUL", "AGO", "SEP", "OCT", "NOV", "DIC");
  $sectores = $convocatoria->sectoresName($convocatoria);
  $sectoresArray = '';
  foreach ($sectores as $sector) {
      $sectoresArray .= $sector;
      if ($sector != $sectores->last()) {
          $sectoresArray .= '; ';
      }
  }

  $subsectores = $convocatoria->subsectoresName($convocatoria);
  $subsectoresArray = '';
  foreach ($subsectores as $subsector) {
      $subsectoresArray .= $subsector;
      if ($subsector != $subsectores->last()) {
          $subsectoresArray .= '; ';
      }
  }
  $odss = $convocatoria->odsName($convocatoria);
  $odsArray = '';
  foreach ($odss as $ods) {
      $odsArray .= $ods;
      if ($ods != $odss->last()) {
          $odsArray .= '; ';
      }
  }
  
@endphp
@section('header-css')
    <style>
        .card {overflow: hidden;}
        .card-lab-orange .card-body * {
            color: white;
        }

        .card-lab-orange .card-body,
        .card-lab-orange .card-body:before {
            background-color: #FF9F40;
        }

        .card:hover .card-hover-info {
            position: absolute;
            display: block
        }
        .card-hover-info {
            display: none;
            z-index: 99;
            background: white;
        }
        .centrado{
            margin-top: 10%;
        }

    </style>
@endsection
@section('content')
    <section class="container my-lg-2 pt-5 pb-lg-7">
        <div class="row align-items-center">
            <div class="col-lg-5 py-3 py-lg-0 mt-lg-5">
              
              <h1 class="mt-2 text-primary">{{ $convocatoria->nombre }}</h1>
              
              <div class="d-flex align-items-center">
                <div class="mx-1">
                  <h6 class="text-muted m-0 text-right">INICIA</h6>
                  <h6 class="text-muted m-0 text-right">{{ $month_mini[date('m', strtotime($convocatoria->fecha_inicio))] }}</h6>
                </div>
                <div class="mx-1">
                  <h1 class="text-warning m-0 h-100">{{ date('d', strtotime($convocatoria->fecha_inicio)) }}</h1>
                </div>
              </div>
              <br>
              
              <div class="d-flex align-items-center">
             
                <div class="mx-1">
                  <h1 class="text-primary m-0 h-100">{{ date('d', strtotime($convocatoria->fecha_cierre)) }}</h1>
                </div>
                <div class="mx-1">
                  <h6 class="text-muted m-0 text-righ">FINALIZA</h6>
                  <h6 class="text-muted m-0 text-righ">{{ $month_mini[date('m', strtotime($convocatoria->fecha_cierre))] }}</h6>
                </div>
              
            </div>
            
            </div>
            <div class="col py-3 py-lg-0 mt-lg-5"><img src="{{ asset('img/layout/home/laboratorio-side-bkg.png') }}" alt="Side banner"></div>
        </div>
    </section>

    <section class="container bg-secondary">
      @php
          $imagen1 = asset('img/logo/thinkia_color.svg');
          if(isset($convocatoria->user->perfil_id)){
              if(isset($convocatoria->user->perfil->avatar)){
                  $imagen1 = asset('storage/perfil/'.$convocatoria->user->perfil->avatar);
              }
          }
      @endphp

      <div class="col ">
        <div class="pb-5" style="min-width: 300px;">
            <article class="card h-100 border-0 box-shadow pt-4 pb-5 mx-1">
              <span class="badge badge-lg badge-floating badge-floating-right text-white" style="background:#ff7f00 ">{{$convocatoria->tipoconvocatoriaid->nombre}}</span>
              <div class=" pt-5 px-4 px-xl-5" >
                <a class="media meta-link font-size-sm align-items-center">
                    <img  width="42" src="{{ $imagen1 }}"
                        alt="Sanomi Smith" />
                    <div class="media-body pl-2 ml-1 mt-n1" ><h3 class="font-weight-semibold" style=" padding-top:15px;margin-bottom: 0">{{$convocatoria->nombre}}</h3>
                            <p class="font-weight-semibold ml-1" style="margin-bottom: 0; color: #a13d8f">{{$convocatoria->user->name}}</p></div>
                </a>
                
              </div>
              <div class="card-body">
                <ul>
                  <li><h3 class="mt-2 text-primary">Sectores: </h3>{{ $sectoresArray }}</li>
                  <li><h3 class="mt-2 text-primary">Subsectores: </h3>{{ $subsectoresArray }}</li>
                  <li><h3 class="mt-2 text-primary">Ods: </h3>{{ $odsArray }}</li>
                </ul>
                <hr>
                <br>
                
                
                <div class="px-2 px-xl-2 pt-0" >
                  <h4 class="font-weight-bold"><i class="fe-message-square font-size-xl mr-2"></i> Descripción </h4>
                      <ul>
                        <p>{{$convocatoria->descripcion}}</p>
                      </ul>
                </div>

                {{-- <div class="row">
                  
                  <div class="col-12 col-md-1 d-flex justify-content-center align-items-center">
                    <div class="mx-1">
                      <h1 class="text-primary m-0">{{ date('d', strtotime($convocatoria->fecha_cierre)) }}</h1>
                    </div>
                    <div class="mx-1">
                      <h6 class="text-muted m-0">FINALIZA</h6>
                      <h6 class="text-muted m-0">{{ $month_mini[date('m', strtotime($convocatoria->fecha_cierre))] }}</h6>
                    </div>
                  </div>
                </div> --}}
              </div>
            </article>    
        </div>
      </div>
    </section>


    <section>
        <div class="container my-5">
          @if ($convocatoria->fecha_inicio > date('Y-m-d') || $convocatoria->fecha_cierre < date('Y-m-d'))
          <div class="w-100 d-flex justify-content-center mt-3">
            <p class="text-center text-primary">Esta convocatoria esta cerrada y no admite mas problemas.</p>
          </div>
          @else
          <div class="w-100 d-flex justify-content-center mt-3">
            <a class="btn btn-primary" href="{{ route('app.innovaciongestion', $convocatoria->id) }}" role="button">Registra un nuevo problema</a>
          </div>
          @endif
        </div>
    </section>
    <section class="container mb-5">
      <div class="row align-items-center">
        <div class="col-12 mb-3">
          <h1 class="text-primary text-center">PROBLEMAS REGISTRADOS</h1>
        </div>

        @foreach ($problemas as $problema)
        @php
            $causas = json_decode($problema->causas, true) ?? null;
            $efectos = json_decode($problema->efectos, true) ?? null;
            $keyword = json_decode($problema->keyword, true) ?? null;

            $eslabon = null;
            if(isset($problema->eslabon)){
              switch ((int)$problema->eslabon) {
                case 1:
                  $eslabon = "Relación con los proveedores y logística";
                  break;
                case 2:
                  $eslabon = "Características de los insumos y su rendimiento";
                  break;
                case 3:
                  $eslabon = "Desarrollo del proceso productivo directo, recursos y talento humano";
                  break;
                case 4:
                  $eslabon = "Obetnción de productos terminados o semiterminados";
                  break;
                case 5:
                  $eslabon = "Relación con los clientes y el mercado";
                  break;
              }
            }
        @endphp
        <div class="col-12 col-md-6 p-2">
          <div class="card text-left">
            {{-- <img class="card-img-top" src="holder.js/100px180/" alt=""> --}}
            <div class="card-body">
              <div class="mb-3">
                <h4 class="card-title">{{ $problema->nombre }}</h4>
                <h6 class="card-subtitle">Registrado el {{ date('Y-m-d', strtotime($problema->created_at)) }}</h6>
                {{-- <p class="card-text">{{ $problema->problema }}</p> --}}
              </div>
              @if (isset($problema->actividad))    
              <div class="mb-3">
                <h4 class="card-title">Actividad productiva</h4>
                <p class="card-text">{{ $problema->actividad }}</p>
              </div>
              @endif
              <div class="mb-3">
                <h4 class="card-title">Describe como afecta el Problema</h4>
                <p class="card-text">{{ $problema->problema }}</p>
              </div>
              <div class="mb-3">
                <h4 class="card-title">Causas del Problema</h4>
                <ul class="text-muted">
                  <li>{{ $causas[1] ?? 'N/A' }}</li>
                  <li>{{ $causas[2] ?? 'N/A' }}</li>
                  <li>{{ $causas[3] ?? 'N/A' }}</li>
                </ul>
              </div>
              <div class="mb-3">
                <h4 class="card-title">Efectos del Problema</h4>
                <ul class="text-muted">
                  <li>{{ $efectos[1] ?? 'N/A' }}</li>
                  <li>{{ $efectos[2] ?? 'N/A' }}</li>
                  <li>{{ $efectos[3] ?? 'N/A' }}</li>
                </ul>
              </div>
              @if (isset($problema->eslabon))    
              <div class="mb-3">
                <h4 class="card-title">Eslabón de la cadena productiva</h4>
                <p class="card-text">{{ $eslabon }}</p>
                <p class="card-text">{{ $problema->descripcion_grupo }}</p>
              </div>
              @endif
              @if (isset($problema->grupo_social))    
              <div class="mb-3">
                <h4 class="card-title">Grupo social afectado</h4>
                <p class="card-text">{{ $problema->grupo_social }}</p>
                <p class="card-text">{{ $problema->descripcion_grupo }}</p>
              </div>
              @endif
              @if (isset($problema->ubacacion))    
              <div class="mb-3">
                <h4 class="card-title">Datos de contacto</h4>
                <p class="card-text">{{ $problema->telefono }}</p>
                <p class="card-text">{{ $problema->ubicacion }}</p>
              </div>
              @endif
              <div class="mb-3">
                <h4 class="card-title">Palabras o conceptos clave</h4>
                <ul class="text-muted">
                  <li>{{ $keyword[1] ?? 'N/A' }}</li>
                  <li>{{ $keyword[2] ?? 'N/A' }}</li>
                  <li>{{ $keyword[3] ?? 'N/A' }}</li>
                </ul>
              </div>
              <div class="mb-3">
                <h4 class="card-title"><i class="fe-file font-size-xl mr-2"></i>Archivos</h4>         
                <span class="card-text text-muted"><i class="czi-message text-muted mr-2"></i>{{$problema->archivo}}
                </span>
                @if ($problema->archivo)
                <a class="badge badge-lg" href="{{route('problemas.download', $problema->archivo)}}"><i class="fe-download text-muted mr-2"></i></a>
                @endif
              </div>
              <div class="text-center">
                <a class="btn btn-primary btn-small mb-4" href="{{route("soluciones.ver",$problema->id)}}">SOLUCIONES REGISTRADAS</a>
                <ul class="d-flex justify-content-center list-inline">
                  <li class="list-inline-item m-0">
                    <a class="social-btn sb-outline sb-facebook sb-dark sb-sm mr-2 mr-md-3" href="https://www.facebook.com/sharer/sharer.php?u={{ $problema->facebook ?? '#' }}">
                      <i class="fe-facebook"></i>
                    </a>
                  </li>
                  <li class="list-inline-item m-0">
                    <a class="social-btn sb-outline sb-twitter sb-dark sb-sm mr-2 mr-md-3" href="https://twitter.com/intent/tweet?url={{ $problema->twitter ?? '#' }}">
                      <i class="fe-twitter"></i>
                    </a>
                  </li>
                  {{-- <li class="list-inline-item m-0">
                    <a class="social-btn sb-outline sb-instagram sb-dark sb-sm mr-2 mr-md-3" href="{{ $problema->instagram ?? '#' }}">
                      <i class="fe-instagram"></i>
                    </a>
                  </li> --}}
                  <li class="list-inline-item m-0">
                    <a class="social-btn sb-outline sb-linkedin sb-dark sb-sm" href="https://www.linkedin.com/shareArticle?url={{ $problema->linkedin ?? '#' }}">
                      <i class="fe-linkedin"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        @endforeach
        <div class="col-12 text-center">
          {{ $problemas->links() }}
        </div>
      </div>
    </section>
@endsection
