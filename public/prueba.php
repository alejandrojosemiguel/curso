<?php
$Curso = "Laravel";
//echo $Curso."<br>";

$curso = "Laravel2";
//echo $curso."<br>";

$otra[0] = 'contenido de la variable';

$strOtra = "Mi variable '' es: $otra[0]";

//echo $strOtra."<br>";

//phpinfo();
//echo "<br>";

// Números
$numero = 123.45;

//echo $numero."<br>";

$cadena = <<<INI

Alfo
$strOtra\n
$curso
$numero
INI;

//echo $cadena."<br>";

// Booleanos
$bool = FaLsE;
//echo $bool."<br>";

// Operadores
$numero = -$numero;
//echo $numero."<br>";

$a = 5;
$b = 2;
$c = $a + $b;

//echo sqrt(9)."<br>";
//echo rand(90,100)."<br>";
//echo pi()."<br>";
//echo "<br>";
//echo $c."<br>";


$aa = "a";
$bb = "0";

//echo "<br>";

//var_dump($aa && $bb);


$aaa = 10;
$bbb = 0;

$bbb = $aaa++;

//echo $bbb."<br>";


// Condicionales

// if

$a=4;
$b=4;

if($a<$b){
    //echo "a < b <br>";
}elseif($a>$b){
    //echo "a > b <br>";
}else{
    //echo "a = b <br>";
}
//echo "fuera del if<br>";

//echo "Otra sintaxis<br>";
if ($a<$b) :
    //echo "a < b <br>";
elseif($a>$b) :
    //echo "a > b <br>";
else:
    //echo "a = b <br>";
endif;
//echo "fuera del if<br>";


// switch
$a="1";
switch($a){
    case '1':
        //echo "si<br>";
        break;    
    case '2':
        //echo "si<br>";
        break;
    default:
        //echo "otro<br>";
        break;
}

//match
$match = match($a){
    1 => "si<br>",
    2 => "no<br>",
    default => "otro<br>"
};
//echo $match."<br>";

// BUCLES
// Do while
$i = 10;
while($i < 10){
    //echo "num: ".$i."<br>";
    $i++;
}
//echo "fuera del while num: ".$i."<br>";

//al menos ejecute una vez
$i = 10;
do{
    //echo "num: ".$i."<br>";
    $i++;
}while($i < 10);
//echo "fuera del do while num: ".$i."<br>";

// For
for($i=0;$i<10;$i++){
    //echo "num: ".$i."<br>";
}
//echo "fuera del bucle for num: ".$i."<br>";

// Foreach
$name=["Ale","Tito","Mai","Lau"];

foreach($name as $key=>$value){
    //echo "nombre: ".$value." (key:".$key.")<br>";
}

// For
for($i=0;$i<10;$i++){
    //echo "num: ".$i."<br>";
    if($i==5){
        continue;
    }    
    if($i==5){
        break;
    }
    if($i==8){
        //die();
    }
}
// echo "fuera del bucle for num: ".$i."<br>";

// FUNCIONES
$a=10;
$b=8;
$c=0;
$d=3;

//echo "<br>";

function funct(&$d,$e=null){
    global $a, $b;
    
    $a -= 5;
    echo $a." - ".$b." - ".$d." - ".$e."<br>";

    $c=$a+$b;    

    $d=$e;
    echo $d."<br>";
}

//funct($d,5);
//echo $d."<br>";
//echo $a." - ".$b." - ".$c."<br>";

// Fechas

$hoy=getdate(time());
//var_dump($hoy);
//echo date("M d Y H:i:s", mktime(0, 0, 0, 1, 1, 1998));
//echo gmdate("M d Y H:i:s", mktime(0, 0, 0, 1, 1, 1998));

$cadena = "Mi cadena de prueba";
$l = strlen($cadena); #bytes
$c = mb_strlen($cadena); #caracteres
//echo $cadena[1]."(".$l.")"."(".$c.")<br>";

//echo str_replace("Mi","Tu",$cadena)."<br>";

$p = stripos($cadena,"I");
//echo "(".$p.")<br>";

if(str_starts_with($cadena,"Mi")){
    //echo "Si<br>";
}

$c1="Prueba";
$c2="prueba";


// if($c1==$c2){
//     echo "Si1<br>";
// }
// echo "No1<br>";


// if(strcasecmp($c1,$c2)==0){
//     echo "Si2<br>";
// }
// echo "No2<br>";

// echo ucfirst($cadena)."<br>";
// echo ucwords($cadena)."<br>";
// echo strtolower($cadena)."<br>";


// ARRAY

// Datos del mismo tipo

$array = [11,13,17,19,23];
$array[7] = 31;
// echo $array[6];

// Distintos tipos
$array2 = [13,15,"texto","mail"=>"asd@asd.com"];

// echo $array2["mail"];

$data = [
    [
        "nombre" => "Alejandro",
        "mail" => "asd@asd.com",
        "telefono" => [
            "celular" => "1168307920"
        ]        
    ],
    [
        "nombre" => "AlejandPedroro",
        "mail" => "pedro@asd.com"
    ],
    [
        "nombre" => "Juan",
        "mail" => "juan@asd.com"
    ]
];

// echo $data[2]["mail"];   





















