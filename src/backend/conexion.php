<?php
$host = '10.0.0.5'; // Ejemplo de IP privada de un servidor en la nube
$db = 'quickbite';
$user = 'admin';
$pass = 'contraseña';

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
