@extends('aplicacion.escritorio.escritorio')
@section('contenido')
<div class="col-lg-9">
    <div class="d-flex flex-column h-100 bg-light rounded-lg box-shadow-lg p-4">
        <div class="py-2 p-md-3">
            <div class="d-sm-flex align-items-center justify-content-between pb-4 text-center text-sm-left border-bottom">
                <h1 class="h3 mb-2 text-nowrap">Fondos Registrados <span class="badge badge-secondary ml-1">{{ $fondos->total() }}</span></h1>
                <a href="{{route('app.fondos')}}" class="btn btn-primary">
                    <i class="fe fe-plus mr-1"></i>
                    Crear Fondo
                </a>
            </div>


            <div class="row">
                @foreach ($fondos as $fondo)
                @php
                    $slug = App\Helpers\CustomUrl::urlTitle($fondo->nombre_fondo);
                @endphp
                    <div class="col-sm-12 pt-4 pb-2 list-item">
                        <div class="row">
                            <div class="col-sm-9">
                                <h4><a data-toggle="tooltip"
                                    title="Editar" href="{{ route('app.fondos.edit', [$fondo->id, $slug]) }}"
                                    data-placement="bottom">
                                    <i class="fe-edit text-primary"></i>
                                    {{ $fondo->nombre_fondo }}</a></h4>
                                {{-- <h4 class="h4">{{$evento->nombre}}</h4> --}}
                            </div>
                            <div class="col-sm-3 text-right text-muted">{{ date('M d, Y', strtotime($fondo->fecha_inicio)) }} - {{ date('M d, Y', strtotime($fondo->fecha_fin)) }}</div>
                        </div>
                        <p>{{ $fondo->organizacion }}</p>
                    </div>
                    <div class="media media-ie-fix align-items-center mr-3">
                        <img class="" width="100"
                             src="{{ asset('storage/'.$fondo->imagen) }}"
                             alt="{{$fondo->nombre_fondo}}"/>
                        <div class="media-body pl-2 ml-1">
                            <h6 class="font-size-sm mb-n1">
                                {{$fondo->organizacion}}
                            </h6>
                            <span class="font-size-xs text-muted" >{{$fondo->fecha_inicio}}</span>
                        </div>
                    </div>
                @endforeach
            </div>

            {{-- <div class="row mt-4">
                <div class="col-sm-8">
                    <span class="text-muted">Se muestran 4 de {{ $fondos->count() }} fondos</span>
                </div>
                <div class="col-sm-4 text-right">
                    <button type="button" class="btn btn-outline-primary btn-sm">Cargar más fondos</button>
                </div>
            </div> --}}
            <div>{{ $fondos->links() }}</div>
        </div>
    </div>
</div>
@endsection
