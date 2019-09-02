<?php
<<<<<<< HEAD
use Moyen_transport as MT;
=======
>>>>>>> e692f6eb786a80e05e5dc82582c29de483f6c14b

use Doctrine\ORM\Mapping as ORM;

/**
*  @ORM\Entity 
*  @ORM\InheritanceType("JOINED")
<<<<<<< HEAD
*  @ORM\DiscriminatorColumn(name="id_mo", type="integer")
*/
class Maritine extends MT
{
    
=======
*  @ORM\DiscriminatorColumn(name="id_moy_t", type="integer")
*/
class Maritine extends Moyen_transport
{
>>>>>>> e692f6eb786a80e05e5dc82582c29de483f6c14b
  
    
}


?>
