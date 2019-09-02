<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
    
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
<?php
 #### get-client.php
 require "../Entity/Client.php";
 $entityManager = require_once join(DIRECTORY_SEPARATOR, [__DIR__, '../', '../', 'bootstrap.php']); 

 //use Entity\Client; 
 //$client = $entityManager->find(Client::class, 1);
 //echo sprintf( 
  //  "Client (id_client: %s, nom_client: %s, prenom_client: %s, email_client: %s, telephone_client: %s, 
  //  nationalite_client: %s)", 
  //  $client->getId_client(), $client->getNom_client(), $client->getPrenom_client(), $client->getEmail_client(),
    //$client->getTelephone_client(), $client->getNationalite_client() 
//);

$clientRepo = $entityManager->getRepository(Client::class); 
 //$client = $clientRepo->find(1); 
 // echo "Client by primary key:\n"; 
 //echo $client; 
/* if($reponse = $clientRepo->find(1))
   {echo '<table class="table table-bordered mt-5">';
       // echo '<div class=""><h3>'.$reponse->nom_client.'</h3><p class="">'.$reponse->prenom_client.'</p><p class="">'.$reponse->email_client.'</p><p class="">'.$reponse->telephone_client.'</p><p class="">'.$reponse->nationalite_client.' ?</p></div>';
      echo '<tr>';
       echo '<td>'.$reponse->nom_client .'</td>';
        echo '<td>'. $reponse->prenom_client.'</td>';
        echo '<td>'. $reponse->email_client .'</td>';
        echo '<td>'. $reponse->telephone_client.'</td>';
        echo '<td>'. $reponse->nationalite_client.'</td>';
        echo '</tr>';
        echo '</table>';
    }else{
        echo 'no result';
    }
  */  


$allClient = $clientRepo->findAll(); 
 //echo "All client:\n"; 
 //foreach ($allClient as $client) { 
  //   echo $client;
   //  } 
     
     
    echo '<table class="table table-bordered mt-5">';
    
    echo '<tr>';
    echo '<th>Nom</th>';
    echo '<th>Prenom</th>';
    echo '<th>email</th>';
    echo '<th>Telephone</th>';
    echo '<th>Nationalite</th>';
    echo '</tr>';
    foreach ($allClient as  $reponse) {  
        echo '<tr>';
        echo '<td>'.$reponse->nom_client .'</td>';
         echo '<td>'. $reponse->prenom_client.'</td>';
         echo '<td>'. $reponse->email_client .'</td>';
         echo '<td>'. $reponse->telephone_client.'</td>';
         echo '<td>'. $reponse->nationalite_client.'</td>';
         echo '</tr>';
    }


echo '</table>';
 
    ?>
<script src="../../bootstrap/js/jquery-3.3.1.slim.min.js"></script>
<script src="../../bootstrap/js/popper.min.js"></script>
</body>
</html>