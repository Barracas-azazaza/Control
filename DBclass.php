<?php
class Cl_DBclass
{
	/**
	 * @var $con llevará a cabo la conexión de base de datos
	 */
	public $con;
	
	/**
	 * Esto creará la conexión de base de datos
	 */
	public function __construct()
	{
		$this->con = mysqli_connect('test.cdujhlpuixqw.us-east-1.rds.amazonaws.com:3306', 'root', 'Oracle123', 'test');
		if( mysqli_connect_error()) echo "Falló conexión a MySQL: " . mysqli_connect_error();
	}
}
