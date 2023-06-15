public function __get(string $name, ...$args){
    if(method_exists($this, $name) && property_exists($this, $name) && ($args != null)){
        return [$this->{$name}(...$args), $this->{$name}];
    }
    else if (($args != null) && method_exists($this, $name)){
        return $this->{$name}(...$args);
    }
    else if(property_exists($this, $name)){
        return $this->{$name};
    }else{
        return ["error"=> "no existe esa entidad en la clase ".__CLASS__];
    }
}