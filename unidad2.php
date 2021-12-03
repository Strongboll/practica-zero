<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="estilos.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
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
		<h2>Eventos</h2>

			<form method="POST" action="unidad2.php?exito">
		  <div class="mb-3">
		    <label for="number" class="form-label">Dia</label>
		    <input type="number" class="form-control" id="dia" aria-describedby="dia" name="dia" required="">
		  </div>
		  <div class="mb-3">
		    <label for="number" class="form-label">Mes</label>
		    <input type="number" class="form-control" id="mes" name="mes" required="">
		  </div>
		  <div class="mb-3">
		    <label for="number" class="form-label">Año</label>
		    <input type="number" class="form-control" id="ano" name="ano" required="">
		  </div>
		  <div class="mb-3 form-check">
		    <input type="checkbox" class="form-check-input" id="exampleCheck1" required="">
		    <label class="form-check-label" for="exampleCheck1">Check me out</label>
		  </div>
		  <button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</section>
	<aside>
		<?php
		if (isset($_GET['exito'])) {
		include 'unidad2/calculo_fecha.php';
		  }  

		?>
  </aside>
	<footer>
		<a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
	</footer>
 
</div>
</body>
</html>