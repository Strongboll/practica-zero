<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="estilos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</head>
 
<body>
 
<div class="container">
	<header>
		<h1>Programación en PHP y MySQL - Nivel Avanzado</h1>
	

	<nav>
		<?php include("botonera.php"); ?>
	</nav>
	</header>
	<section>
		<h2>Usuarios</h2>
		<!-- <?php  //include("unidad6/Clases/usuarios.php");  
		// $nombre = new Usuarios("carlso","dominguez",15); ?> -->

		<form method="POST" action="unidad6.php">
		  	<div class="input-group">
			  <span class="input-group-text">Nombre</span>
			  <input type="text" aria-label="First name" name="nombre" class="form-control" required>
			   <span class="input-group-text">Apellido</span>
			  <input type="text" aria-label="Last name" name="apellido" class="form-control" required>
			</div>
			  <br>
					<div class="input-group">
			  <span class="input-group-text">Edad</span>
			  <input type="number" aria-label="First name" name="edad" class="form-control" required>
			</div>
			<br>
			<div class="mb-3 form-check">
		    <input type="checkbox" class="form-check-input" id="exampleCheck1" required="">
		    <label class="form-check-label" for="exampleCheck1">Check me out</label>
		  </div>
		  <button type="submit" class="btn btn-primary">Submit</button>
		</form>

	</section>
	<aside>
    <?php 
    	include("unidad6/caract_usuarios.php");
    // $nombre->imprime_caracteristicas() ?>
  </aside>
	<footer>
		<a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
	</footer>
 
</div>
</body>
</html>