<?php
declare( strict_types = 1);
class Transporte {
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

class Bicicleta extends Transporte {
    public function getInfo() : string {
        return "El transporte tiene " . $this->ruedas . " ruedas y una capacidad de " . $this->capacidad . " personas, además no gasta combustible"; 
    }
}

class Auto extends Transporte {
    public function __construct(int $ruedas, int $capacidad, protected string $transmision) {
        parent::__construct($ruedas, $capacidad);
    }
    public function getTransmision() : string {
        return $this->transmision;
    }
}

$bicicleta = new Bicicleta(2, 1);
echo $bicicleta->getInfo();
echo '<br>';
echo $bicicleta->getRuedas();
echo '<br>';

$auto = new Auto(4, 5, 'automatica');
echo $auto->getInfo();
echo '<br>';
echo $auto->getRuedas();
echo '<br>';
echo $auto->getTransmision();

?>