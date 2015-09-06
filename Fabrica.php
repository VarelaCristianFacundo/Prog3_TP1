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
		$this->EliminarEmpleadosRepetidos();
	}

	public function CalcularSueldos ()
	{
		$total = 0;
		foreach ($this->_empleados as $prueba) 
		{
			$total += $prueba->GetSueldo();
		}
		echo "<br>" . "Sueldo Total de Empleados: " . $total;
	}

	public function EliminarEmpleado ($person)
	{
		for ($i=0; $i <$this->_empleados->ob_get_length(oid) ; $i++) 
		{ 
		
			if ($key == $person)
			{
				unset ($this->_empleados[i]);
			}
		}
	}
	private function EliminarEmpleadosRepetidos()
	{

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