<?php
    declare( strict_types = 1 );

    class Humano{
        protected $saludar;
        public function __construct(public string $color,private float $huella,protected string $alias){}// metodos magicos

        protected function saludar() : string{ 
            return "Hola mi alias es: $this->alias" ;
        }

        public function set(string $name,mixed $value):void{
            $this->{$name}=$value;
        }

        public function get(string $name,int $tipo=0): mixed{
            // return(method_exists($this,$name) ? $this->{$name}() : $this->{$name});
            if(property_exists($this,$name) && method_exists($this, $name)){
                return $this->{$name}();
            }elseif(method_exists($this, $name) && $tipo===2){
                return $this->{$name}();
            }elseif(property_exists($this,$name) && $tipo===1){
                return $this->{$name};
            }elseif(property_exists($this,$name) && $tipo===2){
                return "La entidad no existe en la clase ".__CLASS__;
            }elseif(method_exists($this,$name) && $tipo===1){
                return "La entidad no existe en la clase ".__CLASS__;
            }elseif(method_exists($this, $name)){
                return $this->{$name}();
            }elseif(property_exists($this,$name)){
                return $this->{$name};
            }else{
                return "La entidad no existe en la clase ".__CLASS__;
            }
        }
    }
    $obj=new Humano(alias:'Antonio',color:'Piel',huella:1.31);
    $obj->set("saludar","Hola");
    $obj->set("alias","Jhon Doe");
    // $huella= $obj->get("huella");

    print_r($obj);
    echo "<br>";
    print_r($huella);
    echo "<br>";
    print_r($obj->get("saludar",1));
    //2 para el metodo
    //1 para propiedad (atributo)
?>