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

    <section  class="container mt-lg-2 pt-5 pt-sm-7  mt-md-4 pt-lg-7 pt-md-5 pb-0">
        <div class="row align-items-center">
            <div class="col-md-6 bg-size-cover order-md-2 py-5">
                <h1 class="mt-5 text-primary">Eventos</h1>
                <div class="py-3">
                    <p class="cs-callout">¡Promocionemos charlas, conferencias, y talleres en innovación!<br>
                        Registra tus propios eventos o de otras organizaciones para que los actores del ecosistema de innovación participen.</p>
                </div>
            </div>
            <div class="col-sm-0 col-md-6 py-8 bg-size-cover order-md-2 overflow-hidden " style="background-image: url('{{ asset('img/eventos.png') }}')" alt="Side banner"></div>
        </div>
    </section>
    <div class="position-relative bg-purple-gradient" style="height: 420px;">
        <div class="cs-shape cs-shape-bottom cs-shape-curve bg-secondary">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 3000 185.4">
                <path fill="currentColor" d="M3000,0v185.4H0V0c496.4,115.6,996.4,173.4,1500,173.4S2503.6,115.6,3000,0z">
                </path>
            </svg>
        </div>
    </div>
    <section class="container bg-overlay-content pt-5 pt-md-6" style="margin-top: -420px;">
      
            <div class="row">
                <div class="col-12 col-lg-8 offset-lg-2">
                    {{-- <h2 class="h3 text-center text-primary">Indicaciones</h2> --}}
                    <h2 class="text-light text-center pt-3 pt-md-2 mb-5 uppercase">Revisa la lista de eventos y participa de estos espacios de intercambio.</h2>
                    
                    <div class="col-12 col-lg-8 offset-lg-2 text-center pb-3">
                   
                        <p class="h5 text-light">Registra eventos propios o de otros organismos a nivel nacional o internacional en el formulario.</p>
                        
                        <a class="btn btn-primary" style="border-color:#FF7F00;background: #FF7F00;"href="{{ route('app.eventos') }}">Publicar evento</a>
                        {{-- <p class="text-center"><a class="btn" style="background: #a13d8f;color:#fafafc" href="{{route('app.eventos')}}">Publicar evento</a> --}}
                        </p>
                    </div>

                    
                </div>
            </div>
   
    </section>
    <section class="searchbar-container bg-overlay-content align-items-center" style="background: #f2f2f2;margin-top: 130px;">
        <form class="container" action="{{route('eventos.search')}}" method="POST">
            @csrf
            @method("POST")
            <div class="d-sm-flex align-items-center px-4 pt-4 pb-3">
                <div class="form-group w-100 mb-sm-4 mr-sm-3">
                    <label class="form-label font-weight-bold" for="to-destination" style="color: #a13d8f">Tipo de evento</label>
                    <select class="form-control custom-select" id="to-destination" name="tipoevento">
                        <option value="" selected disabled hidden>Seleccione un tipo</option>
                        <option value="2">Todos</option>
                        <option value="0">Virtual</option>
                        <option value="1">Presencial</option>

                    </select>

                </div>
                <div class="form-group w-100 mb-sm-4 mr-sm-3">
                    <label class="form-label font-weight-bold" for="from-destination" style="color: #a13d8f">Cantón</label>
             
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
                {{-- <div class="d-sm-flex align-items-center">
                    
                    
                </div> --}}
               <div class="text-center text-sm-left mt-2 mt-sm-4 mb-4">
                        <button class="btn " style="background: #ff7f00; color:#fafafc;" type="submit">Filtrar</button>
                    </div>
                </div>
            </div>
        </form>
    </section>
    {{-- <section class="searchbar-container align-items-center" style="background: #f2f2f2">
        <form class="container" action="{{route('eventos.search')}}" method="POST">
            @csrf
            @method("POST")
            <div class="d-sm-flex align-items-center px-4 pt-4 pb-3">
                <div class="form-group w-100 mb-sm-4 mr-sm-3">
                    <label class="form-label font-weight-bold" for="to-destination" style="color: #a13d8f">Tipo de evento</label>
                    <select class="form-control custom-select" id="to-destination" name="tipoevento">
                        <option value="" selected disabled hidden>Seleccione un tipo</option>
                        <option value="2">Todos</option>
                        <option value="0">Virtual</option>
                        <option value="1">Presencial</option>

                    </select>

                </div>
                <div class="form-group w-100 mb-sm-4 mr-sm-3">
                    <label class="form-label font-weight-bold" for="from-destination" style="color: #a13d8f">Cantón</label>
             
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
                
               <div class="text-center text-sm-left mt-2 mt-sm-4 mb-4">
                        <button class="btn " style="background: #ff7f00; color:#fafafc;" type="submit">Filtrar</button>
                    </div>
                </div>
            </div>
        </form>
    </section> --}}
    
    <section class="container mb-5 pb-3 pb-lg-0 mb-lg-7 mt-lg-7">
        <div class="row mb-4">
            @foreach ($eventos as $evento)
                
                {{-- <div class="col-lg-4 col-sm-6 mb-grid-gutter">
                   
                    <div class="card  border-0 box-shadow mx-auto" style="max-width: 400px;">
                        <a class="media meta-link font-size-sm align-items-center" href="{{route('eventodetalle',$evento->id)}}">
                            <img class="card-img-top" style="height: 58ch" src="{{asset('storage/eventos').'/'.$evento->imagen}}" alt="{{$evento->id}}"/>
                            <div class="card-body text-center">
                                <a class=" meta-link font-size-lg font-weight-bold align-items-center text-primary" href="{{route('eventodetalle',$evento->id)}}">{{$evento->nombre}}</a>
                            </div>
                        </a>
                        
                        
                    </div>
                </div> --}}
                    
                <div class="col-lg-4 col-sm-6 mb-grid-gutter">
                
                <div class="card card-hover border-0 box-shadow mx-auto">
                    <img class="card-img-top" style="height: 50ch" src="{{asset('storage/eventos').'/'.$evento->imagen}}" alt="{{$evento->id}}" />
                    <div class="card-body">
                        <h3 class="h5 mb-0 text-center">{{$evento->nombre}}</h3>
                    </div>
                    <div class="card-hover-info px-4 py-4 bg-secondary h-100">
                        <h3 class="h5 text-center">{{$evento->nombre}}</h3>
                        <p class="text-center"><span class="organizador">{{$evento->organizador}}</span></p>
                        <div class="mt-3 font-weight-bold text-primary">
                            <p style="margin-bottom: 0"><small >{{date('d M, Y', strtotime( $evento->fecha))}}</small></p>
                            <p><small >{{date('H\Hi', strtotime( $evento->hora))}}</small></p>
                        </div>
                        <span class="font-weight-bold"><i class="fe-message-square font-size-lg mr-2"></i> Descripción del Evento</span><br>
                        <p class="scrollable"  >{{$evento->descripcion}}</p>
                        <div class="form-group">
                            
                            
                            
                        </div>
                        
                        <div class="mt-3 text-primary font-weight-semibold">
                            
                            @if ($evento->tipo==0)
                                <span class="font-weight-bold"><i class="fe-link font-size-xl mr-2"></i> Fuente de la publicación</span>
                    
                                <div class="form-group">
                                    <a  href="{{$evento->url}}">
                                    <input  class="form-control bx-label" style="cursor: pointer; background:white" type="text" value="{{isset($evento->url)?$evento->url:null}}">
                                    </a>
                                </div>
                            @else
                                <span class="font-weight-bold"><i class="fe-map-pin font-size-xl mr-2"></i> Ubicación</span>
                                <div class="form-group">
                                    <a  href="https://maps.google.com/?q={{$evento->org_lat}},{{$evento->org_long}}">
                                    <input  class="form-control bx-label" style="cursor: pointer; background:white" type="text" value="https://maps.google.com/?q={{$evento->org_lat}},{{$evento->org_long}}">
                                    
                                    </a>
                                </div>
                            @endif
                            
                        </div>
                    </div>
                </div>
            </div>
                
            @endforeach
            <div class="col-12">{{ $eventos->links() }}</div>
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