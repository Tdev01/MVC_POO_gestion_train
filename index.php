<?php
session_start() ;

require('./Utils/autoload.php');
require('./Utils/init.php');
require('./Utils/router.php');
// var_dump($_GET);

$lot1 = new Marchandise('bois','st', 5 );
$lot2 = new Marchandise('acier','ptr', 4 );
$lot3 = new Marchandise('verre','m3', 5 );

$chargement= [$lot1 , $lot2, $lot3];
$client = new Client('nonbinaire','alfa', '1', 'alfa@gmail.com','1 avenue de toulouse');

$entreprise = new Entreprise('bewebstransport','PierreLove', 'alfa@gmail.com');

$gareArrivee = new Gare('montpellier');

$gareDepart = new Gare('Sete');

$wagon1 = new Wagon(1,'citerne', 80 , 0, $gareDepart );
$wagon2 = new Wagon(2,'plateau', 50 , 0, $gareDepart );
$wagon3 = new Wagon(3,'container', 30 , 0, $gareDepart );

$train = new Train(1,[$wagon1,$wagon2,$wagon3]);

$dateClient = "12/04/2023";

$Trajet1 = new Trajet(1,$train , $gareDepart , $gareArrivee, [] , '10-04-2023 14:22', '12-04-03 17:22', [0,1,0,1,0,1,0] );

$Trajet2 = new Trajet(2,$train , $gareDepart , $gareArrivee, [] , '14-04-2023 14:22', '14-04-03 17:22', [0,1,0,1,0,1,0] );

$Trajet3 = new Trajet(3,$train , $gareDepart , $gareArrivee, [] , '17-04-2023 14:22', '16-04-03 17:22', [0,1,0,1,0,1,0] );

$_SESSION['trajets'] = [$Trajet1, $Trajet2, $Trajet3];

// --------------------------------------//

$client->passerCommande($lot1, $gareDepart, $gareArrivee, $dateClient);

// ------------------- //
echo "<pre>";
// var_dump($_SESSION);

// ---------- //

$meilleurTrajet = $entreprise->valideCommande($_SESSION['commande'], $_SESSION['trajets'] );






