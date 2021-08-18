<?php

// NameSpace
// Orgnizar y dividir el codigo en distintos archivos y carpetas



require_once("namespace1/Persona.php");
require_once("namespace2/Persona.php");


// $humano1 = New Carpeta1\Persona;
// $humano1->saludo();


// $humano2 = New Carpeta2\Persona;
// $humano2->saludo();


use Carpeta1\Persona;
use Carpeta2\Persona as Persona2;

$humano1 = New Persona;
$humano1->saludo();

$humano2 = New Persona2;
$humano2->saludo();
