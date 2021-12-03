<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet">
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
		<h2>Compras</h2>

		<?php include('unidad7/listar.php');?>	


	</section>
	<aside>

		<?php

					 if (isset($_GET['add'])) 
			{
				$add = new Productos($base);
				$id = $add->getProducto($_GET['add']);
				$carrito= new Carrito($base);
				
						$carrito->addCarrito($id);
						$listado2= $carrito->getCarrito();
						?>
						<script>
						     setTimeout(function(){
						          windows.location = "unidad7.php";
						     }, 10);
						</script>
						<?php
			}
					if (isset($_GET['del'])) 
			{
				$add = new Productos($base);
				$id = $add->getProducto($_GET['del']);
				$carrito= new Carrito($base);
				
						$carrito->delCarrito($id);
						$listado2= $carrito->getCarrito();
						?>
						<script>
						     setTimeout(function(){
						          windows.location = "unidad7.p";
						     }, 10);
						</script>
						<?php
			}

		?>


    	<h2>Carrito de compras</h2>

	    	<div class="card" style="width: 18rem;">
			  <div class="card-body">
			    <table class="table">
            <thead>
               <tr>
               			 <th scope="col" colspan="3">Cantidad</th>
                    <th scope="col" colspan="3">Producto</th>
                    <th scope="col" width="20 rem">Precio</th>
                </tr>	
            </thead>
            <tbody>

            	<?php 
				for ($i=0; $i < count($listado2) ; $i++) { 
					?>
				<tr>
								<td colspan="3"><?php echo $listado2[$i]["cant"];?></td>
	            	<td colspan="3"><?php echo $listado2[$i]["producto"];?></td>
	         	    <td colspan="">$ <?php echo $listado2[ $i]["precio"];?> <a href="unidad7.php?del=<?php echo $listado2[$i]['codigo'] ?>"><img src="unidad7/cancel_black_24dp.svg"></a></td>

		          	</tr>
			<?php }?>
		
		 	</tbody>
		</table>
			  </div>
			</div>

	    	
  </aside>
	<footer>
		<a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
	</footer>
 
	</div>
</body>
</html>