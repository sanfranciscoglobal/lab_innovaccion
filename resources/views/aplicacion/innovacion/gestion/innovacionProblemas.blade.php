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
              <h3 class="mt-5 text-muted">Convocatoria</h3>
              <h1 class="mt-2 text-primary">{{ $sectoresArray }}</h1>
              <h1 class="mt-2 text-primary">{{ $subsectoresArray }}</h1>
              <h1 class="mt-2 text-primary">{{ $odsArray }}</h1>
              <div class="d-flex align-items-center">
                <div class="mx-1">
                  <h6 class="text-muted m-0 text-right">INICIA</h6>
                  <h6 class="text-muted m-0 text-right">{{ $month_mini[date('m', strtotime($convocatoria->fecha_inicio))] }}</h6>
                </div>
                <div class="mx-1">
                  <h1 class="text-warning m-0 h-100">{{ date('d', strtotime($convocatoria->fecha_inicio)) }}</h1>
                </div>
              </div>
            </div>
            <div class="col py-3 py-lg-0 mt-lg-5"><img src="{{ asset('img/layout/home/laboratorio-side-bkg.png') }}" alt="Side banner"></div>
        </div>
    </section>
    <section>
        <div class="container my-5">
          <div class="row">
            <div class="col-12 col-lg-7 offset-lg-2">
              <p>{{ $convocatoria->descripcion }}</p>
            </div>
            <div class="col-12 col-md-1 d-flex justify-content-center align-items-center">
              <div class="mx-1">
                <h1 class="text-primary m-0">{{ date('d', strtotime($convocatoria->fecha_cierre)) }}</h1>
              </div>
              <div class="mx-1">
                <h6 class="text-muted m-0">FINALIZA</h6>
                <h6 class="text-muted m-0">{{ $month_mini[date('m', strtotime($convocatoria->fecha_cierre))] }}</h6>
              </div>
            </div>
          </div>
          @auth
          @if ($convocatoria->fecha_inicio > date('Y-m-d') || $convocatoria->fecha_cierre < date('Y-m-d'))
          <div class="w-100 d-flex justify-content-center mt-3">
            <p class="text-center text-primary">Esta convocatoria esta cerrada y no admite mas problemas.</p>
          </div>
          @else
          <div class="w-100 d-flex justify-content-center mt-3">
            <a class="btn btn-primary" href="{{ route('app.innovaciongestion', $convocatoria->id) }}" role="button">Registra un nuevo problema</a>
          </div>
          @endif
          @else
          <div class="w-100 d-flex justify-content-center mt-3">
            <p class="text-center text-primary">Para registra un nuevo problema inicia session primero.</p>
          </div>
          @endauth
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
        @endphp
        <div class="col-12 col-md-6 p-2">
          <div class="card text-left">
            {{-- <img class="card-img-top" src="holder.js/100px180/" alt=""> --}}
            <div class="card-body">
              <div class="mb-3">
                <h4 class="card-title">Title</h4>
                <h6 class="card-subtitle">Registrado el {{ date('Y-m-d', strtotime($problema->created_at)) }}</h6>
                {{-- <p class="card-text">{{ $problema->problema }}</p> --}}
              </div>
              <div class="mb-3">
                <h4 class="card-title">Causas del Problema</h4>
                <ul class="text-muted">
                  <li>{{ $causas[1] ?? '' }}</li>
                  <li>{{ $causas[2] ?? '' }}</li>
                  <li>{{ $causas[3] ?? '' }}</li>
                </ul>
              </div>
              <div class="mb-3">
                <h4 class="card-title">Efectos del Problema</h4>
                <ul class="text-muted">
                  <li>{{ $efectos[1] ?? '' }}</li>
                  <li>{{ $efectos[2] ?? '' }}</li>
                  <li>{{ $efectos[3] ?? '' }}</li>
                </ul>
              </div>
              <div class="mb-3">
                <h4 class="card-title">Describe como afecta el Problema</h4>
                <p class="card-text">{{ $problema->problema }}</p>
              </div>
              <div class="mb-3">
                <h4 class="card-title">Palabras o conceptos clave</h4>
                <ul class="text-muted">
                  <li>{{ $keyword[1] ?? '' }}</li>
                  <li>{{ $keyword[2] ?? '' }}</li>
                  <li>{{ $keyword[3] ?? '' }}</li>
                </ul>
              </div>
              <div class="text-center">
                <a class="btn btn-primary btn-small mb-4" href="{{route("soluciones.ver",$problema->id)}}">SOLUCIONES REGISTRADAS</a>
                <ul class="d-flex justify-content-center list-inline">
                  <li class="list-inline-item m-0">
                    <a class="social-btn sb-outline sb-facebook sb-dark sb-sm mr-2 mr-md-3" href="{{ $problema->facebook ?? '#' }}">
                      <i class="fe-facebook"></i>
                    </a>
                  </li>
                  <li class="list-inline-item m-0">
                    <a class="social-btn sb-outline sb-twitter sb-dark sb-sm mr-2 mr-md-3" href="{{ $problema->twitter ?? '#' }}">
                      <i class="fe-twitter"></i>
                    </a>
                  </li>
                  <li class="list-inline-item m-0">
                    <a class="social-btn sb-outline sb-instagram sb-dark sb-sm mr-2 mr-md-3" href="{{ $problema->instagram ?? '#' }}">
                      <i class="fe-instagram"></i>
                    </a>
                  </li>
                  <li class="list-inline-item m-0">
                    <a class="social-btn sb-outline sb-youtube sb-dark sb-sm" href="{{ $problema->youtube ?? '#' }}">
                      <i class="fe-youtube"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </section>
@endsection
