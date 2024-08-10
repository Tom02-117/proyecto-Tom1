<?php
#Sintaxis de php
#tipos de variables
$entero =10;

#flotantes
$decimal =10.5;

#cadenas
$verdadero ="hola mundo";

#booleanos
&verdadero = true;
&falso = false;

#ciclos
# ciclo for
for ($i = 0; $i < 10; $i++){
    echo $i . "<br>"; #para concatenar utilizo punto
    $i++;
}
#ciclos
#ciclo while
$i = 0;
while ($i < 10) {
    echo $i . "<br>";
    $i++;
}
#ciclo do while
$i = 0;
do {
    echo $i . "<br>";
    $i++;
}while ($i < 10);
#estructuras de control
if($verdadero){
    echo "verdadero";
}else{
    echo "falso";
}

#if anidado
if($verdadero){
    echo "verdadero";
}else{
    echo "falso";
}else{
    echo "falso";
}
#funciones
function suma($a, $b){
    return $a + $b;
}
#arreglos
$array =array(1,2,3,4,5,6,7,8,9,10);
#arreglos de texto
$array =array("uno","dos","tres","cuatro","cinco etc");
?>