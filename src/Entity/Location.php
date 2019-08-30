<?php

use Doctrine\ORM\Mapping as ORM; 
/**
*  @ORM\Entity 
*/
class Location
{
    /**
    * @ORM\id_location
    * @ORM\GeneratedValue
    * @ORM\Column(type="integer")
    */
    private $id_location;
    /**
    * @ORM\date_location
    * @ORM\Column(type="datetime")
    */
    private $date_location;
    /**
    * @ORM\duree_location
    * @ORM\Column(type="string")
    */
    private $duree_location;
    /**
    * @ORM\nb_location
    * @ORM\Column(type="integer")
    */
    private $nb_location;
    /**
    * @ORM\codeFactureL
    * @ORM\Column(type="string")
    */
    private $codeFactureL;

    public function getId_location(){
        return $this->id_location;
    }
    public function getDate_location(){
        return $this->date_location;
    }
    public function getDuree_location(){
        return $this->duree_location;
    }
    public function getNb_location(){
        return $this->nb_location;
    }
    public function getCodeFactureL(){
        return $this->codeFactureL;
    }
    
    public function setId_location($id_location){
        $this->id_location = $id_location;
    }
    public function setDate_location($date_location){
        $this->date_location = $date_location;
    }
    public function setDuree_location($duree_location){
        $this->duree_location = $duree_location;
    }
    public function setNb_location($nb_location){
        $this->nb_location = $nb_location;
    }
    public function setCodeFactureL($codeFactureL){
        $this->codeFactureL = $codeFactureL;
    }
  
}