<?php
// Conexiòn con mysqli (modo POO)
$db = new mysqli('localhost', 'root', '', '');

// Creamos el query
$query = "SELECT titulo, imagen from propiedades";

// Preparamos query
$stmt = $db->prepare($query);

// Ejecutamos
$stmt->execute();

// Creamos la variable
$stmt->bind_result($titulo, $imagen);

// Imprimir resultado
while($stmt->fetch()):
    var_dump($titulo);
endwhile;



