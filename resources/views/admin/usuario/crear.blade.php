@extends('admin/template/main')
@section('titulo')
  Crear Usuario
@endsection

@section('body')
  {!! Form::open(['route' => 'usuarios.store', 'method' => 'POST']) !!}
  <div class="form-group">
    {!! Form::label('nombre', 'nombre') !!}
    {!! Form::text('nombre', null, ['class' => 'form-control', 'placeholder' => 'Nombre...']) !!}
  </div>
  <div class="form-group">
    {!! Form::label('apellidoPaterno', 'Apellido Paterno') !!}
    {!! Form::text('apellidoPaterno', null, ['class' => 'form-control', 'placeholder' => 'Apellido Paterno...']) !!}
  </div>
  <div class="form-group">
    {!! Form::label('apellidoMaterno', 'Apellido Materno') !!}
    {!! Form::text('apellidoMaterno', null, ['class' => 'form-control', 'placeholder' => 'Apellido Materno...']) !!}
  </div>
  <div class="form-group">
    {!! Form::label('email', 'Email') !!}
    {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Email...']) !!}
  </div>
  <div class="form-group">
    {!! Form::label('password', 'Contraseña') !!}
    {!! Form::password('password', ['class' => 'form-control']) !!}
  </div>
  <div class="form-group">
    {!! Form::label('role', 'Role') !!}
    {!! Form::select('role', ['' => 'Seleccione una opción', 'ROLE_ADMIN' => 'Administrador', 'ROLE_USER' => 'Usuario'], null, ['class' => 'form-control']) !!}
  </div>
  <div class="form-group">
    {!! Form::submit('Registrar Usuario', ['class' => 'btn btn-success']) !!}
  </div>
  {!! Form::close() !!}
@endsection
