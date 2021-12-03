<?php  session_start() ?>
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
		<h2>Consultas</h2>

		 <?php
		 	include("unidad5/fcaptcha.php");

			$_SESSION['captcha'] = clave_captcha();



				if (isset($_GET['exito'])) 
					{echo '<div class="alert alert-success" role="alert">Consulta enviada exitosamente!</div>';}
		?>

		<form method="POST" action="unidad5/cargar.php">
		  	<div class="input-group">
			  <span class="input-group-text">Nombre</span>
			  <input type="text" aria-label="First name" name="nombre" class="form-control" required>
			   <span class="input-group-text">Apellido</span>
			  <input type="text" aria-label="Last name" name="apellido" class="form-control" required>
			</div>
			<br>
			  <div class="col-12">
			    <label for="inputAddress" class="form-label">Correo Electrónico</label>
			    <input type="mail" class="form-control" id="inputAddress" name="mail" placeholder="Ejemplo@Ejemplo.com" required>
			  </div>
  			<br>
			 <div class="mb-3">
			    <label for="validationTextarea" class="form-label">Consulta</label>
			    <textarea class="form-control" id="validationTextarea" name="cons" placeholder="Escriba su consulta aqui" required></textarea>
			  </div>
			<br>
				<div class="mb-3">
				<label for="formFile" class="form-label">Captcha</label>
				 <div class="mb-3 row">
					 <div class="col-sm-2">
					    <img src="unidad5/gen_captcha.php" style="border: 1px solid black;">
					</div>
				    <div class="col-sm-10">
				      <input type="text" class="form-control-plaintext" id="staticEmail" name="captcha" placeholder="Ingrese el codigo Captcha" required>
				    </div>
				</div>
				<?php
				if (isset($_GET['error'])) 
					{echo '<br>';
						echo '<div class="alert alert-danger" role="alert">Codigo Captcha erroneo</div>';
						echo '<br>';}
				?>
			<br>
		  <div class="mb-3 form-check">
		    <input type="checkbox" class="form-check-input" id="exampleCheck1" required="">
		    <label class="form-check-label" for="exampleCheck1">Check me out</label>
		  </div>
		  <button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</section>
	<aside>
    
  </aside>
	<footer>
		<a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
	</footer>
 
</div>
</body>
</html>