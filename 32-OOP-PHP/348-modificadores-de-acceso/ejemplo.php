<?php
declare( strict_types = 1);
class Producto {
    public function __construct(protected string $nombre, public int $precio, public bool $disponible)
    {
    }
    public function mostrarProducto() : void {
        echo "El producto es: " . $this->nombre . " y su precio es de: " . $this->precio;
    }
    public function getNombre() : string {
        return $this->nombre;
    }
    public function setNombre(string $nombre) {
        $this->nombre = $nombre;
    }
}

$producto = new Producto('Tablet', 200, true);

// leer 
echo $producto->getNombre(); // correcto
// echo $producto->nombre // incorrecto, devuelve error

// asignar
$producto->setNombre("nuevo nombre");
?>