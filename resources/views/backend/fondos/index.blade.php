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
                <th>Procedencia</th>
                <th>Organización</th>
                {{--<th>Sitio web</th>--}}
                <th>Nombre del fondo</th>
                <th>Estado</th>
                <th class="text-left">
                    <i class="fa fa-cog"></i>
                </th>
            </tr>
            </thead>
            <tbody>
            @foreach($fondos as $fondo)
                <tr>
                    <td>
                        {{$fondo->fuente?'Fondos propios':'Fondos de otra organización'}}
                    </td>
                    <td>
                        <a href="{{$fondo->info}}" class="nav-link-style" target="_blank">
                            {{$fondo->organizacion}}
                        </a>
                    </td>
                    <td>{!! $fondo->nombre_fondo!!}</td>
                    <td class="text-left">
                        {!! \App\Helpers\Helper::obtenerEtiquetaEstado($fondo->deleted_at) !!}
                    </td>
                    <td>
                        <div class="text-center" style="width: 123px;">
                            <a href="{{$fondo->deleted_at_status ? '#' : route('admin.fondos.edit',$fondo->id)}}"
                               class="btn btn-sm btn-outline-primary mr-1 {{$fondo->deleted_at_status?'disabled':''}}"
                               data-toggle="tooltip"
                               data-placement="left"
                               data-state="primary"
                               title="EDITAR"
                               @if($fondo->deleted_at_status) disabled="disabled" @endif
                            >
                                <i class="fe-edit"></i>
                            </a>

                            @if($fondo->deleted_at_status)
                                <a href="{{route('admin.fondos.activar',$fondo->id)}}"
                                   class="btn btn-sm btn-outline-success" data-toggle="tooltip"
                                   data-placement="right" data-state="primary" title="ACTIVAR">
                                    <i class="fe-check-circle"></i>
                                </a>
                            @else
                                <a href="" data-toggle="modal" data-target="#deleteModal"
                                   data-id="{{ $fondo->id }}"
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
    @include('includes.forms.modal-delete',['name_route'=>'admin.fondos.destroy'])
@endsection
@section('footer')
    <script>
        window.deleteModalAjax('deleteModal');
    </script>
@endsection