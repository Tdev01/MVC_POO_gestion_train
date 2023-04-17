<?php

// On désire constituer une base de données relative 
// à la gestion du trafic marchandise réalisé par une Société Ferroviaire. 
// La société ferroviaire travaille pour le compte de clients qui souhaitent 
// faire acheminer des marchandises d'une gare à une autre. 
// Les clients sont caractérisés par un n° de client, un nom, et une adresse.
// Une marchandise est caractérisée par sa nature (qui détermine l'unité de mesure) et le nombre d'unités à transporter. 
// Par exple : 20 m 3 d'essences, 10 stères de bois, 30 voitures. 
// La société ferroviaire utilise un réseau constitué de lignes qui relient 
// des gares dans un certain ordre. 
// Chaque gare est identifiée par le nom de la ville qu'elle dessert. 
// Un train, identifié par son numéro, circule toujours sur la même ligne et s'arrête à toutes les gares. 
// La date de son prochain départ est connue. 
// La société ferroviaire loue des wagons pour transporter des marchandises. Les wagons sont 
// identifiés par un numéro. Chaque wagon est caractérisé par la nature des marchandises 
// qu'il peut transporter (par exple des voitures, du bois, ..), sa capacité 
// (le nombre d'unités qu'il peut transporter), le train auquel il est rattaché, 
// et son chargement (c'est à dire les marchandises qui y sont placées).
// implémentez les modèles, la BDD et simulez le fonctionnement de cette société

