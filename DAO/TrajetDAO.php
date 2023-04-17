<?php

require_once('BDD.php');
class TrajetDAO
{

    public function enregistrer($civilite,$nom, $email,$adresse,$marchandise, $quantite, $unite,$gareDep,$gareArr, $date_livraison)
    {
        $db_connect = connectToDB();
    }
}