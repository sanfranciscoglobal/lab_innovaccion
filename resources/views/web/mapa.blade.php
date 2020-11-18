@extends('layouts.aplicacion.app')
@section('header-css')
    <style>
        .card {
            overflow: hidden;
        }

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

        .custom-select {
            width: 250px;
            max-width: 250px;
        }

    </style>
@endsection
@section('content')
    <section class="container my-lg-2 pt-5 pb-lg-7">
        <div class="row align-items-center">
            <div class="col-lg-5 py-3 py-lg-0 mt-lg-5">
                <h1 class="mt-5">Iniciativas</h1>
                <div class="py-4">
                    <p class="cs-callout">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="searchbar-container bg-secondary">
        <form class="container" action="{{route('web.iniciativas.index')}}" method="POST">
            @method('POST')
            @csrf
            @include('web.iniciativas._filter', compact('cantones','tipoInstituciones','odsCategorias','tipoPoblaciones'))
        </form>
        <p class="text-center">
            <a class="btn btn-primary" href="/app/registro-de-eventos/">Descargar datos</a>
        </p>
    </section>

    <section class="container mb-5 pb-3 pb-lg-0 mb-lg-7 mt-lg-7">
        <div class="cs-masonry-grid" data-columns="3">
            <!-- Loop Start -->
            @foreach($iniciativas as $iniciativa)
                <div class="cs-grid-item" data-groups="[&quot;3d&quot;]">
                    <div class="card card-hover border-0 box-shadow mx-auto">
                        <img class="card-img-top" src="{{ asset('storage/iniciativas/'.$iniciativa->logo) }}"/>
                        <div class="card-body my-2 mx-3">
                            <h3 class="h5 mb-0">
                                {{$iniciativa->nombre_organizacion}}
                            </h3>
                            <p class="text-justify">
                                {{$iniciativa->enfoque}}
                            </p>
                            <h4 class="h5 mb-0">{{$iniciativa->nombre_iniciativa}}</h4>
                            <p class="font-size-sm font-weight-normal text-muted">06/09/2020</p>
                            <p class="text-justify">
                                {{$iniciativa->descripcion_iniciativa}}
                            </p>
                            <div class="media meta-link align-items-center pt-2">
                                <img class="rounded-circle" width="50" src="http://placehold.it/50x50">
                                <div class="media-body pl-2 ml-1">
                                    <span class="font-weight-semibold d-block w-100">
                                        {{$iniciativa->user_name}}
                                    </span>
                                    <span class="font-size-sm w-100">
                                        <a href="mailto:{{$iniciativa->user_email}}">{{$iniciativa->user_email}}</a>
                                        -
                                        <a href="tel:{{$iniciativa->user_celular}}">{{$iniciativa->user_celular}}</a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        @endforeach
        <!-- loop end -->
        </div>
    </section>
    @php
        $iniciativas->links()
    @endphp
    {{--<aside>--}}
    {{--<div class="container">--}}
    {{--<div class="row">--}}
    {{--<div class="col-12">--}}
    {{--<div class="d-md-flex justify-content-between align-items-center pt-3 pb-2">--}}
    {{--<div class="d-flex justify-content-center align-items-center mb-4">--}}
    {{--<label class="pr-1 mr-2">Mostrar</label>--}}
    {{--<select class="form-control custom-select mr-2" style="width: 5rem;">--}}
    {{--<option value="10">10</option>--}}
    {{--<option value="20">20</option>--}}
    {{--<option value="30">30</option>--}}
    {{--<option value="40">40</option>--}}
    {{--<option value="50">50</option>--}}
    {{--</select>--}}
    {{--<div class="font-size-sm text-nowrap pl-1 mb-1">eventos por página</div>--}}
    {{--</div>--}}
    {{--<nav class="mb-4" aria-label="Page navigation">--}}
    {{--<ul class="pagination justify-content-center">--}}
    {{--<li class="page-item"><a class="page-link" href="#" aria-label="Previous"><i--}}
    {{--class="fe-chevron-left"></i></a></li>--}}
    {{--<li class="page-item d-sm-none"><span class="page-link page-link-static">2 / 10</span>--}}
    {{--</li>--}}
    {{--<li class="page-item d-none d-sm-block"><a class="page-link" href="#">1</a></li>--}}
    {{--<li class="page-item active d-none d-sm-block" aria-current="page"><span--}}
    {{--class="page-link">2<span--}}
    {{--class="sr-only">(current)</span></span></li>--}}
    {{--<li class="page-item d-none d-sm-block"><a class="page-link" href="#">3</a></li>--}}
    {{--<li class="page-item d-none d-sm-block"><a class="page-link" href="#">4</a></li>--}}
    {{--<li class="page-item d-none d-sm-block">...</li>--}}
    {{--<li class="page-item d-none d-sm-block"><a class="page-link" href="#">10</a></li>--}}
    {{--<li class="page-item"><a class="page-link" href="#" aria-label="Next"><i--}}
    {{--class="fe-chevron-right"></i></a></li>--}}
    {{--</ul>--}}
    {{--</nav>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</aside>--}}

@endsection
