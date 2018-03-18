<?php
$inicio = 1;
$tope = rand(1,100);
for($indice=$inicio;$indice<=$tope;$indice++){
    echo ($indice)."-";
}
echo "<br>";

$inicio = 0;
$tope = rand(1,100);
for($indice=$inicio;$indice<=$tope;$indice++){
    echo ($indice*2)."-";
}
echo "<br>";

$indice = 100;
$tope = 85;
while($indice>=$tope){
    echo ($indice)."-";
    $indice--;
}
echo "<br>";

$contador = 1;
$tope = 5;
while($contador<$tope){
    echo ($contador*2)."-";
    $contador++;
}
echo "<br>";

$contador = 0;
$tiros =0;
$tope=5;
while($contador<$tope){
    $tiros++;
    $moneda = rand(0,1);
    echo($moneda)."-";
    if($moneda==1){
       $contador++;
    }
}
echo($tiros);
echo "<br>";

$tiros =0;
do{
    $tiros++;
    $moneda = rand(0,1);
    echo($moneda)."-";
}while($moneda!=1);
echo($tiros);

echo "<br>";

$nombres=["Pedro","Lucia","Cecilia","Nicolas","Jazmin"];
print_r($nombres);

for($i=0;$i<count($nombres);$i++){
    echo $nombres[$i];
    echo "<br>";
}
echo "<br>";

$i=0;
while($i<count($nombres)){
    echo $nombres[$i];
    echo "<br>";
    $i++;
}
echo "<br>";

$i=0;
do{
    echo $nombres[$i];
    echo "<br>";
    $i++;
}while($i<count($nombres));

echo "<br>";

foreach($nombres as $nombre){
    echo $nombre;
}


$ceu = array( "Italia"=>"Roma", "Luxembourg"=>"Luxembourg", "Bélgica"=> "Bruselas",
"Dinamarca"=>"Copenhagen", "Finlandia"=>"Helsinki", "Francia" => "Paris",
"Slovakia"=>"Bratislava", "Eslovenia"=>"Ljubljana", "Alemania" => "Berlin", "Grecia" => "Athenas",
"Irlanda"=>"Dublin", "Holanda"=>"Amsterdam", "Portugal"=>"Lisbon", "España"=>"Madrid",
"Suecia"=>"Stockholm", "Reino Unido"=>"London", "Chipre"=>"Nicosia", "Lithuania"=>"Vilnius",
"Republica Checa"=>"Prague", "Estonia"=>"Tallin", "Hungría"=>"Budapest", "Latvia"=>"Riga",
"Malta"=>"Valletta", "Austria" => "Vienna", "Polonia"=>"Warsaw") ;

ksort($ceu,0);

foreach($ceu as $pais => $capital){
    echo "$capital es la capital de $pais<br>";
}

$ceu = [
    "Argentina" => ["Buenos Aires", "Córdoba", "Santa Fé","esAmericano"=>true],
    "Brasil" => ["Brasilia", "Rio de Janeiro", "Sao Pablo","esAmericano"=>true],
    "Colombia" => ["Cartagena", "Bogota", "Barranquilla","esAmericano"=>true],
    "Francia" => ["Paris", "Nantes", "Lyon","esAmericano"=>false],
    "Italia" => ["Roma", "Milan", "Venecia","esAmericano"=>false],
    "Alemania" => ["Munich", "Berlin", "Frankfurt","esAmericano"=>false]
    ];

    foreach ($ceu as $pais => $provincias) {
        echo "$pais tiene estas provincias<br>";
        echo "<ul>";
        foreach($provincias as $prov){
            echo "<li> $prov</li>";
        }
        echo "</ul>";
    }
    
    foreach ($ceu as $pais => $provincias) {
        if($provincias["esAmericano"]){
            echo "$pais tiene estas provincias<br>";
            echo "<ul>";
            for($p=0;$p<count($provincias)-1;$p++){
                echo "<li> $provincias[$p]</li>";
            }
            echo "</ul>";
        }
    }
    
    ?>