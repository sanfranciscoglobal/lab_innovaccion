@extends('aplicacion.escritorio.escritorio')
@section('contenido')
<div class="col-lg-9">
    <div class="d-flex flex-column h-100 bg-light rounded-lg box-shadow-lg p-4">
        <div class="py-2 p-md-3">
            <div class="d-sm-flex align-items-center justify-content-between pb-4 text-center text-sm-left">
                <h1 class="h3 mb-2 text-nowrap">Materiales Aprendizaje Registrados <span class="badge badge-secondary ml-1">{{$materialescount}}</span></h1>
            </div>
            
            <div class="pt-grid-gutter pb-grid-gutter border-bottom text-left">
                <a href="{{route('app.material-de-aprendizaje.post')}}" class="btn btn-primary">
                    <i class="fe fe-plus mr-1"></i>
                    Crear Material
                </a>
            </div>
            <div class="row">
                @foreach ($materiales as $material)
                    
                    <div class="col-sm-12 pt-4 pb-2 list-item">
                        <div class="row">
                            <div class="col-sm-9">
                                <h4><a data-toggle="tooltip"
                                    title="Editar" href="{{route('app.material-de-aprendizaje.edit',$material->id)}}"
                                    data-placement="bottom">
                                    <i class="fe-edit text-primary"></i>
                                    {{$material->nombre_publicacion}}</a></h4>
                                {{-- <h4 class="h4">{{$evento->nombre}}</h4> --}}
                            </div>
                            <div class="col-sm-3 text-right text-muted">{{date('M d, Y', strtotime( $material->fecha_publicacion))}}</div>
                        </div>
                        <p>{{$material->tema_tratado}}</p>   

                    </div>
                    
                    <div class="media media-ie-fix align-items-center mr-3">
                    
                        <img class="rounded-circle" width="100"
                             src="{{asset('storage/'.$material->imagen_portada)}}"
                             alt="{{$material->imagen_portada}}"/>
                        <div class="media-body pl-2 ml-1">
                       
                            <h6 class="font-size-sm mb-n1">
                                {{$material->autor_publicacion}}
                            </h6>
                            <span class="font-size-xs text-muted" >{{$material->fecha_publicacion}}</span>

                        </div>

                        
                    </div>
                

                @endforeach
                
            </div>
           
            <div class="row mt-4">
                <div class="col-sm-8">
                    <span class="text-muted">Se muestran 4 de {{$materialescount}} eventos</span>
                </div>
                <div class="col-sm-4 text-right">
                    <button type="button" class="btn btn-primary">Cargar más eventos</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection