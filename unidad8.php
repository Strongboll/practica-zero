<?php session_start();?>

		<?php
			if (!isset($_SESSION['ok'])){
		 	include("unidad5/fcaptcha.php");

			$_SESSION['captcha'] = clave_captcha();
			}
		?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="estilos.css">
  <?php 
  if (!isset($_SESSION['ok'])) { ?>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
<?php } ?>
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

		<?php
		if (!isset($_SESSION['ok'])) {

			if (isset($_GET['deslog'])) {
				echo "<div class='alert alert-success' role='alert'>Se ha cerrado la sesion correctamente!		</div>";
			}
			?>
			<h2>Registro</h2>
		<h3>Si no estas registrado podes hacerlo desde aca!</h3>
    		<form method="POST" action="unidad8/reg.php">
					  <div class="row mb-3">
					    <label for="inputEmail3" class="col-sm-2 col-form-label">Usuario</label>
					    <div class="col-sm-4">
					      <input type="text" class="form-control" id="inputEmail3" name="user" required>
					    </div>
					  </div>
					  <div class="row mb-3">
					    <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
					    <div class="col-sm-4">
					      <input type="password" class="form-control" id="inputPassword3" name="pass"required>
					    </div>
					  </div>
					  <div class="row mb-3">
					    <div class="col-sm-10 offset-sm-1">
					      <div class="mb-3 row">
								 <div class="col-sm-3">
								    <img src="unidad5/gen_captcha.php" style="border: 1px solid black;">
								</div>
							    <div class="col-sm-5">
							      <input type="text" class="form-control-plaintext" id="staticEmail" name="captcha" placeholder="Ingrese el Captcha" required>
							    </div>
						  </div>
					    </div>
					  </div>
					  <button type="submit" class="btn btn-primary">Registrarse</button>
			</form>
			<?php
		}
		
			?>
		<?php if (isset($_SESSION['ok'])) {
			echo "<div class='alert alert-success' role='alert'>Usuario ingresado correctamente! Bienvenido!</div>";
			include("unidad8/index.php");
			?>
			<style type="text/css">
				aside
				{display: none;}
				section
				{width: 100%;
					padding: 0px;}
				#ssd
				{box-sizing: border-box;
					width: 98%;}
			</style>
			<?php
		}?>
	</section>
	<aside style="visibility: visible;">
		

    <?php 

    		

			    if (!isset($_SESSION['ok']))
			     {
			     	
			    	?>
			    	<h3>Iniciar Sesion</h3>
			    	<form method="POST" action="unidad8/log.php">
					  <div class="row mb-3">
					    <label for="inputEmail3" class="col-sm-3 col-form-label">Usuario</label>
					    <div class="col-sm-9">
					      <input type="text" class="form-control" id="inputEmail3" name="user">
					    </div>
					  </div>
					  <div class="row mb-4">
					    <label for="inputPassword3" class="col-sm-3 col-form-label">Password</label>
					    <div class="col-sm-9">
					      <input type="password" class="form-control" id="inputPassword3" name="pass">
					    </div>
					  </div>
					  <div class="row mb-3">
					    <div class="col-sm-12">
					      <div class="mb-3 row">
								 <div class="col-sm-5">
								    <img src="unidad5/gen_captcha.php" style="border: 1px solid black;">
								</div>
							    <div class="col-sm-7">
							      <input type="text" class="form-control" id="" name="captcha" placeholder="Ingrese el Captcha" required>
							    </div>
							    <?php if (isset($_GET['error'])) {
				echo "<div class='alert alert-danger'style='width:98%;margin: 3px;' role='alert'>Captcha Incorrecto</div>";
			} ?>
								<?php if (isset($_GET['errorlog'])) {
				echo "<div class='alert alert-danger'style='width:98%;margin: 3px;' role='alert'>Usuario y/o Contraseña incorrectos</div>";
			} ?>
						  </div>
					    </div>
					  </div>
					  <p><button type="submit" class="btn btn-primary">Sign in</button>
					</form>
			     <?php } 
    	
?>

  </aside>
	<footer>
		<a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
	</footer>
 
</div>
</body>
</html>