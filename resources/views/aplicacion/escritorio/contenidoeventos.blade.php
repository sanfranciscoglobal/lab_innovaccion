@extends('aplicacion.escritorio.escritorio')
@section('contenido')
    <div class="col-lg-9">
        <div class="d-flex flex-column h-100 bg-light rounded-lg box-shadow-lg p-4">
            <div class="py-2 p-md-3">
                <div class="d-sm-flex align-items-center justify-content-between pb-4 text-center text-sm-left">
                    <h1 class="h3 mb-2 text-nowrap">
                        Eventos Registrados <span class="badge badge-secondary ml-1">{{$eventos->total()}}</span>
                    </h1>
                    <a href="{{route('app.eventos.post')}}" class="btn btn-primary">
                        <i class="fe fe-plus mr-1"></i>
                        Crear Evento
                    </a>
                </div>

                <div class="row">
                    @foreach ($eventos as $evento)

                        <div class="col-sm-12 pt-4 pb-2 list-item">
                            <div class="row">
                                <div class="col-sm-9">
                                    <h4>
                                        <a data-toggle="tooltip"
                                           title="Editar" href="{{route('app.eventos.edit',$evento->id)}}"
                                           data-placement="bottom">
                                            <i class="fe-edit text-primary"></i>
                                            {{$evento->nombre}}
                                        </a>
                                    </h4>
                                    {{-- <h4 class="h4">{{$evento->nombre}}</h4> --}}
                                </div>
                                <div class="col-sm-3 text-right text-muted">{{date('M d, Y', strtotime( $evento->fecha))}}</div>
                            </div>
                            <p>{{$evento->descripcion}}</p>
                        </div>
                    {{-- <p>{{$evento->descripcion}}</p> --}}
                    
                    <div class="media media-ie-fix align-items-center mr-3">
                        <img class="" width="100"
                             src="{{ asset('storage/eventos/'.$evento->imagen) }}"
                             alt="{{$evento->nombre}}"/>
                        <div class="media-body pl-2 ml-1">
                            <h6 class="font-size-sm mb-n1">
                                {{$evento->organizador}}
                            </h6>
                            <span class="font-size-xs text-muted" >{{$evento->fecha}} - {{date('H:i', strtotime( $evento->hora))}}</span>
                        </div>
                    </div>
                    
                



                    @endforeach

                </div>

                {{-- <div class="row mt-4">
                    <div class="col-sm-8">
                        <span class="text-muted">Se muestran 4 de {{$eventos->count()}} eventos</span>
                    </div>
                    <div class="col-sm-4 text-right">
                        <button type="button" class="btn btn-primary">Cargar más eventos</button>
                    </div>
                </div> --}}
                <div>{{ $eventos->links() }}</div>
            </div>
        </div>
    </div>
@endsection
