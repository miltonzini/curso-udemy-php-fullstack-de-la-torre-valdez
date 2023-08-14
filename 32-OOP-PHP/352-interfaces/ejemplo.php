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
        return "El transporte tiene " . $this->ruedas . " ruedas y una capacidad de " . $this->capacidad . " personas"; 
    }

    public function getRuedas() : int {
        return $this->ruedas;
    }
}

$transporte = new Transporte(2, 5);
echo $transporte->getInfo();

?>