public function get(string $name, bool $type=false): mixed{
    // return (method_exists($this, $name))?$this->{$name}():$this->{$name};
    if(method_exists($this, $name) && property_exists($this, $name) && $type==true){
        return $this->{$name};
    }else if(method_exists($this, $name)){
        return $this->{$name}();
    }else if (property_exists($this, $name)){
        return $this->{$name};
    }else{ 
        return ["error"=>"No existe en ".CLASS];
    }
}




class CuentaCorriente extends CuentaBancaria {
    public function retirar($monto) {
        if ($monto > $this->saldo) {
            $cargo = $monto * 0.1; // Aplicar cargo por sobregiro del 10%
            $this->saldo -= $monto + $cargo;
            echo "Se ha retirado \$$monto de la cuenta corriente con un cargo de \$$cargo por sobregiro.\n";
        } else {
            $this->saldo -= $monto;
            echo "Se ha retirado \$$monto de la cuenta corriente.\n";
        }
    }
}

class CuentaAhorros extends CuentaBancaria {
    public function retirar($monto) {
        if ($monto > $this->saldo) {
            echo "No es posible realizar el retiro. Saldo insuficiente en la cuenta de ahorros.\n";
        } else {
            $this->saldo -= $monto;
            echo "Se ha retirado \$$monto de la cuenta de ahorros.\n";
        }
    }
}

// Ejemplo de uso:
$cuentaCorriente = new CuentaCorriente(1000);
$cuentaCorriente->retirar(500);  // Salida: Se ha retirado $500 de la cuenta corriente.
echo "Saldo actual de la cuenta corriente: $" . $cuentaCorriente->saldo . "\n";  // Salida: Saldo actual de la cuenta corriente: $500

$cuentaCorriente->retirar(700);  // Salida: Se ha retirado $700 de la cuenta corriente con un cargo de $70 por sobregiro.
echo "Saldo actual de la cuenta corriente: $" . $cuentaCorriente->saldo . "\n";  // Salida: Saldo actual de la cuenta corriente: -$270

$cuentaAhorros = new CuentaAhorros(2000);
$cuentaAhorros->retirar(1500);  // Salida: Se ha retirado $1500 de la cuenta de ahorros.
echo "Saldo actual de la cuenta de ahorros: $" . $cuentaAhorros->saldo . "\n";  // Salida: Saldo actual de la cuenta de ahorros: $500

$cuentaAhorros->retirar(1000);  // Salida: No es posible realizar el retiro. Saldo insuficiente en la cuenta de ahorros.
echo "Saldo actual de la cuenta de ahorros: $" . $cuentaAhorros->saldo . "\n";  // Salida: Saldo actual de la cuenta de ahorros: $500
