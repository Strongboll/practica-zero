<?php
$dia = $_POST['dia'];
$ano = $_POST['ano'];
$mes = $_POST['mes'];
$hoy = "$dia-$mes-$ano";
if (checkdate($mes,$dia,$ano)) 
{
	$cbd = mysqli_connect('localhost','root','','phpavanzado1806') or exit('No se pudo conectar a la BD');
	date_default_timezone_set("America/Argentina/Buenos_Aires"); 
	$fecha = getdate();	
	$ahora = date('d-m-Y');
	$d = strtotime($hoy,time())-strtotime($ahora,(time()));
	if ($d>=0) { ?>

		<div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
		  <div class="card-body">
		    
		    <p class="card-text">Fecha actual: <?php echo $fecha['mday'].'-'.$fecha['mon'].'-'.$fecha['year']; ?></p>
		    <p class="card-text">Fecha seleccionada: <?php echo $dia.'-'.$mes.'-'.$ano; ?></p>
		    <h5 class="card-title">Faltan <?php echo $d/86400; ?> dias.</h5>
		  </div>


		<?php }
	else
		{
			echo '<div class="alert alert-danger" role="alert"><h3>La fecha elegida es anterior a la actual.</h3></div>';
		}

}  
else {	?>
	<div class="alert alert-danger" role="alert">
	  La fecha <?php echo $dia.'/'.$mes.'/'.$ano; ?> no existe.
	</div>
	<?php
		}
	?>

