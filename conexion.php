<?php
function conectar(){


    // Datos de conexión a la base de datos
    $servername = "localhost"; // Cambia esto a la dirección de tu servidor de base de datos
    $username = "id21279212_sayc"; // Cambia esto a tu nombre de usuario de MySQL
    $password = "Leopardo007$"; // Cambia esto a tu contraseña de MySQL
    $dbname = "id21279212_sayc"; // Cambia esto al nombre de tu base de datos

    // Crear una conexión a la base de datos
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verificar si la conexión fue exitosa
    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }
return  $conn;
}
?>
