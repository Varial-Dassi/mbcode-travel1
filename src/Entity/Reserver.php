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
   
    
}

