<?php

class Accueil extends controller
{
    public function index()
    {
        $this->render('home');
    }
    public function essai(){
        $client = new ClientDAO;
        var_dump($client);
        $client->create(Client::class);
    }
    public function passerCommande()
    {

        // Si c'est une requête POST
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            // On recupère les données saisies
            $civilite = $_POST['civilite'];
            $nom = $_POST['nom'];
            $email = $_POST['email'];
            $adresse = $_POST['adresse'];
            $marchandise = $_POST['natureM'];
            $quantite = $_POST['qteM'];
            $unite = $_POST['uniteM'];
            $gareDep = $_POST['gareDep'];
            $gareArr = $_POST['gareArr'];
            $date_livraison = $_POST['dateLivraison'];



    

        
            // On fabrique les objets 
            $client1 = serialize(new Client($civilite, $nom, 1, $email, $adresse));
            $marchandise1 = serialize(new Marchandise($marchandise, $unite, $quantite));
            $gareDepart = serialize(new Gare($gareDep));
            $gareArrivee = serialize(new Gare($gareArr));

            // On stocke le tout dans une variable de session
            $_SESSION['commande'] = [$client1, $marchandise1, $gareDepart, $gareArrivee, $date_livraison];

            // On traite les données
            // Enregistre le client
            $client = new ClientDAO;
            $client->createC($civilite, $nom, $email, $adresse);

            // Enregistre la marchandise
            $marchandise = new MarchandiseDAO;
            $marchandise->createM($marchandise, $unite, $quantite);

            $commande = new CommandeDAO;
            // $commande->enregistrer($client1, $marchandise1,$trajet);

            // Rediriger vers une page de confirmation
            header('Location: confirmation.php');
            exit();


        }


    }
}