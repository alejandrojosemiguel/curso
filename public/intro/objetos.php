<?php
// Pardigmas de programacion

// Procedural (poca reutilizacion del codigo, requiere mayor cantidad de tiempo de pruebas con cambios de funcionalidad globales)

function suma($a=0,$b=0){
 return $a+$b;
}

$calc1 = [
    1,
    2,
    suma(1,2)
];
var_dump($calc1);
echo "<br>";


// POO - no pensamos en funciones globales, pensamos en cajas cerradas con propiedades y metodos.

// CLASE (template)
// INSTANCIA (creacion a partir del template)
// OBJETO (propiedades y metodos independientes de otros objetos similares)

require_once("poo/Persona.php");

$pers1 = new Persona;
$pers1->setNombre("Pers1");
$pers1->apellido = "Php1";
$pers1->edad = "18";

var_dump($pers1);
echo "<br>";


$pers2 = new Persona;
$pers2->nombre = "Pers2";
$pers2->apellido = "Php2";
$pers2->edad = "22";

var_dump($pers2);
echo "<br>";

echo "El nombre de 1 es : ".$pers1->nombre."<br>";

$pers3 = New Persona("Aldo","Corbo",40);

echo "El nombre de 1 es : ".$pers3->nombre."<br>";


$curso1 = New Curso();
$curso1->materia="PHP";
$curso1->setNombre("Aldo");

$curso1->nombre;


$micurso1 = New MiCurso();

echo "public:".$micurso1->public."<br>";
// echo "protected:".$micurso1->protected."<br>";
// echo "private:".$micurso1->private."<br>";

$micurso1->printValue();


$micurso2 = New MiCursoPHP();

$micurso2->printValue();

$clase1 = New ClaseNoAbs;
echo $clase1->getValor()."<br>";
echo $clase1->valPref(2)."<br>";
$clase1->imprimir()."<br>";

$curso2 = New Curso2;
echo $curso2->getEmpresa()."<br>";
echo $curso2->saludo()."<br>";
