<?php 
session_start();
$n=$_POST['user'];
$a=$_POST['pass'];

if ($_SESSION['captcha']==$_POST['captcha']) 
	{
		$cbd = mysqli_connect('localhost','root','','phpavanzado1806') or exit('No se pudo conectar a la BD');
		$cons= mysqli_query($cbd,"SELECT pass FROM usuarios WHERE '$n'= user");
		$cod= mysqli_fetch_assoc($cons);
		mysqli_close($cbd);
		if(password_verify($a, $cod['pass']))
		{$_SESSION['ok']=1;
		header("Location:../unidad8.php?exito");}
		else
		{header("Location:../unidad8.php?errorlog");}
	}
else
	{header("Location:../unidad8.php?error");}