<?php
# src/Entity/Reservation.php

use Doctrine\ORM\Mapping as ORM; 
/**
*  @ORM\Entity 
*/
class Reservation
{
    /**
    * @ORM\Id
    * @ORM\GeneratedValue
    * @ORM\Column(type="integer")
    */
    private $id;
    /**
    * 
    * @ORM\Column(type="datetime")
    */
    private $date_reservation;
    /**
    * 
    * @ORM\Column(type="string")
    */
    private $duree_reservation;
    /**
    * 
    * @ORM\Column(type="integer")
    */
    private $nb_reservation;
    /**
    * 
    * @ORM\Column(type="string")
    */
    private $codeFactureR;
    /** 
     * @ORM\ManyToOne(targetEntity=Client::class)
     */ 
    private $id_client;
     /** 
     * @ORM\ManyToOne(targetEntity=Destination::class)
     */ 
    private $id_dest;




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
    public function getId_dest(){
        return $this->id_dest;
    }
    public function getId_client(){
        return $this->id_client;
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
    public function setId_dest($id_dest){
        $this->id_dest = $id_dest;
    }
    public function setId_client($id_client){
        $this->id_client = $id_client;
    }
  
}