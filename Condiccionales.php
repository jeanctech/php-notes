<?php

// Condiccionales en php

// Condiccional If

$edad = 18;

if ($edad >= 18) {
    echo "Eres mayor de edad - ";
}

// Condiccional If - Else

$lentes = true;

if ($lentes) {
    echo "Si estas usando lentes";
}else {
    echo "No estas utilizando lentes";
}

// Condiccional Elseif

 //Lentes = 1 Si uso lentes
 //Lentes = 2 Si uso lentes pero solo para leer
 //Lentes = 3 No uso lentes

 $lentes = 2;

 if ( $lentes == 1 ){
    echo "Si uso lentes"; /*Primer If*/
}elseif( $lentes == 2 ){
    echo " - Si uso lentes pero solo para leer"; /*Segundo If*/
}else{
    echo"No Uso Lentes"; /*Tercer If*/
}

// Condiccional Switch

$temperatura = 23;

switch ($temperatura) {
case 10:
echo "Ambiente Frio";
break;

case 15:
echo "Ambiente Templado";
break;

case 23:
echo " - Ambiente Agradable";
break;

case 34:
echo "Ambiente con calor semi intenso";
break;

default:
echo "No tengo lectura de calor";
break;
}

// Condiccional Ternaria

$A = "";
$B = "";

$respuesta = ($A == $B) ? "A es igual a B" : "A no es igual a B";

echo ($A > $B) ? "A es mayor que B" : " - B es menor o igual que A";

?>
