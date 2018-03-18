<?php
    $miArray = [];
    $miArray[0] = "Hola";
    $miArray[1] = "Chau";

    var_dump($miArray);
    //echo ($miArray);


    $animales =[];
    $animales[] ="Perro";
    $animales[] ="Gato";
    $animales[] ="Loro";
    $animales[] ="Cocodrilo";
    $animales[] ="Bicho bolita";

    var_dump ($animales);
    $animales[]="Ganso";
    $animales[] = "Dinosaurio";
    echo "<br>";
    var_dump($animales);

    echo "Me gustan los animales".", ".$animales[0].", ".$animales[1];
    echo "<br>";
    echo "Me gustan los animales";
    for($i=0;$i<count($animales);$i++){
        echo $animales[$i].", ";
    }


?>