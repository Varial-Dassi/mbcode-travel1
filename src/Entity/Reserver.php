<?php

use Doctrine\ORM\Mapping as ORM; 
/**
*  @ORM\Entity 
*/
class Reserver
{
    /**
    * @ORM\Id
    * @ORM\GeneratedValue
    * @ORM\Column(type="integer")
    */
    private $id_reserver;
   
    #id_reservation (Reserver.php)
    #id_moy_t (Moyen_transport.php)

}

