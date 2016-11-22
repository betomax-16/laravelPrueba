@extends('admin/template/main')
@section('titulo')
  Lista De Usuario
@endsection

@section('body')
<div class="progress no-border hidden" id="delete-progress">
  <div class="progress-bar progress-bar-striped active" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
    <span class="sr-only">Cargando...</span>
  </div>
</div>
<div class="alert alert-success hidden" id="message">
    <div class="container">
      <span id="user-message"></span>
    </div>
</div>
  <a href="{{ route('usuarios.create') }}" class="btn btn-info">Registrar Nuevo Usuario</a>
  {!! Form::open(['route' => 'usuarios.index', 'method' => 'GET', 'class' => 'navbar-form pull-right']) !!}
  <div class="input-group">
    {!! Form::text('nombre', null, ['class' => 'form-control', 'placeholder' => 'Buscar...', 'aria-decribedBy' => 'search']) !!}
    <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-search"></span></span>
  </div>
  {!! Form::close() !!}
  <table class="table table-striped">
    <thead>
      <th>ID</th>
      <th>Nombre</th>
      <th>Ap. Paterno</th>
      <th>Ap. Materno</th>
      <th>Emial</th>
      <th>Role</th>
      <th>Acciones</th>
    </thead>
    <tbody>
      @foreach($usuarios as $usuario)
      <tr id="{{$usuario->id}}">
        <td>{{$usuario->id}}</td>
        <td>{{$usuario->nombre}}</td>
        <td>{{$usuario->apellidoPaterno}}</td>
        <td>{{$usuario->apellidoMaterno}}</td>
        <td>{{$usuario->email}}</td>
        <td>
          @if($usuario->role == 'ROLE_ADMIN')
            <span class="label label-danger">{{$usuario->role}}</span>
          @else
            <span class="label label-primary">{{$usuario->role}}</span>
          @endif
        </td>
        <td>
          <a href="{{ route('usuarios.show', $usuario->id) }}" name="btnVer" class="btn btn-success">Ver</a>
          <a href="{{ route('usuarios.edit', $usuario->id) }}" name="btnEditar" class="btn btn-info">Editar</a>
          <button type="button" name="btnEliminar" class="btn btn-danger btn-delete">Eliminar</button>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>

  {!! $usuarios->render() !!}

  {!! Form::open(['method' => 'delete', 'route' => ['usuarios.destroy', 'ID_USER'], 'id' => 'form-delete']) !!}
  {!! Form::close() !!}

@endsection

@section('javascripts')
  <script src="{{ asset('js/usuarios/delete.js') }}" charset="utf-8"></script>
@endsection
