<?php

/**
 * 
 */
class Carrito
{	
	private $bd;
	private $ids;
	private $a;
		private $b;
		private $c;
		private $d;
	function __construct($base)
	{
		$this->bd = $base;
	}

	public function getCarrito()
	{
		$resultado = $this->bd->consulta('SELECT * FROM compras ORDER BY codigo');
		return $resultado;
	}
	public function addCarrito($producto)
	{
		error_reporting(0);
		$id = $producto[0]['codigo'];
		$nom = $producto[0]['producto'];
		$de = $producto[0]['descripcion'];
		$pr = $producto[0]['precio'];
		$cd = 0;
		$resultado = $this->bd->consulta("SELECT * FROM compras WHERE '$id' = codigo LIMIT 1");
		if ($resultado == NULL) {
			$random= $this->bd->consulta("INSERT INTO compras VALUES('$id','$nom','$de','$cd+1','$pr')");
		}
		else
			$cd = $resultado[0]['cant'];
			$cd +=1;
		{	$random= $this->bd->consulta("UPDATE compras SET `codigo`='$id',`producto`='$nom',`descripcion`='$de',`cant`='$cd+1',`precio`='$pr' WHERE '$id' = codigo");}

	}

	public function delCarrito($producto)

	{	error_reporting(0);
		$id = $producto[0]['codigo'];
		$nom = $producto[0]['producto'];
		$de = $producto[0]['descripcion'];
		$pr = $producto[0]['precio'];
		
		$resultado = $this->bd->consulta("SELECT * FROM compras WHERE '$id' = codigo");
		$cd = $resultado[0]['cant'];
		if ($resultado[0]['cant']==1) {
			$random= $this->bd->consulta("DELETE FROM compras WHERE '$id' = codigo");

		}
		else
			$cd -=1;
		{	$random= $this->bd->consulta("UPDATE compras SET `codigo`='$id',`producto`='$nom',`descripcion`='$de',`cant`='$cd',`precio`='$pr' WHERE '$id' = codigo");}

	}
}

?>