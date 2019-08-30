<?php

use Doctrine\ORM\Mapping as ORM; 
/**
*  @ORM\Entity 
*/
class Reservation
{
    /**
    * @ORM\id_reservation
    * @ORM\GeneratedValue
    * @ORM\Column(type="integer")
    */
    private $id_reservation;
    /**
    * @ORM\date_reservation
    * @ORM\Column(type="datetime")
    */
    private $date_reservation;
    /**
    * @ORM\duree_reservation
    * @ORM\Column(type="string")
    */
    private $duree_reservation;
    /**
    * @ORM\nb_reservation
    * @ORM\Column(type="integer")
    */
    private $nb_reservation;
    /**
    * @ORM\codeFactureR
    * @ORM\Column(type="string")
    */
    private $codeFactureR;


    public function getId_reservation(){
        return $this->id_reservation;
    }
    public function getDate_reservation(){
        return $this->date_reservation;
    }
    public function getDuree_reservation(){
        return $this->duree_reservation;
    }
    public function getNb_reservation(){
        return $this->nb_reservation;
    }
    public function getCodeFactureR(){
        return $this->codeFactureR;
    }

    public function setId_reservation($id_reservation){
        $this->id_reservation = $id_reservation;
    }
    public function setDate_reservation($date_reservation){
        $this->date_reservation = $date_reservation;
    }
    public function setDuree_reservation($duree_reservation){
        $this->duree_reservation = $duree_reservation;
    }
    public function setNb_reservation($nb_reservation){
        $this->nb_reservation = $nb_reservation;
    }
    public function setCodeFactureR($codeFactureR){
        $this->codeFactureR = $codeFactureR;
    }
  
}