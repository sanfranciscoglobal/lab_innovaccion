@extends('backend.escritorio.index')
@section('contenido')
    {{--<div class="card">--}}
    <h6 class="card-header">
        <span class="text-muted font-weight-light">Registros /</span> Iniciativas
        {{--<a href="{{route('app.branch_office.create')}}" class=" btn btn-sm btn-outline-primary float-right">--}}
        {{--<i class="fas fa-plus mr-2"></i>CREAR--}}
        {{--</a>--}}
    </h6>
    {{--<div class="card-datatable table-responsive">--}}
    <div class="py-2">
        <table class="datatables-demo table table-striped table-bordered">
            <thead class="thead-dark">
            <tr>
                <th>Iniciativa</th>
                <th>Origen</th>
                <th>Componente Innovador</th>
                <th>Descripci&oacute;n</th>
                <th>Coincidencia <span>>= 30%</span> </th>
                <th>Estado</th>
                <th class="text-center">
                    <i class="fa fa-cog"></i>
                </th>
            </tr>
            </thead>
            <tbody>
            @foreach($iniciativas as $iniciativa)
                <tr>
                    <td>
                        <div class="border-bottom">
                            {{$iniciativa->nombre_iniciativa}}
                        </div>
                        @if($iniciativa->nombre_organizacion)
                            <div class="border-bottom">
                                {{$iniciativa->nombre_organizacion}}
                            </div>
                        @endif

                        @if($iniciativa->user_name)
                            <div class="border-bottom">
                                {{$iniciativa->user_name}}
                            </div>
                        @endif
                    </td>
                    <td>{{$iniciativa->iniciativa_origen_descripcion}}</td>
                    <td>{!! $iniciativa->descripcion_iniciativa !!}</td>
                    <td>{!! $iniciativa->descripcion_iniciativa !!}</td>
                    <td>
                        <div class="w-100 mb-2">
                            <a href="#" class="btn-link">Organización</a>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 30%;" aria-valuenow="50"
                                     aria-valuemin="0" aria-valuemax="100">30%
                                </div>
                            </div>
                        </div>
                        <div class="w-100 mb-2">
                            <a href="#" class="btn-link">Sitio web</a>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 50%;" aria-valuenow="50"
                                     aria-valuemin="0" aria-valuemax="100">50%
                                </div>
                            </div>
                        </div>
                        <div class="w-100 mb-2">
                            <a href="#" class="btn-link">Iniciativa</a>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 80%;" aria-valuenow="50"
                                     aria-valuemin="0" aria-valuemax="100">80%
                                </div>
                            </div>
                        </div>
                        <div class="w-100 mb-2">
                            <a href="#" class="btn-link">Componente</a>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 90%;" aria-valuenow="50"
                                     aria-valuemin="0" aria-valuemax="100">90%
                                </div>
                            </div>
                        </div>
                        <div class="w-100 mb-2">
                            <a href="#" class="btn-link">Contacto</a>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 50%;" aria-valuenow="50"
                                     aria-valuemin="0" aria-valuemax="100">50%
                                </div>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="text-center" style="width: 60px;">
                            {!! \App\Helpers\Helper::obtenerEtiquetaEstado($iniciativa->deleted_at) !!}
                        </div>
                    </td>
                    <td class="text-center">
                        <div style="width: 50px;">
                            <a href="{{$iniciativa->deleted_at_status ? '#' : route('admin.iniciativas.edit',$iniciativa->id)}}"
                               class="btn btn-sm btn-outline-primary w-100 my-2 {{$iniciativa->deleted_at_status?'disabled':''}}"
                               data-toggle="tooltip"
                               data-placement="left"
                               data-state="primary"
                               title="EDITAR"
                               @if($iniciativa->deleted_at_status) disabled="disabled" @endif
                            >
                                <i class="fe-edit"></i>
                            </a>

                            @if($iniciativa->deleted_at_status)
                                <a href="{{route('admin.iniciativas.activar',$iniciativa->id)}}"
                                   class="btn btn-sm btn-outline-success" data-toggle="tooltip"
                                   data-placement="right" data-state="primary" title="ACTIVAR">
                                    <i class="fe-check-circle"></i>
                                </a>
                            @else
                                <a href="" data-toggle="modal" data-target="#deleteModal"
                                   data-id="{{ $iniciativa->id }}"
                                   class="btn btn-sm btn-outline-danger w-100">
                                    <i class="fe-trash-2"></i>
                                </a>
                            @endif
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>


    {{--</div>--}}
    {{--</div>--}}
@endsection
@section('modal')
    @include('includes.forms.modal-delete',['name_route'=>'admin.iniciativas.destroy'])
@endsection
@section('footer')
    <script>
        window.deleteModalAjax('deleteModal');
    </script>
@endsection