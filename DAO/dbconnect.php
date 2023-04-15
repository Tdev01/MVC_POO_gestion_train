<?php

// information de connection à la base de données 
$dbname= "mybase";
$user = "Teddy";
$mypassword = "MyPassword";

// On se connecte à la base de donnée si la connection 
try{
    $dbh = new PDO ('mysql:host=mysql8;$dbname', $user, $mypassword);
    echo "connection à la base de donnée est fonctionnelle <br>";

// une erreur s'affiche si ca ne focntionne pas 
}catch (PDOException $e){
    print "erreur !: " .$e->getMessage() . "<br/>";
    die();
}