<?php
 ## create-Moyen_transport.php 
 require "../Entity/Moyen_transport.php";
 $entityManager = require_once join(DIRECTORY_SEPARATOR, [__DIR__, '../', '../', 'bootstrap.php']); 

 //use controle\Moyen_transport; 

 // Instanciation de l'utilisateur

$admin = new Moyen_transport();
$admin->setType_transport("bus");
$admin->setCapacite_transport("32");
$admin->setId_cat("");
$admin->setId_comp_t("");

 // Gestion de la persistance
 $entityManager->persist($admin); 
 $entityManager->flush(); 

 // Vérification du résultats
 //echo "Identifiant de l'utilisateur créé : " .$admin->getId();

?>