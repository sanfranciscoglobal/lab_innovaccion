@extends('layouts.aplicacion.app')
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
    <section class="container my-lg-5 pt-5 pb-lg-3">
        <div class="row align-items-center">
            <div class="col-lg-5 py-3 py-lg-0 mt-lg-5">
                <h2 class="mt-5">GESTIÓN DE LA INNOVACIÓN</h2>
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
                    {{-- @if ($autentificacion)
                        <p class="text-center"><a class="btn btn-primary" href="{{route('app.eventos')}}">Publicar evento</a>
                        </p>
                    @endif --}}
                </div>
            </div>
        </div>
    </section>
    <section class="searchbar-container bg-secondary">
        <form class="container" action="{{route('eventos.search')}}" method="POST">
            @csrf
            @method("POST")
            <div class="d-lg-flex align-items-center px-4 pt-4 pb-3">
                <div class="d-sm-flex align-items-center">
                    <div class="form-group w-100 mb-sm-4 mr-sm-3">
                        <label class="form-label" for="tipoconvocatoria">Tipo de convocatoria</label>
                        <select class="form-control custom-select" id="tipoconvocatoria" name="tipoconvocatoria">
                            <option value="" selected disabled hidden>Seleccione un tipo</option>
                            <option value="2">Pública</option>
                            <option value="0">Social</option>
                            <option value="1">Privada</option>

                        </select>

                    </div>
                    <div class="form-group w-100 mb-sm-4 mr-sm-3">
                        <label class="form-label" for="from-destination">Ciudad</label>
                        <select class="form-control custom-select" id="to-destination" name="tipoevento">
                            <option value="" selected disabled hidden>Seleccione un tipo</option>
                            <option value="2">Todos</option>
                            <option value="0">Virtual</option>
                            <option value="1">Presencial</option>

                        </select>
                        

                    </div>
                    <div class="form-group w-100 mb-sm-4 mr-sm-3">
                        <label class="form-label" for="tipoconvocatoria">Tipo de convocatoria</label>
                        <select class="form-control custom-select" id="tipoconvocatoria" name="tipoconvocatoria">
                            <option value="" selected disabled hidden>Seleccione un tipo</option>
                            <option value="2">Pública</option>
                            <option value="0">Social</option>
                            <option value="1">Privada</option>

                        </select>

                    </div>
                    <div class="form-group w-100 mb-sm-4 mr-sm-3">
                        <label class="form-label" for="from-destination">Ciudad</label>
                        <select class="form-control custom-select" id="to-destination" name="tipoevento">
                            <option value="" selected disabled hidden>Seleccione un tipo</option>
                            <option value="2">Todos</option>
                            <option value="0">Virtual</option>
                            <option value="1">Presencial</option>

                        </select>
                        

                    </div>
                    
                </div>
               <div class="text-center text-sm-left mt-2 mt-sm-4 mb-4">
                        <button class="btn btn-primary" type="submit">Filtrar</button>
                    
                </div>
            </div>

         
        </form>
    </section>
{{-- 
    <section class="container mb-5 pb-3 pb-lg-0 mb-lg-7 mt-lg-7">
            
            <div class="row justify-content-around">
                <div class="col-6">
                    <div class="card mb-3 card-hover" style="max-width: 540px;">
                        <div class="row no-gutters">
                        <div class="col-md-4 centrado">
                            <div class="row justify-content-md-center">
                                <h1 class="text-center font-weight-bold"><?php echo date('d'); ?></h1>    
                            </div>
                            <div class="row justify-content-md-center">
                                <p class="text-center font-weight-bold font-size-lg"><?php echo date('M'); ?></p>
                            </div>
                            <div class="row justify-content-md-center ">
                                <div class="col-4">
                                    <button type="button" class="btn btn-outline-secondary btn-sm btn-icon"><i class="fe-twitter"></i></button>
                                </div>
                                <div class="col-4">
                                    <button type="button" class="btn btn-outline-secondary btn-sm btn-icon"><i class="fe-facebook"></i></button>
                                </div>
                                
                            </div>

                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                            <span class="badge badge-lg badge-floating badge-floating-right bg-uva text-white">Nuevo</span>
                 
                            <p class="card-subtitle"><small class="text-muted">Convocatoria</small></p>
                            <h5 class="card-title"><a href="#">Sector Productivo</a> </h5>
                            <p class="card-text font-size-sm">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veniam accusantium voluptatem pariatur
                                minima earum sequi, autem, alias, dolorum totam excepturi mollitia eveniet ut corrupti
                                exercitationem explicabo incidunt debitis possimus sapiente.</p>
                        
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
               
            </div>
        
            
    </section> --}}
    <div class="position-relative bg-purple-gradient" style="height: 420px;">
        <div class="cs-shape cs-shape-bottom cs-shape-curve bg-secondary">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 3000 185.4">
                <path fill="currentColor" d="M3000,0v185.4H0V0c496.4,115.6,996.4,173.4,1500,173.4S2503.6,115.6,3000,0z">
                </path>
            </svg>
        </div>
    </div>
    <section class="container bg-overlay-content pt-5 pt-md-6" style="margin-top: -420px;">
        <h2 class="text-light text-center pt-3 pt-md-2 mb-5 uppercase">CONVOCATORIAS</h2>
        <div class="cs-carousel">
            <div class="cs-carousel-inner"
                data-carousel-options="{&quot;items&quot;: 2, &quot;controls&quot;: false, &quot;autoHeight&quot;: true, &quot;responsive&quot;: {&quot;0&quot;:{&quot;items&quot;:1, &quot;gutter&quot;: 16},&quot;500&quot;:{&quot;items&quot;:2, &quot;gutter&quot;: 16},&quot;850&quot;:{&quot;items&quot;:3, &quot;gutter&quot;: 16}, &quot;1100&quot;:{&quot;items&quot;:3, &quot;gutter&quot;: 23}}}">
                <!-- Article-->
                <div class="pb-2">
                    <article class="card card-hover h-100 border-0 box-shadow pt-4 pb-5 mx-1">
                        <div class="row no-gutters">
                            <div class="col-md-4 centrado">
                                <div class="row justify-content-md-center">
                                    <h1 class="text-center font-weight-bold"><?php echo date('d'); ?></h1>    
                                </div>
                                <div class="row justify-content-md-center">
                                    <p class="text-center font-weight-bold font-size-lg"><?php echo date('M'); ?></p>
                                </div>
                                <div class="row justify-content-md-center ">
                                    
                                        <button type="button" class="btn btn-outline-secondary btn-sm btn-icon"><i class="fe-twitter"></i></button>
                                        <button type="button" class="btn btn-outline-secondary btn-sm btn-icon"><i class="fe-facebook"></i></button>
                                    
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <span class="badge badge-lg badge-floating badge-floating-right bg-uva text-white">Nuevo</span>
                                <p class="card-subtitle"><small class="text-muted">Convocatoria</small></p>
                                <h5 class="card-title"><a href="#">Sector Productivo</a> </h5>
                                <p class="card-text font-size-sm">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veniam accusantium voluptatem pariatur
                                    minima earum sequi, autem, alias, dolorum totam excepturi mollitia eveniet ut corrupti
                                    exercitationem explicabo incidunt debitis possimus sapiente.</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
                <!-- Article-->
                <div class="pb-2">
                    <article class="card card-hover h-100 border-0 box-shadow pt-4 pb-5 mx-1">
                        <div class="row no-gutters">
                            <div class="col-md-4 centrado">
                                <div class="row justify-content-md-center">
                                    <h1 class="text-center font-weight-bold"><?php echo date('d'); ?></h1>    
                                </div>
                                <div class="row justify-content-md-center">
                                    <p class="text-center font-weight-bold font-size-lg"><?php echo date('M'); ?></p>
                                </div>
                                <div class="row justify-content-md-center ">
                                    
                                        <button type="button" class="btn btn-outline-secondary btn-sm btn-icon"><i class="fe-twitter"></i></button>
                                        <button type="button" class="btn btn-outline-secondary btn-sm btn-icon"><i class="fe-facebook"></i></button>
                                    
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <span class="badge badge-lg badge-floating badge-floating-right bg-uva text-white">Nuevo</span>
                                <p class="card-subtitle"><small class="text-muted">Convocatoria</small></p>
                                <h5 class="card-title"><a href="#">Sector Productivo</a> </h5>
                                <p class="card-text font-size-sm">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veniam accusantium voluptatem pariatur
                                    minima earum sequi, autem, alias, dolorum totam excepturi mollitia eveniet ut corrupti
                                    exercitationem explicabo incidunt debitis possimus sapiente.</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
                <!-- Article-->
                <div class="pb-2">
                    <article class="card card-hover h-100 border-0 box-shadow pt-4 pb-5 mx-1">
                        <div class="row no-gutters">
                            <div class="col-md-4 centrado">
                                <div class="row justify-content-md-center">
                                    <h1 class="text-center font-weight-bold"><?php echo date('d'); ?></h1>    
                                </div>
                                <div class="row justify-content-md-center">
                                    <p class="text-center font-weight-bold font-size-lg"><?php echo date('M'); ?></p>
                                </div>
                                <div class="row justify-content-md-center ">
                                    
                                        <button type="button" class="btn btn-outline-secondary btn-sm btn-icon"><i class="fe-twitter"></i></button>
                                        <button type="button" class="btn btn-outline-secondary btn-sm btn-icon"><i class="fe-facebook"></i></button>
                                    
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <span class="badge badge-lg badge-floating badge-floating-right bg-uva text-white">Nuevo</span>
                                <p class="card-subtitle"><small class="text-muted">Convocatoria</small></p>
                                <h5 class="card-title"><a href="#">Sector Productivo</a> </h5>
                                <p class="card-text font-size-sm">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veniam accusantium voluptatem pariatur
                                    minima earum sequi, autem, alias, dolorum totam excepturi mollitia eveniet ut corrupti
                                    exercitationem explicabo incidunt debitis possimus sapiente.</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
                <!-- Article-->
                <div class="pb-2">
                    <article class="card card-hover h-100 border-0 box-shadow pt-4 pb-5 mx-1">
                        <span class="badge badge-lg badge-floating badge-floating-right bg-uva text-white">Nuevo</span>
                        <div class="card-body pt-5 px-4 px-xl-5">
                            <a class="meta-link font-size-sm mb-2" href="#">Categoría 1</a>
                            <h3 class="h4 nav-heading mb-4">
                                <a href="#">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rerum sed.</a>
                            </h3>
                        </div>
                        <div class="px-4 px-xl-5 pt-2">
                            <a class="media meta-link font-size-sm align-items-center" href="#">
                                <img class="rounded-circle" width="42" src="{{ asset('img/layout/home/profile4.jpg') }}"
                                    alt="Sanomi Smith" />
                                <div class="media-body pl-2 ml-1 mt-n1">por<span class="font-weight-semibold ml-1">Empresa
                                        1</span></div>
                            </a>
                            <div class="mt-3 text-right text-nowrap">
                                <a class="meta-link font-size-xs text-tomate" href="#">
                                    <i class="fe-calendar mr-1 mt-n1"></i>&nbsp;22 Ago
                                </a>
                            </div>
                        </div>
                    </article>
                </div>
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
@section('footer')
<script>
    $(document.body).on("change","#to-destination",function(){
    
    $("#from-destination").empty();
    if (this.value==1) {
        
        $("#from-destination").removeAttr('disabled');
         
    }
    else{
       
        $("#from-destination").attr('disabled','disabled');   

    }
    

    });

</script>
    
@endsection