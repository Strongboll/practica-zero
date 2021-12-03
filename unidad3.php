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
		<h2>Comentarios</h2>

		    			<?php
		if (isset($_GET['exito'])) {
		echo '<div class="alert alert-success" role="alert">
  Comentario cargado exitosamente!</div>';
		  }

		?>

		<form method="POST" action="unidad3/comentarios.php">
		  <div class="mb-3">
		    <label for="text" class="form-label">Nombre y Apellido</label>
		    <input type="text" class="form-control" id="dia" aria-describedby="dia" name="name" required="">
		  </div>
		  <div class="mb-3">
		    <label for="email" class="form-label">Email</label>
		    <input type="email" class="form-control" id="mes" name="mail" required="">
		  </div>
			<div class="input-group">
			  <span class="input-group-text">Comentario</span>
			  <textarea class="form-control" aria-label="With textarea" name="com" required></textarea>
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
    	<h2>Comentarios</h2>

    			<?php
    			if (file_exists("unidad3/comentarios.txt"))
    			{
						$cd= fopen("unidad3/comentarios.txt",'r') or die('Comentarios no disponibles.');
						while(!feof($cd))
						 {echo fgets($cd) . "<br>";}
				}?>

  </aside>
	<footer>
		<a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
	</footer>
 
</div>
</body>
</html>