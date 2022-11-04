<?php
echo '<p> Hola mundo </p>';


$integer=1;
$float=1.5;
$istrue=true;
$arraycolores= array('amarillo','rojo','azul');
$string="hola";

echo $integer;
echo $float;
if ($istrue){
echo $arraycolores[2];
echo $string;
echo "verdadero";
}

//variables globales y locales
function variablesGlobales(){
$local= "soy la variable local";
echo $GLOBALS["global"];
echo $local;
}

$global="soy la variable global";
variablesGlobales();

//variable superglobals

//constante
const constante=' soy una constante ';
const numeros= 1;
const colores= array('rojo','verde',' amarillo ');

echo constante;
echo numeros;
echo colores[2];

//define
define('constante2', "hola mundo");
echo constante2;

define('colores2', array('rojo','verde','negro'));
echo colores2[0];

//concatenacion


$palabra="codigo php";
$union=$palabra." concatenacion";
$palabra .="concatenacion 2";
echo $palabra;
//interpolacion forma 1
echo "Bienvenido a $palabra ";
//interpolacion forma 2
echo "Bienvenido a $palabra ";

//carcateres escapados
echo "Codigo \n salto";

//operadores de elvis
$resultado;
echo"Operador de elvis ?: <br/> ";
var_dump(isset($resultado)?:'no hay datos');
//operador ternario
echo"Operador ternario ?:\n";
var_dump(isset($resultado)?'Soy verdadero':'Soy falso');
//operador de fusion null
echo "Operador fusion null ??\n";
var_dump($resultado??'No hay datos');

//Adiccion
$a=20;
$b=9;
$suma=$a+$b;
echo "La solucion es:$suma";
//Resta
$resta=$a-$b;
echo "La solucion es:$resta";
//multiplicacion
$multiplicacion=$a*$b;
echo "La solucion es:$multiplicacion";
//division
$division=$a/$b;
echo "La solucion es:$division";
//modulo
$modulo=$a%$b;
echo "Modulo $modulo ";
//Exponencial
$Exponencial=$a**$b;
echo "La solucion es: $Exponencial ";
//Operadores de incremento/post
$a=60;
echo "<br/>". "Post-incremento ".$a++."<br/>";
echo "Resultado ".$a;
//Operadores de incremento/pre
$a=60;
echo "<br/>". "Pre-incremento ".++$a."<br/>";
echo "Resultado ".$a;
//Operadores de decremento/post
$a=60;
echo "<br/>". "Post-decremento ".$a--."<br/>";
echo "Resultado ".$a;
//Operadores de decremento/pre
$a=60;
echo "<br/>". "Pre-decremento ".--$a."<br/>";
echo "Resultado ".$a;

//if else
$a=25;
$b=15;
if($a<$b):
 echo "<br/> a es menor";

else:
 echo "<br/> a es mayor";
endif;

//elseif
if($a<$b):
    echo "<br/> a es menor";
   
elseif($a==$b):
    echo "<br/> a y b son iguales";
else:
    echo "<br/> a es mayor";
endif;

//sentencia switch (multiples alternativas)

$i="5";

switch($i){
case "1";
echo "Lunes";
break;
case "2";
echo "Martes";
break;
case "3";
echo "Miercoles";
break;
default:
echo "No existe";  
}
//forma 2
$i="2";
//comparando switch y elseif
switch($i):
case "1":echo "Lunes"; break;
case "2":echo "Martes";break;
case "3":echo "Miercoles";break;
default: echo "No existe";  
endswitch;

if ($i==1):echo "Lunes";
elseif($i==2):echo "Martes";
elseif($i==3):echo "Miercoles";
else: echo "No existe";
endif;
//Bucle while y do while
//Bucle while
$contador="1";
while($contador<=10){
    echo "<br/> El valor del contador while es $contador <br/>";
    ++$contador;
}
//Bucle do while
do{
    echo "<br/> El valor del contador do while es $contador <br/>";
    ++$contador;
}while ($contador<=16);

//bucle for ++
for($i=1;$i<=10;$i++) {
echo "Variable de control ".$i."<br/>";
}

/*
for($i=10;$i>=1;$i--):
    echo "variable de control ".$i."<br/>";
endfor
*/
//Foreach (constructor)
$array=array(1,2,3,4,5);
foreach(array(1,2,3,4,5)as &$valor){
 $valor= $valor2;
}
foreach($array as $clave => $valor2){
    echo"$clave...$valor2 <br/>";
}

/*Foreach
$array=array(1,2,3,4,5);
foreach($array as $valor){
echo $valor;
}
// Foreach forma 2
$array=array(1,2,3,4,5);
foreach($array as $valor);{
    $valor=$valor*2;
}
foreach($array as $clave => $valor2){
    echo"$clave...$valor2";
}
*/

//ARRAY INDEXADO Y ASOCIATIVO
//array indexado
$color="Verde";
$arrayindexado=array(1,2,"PHP",$color);

//obtener un valor
echo $arrayindexado[3];

//Recorrer %arrayindexado
for($i=0;$i<count($arrayindexado);$i++){
echo $arrayindexado[$i]."<br/>";
}

//Foreach
$array=array(1,2,3,4,5);
foreach($array as $valor){
echo $valor;
}
// Foreach forma 2
$array=array(1,2,3,4,5);
foreach($array as $valor);{
    $valor=$valor*2;
}
foreach($array as $clave => $valor2){
    echo"$clave...$valor2";
}




?>

