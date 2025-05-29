<?php
// login.php (simulación básica de autenticación)
session_start();

$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';

// Simulación de usuario válido
if ($email === 'usuario@quickbite.com' && $password === '123456') {
    $_SESSION['usuario'] = $email;
    echo "Inicio de sesión exitoso.";
} else {
    echo "Credenciales incorrectas.";
}
?>
