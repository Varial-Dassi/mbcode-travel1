<?php

use Doctrine\ORM\Mapping as ORM; 
/**
*  @ORM\Entity 
*/
class Type_tarif{
   /**
    * @ORM\Id
    * @ORM\GeneratedValue
    * @ORM\Column(type="integer")
    */
    protected $id;
     /**
    * @ORM\Column(type="string")
    */
    protected $designation;
    

    public function getId_type_tarif(){
      return $this->id_type_tarif;
    }

    public function setId_type_tarif($id_type_tarif){
      $this->id_type_tarif = $id_type_tarif;
    }

    public function getDesignation(){
    return $this->designation;
    }

    public function setDesignation($designation){
        $this->designation = $designation;
    }

   
  }

?>
