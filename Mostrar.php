<?php

require_once ("Persona.php");
require_once ("Empleado.php");
require_once ("Fabrica.php");

	$ar = fopen("Empleados.txt", "r");
	while (!feof($ar)) 
	{
	//	echo fgets($ar), "<br/>";
		$LeoArchivo = fgets($ar);
		$textoLimpio = explode("-", $LeoArchivo);
		if (count($textoLimpio) >1)
		{
			$miEmpleadoPrueba = new Empleado ($textoLimpio[0], $textoLimpio[1], $textoLimpio[2], $textoLimpio[3], $textoLimpio[4], $textoLimpio[5]);
			
			foreach ($textoLimpio as $key) 
			{
				echo $key . "<br>";
			}
		}
		
	}

	fclose($ar);

?>