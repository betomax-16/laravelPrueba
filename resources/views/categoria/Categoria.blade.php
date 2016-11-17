<!DOCTYPE html>
<html>
<head>
	<title>Agregar nueva Categoria</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="js/bootstrap.min.js">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="row content">
		<div class="col-sm-4 text-left">
			<form action="" method="post">
		        <div class="form-group">
		        	<label for="categoria"> <br> Escriba la nueva categoria que Desea agregar: </label>
		        	<input type="text" class="form-control" id="txtCategoria" placeholder="Categoria a Agregar"> <br>
		        	<button type="submit" class="btn btn-default">Guardar</button>
		        </div>
	    	</form>
	    	<form action="" methor="post">
		        <div class="form-group">
		        	<label for="list_cat"> <br> Las Categorias que Actualmente existen son:  </label>
		        	<div class="dropdown">
	  					<button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Categorias
						<span class="caret"></span></button>
					    <ul class="dropdown-menu">
					      <li><a href="#">HTML</a></li>
					      <li><a href="#">CSS</a></li>
					      <li><a href="#">JavaScript</a></li>
					    </ul>
					</div>
		        </div>
		    </form>
	    </div>
	</div>
</body>
</html>