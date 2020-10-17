@extends('layouts.backend.app')
@section('header-css')
<style>
    .fs-60{ font-size: 60px; }
</style>
@endsection
@section('content')
    <h1 class="h4">Labotarorio de Innovación</h1>
    <nav aria-label="breadcrumb">
        <ol class="py-1 my-2 breadcrumb">
            <li class="breadcrumb-item"><a href="/admin/escritorio">Escritorio</a></li>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Ejemplo de vista</li>
        </ol>
    </nav>
    <div class="row mb-4">
        <div class="col-lg-3 col-md-6">
            <article class="card card-horizontal card-hover">
                <div class="card-body text-center">
                    <span class="d-block fs-60">10</span>
                    <a class="meta-link font-size-xl mb-2 h2" href="/admin/eventos">Eventos</a>
                </div>
            </article>
        </div>
        <div class="col-lg-3 col-md-6">
            <article class="card card-horizontal card-hover">
                <div class="card-body text-center">
                    <span class="d-block fs-60">25</span>
                    <a class="meta-link font-size-xl mb-2 h2" href="/admin/publicaciones">Publicaciones</a>
                </div>
            </article>
        </div>
        <div class="col-lg-3 col-md-6">
            <article class="card card-horizontal card-hover">
                <div class="card-body text-center">
                    <span class="d-block fs-60">10</span>
                    <a class="meta-link font-size-xl mb-2 h2" href="/admin/iniciativas">Iniciativas</a>
                </div>
            </article>
        </div>
        <div class="col-lg-3 col-md-6">
            <article class="card card-horizontal card-hover">
                <div class="card-body text-center">
                    <span class="d-block fs-60">3</span>
                    <a class="meta-link font-size-xl mb-2 h2" href="/admin/errores">Errores</a>
                </div>
            </article>
        </div>
    </div>
    <div class="row">
        <div class="col col-lg-8">
            <div class="card card-hover py-4 px-4">
                <h2 class="h4 mb-3">Usuarios</h2>
                <img class="img-fluid" src="http://placehold.it/800x300?text=Grafico%20Area">
            </div>
        </div>
        <div class="col col-lg-4">
            <div class="card card-hover py-4 px-4">
                <h2 class="h4 mb-3">Usuarios por dispositivo</h2>
                <img class="img-fluid" src="http://placehold.it/300x250?text=Grafico%20Circular">
            </div>
        </div>
    </div>
@endsection
