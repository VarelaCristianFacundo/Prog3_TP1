<?php
require_once ("Persona.php");
require_once ("Empleado.php");
require_once ("Fabrica.php");

$empleadoRecibido = new Empleado ($_POST["txtNombre"], $_POST["txtApellido"], $_POST["txtDNI"], $_POST["txtSexo"], $_POST["txtLegajo"], $_POST["txtSueldo"]);

$empleadoRecibido = $empleadoRecibido->ToString();

$ar = fopen("Empleados.txt", "a+");

$cant = fwrite($ar, $empleadoRecibido . "\r" . "\n");

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