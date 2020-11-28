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
                        {!! \App\Helpers\Helper::obtenerEtiquetaEstado($iniciativa->deleted_at) !!}
                    </td>
                    <td class="text-center">
                        <div style="width: 123px;">
                            <a href="{{route('admin.iniciativas.edit',$iniciativa->id)}}"
                               class="btn btn-sm btn-outline-primary mr-1" data-toggle="tooltip"
                               data-placement="left" data-state="primary" title="EDITAR">
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
                                   class="btn btn-sm btn-outline-danger">
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