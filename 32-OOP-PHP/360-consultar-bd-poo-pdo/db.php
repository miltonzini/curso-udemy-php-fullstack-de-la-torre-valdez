<?php
// Conexiòn con mysqli (modo POO)
$db = new PDO('mysql:host=localhost; dbname=inmobiliaria', 'root', 'password');

// Creamos el query
$query = "SELECT titulo, imagen from propiedades";

// Preparamos query
$stmt = $db->prepare($query);

// Ejecutamos
$stmt->execute();

// Obtenemos resultados
$resultado = $stmt->fetchAll( PDO::FETCH_ASSOC );

// Imprimir resultado (iterando)
foreach($resultado as $propiedad):
    echo $propiedad['titulo'];
endforeach;