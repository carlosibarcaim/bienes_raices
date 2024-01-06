<?php

function conectarDB(){
    
    $db = mysqli_connect('localhost','root','root','bienesraices_crud');

    if(!$db){
        echo "Error, No se pudo hacer la conexion a la base de datos";
        exit;
    } 
    return $db;
};