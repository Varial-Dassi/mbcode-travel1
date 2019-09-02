<?php
<<<<<<< HEAD
include_once 'Compagnie_transport.php';
=======
>>>>>>> e692f6eb786a80e05e5dc82582c29de483f6c14b

use Doctrine\ORM\Mapping as ORM; 

/**
*  @ORM\Entity 
*  @ORM\InheritanceType("JOINED")
<<<<<<< HEAD
*  @ORM\DiscriminatorColumn(name="id_p", type="integer")
=======
*  @ORM\DiscriminatorColumn(name="id_comp_t", type="integer")
>>>>>>> e692f6eb786a80e05e5dc82582c29de483f6c14b
*/
class Transport_commun extends Compagnie_transport
{
  
    
}




?>
