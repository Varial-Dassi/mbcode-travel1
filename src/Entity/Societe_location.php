<?php

use Doctrine\ORM\Mapping as ORM; 

/**
*  @ORM\Entity 
*  @ORM\InheritanceType("JOINED")
*  @ORM\DiscriminatorColumn(name="id_comp_t", type="integer")
*/
class Societe_location extends Compagnie_transport
{
  
    
}

?>