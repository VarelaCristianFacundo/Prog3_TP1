<?php

require_once ("Persona.php");
require_once ("Empleado.php");
require_once ("Fabrica.php");

	$ar = fopen("Empleados.txt", "r");
	while (!feof($ar)) 
	{
	//	echo fgets($ar), "<br/>";
		$prueba = fgets($ar);
		$pruebaDos = explode("-", $prueba);
		if (count($pruebaDos) >1)
		{

			$miEmpleadoPrueba = new Empleado ($pruebaDos[0], $pruebaDos[1], $pruebaDos[2], $pruebaDos[3], $pruebaDos[4], $pruebaDos[5]);
			echo $miEmpleadoPrueba->Tostring()."<br>";
		}
		
	}

	fclose($ar);

?>