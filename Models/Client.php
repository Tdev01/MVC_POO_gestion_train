<?php

class Client{
    public $civilite;
    public $nom;
    public $numero;
    public $email;
    public $adresse;


    public function __construct($civilite,$nom, $numero, $email , $adresse){
        $this->civilite = $civilite;
        $this->nom = $nom;
        $this->numero = $numero;
        $this->email = $email;
        $this->adresse = $adresse;
       
    }

    public function passerCommande(Marchandise $marchandise, Gare $gareDep, Gare $gareArr , $dateClient){

        // echo  $this->civilite . " " . $this->nom . " veut transporter " . $marchandise  . " de " . $gareDep . " a " . $gareArr ;
        // echo  $this->civilite . " " . $this->nom . " veut transporter " . $marchandise->getNature() . " de " . $gareDep . " a " . $gareArr ;
        
        $_SESSION['commande'] = ['client'=>$this, 'marchandise'=>$marchandise, 'dep'=>$gareDep, 'arr'=>$gareArr, 'dateClient'=>$dateClient];



        }


}