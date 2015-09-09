<?php

class Fabrica
{
	private $_razonSocial;
	private $_empleados;

	public function __construct ($razonSocial)
	{
		$this->_razonSocial = $razonSocial;
		$this->_empleados = array();
	}

	public function AgregarEmpleado ($persona)
	{		
		array_push($this->_empleados, $persona);	
	}

	public function CalcularSueldos ()
	{		
		$this->EliminarEmpleadosRepetidos();	
		$total = 0;
		foreach ($this->_empleados as $prueba) 
		{
			$total += $prueba->GetSueldo();
		}
	}

	public function EliminarEmpleado ($person)
	{		
		for ($i=0; $i < count($this->_empleados); $i++) 
		{ 
			if ($this->_empleados[$i] == $person)
			{
				unset($this->_empleados[$i]);
			}
		}
	}
	private function EliminarEmpleadosRepetidos()
	{
		$this->_empleados = array_unique($this->_empleados, SORT_REGULAR);
	}

	public function Tostring ()
	{
		foreach ($this->_empleados as $empFabrica)
		{
			echo $empFabrica->Tostring();
		}
	}
}


?>