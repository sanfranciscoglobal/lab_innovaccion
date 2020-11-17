@extends('aplicacion.escritorio.escritorio')
@section('contenido')
<div class="col-lg-9">
    <div class="d-flex flex-column h-100 bg-light rounded-lg box-shadow-lg p-4">
        <div class="py-2 p-md-3">
            <div class="d-sm-flex align-items-center justify-content-between pb-4 text-center text-sm-left border-bottom">
                <h1 class="h3 mb-2 text-nowrap">Problemas Registrados <span class="badge badge-secondary ml-1">{{ $problemas->total() }}</span></h1>
                {{-- <a href="{{route('app.fondos')}}" class="btn btn-primary">
                    <i class="fe fe-plus mr-1"></i>
                    Crear P
                </a> --}}
            </div>


            <div class="row">
                @foreach ($problemas as $problema)
                @php
                    // $slug = App\Helpers\CustomUrl::urlTitle($problema->organizacion);
                    $img = asset('img/logo/favicon/android-chrome-512x512.png');
                    if(Storage::disk('problemas')->exists($problema->imagen)){
                        $img = asset('storage/problemas/'.$problema->imagen);
                    }
                @endphp
                    <div class="col-sm-12 pt-4 pb-2 list-item">
                        <div class="row">
                            <div class="col-sm-9">
                                <h4><a data-toggle="tooltip"
                                    title="Editar" href="{{ route('app.problemas.edit', [$problema->convocatoria_id, $problema->id]) }}"
                                    data-placement="bottom">
                                    <i class="fe-edit text-primary"></i>
                                    Problema</a></h4>
                                {{-- <h4 class="h4">{{$evento->nombre}}</h4> --}}
                            </div>
                        </div>
                        {{-- <p>{{ $problema->nombre_fondo }}</p> --}}
                    </div>
                    <div class="media media-ie-fix align-items-center mr-3">
                        <img class="" width="100"
                             src="{{ $img }}"
                             alt="{{ $img }}"/>
                        {{-- <div class="media-body pl-2 ml-1">
                            <h6 class="font-size-sm mb-n1">
                                {{$problema->organizacion}}
                            </h6>
                            <span class="font-size-xs text-muted" >{{$problema->fecha_inicio}}</span>
                        </div> --}}
                    </div>
                @endforeach
            </div>

            {{-- <div class="row mt-4">
                <div class="col-sm-8">
                    <span class="text-muted">Se muestran 4 de {{ $problemas->count() }} fondos</span>
                </div>
                <div class="col-sm-4 text-right">
                    <button type="button" class="btn btn-outline-primary btn-sm">Cargar más fondos</button>
                </div>
            </div> --}}
            <div>{{ $problemas->links() }}</div>
        </div>
    </div>
</div>
@endsection
