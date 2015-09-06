<?php
require_once ("Persona.php");
require_once ("Empleado.php");
require_once ("Fabrica.php");

$miFabrica = new fabrica ("IPLAN");
$empleado = new Empleado("Facundo","Varela","34512744","Masculino", "101939", "14000");
$empleado2 = new Empleado ("Migue", "Maidana", "36291584", "Masculino", "1233323", "2000");
//echo $empleado->ToString();
//echo $empleado->Hablar("Aleman");

$miFabrica->AgregarEmpleado ($empleado);
$miFabrica->AgregarEmpleado ($empleado2);
$miFabrica->AgregarEmpleado ($empleado2);
echo $miFabrica->CalcularSueldos();

$miFabrica->EliminarEmpleado ($empleado);
$miFabrica->ToString();



?>