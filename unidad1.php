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
		<h2>Agenda de clases</h2>


			 <?php
            if (isset($_GET['exito'])) 
            {
                echo('<div class="alert alert-success" role="alert">
                 <strong>La unidad ha sido agregada exitosamente</strong>
                </div>');
            }
        ?>



		<form method="POST" action="unidad1/insertar_clases.php">
		  <div class="mb-3">
		    <label for="unidad" class="form-label">Unidad</label>	
		    <input type="text" class="form-control" id="unidad" name="unidad" required="">
		  </div>
		  <div class="mb-3">
		    <label for="fecha" class="form-label">Fecha</label>
		    <input type="date" class="form-control" id="fecha" name="fecha" value="<?php echo date("Y-m-d");?>" required>
		  </div>
		  <div class="mb-3 form-check">
		    <input type="checkbox" class="form-check-input" id="exampleCheck1" required="">
		    <label class="form-check-label" for="exampleCheck1" >Captcha</label>
		  </div>
		  <button type="submit" class="btn btn-primary">Enviar</button>
		</form>
	</section>
	<aside>
    
		 <h2>Clases</h2>
        
		 <?php include 'unidad1/ver_clases.php' ?>
       


  </aside>
	<footer>
		<a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
	</footer>
 
</div>
</body>
</html>