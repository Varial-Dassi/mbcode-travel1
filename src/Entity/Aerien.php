<?php
<<<<<<< HEAD
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

=======

use Doctrine\ORM\Mapping as ORM;
/**
*  @ORM\Entity 
*  @ORM\InheritanceType("JOINED")
*  @ORM\DiscriminatorColumn(name="id_moy_t", type="integer")
*/
class Aerien extends Moyen_transport
{
  
>>>>>>> e692f6eb786a80e05e5dc82582c29de483f6c14b
    
}