<?php

class Gare{

    public $nomVille;
    
    public function __construct($nomVille){
        $this->nomVille = $nomVille;
       
    }
    
    public function __toString(){
        return $this->nomVille ; 
    }

    public function afficheTrains(){

    }
}