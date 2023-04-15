<?php

class Entreprise{

    public $nom;
    public $nompdg;
    public $email;
    
    public function __construct($nom, $nompdg, $email){
        $this->nom = $nom;
        $this->nompdg = $nompdg;
        $this->email = $email;
        
    }

    public function valideCommande($com, $trj){

        $dateClient = $com['dateClient'];
        $formatDateClient= new DateTime($dateClient);

        var_dump($formatDateClient);
        foreach($trj as $trajet){
            echo substr($trajet->horDep,0,10);
            echo "<br>";
            // echo $trajet->horDep;
            
            
            // on compare les deux dates 
            
        }




    }

}