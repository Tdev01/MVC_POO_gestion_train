<?php

class Marchandise {
    private $nature;
    public $unite;
    public $quantite;
    

    public function __construct($nature, $unite, $quantite){
        $this->nature = $nature;
        $this->unite = $unite;
        $this->quantite = $quantite;
    }

    
    public function __toString(){
        return $this->quantite . $this->unite . " de " . $this->nature ; 
    }

    public function getAttributes() {
        return get_object_vars($this);
    }

    public function getNature(){
        return $this->nature;

    }



}