<?php
// registro.php (simulación de registro de usuario)
$nombre = $_POST['nombre'] ?? '';
$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';
$telefono = $_POST['telefono'] ?? '';

// Simulación de almacenamiento de datos (sin base de datos real)
if ($nombre && $email && $password) {
    echo "Registro exitoso para: $nombre ($email)";
} else {
    echo "Error: Faltan datos obligatorios.";
}
?>
