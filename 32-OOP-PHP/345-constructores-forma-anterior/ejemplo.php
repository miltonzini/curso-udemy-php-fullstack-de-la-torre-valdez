<?php
declare( strict_types = 1);
class Producto {
    public $nombre;
    public $precio;
    public $disponible;

    public function __construct(string $nombre, int $precio, bool $disponible)
    {
        $this->nombre = $nombre;
        $this->precio = $precio;
        $this->disponible = $disponible;
    }
}

$producto = new Producto('Tablet', 200, true);
$producto2 = new Producto('Notebook', 500, true);
?>