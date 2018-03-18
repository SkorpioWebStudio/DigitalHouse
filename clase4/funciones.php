<?php
function maximo($n1, $n2){
    return $n1>=$n2 ?$n1:$n2;
}
function mayor($nro1, $nro2, $nro3=null){
    if($nro3==null){
        global $numeroMagico;
        $nro3 = $numeroMagico;
    }
    $mayor = maximo($nro1,$nro2);
    return maximo($mayor,$nro3);
}

function tabla($base,$limite){
    $resultado = [];
    for($i=$base;$i<=$limite;$i++){
        $resultado[] = $i;
    }
    return $resultado;
}

function imprimir($datos){
    echo "<pre>";var_dump($datos);echo "</pre>";
}

?>