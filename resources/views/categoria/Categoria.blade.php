@extends('layouts/app')
@section('content')
<div class="row content">
	<div class="col-sm-4 text-left">
		<!-- Gerry al parcer si no usas los forms en este proyecto de esta forma no se pueden mandar-->
		{!! Form::open(['route' => 'categorias.store', 'method' => 'POST']) !!}
			<div class="form-group">
				{!! Form::label('categoria','Escriba la nueva categoria que Desea agregar:') !!}
				{!! Form::text('nombre', null, ['class' => 'form-control', 'placeholder' => 'Categoria a Agregar']) !!}
			</div>
			{!! Form::submit('Guardar', ['class' => 'btn btn-default']) !!}
		{!! Form::close() !!}
			<form action="" methor="post">
					<div class="form-group">
						<label for="list_cat"> <br> Las Categorias que Actualmente existen son:  </label>
						<div class="dropdown">
	  					<button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Categorias
							<span class="caret"></span></button>
							<ul class="dropdown-menu">
								@foreach($categorias as $categoria)
									<li>{{$categoria->nombre}}</li>
								@endforeach
							</ul>
						</div>
					</div>
			</form>
		</div>
</div>
@endsection
