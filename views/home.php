<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="views\assets\style.css" rel="stylesheet">
    <title>Compagnie ferroviaire Truc</title>
</head>
<style>
    body {
        color: white;
    }
</style>

<body>
    <header>
        <h1>Bienvenue sur le site de la compagnie ferroviaire Truc</h1>
    </header>
    <section>
        <h2>Passer commande</h2>
        <form method='POST' action='Accueil/essai'>
            <input type='text' name='civilite' placeholder='votre civilite'>
            <input type='text' name='nom' placeholder='votre nom'>
            <input type='email' name='email' placeholder='votre email'>
            <input type='text' name='adresse' placeholder='votre adresse'>
            <input type='text' name='natureM' placeholder='nature de la marchandise'>
            <input type='text' name='qteM' placeholder='sa quantité'>
            <input type='text' name='uniteM' placeholder='son unité'>
            <input type='text' name='gareDep' placeholder='départ'>
            <input type='text' name='gareArr' placeholder='arrivée'>
            <button type='submit'>Valider</button>
        </form>
        <!-- Afficher dans un second temps une liste des trajets disponibles pour les villes choisies, le jour choisi
             et le genre de marchandise qu'il veut nous confier -->
    </section>

    <?php
    $wagon1 = new Wagon(1, 'citerne', 700, 150);
    $wagon2 = new Wagon(2, 'normal', 750, 0);
    $wagon3 = new Wagon(3, 'normal', 750, 350);
    $listWagons = [$wagon1, $wagon2, $wagon3];
    $train1 = new Train(1, $listWagons);
    $marchandise1 = new Marchandise('bois', 'T', 300);
    $gare1 = new Gare('Limoges');
    $gare2 = new Gare('Montpellier');
    $gare3 = new Gare('Truc');
    $gare4 = new Gare('Machin');
    $gare5 = new Gare('Bouc');
    $listGares = [$gare3, $gare4, $gare5];

    //admettons qu'il ait choisi ce trajet
    $trajet1 = new Trajet(1, $train1, $gare1, $gare2, $listGares, '2023-04-18 12:00', '2023-04-18 14:00', [0, 1, 0, 1, 1, 0, 0]);

    //Si y'a de la place dans un wagon, cela ajoute la marchandise et s'arrête.
    foreach ($listWagons as $wagon) {
        if ($wagon->ajouterMarchandise($marchandise1)) {
            break;
        }
    }
    echo $wagon1->capacite;

    $client4= new Client('','','','','');
    $client4->getAttributes();
    ?>
</body>

</html>