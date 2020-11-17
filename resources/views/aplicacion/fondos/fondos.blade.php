@extends('layouts.aplicacion.app')
@section('header-css')
<style>
    .card-lab-orange .card-body * { color: white; }
    .card-lab-orange .card-body,
    .card-lab-orange .card-body:before { background-color: #FF9F40; }
</style>
@endsection
@section('content')
    <section class="container my-lg-2 pt-5 pb-lg-5">
        <div class="row align-items-center">
            <div class="col-lg-5 py-3 py-lg-0 mt-lg-5">
                <h1 class="mt-5">Fondos</h1>
                <div class="py-3">
                    <p class="cs-callout">¡Fomentemos oportunidades de financiamiento para la innovación!<br>
                        Registra postulaciones propias o de otros organismos para fondos que promuevan la innovación.
                        Revisa los fondos y anímate aplicar junto a otros actores del ecosistema de innovación. </p>
                </div>
            </div>
            <div class="col py-3 py-lg-0 mt-lg-5"><img src="{{ asset('img/layout/home/laboratorio-side-bkg.png') }}" alt="Side banner"></div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8 offset-lg-2">
                    <h2 class="h3 text-center">Indicaciones</h2>
                    <p class="text-center">Caso 1. Registra fondos propios o de otros organismos en el formulario.<br>
                    Caso 2. Revisa las oportunidades de financiamiento pulsando en los íconos.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="container mb-5 pb-3 pb-lg-0 mb-lg-7 mt-lg-5">
        <div class="row mb-3 mt-4">
            @foreach ($fondos as $fondo)
            @php
                $img = isset($fondo->imagen) ? $fondo->imagen : '';
                $img = Storage::disk('fondos')->exists($img) ? asset('storage/fondos/'.$img) : asset('img/logo/thinkia_color_no_slogan.svg');
            @endphp
            <div class="col-lg-3 col-md-4 col-sm-6 mb-grid-gutter" data-toggle="modal" data-target="#modelId" data-content="{{$fondo}}">
                <div class="card card-lab-orange card-curved-body card-hover border-0 box-shadow mx-auto" style="max-width: 21rem;">
                    <a class="card-floating-icon" href="mailto:{{ $fondo->user->email }}"><i class="fe-mail"></i></a>
                    <div class="card-img-top card-img-gradient">
                        <img src="{{ $img }}" alt="{{ $fondo->organizacion }}" style="height: 300px"/>
                    </div>
                    <div class="card-body text-center" style="z-index: 1000">
                        <h3 class="card-title">{{ $fondo->organizacion }}</h3>
                        <h6 class="card-subtitle mb-2">{{ $fondo->fuente == 1 ? 'Fondos propios' : 'Fondos de otra organización' }}</h6>
                        @if($fondo->fuente)
                        <p class="font-size-xs mb-0">{{ $fondo->nombre_fondo }}</p>
                        <p class="font-size-xs mb-0">{{ 'Del: '.$fondo->fecha_inicio.' al '.$fondo->fecha_fin }}</p>
                        <a href="{{ $fondo->info }}" class="font-size-xs mb-0">{{ $fondo->info }}</a>
                        @else
                        <a href="{{ $fondo->info }}" class="font-size-xs mb-0">{{ $fondo->info }}</a>
                        @endif

                        <ul class="d-flex justify-content-center list-inline mt-3">
                            @isset($problema->facebook)
                            <li class="list-inline-item m-0">
                                <a class="social-btn sb-outline sb-facebook sb-dark sb-sm mr-2 mr-md-3" href="{{ $problema->facebook ?? '#' }}">
                                    <i class="fe-facebook"></i>
                                </a>
                            </li>
                            @endisset
                            @isset($problema->twitter)
                            <li class="list-inline-item m-0">
                                <a class="social-btn sb-outline sb-twitter sb-dark sb-sm mr-2 mr-md-3" href="{{ $problema->twitter ?? '#' }}">
                                <i class="fe-twitter"></i>
                                </a>
                            </li>
                            @endisset
                            @isset($problema->instagram)
                            <li class="list-inline-item m-0">
                                <a class="social-btn sb-outline sb-instagram sb-dark sb-sm mr-2 mr-md-3" href="{{ $problema->instagram ?? '#' }}">
                                <i class="fe-instagram"></i>
                                </a>
                            </li>
                            @endisset
                            @isset($problema->youtube)
                            <li class="list-inline-item m-0">
                                <a class="social-btn sb-outline sb-youtube sb-dark sb-sm" href="{{ $problema->youtube ?? '#' }}">
                                <i class="fe-youtube"></i>
                                </a>
                            </li>
                            @endisset
                        </ul>
                    </div>
                </div>
            </div>
            @endforeach
            <div class="col-12">{{ $fondos->links() }}</div>
        </div>
    </section>

    {{-- MODAL DETALLE --}}
    <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header border-0">
                    <div class="media meta-link font-size-sm align-items-center" href="#">
                        <img  width="42" src="{{ asset('img/logo/favicon/android-chrome-192x192.png') }}" alt="organizer" />
                        <div class="media-body pl-2 ml-1 mt-n1" >
                            <h5 class="modal-title"></h5>
                            <p class="modal-subtitle"></p>
                        </div>
                    </div>
                    {{-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button> --}}
                </div>
                <div class="modal-body border-0">
                    <div class="container-fluid">
                        <p class="fondo-name">w</p>
                        <p class="fondo-type">w</p>
                        <p class="fondo-info">w</p>
                        <p class="fondo-fb">w</p>
                        <p class="fondo-ig">w</p>
                        <p class="fondo-tw">w</p>
                        <p class="fondo-yt">w</p>
                    </div>
                </div>
                <div class="modal-footer justify-content-center border-0">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/locale/es-mx.min.js"></script>


<script>
    // moment.locale('es-mx');
    $('#modelId').on('show.bs.modal', function (event) {
        let button = $(event.relatedTarget)
        let content = button.data('content')
        console.log(content)
        let modal = $(this)
        let fecha;
        if(content.fecha_inicio){
            fecha = 'Del: ';
            fecha += moment(content.fecha_inicio).format('ll');
            fecha += ' al ';
            fecha += moment(content.fecha_fin).format('ll');
        }
        modal.find('.modal-title').text(content.organizacion)
        modal.find('.modal-subtitle').text(fecha)
        // modal.find('.modal-org').val(content)
        modal.find('.fondo-name').html(content.nombre_fondo)
        modal.find('.fondo-type').html(content.fuente ? 'Fondos Propios' : 'Fondos de otra Organizacion')
        modal.find('.fondo-info').html(content.info)
        modal.find('.fondo-fb').html(content.facebook)
        modal.find('.fondo-ig').html(content.instagram)
        modal.find('.fondo-tw').html(content.twitter)
        modal.find('.fondo-yt').html(content.youtube)
    });
</script>
@endsection