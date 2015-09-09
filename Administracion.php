<?php
require_once ("Persona.php");
require_once ("Empleado.php");
require_once ("Fabrica.php");

$empleadoRecibido = new Empleado ($_POST["txtNombre"], $_POST["txtApellido"], $_POST["txtDNI"], $_POST["txtSexo"], $_POST["txtLegajo"], $_POST["txtSueldo"]);

$empleadoRecibido = explode("-", $empleadoRecibido->ToString());

$empleadoArchivoTexto = new Empleado ($empleadoRecibido[0], $empleadoRecibido[1], $empleadoRecibido[2], $empleadoRecibido[3], $empleadoRecibido[4], $empleadoRecibido[5]);

$empleadoPrueba = new Empleado("Facundo","Varela","34512744","Masculino", "101939", "14000");

$ar = fopen("Empleados.txt", "a+");
$cant = fwrite($ar, $empleadoArchivoTexto->ToString() . "\r" . "\n");

if ($cant > 0)
{
	echo "<a href=\Prog3_TP1\Mostrar.php>Mostrar.php</a>";
}
else
{
	echo "<a href=\Prog3_TP1\index.php>Mostrar.php</a>";	
}


fclose($ar);


?>