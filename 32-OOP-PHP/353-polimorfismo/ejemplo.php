<?php
declare( strict_types = 1);

interface TransporteInterfaz {
    public function getInfo() : string;
    public function getRuedas() : int;
}

class Transporte implements TransporteInterfaz{
    public function __construct(protected int $ruedas, protected int $capacidad)
    {
    }

    public function getInfo() : string {
        return "El transporte tiene " . $this->ruedas . "ruedas y una capacidad de " . $this->capacidad . " personas"; 
    }

    public function getRuedas() : int {
        return $this->ruedas;
    }
}

class Auto extends Transporte implements TransporteInterfaz {
    public function __construct(protected int $ruedas, protected int $capacidad, protected string $color)
    {
    }
    public function getInfo() : string {
        return "El Auto tiene " . $this->ruedas . "ruedas y una capacidad de " . $this->capacidad . " personas. Es de color " . $this->color; 
    }
    public function getColor() : string { // *1
        return "El color es " . $this->color;
    }
}

$transporte = new Transporte(4, 5);
$auto = new Auto(4, 5, 'rojo');
echo "<pre>";
var_dump($transporte);
var_dump($auto);
echo "</pre>";

?>