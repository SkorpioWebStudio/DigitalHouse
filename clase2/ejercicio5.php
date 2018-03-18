<?php
$nombreDeUsuario = "";
$ContraseniaDeUsuario = 1234;
if($nombreDeUsuario && $ContraseniaDeUsuario){
    if($nombreDeUsuario=="admin"){
        if($ContraseniaDeUsuario==1234){
            echo "Bienvenido!";
        }else{
            echo "Error de contraseña";
        }
    }else{
        echo "Error de usuario";
    }
}else{
    echo "Todos los valores son obligatorios";
}
?>