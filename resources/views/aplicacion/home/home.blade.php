@extends('layouts.aplicacion.app')

@section('content')
    <section id="home-hero-banner">
        <img class="img-fluid" src="{{asset('img/home-hero-banner.jpg')}}">
    </section>

    <section id="funciones">
        <div class="container mt-5 mb-5">
            <div class="row">
                <div class="col-md-3">
                    <div class="bg-light box-shadow-lg rounded-lg p-4 mb-grid-gutter text-center text-sm-left">
                        <img class="d-inline-block mb-4 mt-2" width="100" src="img/demo/business-consulting/services/01.svg" alt="Icon"/>
                        <h3 class="h5 mb-2">Mapa</h3>
                        <p class="font-size-sm">Find aute irure dolor in reprehend in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="bg-light box-shadow-lg rounded-lg p-4 mb-grid-gutter text-center text-sm-left">
                        <img class="d-inline-block mb-4 mt-2" width="100" src="img/demo/business-consulting/services/01.svg" alt="Icon"/>
                        <h3 class="h5 mb-2">Recursos</h3>
                        <p class="font-size-sm">Find aute irure dolor in reprehend in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="bg-light box-shadow-lg rounded-lg p-4 mb-grid-gutter text-center text-sm-left">
                        <img class="d-inline-block mb-4 mt-2" width="100" src="img/demo/business-consulting/services/01.svg" alt="Icon"/>
                        <h3 class="h5 mb-2">Gestión de la Innovación</h3>
                        <p class="font-size-sm">Find aute irure dolor in reprehend in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="bg-light box-shadow-lg rounded-lg p-4 mb-grid-gutter text-center text-sm-left">
                        <img class="d-inline-block mb-4 mt-2" width="100" src="img/demo/business-consulting/services/01.svg" alt="Icon"/>
                        <h3 class="h5 mb-2">Ecosistema de Innovación</h3>
                        <p class="font-size-sm">Find aute irure dolor in reprehend in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Demos-->
    <section class="bg-secondary" id="demos">
        <div class="container pt-5 pb-4 py-md-6 py-lg-7">
            <div class="text-center mb-5 pt-3 pt-lg-4">
                <h2 class="h1 mb-4 uppercase">Eventos</span>
                </h2>
                <p class="text-muted">Mira nuestros próximos eventos</p>
            </div>
            <div class="row">
                <div class="col-lg-4 col-sm-6 mb-grid-gutter">
                    <a class="card card-hover border-0 box-shadow mx-auto" href="#" style="max-width: 400px;">
                        <img class="card-img-top" src="img/demo/business-consulting/industries/01.jpg" alt="Life Science"/>
                        <div class="card-body">
                            <h3 class="h5 mb-0 text-center">Hackaton</h3>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6 mb-grid-gutter">
                    <a class="card card-hover border-0 box-shadow mx-auto" href="#" style="max-width: 400px;">
                        <img class="card-img-top" src="img/demo/business-consulting/industries/01.jpg" alt="Life Science"/>
                        <div class="card-body">
                            <h3 class="h5 mb-0 text-center">Conferencia de innovación</h3>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6 mb-grid-gutter">
                    <a class="card card-hover border-0 box-shadow mx-auto" href="#" style="max-width: 400px;">
                        <img class="card-img-top" src="img/demo/business-consulting/industries/01.jpg" alt="Life Science"/>
                        <div class="card-body">
                            <h3 class="h5 mb-0 text-center">Webinar de innovación</h3>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
