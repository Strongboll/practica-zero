<?php 
session_start();
$n=$_POST['nombre'];
$a=$_POST['apellido'];
$m=$_POST['mail'];
$c=$_POST['cons'];
if ($_SESSION['captcha']==$_POST['captcha']) 
	{
		$cbd = mysqli_connect('localhost','root','','phpavanzado1806') or exit('No se pudo conectar a la BD');
		mysqli_query($cbd,"INSERT INTO consultas VALUES (DEFAULT, '$n','$a','$m','$c')");
		mysqli_close($cbd);
		header("Location:../unidad5.php?exito");
	}
else
	{header("Location:../unidad5.php?error");}
 ?>
