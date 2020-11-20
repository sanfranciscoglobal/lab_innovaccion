@extends('backend.escritorio.index')
@section('contenido')
    <h1 class="h4">Labotarorio de Innovación</h1>
    <nav aria-label="breadcrumb">
        <ol class="py-1 my-2 breadcrumb">
            <li class="breadcrumb-item"><a href="/admin/escritorio">Escritorio</a></li>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
        </ol>
    </nav>
    <div class="row mb-4">
        <div class="col-lg-3 col-md-6">
            <article class="card card-horizontal card-hover">
                <div class="card-body text-center">
                    <span class="d-block fs-60">{{$eventos}}</span>
                    <a class="meta-link font-size-xl mb-2 h2" href="/admin/eventos">Eventos</a>
                </div>
            </article>
        </div>
        <div class="col-lg-3 col-md-6">
            <article class="card card-horizontal card-hover">
                <div class="card-body text-center">
                    <span class="d-block fs-60">{{$publicaciones}}</span>
                    <a class="meta-link font-size-xl mb-2 h2" href="/admin/publicaciones">Publicaciones</a>
                </div>
            </article>
        </div>
        <div class="col-lg-3 col-md-6">
            <article class="card card-horizontal card-hover">
                <div class="card-body text-center">
                    <span class="d-block fs-60">{{$iniciativas}}</span>
                    <a class="meta-link font-size-xl mb-2 h2" href="/admin/iniciativas">Iniciativas</a>
                </div>
            </article>
        </div>
        <div class="col-lg-3 col-md-6">
            <article class="card card-horizontal card-hover">
                <div class="card-body text-center">
                    <span class="d-block fs-60">{{$convocatorias}}</span>
                    <a class="meta-link font-size-xl mb-2 h2" href="/admin/errores">Convocatorias</a>
                </div>
            </article>
        </div>
    </div>
    <div class="row">
        <div class="col col-lg-6">
            <div class="card card-hover py-4 px-4">
                <h2 class="h4 mb-3">Usuarios</h2>
                {{--<img class="img-fluid" src="http://placehold.it/800x300?text=Grafico%20Area">--}}
                @foreach($usuarios as $usuario)
                    <div class="d-md-flex align-items-center py-grid-gutter border-bottom">
                        <div class="media media-ie-fix align-items-center mr-md-4 mb-4 mb-md-0"
                             style="max-width: 264px;">
                            <a class="d-block" href="#">
                                <img class="d-block rounded-circle" width="70"
                                     src="{{($usuario->perfil && $usuario->perfil->avatar)?asset('storage/perfil/'.$usuario->perfil->avatar):asset('img/demo/presentation/logo/logo-icon-footer.png')}}"
                                     alt="{{$usuario->name}}">
                            </a>
                            <div class="media-body pl-3">
                                <h2 class="font-size-base nav-heading mb-1">
                                    <a href="#">{{$usuario->name}}</a>
                                </h2>
                                <div class="font-size-xs text-muted mb-2 pb-1">
                                    {{$usuario->email}}, {{($usuario->perfil)?$usuario->perfil->celular:''}}
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="col col-lg-6">
            <div class="card card-hover py-4 px-4">
            {{--<h2 class="h4 mb-3">ODS</h2>--}}
            <!-- Dark table with hoverable rows -->
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead class="thead-dark">
                        <tr>
                            <th>#</th>
                            <th>ODS</th>
                            <th>Iniciativas</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($ods as $ods_)
                            <tr>
                                <th scope="row">{{$ods_->id}}</th>
                                <td>{{$ods_->nombre}}</td>
                                <td class="text-center">
                                    <span class="badge badge-pill badge-primary">
                                        {{--{{$ods_->id}}--}}
                                        {{$ods_->iniciativaOds()->count()}}
                                    </span>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection