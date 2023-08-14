<?php
declare( strict_types = 1);
class Producto {
    public function __construct(public string $nombre, public int $precio, public bool $disponible)
    {
    }
}

$producto = new Producto('Tablet', 200, true);
$producto2 = new Producto('Notebook', 500, true);
?>