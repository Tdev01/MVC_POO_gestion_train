<?php

try{
    $dbh = new PDO ('mysql:host=mysql8;dbname=mybase', "Teddy","MyPassword");
    echo "connection à la base de donnée est fonctionnelle <br>";

}catch (PDOException $e){
    print "erreur !: " .$e->getMessage() . "<br/>";
    die();
}