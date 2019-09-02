<?php
 ## create-client.php 
 require "../Entity/Client.php";
 $entityManager = require_once join(DIRECTORY_SEPARATOR, [__DIR__, '../', '../', 'bootstrap.php']); 

 //use controle\Client; 

 // Instanciation de l'utilisateur
 if(isset($_POST['nm'])&&isset($_POST['pnm'])&&isset($_POST['em'])&&isset($_POST['spm'])
 &&isset($_POST['nat']))
 {
$admin = new Client();
$admin->setNom_client($_POST['nm']);
$admin->setPrenom_client($_POST['pnm']);
$admin->setEmail_client($_POST['em']);
$admin->setTelephone_client($_POST['spm']);
$admin->setNationalite_client($_POST['nat']);

 // Gestion de la persistance
 $entityManager->persist($admin); 
 $entityManager->flush(); 
 echo "success";
 // Vérification du résultats
 //echo "Identifiant de l'utilisateur créé : " .$admin->getId();
}else{
    echo "rejected";
}
?>