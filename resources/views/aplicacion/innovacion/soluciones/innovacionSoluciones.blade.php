@extends('layouts.aplicacion.app')
@php
  $month_mini = array("","ENE", "FEB", "MAR", "ABR", "MAY", "JUN", "JUL", "AGO", "SEP", "OCT", "NOV", "DIC");

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
  <section class="container my-lg-2 pt-5 pb-lg-5">
    <div class="row align-items-center">
        <div class="col-lg-5 py-3 py-lg-0 mt-lg-5">
          <h1 class="mt-5">{{ $problema->nombre }}</h1>
        </div>
        <div class="col py-3 py-lg-0 mt-lg-5"><img src="{{ asset('img/img_pages/herramientas.png') }}" alt="Side banner"></div>
    </div>
  </section>
    <section>
        <div class="container my-5">
          <div class="row text-center">
            <div class="col-12 col-lg-7 mx-auto">
              <p>{{ $problema->problema }}</p>
            </div>
          </div>

          <div class="w-100 d-flex justify-content-center mt-3">
            <a class="btn btn-primary" href="{{ route('app.soluciones.crear', $problema->id) }}" role="button">Registra una nueva solución</a>
          </div>

        </div>
    </section>
    <section class="container mb-5">
      <div class="row align-items-center">
        <div class="col-12 mb-3">
          <h1 class="text-primary text-center">SOLUCIONES REGISTRADAS</h1>
        </div>

        @foreach ($soluciones as $solucion)
        <div class="col-12 col-md-6 p-2">
          <div class="card text-left">
            <img class="card-img-top" src="holder.js/100px180/" alt="">
            <div class="card-body">
              <div class="mb-3">
                <h4 class="card-title">{{ $solucion->nombre }}</h4>
                <h6 class="card-subtitle">Registrado el {{ date('Y-m-d', strtotime($solucion->created_at)) }}</h6>

              </div>
              <div class="mb-3">
                <h4 class="card-title">Sector al que perteneces</h4>
                <p class="card-text">{{ $solucion->sectorsolucionid->nombre }}</p>
              </div>
              <div class="mb-3">
                <h4 class="card-title">Tipo de innovación propuesta</h4>

                  <ul class="text-muted">
                    @foreach ($solucion->tipopropuestas as $propuesta)
                      <li>{{$propuesta->tipoinnovacionid->nombre}}</li>
                    @endforeach

                  </ul>
              </div>

              <div class="mb-3">
                <h4 class="card-title">Nivel actual de desarrollo de la Solución</h4>
                <p class="card-text">{{ $solucion->nivelsolucionid->nombre }}</p>
              </div>
              <div class="mb-3">
                <h4 class="card-title">Palabras o conceptos clave</h4>
                <ul class="text-muted">

                  <li>{{$solucion->concepto1 }}</li>
                  <li>{{$solucion->concepto2 }}</li>
                  <li>{{ $solucion->concepto3 }}</li>
                </ul>
              </div>

              <div class="text-center">
                <a class="btn btn-primary mb-3" href="{{route('soluciondetalle.ver', [$solucion->id, $solucion->slug])}}">Ver solución</a>
                {{-- <ul class="d-flex justify-content-center list-inline">
                  <li class="list-inline-item m-0">
                    <a class="social-btn sb-outline sb-facebook sb-dark sb-sm mr-2 mr-md-3" href="https://www.facebook.com/sharer/sharer.php?u={{ $solucion->facebook ?? '#' }}">
                      <i class="fe-facebook"></i>
                    </a>
                  </li>
                  <li class="list-inline-item m-0">
                    <a class="social-btn sb-outline sb-twitter sb-dark sb-sm mr-2 mr-md-3" href="https://twitter.com/intent/tweet?url={{ $solucion->twitter ?? '#' }}">
                      <i class="fe-twitter"></i>
                    </a>
                  </li>

                  <li class="list-inline-item m-0">
                    <a class="social-btn sb-outline sb-linkedin sb-dark sb-sm" href="https://www.linkedin.com/shareArticle?url={{ $solucion->linkedin ?? '#' }}">
                      <i class="fe-linkedin"></i>
                    </a>
                  </li>
                </ul> --}}
              </div>
            </div>
          </div>
        </div>
        @endforeach
        <div class="col-12 text-center">
          {{ $soluciones->links() }}
        </div>
      </div>
    </section>
@endsection
