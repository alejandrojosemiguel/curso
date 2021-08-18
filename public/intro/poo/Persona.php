<?php
class Persona {
    public $nombre, $apellido, $edad;

    public function __construct($a="",$b="",$c=""){
        $this->nombre = $this->setNombre($a);
        $this->apellido = $this->setNombre($b);
        $this->edad = $c;
    }

    public function setNombre($a){
        $this->nombre = strtolower($a);
    }

    public function getNombre(){
        return ucfirst($this->nombre);
    }
}

// Extender clase
class Curso extends Persona {
    public $materia,$turno;

    // sobreescribir metodo
    public function setNombre($a){
        $this->nombre = $a;

        // extender metodo
        $b=parent::getNombre();
        echo "el nombre es: ".$b."<br>";
    }

}


class MiCurso{

    public $public = "public";
    protected $protected = "Protected";
    private $private = "private";

    function printValue(){
        echo $this->public."<br>";
        echo $this->protected."<br>";
        echo $this->private."<br>";
    }
}    

class MiCursoPHP extends MiCurso{

    // reemplazar varibles y metodo alcance de variables
    public $public = "public 2";
    public $protected = "protected 2";

    function printValue(){
        echo $this->public."<br>";
        echo $this->protected."<br>";
        //echo $this->private."<br>";
    }    
}


// Intefaces - Plantilla de metodos para distintaas clases
interface iTemplate{
    public function setVariable($name, $value);
    public function getVariable($name);   
}

class Template implements iTemplate{

    public function setVariable($name, $value){

    }
    public function getVariable($name){

    }
}

interface A{

    public function prueba();

}

// Extender interface
interface B extends A{

    public function prueba2();

}

interface C extends A,B{

    public function prueba3();

}

// La clase se implementa desde la interfaz A
class Ca implements A{

    public function prueba(){

    }
}

// La clase se implementa desde la interfaz A que extiende a interfaz B
class Cb implements B{

    public function prueba(){

    }
    public function prueba2(){

    }
}

class Cc implements C{

    public function prueba(){

    }

    public function prueba2(){

    }      
    
    public function prueba3(){

    }   

    // adicional a las del template
    public function prueba4(){

    }   
}


// Clases abstractas
// Permiten definir metodos en concreto y metodos no publicos. Por lo demas es similar a interfaces
abstract class ClaseAbs{
    abstract protected function getValor();
    abstract protected function valPref($value);

    public function imprimir(){
        echo $this->getValor();
    }
}

// Las clases absractas o se pueden instanciar directamente, solo se pueden exender desde otra clase
class ClaseNoAbs extends ClaseAbs{
    public function getValor(){
        return "valor1";
    }

    public function valPref($value){
        return "valor:".$value;
    }
}

// Traits (caracteristicas)
// En PHP la herencia es simple no se puede hacer multiple, pero se puede simular mediante trait
// los trait no se pueden instanciar, solo permiten extender propiedades y metodos de una clase
class Persona2 {
    public $nombre, $apellido, $edad;

    public function __construct($a="",$b="",$c=""){
        $this->nombre = $this->setNombre($a);
        $this->apellido = $this->setNombre($b);
        $this->edad = $c;
    }

    public function setNombre($a){
        $this->nombre = strtolower($a);
    }

    public function getNombre(){
        return ucfirst($this->nombre);
    }

    public function saludo(){
        echo "Hola";
    }
}

//Herencia multiple
trait MiEmpresa{
    public $empresa="La caja";

    public function getEmpresa(){
        return ucwords($this->empresa);
    }
    // Pisa el metodo de la clase padre
    public function saludo(){
        echo "Hola2";
    }

}

trait MiEmpresa2{
    public $empresa2="La caja seguros";

    public function getEmpresa(){
        return ucwords($this->empresa);
    }
    // Pisa el metodo de la clase padre
    private function saludo(){
        echo "Hola3";
    }

}

// trait TC{
//     use MiEmpresa, MiEmpresa2 {
//         MiEmpresa2::saludo insteadof MiEmpresa;
//         MiEmpresa2::getEmpresa insteadof MiEmpresa;
//         MiEmpresa2::saludo as public;
//     }
//     public function saludo(){
//         $this->saludo1();
//     }
// }

// Extender clase
class Curso2 extends Persona2 {

    use MiEmpresa, MiEmpresa2 {
        MiEmpresa2::saludo insteadof MiEmpresa;
        MiEmpresa2::getEmpresa insteadof MiEmpresa;
        MiEmpresa2::saludo as public;
    }

    public $materia,$turno;

    // sobreescribir metodo
    public function setNombre($a){
        $this->nombre = $a;

        // extender metodo
        $b=parent::getNombre();
        echo "el nombre es: ".$b."<br>";
    }
    // Precedencia clase padre, trait, clase hija
    // public function saludo(){
    //     echo "Hola3";
    // }

}

// NameSpace
// Orgnizar y dividir el codigo en distintos archivos y carpetas
