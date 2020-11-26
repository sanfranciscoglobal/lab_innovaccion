@extends('aplicacion.escritorio.escritorio')
@section('contenido')
<div class="col-lg-9">
    <div class="d-flex flex-column h-100 bg-light rounded-lg box-shadow-lg p-4">
        <div class="py-2 p-md-3">
            <div class="d-sm-flex align-items-center justify-content-between pb-4 text-center text-sm-left border-bottom">
                <h1 class="h3 mb-2 text-nowrap">Soluciones Registradas <span class="badge badge-secondary ml-1">{{ $soluciones->total() }}</span></h1>
                {{-- <a href="{{route('app.fondos')}}" class="btn btn-primary">
                    <i class="fe fe-plus mr-1"></i>
                    Crear P
                </a> --}}
            </div>


            <div class="row">
                @foreach ($soluciones as $solucion)
                
                    <div class="col-sm-12 pt-4 pb-2 list-item">
                        <div class="row">
                            <div class="col-sm-9">
                                <h4><a data-toggle="tooltip"
                                    title="Editar" href="{{ route('app.soluciones.edit', [$solucion->problema_id, $solucion->id]) }}"
                                    data-placement="bottom">
                                    <i class="fe-edit text-primary"></i>
                                    Solucion</a></h4>
                                {{-- <h4 class="h4">{{$evento->nombre}}</h4> --}}
                            </div>
                        </div>
                        {{-- <p>{{ $problema->nombre_fondo }}</p> --}}
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
            <div>{{ $soluciones->links() }}</div>
        </div>
    </div>
</div>
@endsection
