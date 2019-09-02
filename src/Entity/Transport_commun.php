<?php
include_once 'Compagnie_transport.php';

use Doctrine\ORM\Mapping as ORM; 

/**
*  @ORM\Entity 
*  @ORM\InheritanceType("JOINED")
*  @ORM\DiscriminatorColumn(name="id_p", type="integer")
*/
class Transport_commun extends Compagnie_transport
{
  
    
}




?>
