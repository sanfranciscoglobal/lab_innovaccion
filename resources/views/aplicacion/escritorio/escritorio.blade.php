@extends('layouts.aplicacion.app')
@section('header-css')
<style>
    .list-item { border-top: 1px solid #E9E9F2;}
    .list-item:last-child { border-bottom: 1px solid #E9E9F2;}
</style>
@endsection

@section('content')
    <div class="position-relative" style="height: 480px;"></div>
    <div class="container bg-overlay-content pb-4 mb-md-3" style="margin-top: -310px;">
        <div class="row">
            <!-- Sidebar-->
            @include('aplicacion.escritorio._sidebar_escritorio')
            <!-- Content-->
            {{-- @include('aplicacion.escritorio._content_escritorio') --}}

            @yield('contenido')

        </div>
    </div>
@endsection
