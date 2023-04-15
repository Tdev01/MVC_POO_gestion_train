<?php

class Wagon{

    public $numero;
    public $type;
    public $maxCap;
    public $capacite;
    public $position;

    public function __construct($numero, $type, $maxCap , $capacite , $position){
        $this->numero = $numero;
        $this->type = $type;
        $this->maxCap = $maxCap;
        $this->capacite = $capacite;
        $this->position = $position;
    }
    
    public function afficheChar(){
            
    }

    public function affichePosition(){


    }
        
}
