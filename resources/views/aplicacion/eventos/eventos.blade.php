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

    </style>
@endsection
@section('content')

    <section class="container my-lg-2 pt-5 pb-lg-5">
        <div class="row align-items-center">
            <div class="col-lg-5 py-3 py-lg-0 mt-lg-5">
                <h1 class="mt-5">Eventos</h1>
                <div class="py-3">
                    <p class="cs-callout">¡Promocionemos charlas, conferencias, y talleres en innovación!<br>
                        Registra tus propios eventos o de otras organizaciones para que los actores del ecosistema de innovación participen.</p>
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
                    <p class="text-center">Caso 1. Registra eventos propios o de otros organismos a nivel nacional o internacional en el formulario.<br>
                    Caso 2. Revisa la lista de eventos y participa de estos espacios de intercambio.</p>

                    @if ($autentificacion)
                        <p class="text-center"><a class="btn btn-primary" href="{{route('app.eventos')}}">Publicar evento</a>
                        </p>
                    @endif
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
                        <label class="form-label" for="to-destination">Tipo de evento</label>
                        <select class="form-control custom-select" id="to-destination" name="tipoevento">
                            <option value="" selected disabled hidden>Seleccione un tipo</option>
                            <option value="2">Todos</option>
                            <option value="0">Virtual</option>
                            <option value="1">Presencial</option>

                        </select>

                    </div>
                    <div class="form-group w-100 mb-sm-4 mr-sm-3">
                        <label class="form-label" for="from-destination">Cantón</label>
                 
                        <select style="width:100%;" id="from-destination" class="form-control select2 " name="canton[]"
                                data-ajax--url="{{route('api.canton.select2')}}"
                                data-ajax--data-type="json"
                                data-ajax--data-cache="true"
                                data-allow-clear="true"
                                data-placeholder="Seleccione un Cantón"
                                data-close-on-select="false"
                                disabled
                                multiple>
                        </select>
                    </div>
                    
                </div>
               <div class="text-center text-sm-left mt-2 mt-sm-4 mb-4">
                        <button class="btn btn-warning" type="submit">Filtrar</button>
                    </div>
                </div>
            </div>
        </form>
    </section>

    <section class="container mb-5 pb-3 pb-lg-0 mb-lg-7 mt-lg-7">
        <div class="row mb-4">
            @foreach ($eventos as $evento)
                
                <div class="col-lg-4 col-sm-6 mb-grid-gutter">
                    <div class="card card-hover border-0 box-shadow mx-auto" style="max-width: 400px;">
                        <img class="card-img-top" style="height: 58ch" src="{{asset('storage/eventos').'/'.$evento->imagen}}" alt="{{$evento->id}}"/>
                        <div class="card-body text-center">
                            <a class=" meta-link font-size-lg font-weight-bold align-items-center" href="{{route('eventodetalle',$evento->id)}}">{{$evento->nombre}}</a>
                        </div>
                        
                        {{-- <div class="card-hover-info px-4 py-4">
                            <h3 class="h5 text-center">{{$evento->nombre}}</h3>
                            <p class="text-center"><span class="organizador">{{$evento->organizador}}</span></p>
                            <p class="text-justify">{{$evento->descripcion}}</p>
                            <p class="text-center font-weight-bold font-size-lg"><span>{{$evento->fecha}} - {{$evento->hora}}</span></p>
                           
                            @if ($evento->tipo)
                               
                                <span class="font-weight-bold"><i class="fe-map-pin font-size-xl mr-2"></i> Presencial</span>
                                <p class="text-justify">{{$evento->cantonid->nombre}}</p>
                                <p class="text-justify">{{$evento->ubicacion}}</p>
                           
                                <div class="event-map w-100 mt-1"  style="min-height: 250px; background: red;"></div>
                            @else
                               
                                <span class="font-weight-bold"><i class="fe-map-pin font-size-xl mr-2"></i> Virtual</span>
                                <p class="text-justify"><a Target="_blank" href="{{$evento->url}}" blank="_">{{$evento->url}}</a></p>
                                <div class="w-100 mt-1"  style="min-height: 250px; background: white;"></div>
                            @endif
                            
                           
                                
                        </div> --}}
                        
                    </div>
                </div>
                <a href="{{route('eventos.download')}}">DOWNLOAD</a>
                
            @endforeach
            <!-- Loop Start -->
            {{-- <div class="col-lg-4 col-sm-6 mb-grid-gutter">
                <div class="card card-hover border-0 box-shadow mx-auto" style="max-width: 400px;">
                    <img class="card-img-top" src="{{ asset('img/layout/home/02.jpg') }}" alt="Life Science" />
                    <div class="card-body">
                        <h3 class="h5 mb-0 text-center">Hackaton</h3>
                    </div>
                    <div class="card-hover-info px-4 py-4">
                        <h3 class="h5 text-center">Lorem Ipsum</h3>
                        <p class="text-center"><span class="organizador">Nombre Organizador</span></p>
                        <p class="text-justify"><?php echo substr('Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis accusamus cupiditate dolore, velit deserunt veritatis facere a et unde totam commodi.', 0, 160); ?></p>
                        <p class="text-center font-weight-bold font-size-lg"><span><?php echo date('d/m/Y'); ?> - <?php echo date('h\Hm'); ?></span></p>
                        <span class="font-weight-bold"><i class="fe-map-pin font-size-xl mr-2"></i> Ubicación</span>
                        <div class="event-map w-100 mt-1" style="min-height: 250px; background: red;"></div>
                    </div>
                </div>
            </div> --}}
            <!-- loop end -->
            {{-- <div class="col-lg-4 col-sm-6 mb-grid-gutter">
                <div class="card card-hover border-0 box-shadow mx-auto" href="#" style="max-width: 400px;">
                    <img class="card-img-top" src="{{ asset('img/layout/home/03.jpg') }}" alt="Life Science" />
                    <div class="card-body">
                        <h3 class="h5 mb-0 text-center">Conferencia de innovación</h3>
                    </div>
                    <div class="card-hover-info px-4 py-4">
                        <h3 class="h5 text-center">Lorem Ipsum</h3>
                        <p class="text-center"><span class="organizador">Nombre Organizador</span></p>
                        <p class="text-justify"><?php echo substr('Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis accusamus cupiditate dolore, velit deserunt veritatis facere a et unde totam commodi.', 0, 160); ?></p>
                        <p class="text-center font-weight-bold font-size-lg"><span><?php echo date('d/m/Y'); ?> - <?php echo date('h\Hm'); ?></span></p>
                        <span class="font-weight-bold"><i class="fe-map-pin font-size-xl mr-2"></i> Ubicación</span>
                        <div class="event-map w-100 mt-1" style="min-height: 250px; background: red;"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 mb-grid-gutter">
                <div class="card card-hover border-0 box-shadow mx-auto" href="#" style="max-width: 400px;">
                    <img class="card-img-top" src="{{ asset('img/layout/home/01.jpg') }}" alt="Life Science" />
                    <div class="card-body">
                        <h3 class="h5 mb-0 text-center">Webinar de innovación</h3>
                    </div>
                    <div class="card-hover-info px-4 py-4">
                        <h3 class="h5 text-center">Lorem Ipsum</h3>
                        <p class="text-center"><span class="organizador">Nombre Organizador</span></p>
                        <p class="text-justify"><?php echo substr('Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis accusamus cupiditate dolore, velit deserunt veritatis facere a et unde totam commodi.', 0, 160); ?></p>
                        <p class="text-center font-weight-bold font-size-lg"><span><?php echo date('d/m/Y'); ?> - <?php echo date('h\Hm'); ?></span></p>
                        <span class="font-weight-bold"><i class="fe-map-pin font-size-xl mr-2"></i> Ubicación</span>
                        <div class="event-map w-100 mt-1" style="min-height: 250px; background: red;"></div>
                    </div>
                </div>
            </div>
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
            </div> --}}
            
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