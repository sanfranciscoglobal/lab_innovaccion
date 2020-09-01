<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    {{--<title>@yield('title')</title>--}}
    <title>Admin @yield('page_title')</title>
    <link rel="stylesheet" href="{{asset("css/app.css")}}">
    @yield('head')
</head>

<body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper">
    @include('layouts.backend.menu')
    <div id="content-wrapper" class="d-flex flex-column">
        <div id="content">
            @include('layouts.backend.header')

            <div class="container">
                @yield('sidebar')
                @include('includes.session-flash-status')
                @yield('content')
                <div id="spinner" class="text-center" style="display: none;">
                    <div class="spinner-border text-info" role="status">
                        <span class="sr-only">Loading...</span>
                    </div>
                </div>
            </div>
        </div>
        @include('layouts.backend.footer')
    </div>
</div>

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<script src="{{asset('js/app.js')}}"></script>
<script src="{{asset('js/helpers.js')}}"></script>

@yield('scripts')

</body>

</html>
