<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/jquery-ui.min.css') }}">
    @yield('styles')
    
    <title>@yield('titulo', 'Defalut')</title>
  </head>
  <body>
    @include('admin/template/menu/nav')
    @include('flash::message')
    @yield('body')

    <script src="{{ asset('js/jquery-1.9.1.js') }}" charset="utf-8"></script>
    <script src="{{ asset('js/bootbox.min.js') }}" charset="utf-8"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}" charset="utf-8"></script>
    <script src="{{ asset('js/jquery-ui.min.js') }}" charset="utf-8"></script>
    @yield('javascripts')
  </body>
</html>
