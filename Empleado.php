<?php

class Empleado extends Persona
{
	protected $_legajo;
	protected $_sueldo;

	public function __construct ($nombre, $apellido, $dni, $sexo, $legajo, $sueldo)
	{
		parent::__construct($nombre, $apellido, $dni, $sexo);
		$this->_legajo = $legajo;
		$this->_sueldo = $sueldo;
	}

	public function GetSueldo ()
	{
		return $this->_sueldo;
	}

	public function GetLegajo ()
	{
		return $this->_legajo;
	}
	
	public function Hablar ($idioma)
	{
		return "<br>" . "Idioma: " . $idioma;
	}

	public function Tostring ()
	{
		return parent::Tostring() . "<br>" . "Legajo: " . $this->_legajo . "<br>" . "Sueldo: " . $this->_sueldo;
	}

}
?>