<?php
 ## create-destination.php 
 require "../Entity/Destination.php";
 $entityManager = require_once join(DIRECTORY_SEPARATOR, [__DIR__, '../', '../', 'bootstrap.php']); 

 //use controle\Destination; 

 // Instanciation de l'utilisateur

$admin = new Destination();
$admin->setPays_dest("cameroun");
$admin->setVille_dest("douala");


 // Gestion de la persistance
 $entityManager->persist($admin); 
 $entityManager->flush(); 

 // Vérification du résultats
 //echo "Identifiant de l'utilisateur créé : " .$admin->getId();

?>