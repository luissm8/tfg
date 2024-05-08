<?php

// Configuración de la conexión a la base de datos
$host = '217.160.32.44';
$port = '3306';
$db_name = 'basedatos';
$username = 'root';
$password = 'hola1243adios';

// Crear conexión
$conn = new mysqli($host, $username, $password, $db_name);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

?>