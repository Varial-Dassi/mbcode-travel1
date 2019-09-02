<?php
use Moyen_transport as MT;

use Doctrine\ORM\Mapping as ORM;

/**
*  @ORM\Entity 
*  @ORM\InheritanceType("JOINED")
*  @ORM\DiscriminatorColumn(name="id_mo", type="integer")
*/
class Maritine extends MT
{
    
  
    
}


?>
