<?php 

/**
 * 
 */
class Productos
{
	private $bd;
	private $as;
	function __construct($base)
	{
		$this->bd = $base;
	}

	public function getProductos()
	{
		$resultado = $this->bd->consulta('SELECT * FROM productos');
		return $resultado;
	}

	public function getProducto($id)
	{
		$this->as= $id;
		$resultado = $this->bd->consulta("SELECT * FROM productos WHERE codigo = '$id'");
		return $resultado;
	}
}

?>