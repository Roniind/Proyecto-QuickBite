<?php
// obtener_restaurantes.php
header('Content-Type: application/json');

// Simulando una respuesta desde la base de datos en nube privada
$restaurantes = [
    ["id" => 1, "nombre" => "Pizzería Italiana", "categoria" => "Italiana", "ubicacion" => "Centro"],
    ["id" => 2, "nombre" => "Burgers House", "categoria" => "Rápida", "ubicacion" => "Norte"],
    ["id" => 3, "nombre" => "Comida China Feliz", "categoria" => "China", "ubicacion" => "Sur"]
];

echo json_encode($restaurantes);
?>
