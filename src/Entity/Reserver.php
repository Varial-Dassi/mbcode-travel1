<?php

use Doctrine\ORM\Mapping as ORM; 
/**
*  @ORM\Entity 
*/
class Reserver
{
<<<<<<< HEAD
  /**
=======
    /**
>>>>>>> e692f6eb786a80e05e5dc82582c29de483f6c14b
    * @ORM\Id
    * @ORM\GeneratedValue
    * @ORM\Column(type="integer")
    */
<<<<<<< HEAD
    private $id;
    /**
    * @ORM\ManyToOne(targetEntity=Reservation::class)
    */
    protected $id_reservation;
    /**
    * @ORM\ManyToOne(targetEntity=Moyen_transport::class)
    */
    protected $id_moy_t;
    public function getId(){
      return $this->id;
    }
  
    public function getId_reservation(){
        return $this->id_reservation;
    }
    public function setId_reservation($id_reservation){
        $this->id_reservation = $id_reservation;
    }
    public function getId_moy_t(){
        return $this->id_moy_t;
      }
      public function setId_moy_t($id_moy_t){
        $this->id_moy_t = $id_moy_t;
      }
   
    
=======
    private $id_reserver;
   
    #id_reservation (Reserver.php)
    #id_moy_t (Moyen_transport.php)

>>>>>>> e692f6eb786a80e05e5dc82582c29de483f6c14b
}

