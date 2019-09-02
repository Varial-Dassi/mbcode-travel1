<?php
include_once 'Moyen_transport.php';
use Doctrine\ORM\Mapping as ORM;
use Moyen_transport as MT;
/**
*  @ORM\Entity 
*  @ORM\InheritanceType("JOINED")
*  @ORM\DiscriminatorColumn(name="id_moy", type="integer")
*  @ORM\DiscriminatorMap({"aerien"="Aerien","moyen"="Moyen_transport"})
*/
class Aerien extends MT
{

    
}