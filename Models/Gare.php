<?php

class Gare {
    public $nomVille;
    
    public function __construct($nomVille){
        $this->nomVille = $nomVille;
       
    }
    
    public function __toString(){
        return "La ville est" .$this->nomVille ; 
    }

    public function afficheTrains(){

    }

    public function getAttributes() {
        var_dump(get_object_vars($this));
    }
}