<?php

use Doctrine\ORM\Mapping as ORM; 
/**
*  @ORM\Entity 
*/
class Aerien
{
    /**
    * @ORM\id_aerien
    * @ORM\GeneratedValue
    * @ORM\Column(type="integer")
    */
    private $id_aerien;
    /**
    * @ORM\type_aerien
    * @ORM\Column(type="string")
    */
    private $type_aerien;
    /**
    * @ORM\capacite_aerien
    * @ORM\Column(type="string")
    */
    private $capacite_aerien;
    
    public function getId_aerien(){
        return $this->id_aerien;
    }
    public function getType_aerien(){
        return $this->type_aerien;
    }
    public function getCapacite_aerien(){
        return $this->capacite_aerien;
    }

    public function setId_aerien($id_aerien){
         $this->id_aerien = $id_aerien;
    }
    public function setType_aerien($type_aerien){
         $this->type_aerien = $type_aerien;
    }
    public function setCapacite_aerien($capacite_aerien){
         $this->capacite_aerien = $capacite_aerien;
    }
  
}