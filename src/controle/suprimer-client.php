<?php
 ## suprimer-client.php 
 require "../Entity/Client.php";
 $entityManager = require_once join(DIRECTORY_SEPARATOR, [__DIR__, '../', '../', 'bootstrap.php']); 

 //use controle\Client; 

 // Instanciation de l'utilisateur
 //if(isset($_POST['nm'])&&isset($_POST['pnm'])&&isset($_POST['em'])&&isset($_POST['spm'])
// &&isset($_POST['nat']))
 //{
    $identifiant = 12;
    $clientRepo = $entityManager->getRepository(Client::class); 
    $client = $clientRepo->find($identifiant);
 // Gestion de la persistance
 $entityManager->remove($client);
 $entityManager->flush($client); 
 $client = $clientRepo->find($identifiant);
 echo "success";
 // Vérification du résultats
 //echo "Identifiant de l'utilisateur créé : " .$admin->getId();
//}else{
 //   echo "rejected";
//}
?>