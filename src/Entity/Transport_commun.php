<?php

use Doctrine\ORM\Mapping as ORM; 

/**
*  @ORM\Entity 
*  @ORM\InheritanceType("JOINED")
*  @ORM\DiscriminatorColumn(name="id_comp_t", type="integer")
*/
class Transport_commun extends Compagnie_transport
{
  
    
}




?>
