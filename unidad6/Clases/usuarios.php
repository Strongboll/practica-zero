<?php 

/**
 * 
 */
class Usuarios 
{
	private $nombre;
	private $edad;
	private $apellido;
	
	function __construct($nom, $apellido, $edad)
	{
		$this->nombre = $nom;
		$this->edad = $edad;
		$this->apellido = $apellido;
	}

	 public function  imprime_caracteristicas() 
	{
		echo "<p>Nombre: ".$this->nombre."</p>";
		echo "<p>Apellido: ".$this->apellido."</p>";
		echo "<p>Edad: ".$this->edad."</p>";
	}
}

?>