@extends('backend.escritorio.index')
@section('contenido')
    {{--<div class="card">--}}
    <h6 class="card-header">
        <span class="text-muted font-weight-light">Registros /</span> Fondos
        {{--<a href="{{route('app.branch_office.create')}}" class=" btn btn-sm btn-outline-primary float-right">--}}
        {{--<i class="fas fa-plus mr-2"></i>CREAR--}}
        {{--</a>--}}
    </h6>
    {{--<div class="card-datatable table-responsive">--}}
    <div class="py-2">
        <table class="datatables-demo table table-striped table-bordered">
            <thead class="thead-dark">
            <tr>
                <th>Evento</th>
                <th>Organizador</th>
                <th>Descripci&oacute;n</th>
                <th>Estado</th>
                <th class="text-left">
                    <i class="fa fa-cog"></i>
                </th>
            </tr>
            </thead>
            <tbody>
            @foreach($eventos as $evento)
                <tr>
                    <td>
                        {{$evento->nombre}}
                    </td>
                    <td>
                        {{$evento->organizador}}
                    </td>
                    <td>
                        {!! $evento->descripcion!!}
                    </td>
                    <td class="text-left">
                        {!! \App\Helpers\Helper::obtenerEtiquetaEstado($evento->deleted_at) !!}
                    </td>
                    <td>
                        <div class="text-center" style="width: 123px;">
                            <a href="{{$evento->deleted_at_status ? '#' : route('admin.eventos.edit',$evento->id)}}"
                               class="btn btn-sm btn-outline-primary mr-1 {{$evento->deleted_at_status?'disabled':''}}"
                               data-toggle="tooltip"
                               data-placement="left"
                               data-state="primary"
                               title="EDITAR"
                               @if($evento->deleted_at_status) disabled="disabled" @endif
                            >
                                <i class="fe-edit"></i>
                            </a>

                            @if($evento->deleted_at_status)
                                <a href="{{route('admin.eventos.activar',$evento->id)}}"
                                   class="btn btn-sm btn-outline-success" data-toggle="tooltip"
                                   data-placement="right" data-state="primary" title="ACTIVAR">
                                    <i class="fe-check-circle"></i>
                                </a>
                            @else
                                <a href="" data-toggle="modal" data-target="#deleteModal"
                                   data-id="{{ $evento->id }}"
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
    @include('includes.forms.modal-delete',['name_route'=>'admin.eventos.destroy'])
@endsection
@section('footer')
    <script>
        window.deleteModalAjax('deleteModal');
    </script>
@endsection