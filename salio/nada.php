<?php

abstract class Vehiculo {
    protected $placa;

    public function __construct($placa) {
        $this->placa = $placa;
    }

    public abstract function getType();
}

class Coche extends Vehiculo {
    public function getType() {
        return 'Coche';
    }
}

class Motocicleta extends Vehiculo {
    public function getType() {
        return 'Motocicleta';
    }
}

interface ParqueaderoInterface {
    public function estacionar(Vehiculo $vehiculo);
    public function retirar(Vehiculo $vehiculo);
}

class Parqueadero implements ParqueaderoInterface {
    private $vehiculos;

    public function __construct() {
        $this->vehiculos = [];
    }

    public function estacionar(Vehiculo $vehiculo) {
        $this->vehiculos[] = $vehiculo;
        echo $vehiculo->getType() . " con placa " . $vehiculo->placa . " ha sido estacionado.\n";
    }

    public function retirar(Vehiculo $vehiculo) {
        foreach ($this->vehiculos as $key => $v) {
            if ($v === $vehiculo) {
                unset($this->vehiculos[$key]);
                echo $vehiculo->getType() . " con placa " . $vehiculo->placa . " ha sido retirado.\n";
                return;
            }
        }
        echo $vehiculo->getType() . " con placa " . $vehiculo->placa . " no se encuentra estacionado.\n";
    }
}

// Prueba del código
$parqueadero = new Parqueadero();

$coche = new Coche("ABC123");
$parqueadero->estacionar($coche);

$motocicleta = new Motocicleta("XYZ987");
$parqueadero->estacionar($motocicleta);

$parqueadero->retirar($coche);
$parqueadero->retirar($motocicleta);

echo $parqueadero;
?>