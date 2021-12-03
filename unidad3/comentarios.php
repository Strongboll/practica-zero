<?php
$nombre = $_POST['name'];
$mail = $_POST['mail'];
$com = $_POST['com'];
date_default_timezone_set("America/Argentina/Buenos_Aires"); 

$arc = fopen("comentarios.txt", 'a');

fputs($arc,'<div class="card text-dark bg-light mb-3"  style="max-width: 18rem;">');
	fputs($arc,'<h5 style="font-size:18px; margin:2px; text-align:center;" class="card-title">'.$nombre.' - <span >'.date("d/m/Y").'  '.date("H:i").'</span></h5>');
			fputs($arc,'<div class="card-body"><p class="card-text">Mail: '.$mail.'</p><p class="card-text">'.$com.'</p></div>');		
fputs($arc,'</div>');

header('Location: ../unidad3.php?exito');
	?>