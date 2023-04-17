<?php

class Client
{
    public $numero;
    public $civilite;
    public $nom;
    public $email;
    public $adresse;


    public function __construct($numero,$civilite, $nom, $email, $adresse)
    {
        $this->civilite = $civilite;
        $this->nom = $nom;
        $this->numero = $numero;
        $this->email = $email;
        $this->adresse = $adresse;

    }

    public function getAttributes() {
        
     return get_object_vars($this);
    }

//     $date_str = "2023-04-14 12:30:00";
// $date = strtotime($date_str);
// echo date('Y-m-d H:i:s', $date); // affiche 2023-04-14 12:30:00

// $date_str = "2023-04-14 12:30:00";
// $date = DateTime::createFromFormat('Y-m-d H:i:s', $date_str);
// echo $date->format('Y-m-d H:i:s'); // affiche 2023-04-14 12:30:00
}