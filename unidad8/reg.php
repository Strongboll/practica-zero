<?php 
session_start();
$n=$_POST['user'];
$a=$_POST['pass'];
$r=$a;
$a=password_hash($a, PASSWORD_DEFAULT,array('cost' =>4));

if ($_SESSION['captcha']==$_POST['captcha']) 
	{
		$cbd = mysqli_connect('localhost','root','','phpavanzado1806') or exit('No se pudo conectar a la BD');
		mysqli_query($cbd,"INSERT INTO usuarios VALUES (DEFAULT,'$n','$a','$r')");
		mysqli_close($cbd);
		header("Location:../unidad8.php?exito");
	}
else
	{header("Location:../unidad8.php?error");}