
		<?php

include("clases/basedatos.php");
include("clases/productos.php");
include("constantes.php");
include("clases/carrito.php");
$base = new Basededatos(servidor,usuario,pass,base);
$productos = new Productos($base);
$listado = $productos->getProductos();

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
						          windows.location = "unidad7.php";
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

	    	