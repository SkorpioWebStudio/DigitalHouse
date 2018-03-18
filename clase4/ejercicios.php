<?php
    $numeroMagico = rand(0,1000);
    include("funciones.php");
    echo "Mayor:";
    echo mayor(100,203,85);
    echo "------------------";
    echo "Tabla";
    imprimir(tabla(25,43));
    echo "------------------";
    echo "nro magico:";
    echo mayor(100,55);
    echo "------------------";
    echo strpos("me gusta php, me encata php","php");


?>
