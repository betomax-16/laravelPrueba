@extends('admin/template/main')
@section('titulo')
  Ver Usuario
@endsection

@section('body')
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1>{{ $usuario->nombre.$usuario->apellidoPaterno.$usuario->apellidoMaterno }}</h1>
        <p><h4>Email</h4>{{ $usuario->email }}</p><br>
        <p><h4>Role</h4>{{ $usuario->role }}</p><br>
      </div>
    </div>
  </div>
@endsection
