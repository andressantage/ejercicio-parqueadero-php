<?php
/* Un parqueadero quiere implementar un nuevo sistema para gestionar los vehículos que entran y salen de sus instalaciones. Para modelar este sistema, necesitamos crear una serie de clases y interfaces.

El parqueadero puede recibir dos tipos de vehículos: Coches y Motocicletas. Para modelar esto, se te pide que crees una clase abstracta Vehiculo con una propiedad para la placa y un método abstracto getType(). Luego, crea dos clases Coche y Motocicleta que extiendan de Vehiculo e implementen el método getType().

Además, necesitamos una interfaz ParqueaderoInterface que defina dos métodos: estacionar(Vehiculo $vehiculo) y retirar(Vehiculo $vehiculo).

Por último, necesitamos una clase Parqueadero que implemente la interfaz ParqueaderoInterface. Esta clase debe tener una propiedad para almacenar los vehículos que se encuentran actualmente en el parqueadero. Cuando un vehículo es estacionado, debe ser agregado a esta propiedad y cuando es retirado, debe ser eliminado de la misma.

Para probar tu código, crea un objeto Parqueadero y estaciona y retira tanto un coche como una motocicleta. */

interface ParqueaderoInterface{
    public function estacionar(Vehiculo $vehiculo);
    public function retirar(Vehiculo $vehiculo);
}

abstract class Vehiculo{
    protected $placa;
    public function __construct($placa){
        $this->placa=$placa;
    }
    abstract public function getType();
}

class Coche extends Vehiculo{
    public function getType(){
        return 'Coche';
    }
}

class Motocicleta extends Vehiculo{
    public function getType(){
        return 'Motocicleta';
    }
}

class Parqueadero implements ParqueaderoInterface{
    protected $vehiculos;
    public function __construct($vehiculos){
        $this->vehiculos=[];
    }
    public function estacionar(Vehiculo $vehiculo){ //se escribe asi: Vehiculo $vehiculo porque solo permite que se pongan 
                                                    //dentro del estacionar una varibale que venga de la clase Vehiculo y que se ponga dentro 
                                                    //su atributo de entrada $vehiculo que en la clase Vehiculo es $placa
        $this->vehiculos[] = $vehiculo; //esta es otra forma de agregar un objeto al final de una array
        echo $vehiculo->getType() . " con placa " . $vehiculo->placa . " ha sido estacionado.\n";
    }
    public function retirar(Vehiculo $vehiculo){
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

$coche = new Coche("ABC123");
$parqueadero->estacionar($coche);

$motocicleta = new Motocicleta("XYZ987");
$parqueadero->estacionar($motocicleta);

$parqueadero->retirar($coche);
$parqueadero->retirar($motocicleta);

//var_dump($parqueadero);
var_dump($motocicleta);
var_dump($coche);

?>