@extends('layouts.aplicacion.app')
@section('header-css')
<style>
    .list-item { border-top: 1px solid #E9E9F2;}
    .list-item:last-child { border-bottom: 1px solid #E9E9F2;}
    @media (max-width:768px){
        .desktop-spacer{
            height: 93px;
        }
    }
    @media (min-width:769px){
        .desktop-spacer{
            height: 125px;
        }
    }
</style>
@endsection

@section('content')
    <div class="position-relative desktop-spacer mb-4 mb-md-5"></div>
    <div class="container bg-overlay-content pb-4 mb-md-3">
        <div class="row">
            <!-- Sidebar-->
            @include('aplicacion.escritorio._sidebar_escritorio')
            <!-- Content-->
            {{-- @include('aplicacion.escritorio._content_escritorio') --}}

            @yield('contenido')

        </div>
    </div>
@endsection
