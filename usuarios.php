<?php

// Importar la conexion
require 'includes/config/database.php';
$db = conectarDB();

// Crear un email y un password
$email = "correo@correo.com";
$password = "123456";

//Hashear password
$passwordHash = password_hash($password, PASSWORD_BCRYPT);

// Query para crear al usuario
$query = "INSERT INTO usuarios (email, password) VALUES ('$email', '$passwordHash');";
 
// echo $query;



// Agregar a la base de datos
mysqli_query($db, $query);