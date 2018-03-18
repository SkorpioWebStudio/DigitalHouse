<?php
echo "<br>";
echo "Ejercicio 2";
echo "<br>";

$nro =rand(1,5);
if($nro==3 || $nro==5){
    echo $nro;
}

echo "<br>";
echo "Ejercicio 3";
echo "<br>";

if($nro!=3){
    echo "El nro no es 3, es ".$nro;
}
echo "<br>";
echo "Ejercicio 4";
echo "<br>";

$nro_ej4=rand(1,100);
if($nro_ej4>50){
    echo "El nro es mayor a 50";
}else{
    echo "El nro es menor a 50";
}
echo  "(".$nro_ej4.")";
?>