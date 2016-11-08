@extends('admin/template/main')
@section('titulo')
  Editar Usuario
@endsection

@section('body')
  {!! Form::open(['route' => ['usuarios.update', $usuario], 'method' => 'PUT']) !!}
  <div class="form-group">
    {!! Form::label('nombre', 'nombre') !!}
    {!! Form::text('nombre', $usuario->nombre, ['class' => 'form-control', 'placeholder' => 'Nombre...']) !!}
  </div>
  <div class="form-group">
    {!! Form::label('apellidoPaterno', 'Apellido Paterno') !!}
    {!! Form::text('apellidoPaterno', $usuario->apellidoPaterno, ['class' => 'form-control', 'placeholder' => 'Apellido Paterno...']) !!}
  </div>
  <div class="form-group">
    {!! Form::label('apellidoMaterno', 'Apellido Materno') !!}
    {!! Form::text('apellidoMaterno', $usuario->apellidoMaterno, ['class' => 'form-control', 'placeholder' => 'Apellido Materno...']) !!}
  </div>
  <div class="form-group">
    {!! Form::label('email', 'Email') !!}
    {!! Form::email('email', $usuario->email, ['class' => 'form-control', 'placeholder' => 'Email...']) !!}
  </div>
  <div class="form-group">
    {!! Form::label('role', 'Role') !!}
    {!! Form::select('role', ['' => 'Seleccione una opción', 'ROLE_ADMIN' => 'Administrador', 'ROLE_USER' => 'Usuario'], $usuario->role, ['class' => 'form-control']) !!}
  </div>
  <div class="form-group">
    {!! Form::submit('Guardar', ['class' => 'btn btn-success']) !!}
  </div>
  {!! Form::close() !!}
@endsection
