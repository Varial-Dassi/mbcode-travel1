<?php
include_once 'Compagnie_transport.php';

use Doctrine\ORM\Mapping as ORM; 

/**
*  @ORM\Entity 
*  @ORM\InheritanceType("JOINED")
*  @ORM\DiscriminatorColumn(name="id_c", type="integer")
*/
class Societe_location extends Compagnie_transport
{
  
    
}

?>