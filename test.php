<?php
require_once __DIR__ . "/autoload.php";
// CLIENTS
$client1 = new Client("Ahmed", "ahmed@gmail.com");
$client2 = new Client("Sara", "sara@gmail.com");
// LOCATIONS
$location1 = new Location();
$location2 = new Location();
// VEHICULES (COMPOSITION)
$location1->ajouterVehicule("BMW Serie 5", 1200);
$location1->ajouterVehicule("Dacia Logan", 50);
$location1->ajouterVehicule("Peugeot 208", 150);
$location2->ajouterVehicule("Mercedes Classe C", 800);
$location2->ajouterVehicule("Renault Clio", 30);
$location2->ajouterVehicule("Fiat Panda", 10);
// AGRÉGATION
$client1->ajouterLocation($location1);
$client2->ajouterLocation($location2);
// AFFICHAGE
echo "===== CLIENT 1 =====\n";
$client1->afficherLocations();
echo "\n===== CLIENT 2 =====\n";
$client2->afficherLocations();