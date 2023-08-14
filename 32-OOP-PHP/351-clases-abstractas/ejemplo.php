<?php
declare( strict_types = 1);
abstract class Transporte {
    public function __construct(protected int $ruedas, protected int $capacidad)
    {
    }

    // etc
}
?>