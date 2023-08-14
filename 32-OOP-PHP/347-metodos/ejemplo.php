<?php
declare( strict_types = 1);
class Producto {
    public function __construct(public string $nombre, public int $precio, public bool $disponible)
    {
    }
    public function mostrarProducto() {
        echo "El producto es: " . $this->nombre . " y su precio es de: " . $this->precio;
    }
}

$producto = new Producto('Tablet', 200, true);
$producto->mostrarProducto();
?>