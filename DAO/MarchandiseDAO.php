<?php

require_once('BDD.php');
class MarchandiseDAO
{

    public function createM($marchandise,$unite,$quantite)
    {
        $db_connect = connectToDB();
        $requete = $db_connect->prepare('INSERT INTO commande (nature, unite, quantite) VALUES (?, ?, ?)');
        $requete->execute([$marchandise,$unite,$quantite]);        
    }
}