<?php
include ("Clases/usuarios.php");
if (isset($_POST['nombre']))
	{
	$usuario= new Usuarios($_POST['nombre'],$_POST['apellido'],$_POST['edad']);
	$usuario->imprime_caracteristicas();
	}
 ?>