<?php
declare( strict_types = 1);
class Producto {
    public static $imagen;
    public static $imagenPlaceholder = "imagen.jpg";

    public function __construct(protected string $nombre, public int $precio, public bool $disponible, string $imagen) // *1
    {
        if($imagen) {
            self::$imagen = self::$imagenPlaceholder;
        }
    }
    
    public static function obtenerImagenProducto() {
        return self::$imagen;
    }

    public static function obtenerProducto() {
        echo "obteniendo los datos del producto";
    }

    public function mostrarProducto() : void { // *1
        echo "El producto es: " . $this->nombre . " y su precio es de: " . $this->precio;
    }

    public function getNombre() : string { // *1
        return $this->nombre;
    }

    public function setNombre(string $nombre) {
        $this->nombre = $nombre;
    }
}

$producto = new Producto('Tablet', 200, true, '');
$producto2 = new Producto('Tablet', 200, true, "notebook.jpg");
echo Producto::obtenerImagenProducto();