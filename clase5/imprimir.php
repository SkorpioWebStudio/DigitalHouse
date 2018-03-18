<?php
var_dump($_POST);
foreach($_POST as $key=>$value){
    echo "$key: $value<br>";
}


foreach (getallheaders() as $nombre => $valor) {
    echo "$nombre: $valor\n";
}

var_dump($_POST["nombre"]);
?>