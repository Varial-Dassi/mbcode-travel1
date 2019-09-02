<?php
 ## create-Compagnie_transport.php 
 require "../Entity/Compagnie_transport.php";
 $entityManager = require_once join(DIRECTORY_SEPARATOR, [__DIR__, '../', '../', 'bootstrap.php']); 

 //use controle\Compagnie_transport; 

 // Instanciation de l'utilisateur

$admin = new Compagnie_transport();
$admin->setNom_comp_t("buca-voyage");


 // Gestion de la persistance
 $entityManager->persist($admin); 
 $entityManager->flush(); 

 // Vérification du résultats
 //echo "Identifiant de l'utilisateur créé : " .$admin->getId();

?>