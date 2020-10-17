@extends('layouts.aplicacion.app')
@section('header-css')
    <style>
        .card-lab-orange .card-body * {
            color: white;
        }

        .card-lab-orange .card-body,
        .card-lab-orange .card-body:before {
            background-color: #FF9F40;
        }

    </style>
@endsection
@section('content')
    <section class="container my-lg-2 pt-5 pb-lg-3">
        <div class="row align-items-center">
            <div class="col-lg-5 py-3 py-lg-0 mt-lg-5">
                <h1 class="mt-5">Eventos</h1>
            </div>
        </div>
    </section>
    <section>
        <div class="container my-5 py-5">
            <div class="row">
                <div class="col-12 col-lg-8 offset-lg-2">
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veniam accusantium voluptatem pariatur
                        minima earum sequi, autem, alias, dolorum totam excepturi mollitia eveniet ut corrupti
                        exercitationem explicabo incidunt debitis possimus sapiente.</p>
                    <p class="text-center"><a class="btn btn-primary" href="/app/registro-de-eventos/">Publicar evento</a>
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="searchbar-container bg-secondary">
        <form class="container">
            <div class="d-lg-flex align-items-center px-4 pt-4 pb-3">
                <div class="d-sm-flex align-items-center">
                    <div class="form-group w-100 mb-sm-4 mr-sm-3">
                        <label class="form-label" for="from-destination">Ciudad</label>
                        <select class="form-control custom-select" id="from-destination">
                            <option value="" selected disabled hidden>Seleccione Ciudad</option>
                            <option value="Abu Dhabi, UAE">Abu Dhabi, UAE</option>
                            <option value="Amsterdam, NL">Amsterdam, NL</option>
                            <option value="Berlin, GER"> Berlin, GER</option>
                            <option value="Brussels, BE"> Brussels, BE</option>
                            <option value="Buenos Aires, ARG">Buenos Aires, ARG</option>
                            <option value="Canberra, AU">Canberra, AU</option>
                            <option value="London, UK">London, UK</option>
                            <option value="Madrid, SP">Madrid, SP</option>
                            <option value="Monaco, MON">Monaco, MON</option>
                            <option value="Moscow, RU">Moscow, RU</option>
                            <option value="Stockholm, SW">Stockholm, SW</option>
                        </select>
                    </div>
                    <div class="form-group w-100 mb-sm-4 mr-sm-3">
                        <label class="form-label" for="to-destination">Tipo de agente</label>
                        <select class="form-control custom-select" id="to-destination">
                            <option value="" selected disabled hidden>Seleccione un tipo</option>
                            <option value="Abu Dhabi, UAE">Abu Dhabi, UAE</option>
                            <option value="Amsterdam, NL">Amsterdam, NL</option>
                            <option value="Berlin, GER"> Berlin, GER</option>
                            <option value="Brussels, BE"> Brussels, BE</option>
                            <option value="Buenos Aires, ARG">Buenos Aires, ARG</option>
                            <option value="Canberra, AU">Canberra, AU</option>
                            <option value="London, UK">London, UK</option>
                            <option value="Madrid, SP">Madrid, SP</option>
                            <option value="Monaco, MON">Monaco, MON</option>
                            <option value="Moscow, RU">Moscow, RU</option>
                            <option value="Stockholm, SW">Stockholm, SW</option>
                        </select>
                    </div>
                </div>
                <div class="d-sm-flex align-items-center">
                    <div class="form-group w-100 mb-sm-4 mr-sm-3">
                        <label class="form-label">Objetivo de Desarrollo Sostenible (ODS)</label>
                        <select class="form-control custom-select" id="to-destination">
                            <option value="" selected disabled hidden>Seleccione un ODS</option>
                            <option value="Abu Dhabi, UAE">Abu Dhabi, UAE</option>
                            <option value="Amsterdam, NL">Amsterdam, NL</option>
                            <option value="Berlin, GER"> Berlin, GER</option>
                            <option value="Brussels, BE"> Brussels, BE</option>
                            <option value="Buenos Aires, ARG">Buenos Aires, ARG</option>
                            <option value="Canberra, AU">Canberra, AU</option>
                            <option value="London, UK">London, UK</option>
                            <option value="Madrid, SP">Madrid, SP</option>
                            <option value="Monaco, MON">Monaco, MON</option>
                            <option value="Moscow, RU">Moscow, RU</option>
                            <option value="Stockholm, SW">Stockholm, SW</option>
                        </select>
                    </div>
                    <div class="form-group w-100 mb-sm-4 mr-sm-3">
                        <label class="form-label">Población Objetivo</label>
                        <select class="form-control custom-select" id="to-destination">
                            <option value="" selected disabled hidden>Seleccione una poblacion</option>
                            <option value="Abu Dhabi, UAE">Abu Dhabi, UAE</option>
                            <option value="Amsterdam, NL">Amsterdam, NL</option>
                            <option value="Berlin, GER"> Berlin, GER</option>
                            <option value="Brussels, BE"> Brussels, BE</option>
                            <option value="Buenos Aires, ARG">Buenos Aires, ARG</option>
                            <option value="Canberra, AU">Canberra, AU</option>
                            <option value="London, UK">London, UK</option>
                            <option value="Madrid, SP">Madrid, SP</option>
                            <option value="Monaco, MON">Monaco, MON</option>
                            <option value="Moscow, RU">Moscow, RU</option>
                            <option value="Stockholm, SW">Stockholm, SW</option>
                        </select>
                    </div>
                    <div class="text-center text-sm-left mt-2 mt-sm-4 mb-4">
                        <button class="btn btn-primary" type="submit">Filtrar</button>
                    </div>
                </div>
            </div>
        </form>
    </section>

    <section class="container mb-5 pb-3 pb-lg-0 mb-lg-7 mt-lg-7">
        <div class="row mb-4">
            <div class="col-lg-4 col-sm-6 mb-grid-gutter">
                <a class="card card-hover border-0 box-shadow mx-auto" href="#" style="max-width: 400px;">
                    <img class="card-img-top" src="{{ asset('img/layout/home/02.jpg') }}" alt="Life Science" />
                    <div class="card-body">
                        <h3 class="h5 mb-0 text-center">Hackaton</h3>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-sm-6 mb-grid-gutter">
                <a class="card card-hover border-0 box-shadow mx-auto" href="#" style="max-width: 400px;">
                    <img class="card-img-top" src="{{ asset('img/layout/home/03.jpg') }}" alt="Life Science" />
                    <div class="card-body">
                        <h3 class="h5 mb-0 text-center">Conferencia de innovación</h3>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-sm-6 mb-grid-gutter">
                <a class="card card-hover border-0 box-shadow mx-auto" href="#" style="max-width: 400px;">
                    <img class="card-img-top" src="{{ asset('img/layout/home/01.jpg') }}" alt="Life Science" />
                    <div class="card-body">
                        <h3 class="h5 mb-0 text-center">Webinar de innovación</h3>
                    </div>
                </a>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col-lg-4 col-sm-6 mb-grid-gutter">
                <a class="card card-hover border-0 box-shadow mx-auto" href="#" style="max-width: 400px;">
                    <img class="card-img-top" src="{{ asset('img/layout/home/02.jpg') }}" alt="Life Science" />
                    <div class="card-body">
                        <h3 class="h5 mb-0 text-center">Hackaton</h3>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-sm-6 mb-grid-gutter">
                <a class="card card-hover border-0 box-shadow mx-auto" href="#" style="max-width: 400px;">
                    <img class="card-img-top" src="{{ asset('img/layout/home/03.jpg') }}" alt="Life Science" />
                    <div class="card-body">
                        <h3 class="h5 mb-0 text-center">Conferencia de innovación</h3>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-sm-6 mb-grid-gutter">
                <a class="card card-hover border-0 box-shadow mx-auto" href="#" style="max-width: 400px;">
                    <img class="card-img-top" src="{{ asset('img/layout/home/01.jpg') }}" alt="Life Science" />
                    <div class="card-body">
                        <h3 class="h5 mb-0 text-center">Webinar de innovación</h3>
                    </div>
                </a>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col-lg-4 col-sm-6 mb-grid-gutter">
                <a class="card card-hover border-0 box-shadow mx-auto" href="#" style="max-width: 400px;">
                    <img class="card-img-top" src="{{ asset('img/layout/home/02.jpg') }}" alt="Life Science" />
                    <div class="card-body">
                        <h3 class="h5 mb-0 text-center">Hackaton</h3>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-sm-6 mb-grid-gutter">
                <a class="card card-hover border-0 box-shadow mx-auto" href="#" style="max-width: 400px;">
                    <img class="card-img-top" src="{{ asset('img/layout/home/03.jpg') }}" alt="Life Science" />
                    <div class="card-body">
                        <h3 class="h5 mb-0 text-center">Conferencia de innovación</h3>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-sm-6 mb-grid-gutter">
                <a class="card card-hover border-0 box-shadow mx-auto" href="#" style="max-width: 400px;">
                    <img class="card-img-top" src="{{ asset('img/layout/home/01.jpg') }}" alt="Life Science" />
                    <div class="card-body">
                        <h3 class="h5 mb-0 text-center">Webinar de innovación</h3>
                    </div>
                </a>
            </div>
        </div>
    </section>
    <aside>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="d-md-flex justify-content-between align-items-center pt-3 pb-2">
                        <div class="d-flex justify-content-center align-items-center mb-4">
                            <label class="pr-1 mr-2">Mostrar</label>
                            <select class="form-control custom-select mr-2" style="width: 5rem;">
                                <option value="10">10</option>
                                <option value="20">20</option>
                                <option value="30">30</option>
                                <option value="40">40</option>
                                <option value="50">50</option>
                            </select>
                            <div class="font-size-sm text-nowrap pl-1 mb-1">eventos por página</div>
                        </div>
                        <nav class="mb-4" aria-label="Page navigation">
                            <ul class="pagination justify-content-center">
                                <li class="page-item"><a class="page-link" href="#" aria-label="Previous"><i
                                            class="fe-chevron-left"></i></a></li>
                                <li class="page-item d-sm-none"><span class="page-link page-link-static">2 / 10</span></li>
                                <li class="page-item d-none d-sm-block"><a class="page-link" href="#">1</a></li>
                                <li class="page-item active d-none d-sm-block" aria-current="page"><span class="page-link">2<span
                                            class="sr-only">(current)</span></span></li>
                                <li class="page-item d-none d-sm-block"><a class="page-link" href="#">3</a></li>
                                <li class="page-item d-none d-sm-block"><a class="page-link" href="#">4</a></li>
                                <li class="page-item d-none d-sm-block">...</li>
                                <li class="page-item d-none d-sm-block"><a class="page-link" href="#">10</a></li>
                                <li class="page-item"><a class="page-link" href="#" aria-label="Next"><i
                                            class="fe-chevron-right"></i></a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </aside>

@endsection
