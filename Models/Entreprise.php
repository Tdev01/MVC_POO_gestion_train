<?php

class Entreprise {
   
    public $nom;
    public $nompdg;
    public $email;
    
    public function __construct($nom, $nompdg, $email){
        $this->nom = $nom;
        $this->nompdg = $nompdg;
        $this->email = $email;        
    }

    public function getAttributes() {
        var_dump(get_object_vars($this));
    }
}