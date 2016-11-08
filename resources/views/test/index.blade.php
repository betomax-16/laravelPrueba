@extends('admin/template/main')
@section('titulo')
  {{ $articulo->titulo }}
@endsection

@section('body')
  Hola mundo Test/index.blade.php!!! <br><br>
  <h1>{{ $articulo->titulo }}</h1>
  <p>{{ $articulo->contenido }}</p><hr>
  <b>{{ $articulo->usuario->nombre }} | {{ $articulo->categoria->nombre }}</b><hr>
  <h2>Etiquetas</h2>
  @foreach($articulo->etiquetas as $etiqueta)
    {{ $etiqueta->nombre }}<br>
  @endforeach
  <button type="button" name="button" class="btn btn-success btn-lg">Hola</button>
@endsection
