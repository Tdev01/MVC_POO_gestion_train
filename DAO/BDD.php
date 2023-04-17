<?php

function connectToDB(){

    $host = "mysql8";
    $user = "Teddy";
    $pw = "MyPassword";
    $db = "mybase";

    try {

        $dbco = new PDO("mysql:host=$host;dbname=$db", $user, $pw);
        $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo"la connection c'est bien passé";
    } catch (PDOException $e) {
        echo "Erreur : " . $e->getMessage();
    }

    return $dbco;
}
connectToDB();