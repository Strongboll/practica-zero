<?php 
/**
 * 
 */
class Basededatos 
{
	public $error;
	private $conexion;
	function __construct($servidor,$usuario,$pass,$base)
	{
		if (!$this->_connect($servidor,$usuario,$pass,$base)) 
		{
			$this->error = $this->conexion->connect_error;
		}
	}


	function __destruct()
	{
		$this->conexion->close();
	}

	private function _connect($servidor,$usuario,$pass,$base)
	{
		$this->conexion = new mysqli($servidor,$usuario,$pass,$base);

	}

	public function consulta($query)
	{
		$tipo_consulta = strtoupper(substr($query, 0,6));

		switch ($tipo_consulta) {


			

			case 'INSERT':
			case 'UPDATE':
			case 'DELETE':
					$consulta= $this->conexion->query($query);
				break;

			case 'SELECT':
					$consulta= $this->conexion->query($query);
					while ($fila = $consulta->fetch_assoc()) {
						$lista_datos[] = $fila;	
					}
					mysqli_report(MYSQLI_REPORT_ERROR|MYSQLI_REPORT_STRICT);
					return $lista_datos;
				break;
			
			default:
				// code...
				break;
		}
	}



}

?>