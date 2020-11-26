@extends('backend.escritorio.index')
@section('contenido')

                    <div class="py-2 p-md-3">
                        <div class="d-sm-flex align-items-center justify-content-between pb-4 text-center text-sm-left">
                            <h1 class="h3 mb-2 text-nowrap">Convocatorias Registradas <span class="badge badge-secondary ml-1">{{ $convocatorias->total() }}</span></h1>
                            <a href="{{route('admin.convocatoria.post')}}" class="btn btn-primary">
                                <i class="fe fe-plus mr-1"></i>
                                Crear Convocatorias
                            </a>
                        </div>
                        
                        <div class="row">
                            @foreach ($convocatorias as $convocatoria)
                            @php
                                
                                $img = asset('img/logo/favicon/android-chrome-512x512.png');
                                if(Storage::disk('convocatorias')->exists($convocatoria->imagen)){
                                     $img = asset('storage/convocatorias/'.$convocatoria->imagen);
                                 }
                            @endphp
                                
                                <div class="col-sm-12 pt-4 pb-2 list-item">
                                    <div class="row">
                                        <div class="col-sm-9">
                                            <h4><a data-toggle="tooltip"
                                                title="Editar" href="{{route('admin.convocatoria.edit',$convocatoria->id)}}"
                                                data-placement="bottom">
                                                <i class="fe-edit text-primary"></i>
                                                
                                                CONVOCATORIA -> {{$convocatoria->id}}
                                            </a></h4>
                                        </div>
                                        @if ($convocatoria->tipoconvocatoria_id==1)
                                            <div class="badge badge-lg badge-floating badge-floating-right bg-uva text-white">Innovación Abierta</div>
                                            {{-- <div class="col">
                                                    <span class="badge badge-lg badge-floating badge-floating-right bg-uva text-white">Convocatoria Abierta</span>
                                            </div> --}}
 
                                        @elseif ($convocatoria->tipoconvocatoria_id==2)
                                            <div class="badge badge-lg badge-floating badge-floating-right bg-uva text-white">Innovación Social</div>
                                            
                            
                                        @else
                                            <div class="badge badge-lg badge-floating badge-floating-right bg-uva text-white">Innovación Pública</div>
                                       
                                        
                                        @endif
                                        
                                        
                                    </div>
                                    <p>{{$convocatoria->descripcion}}</p>

            
                                </div>
                                <div class="media media-ie-fix align-items-center mr-3">
                                    <img class="" width="100"
                                         src="{{ $img }}"
                                         alt="{{$convocatoria->id}}"/>
                                    <div class="media-body pl-2 ml-1">
                                        
                                        <span class="font-size-xs text-muted" >{{$convocatoria->fecha_inicio}}</span>
                                    </div>
                                </div>
                                    
            
                            @endforeach

                            
                        </div>
                        <div>{{ $convocatorias->links() }}</div>
                    </div>

@endsection