<?php

use Doctrine\ORM\Mapping as ORM; 

/**
*  @ORM\Entity 
*  @ORM\InheritanceType("JOINED")
*  @ORM\DiscriminatorColumn(name="id_moy_t", type="integer")
*/
class Terrestre extends Moyen_transport
{
  
    
}

