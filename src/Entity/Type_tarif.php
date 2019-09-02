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
<<<<<<< HEAD
    protected $id;
=======
    protected $id_type_tarif;
>>>>>>> e692f6eb786a80e05e5dc82582c29de483f6c14b
     /**
    * @ORM\Column(type="string")
    */
    protected $designation;
    

<<<<<<< HEAD
    public function getId_type_tarif(){
=======
    public function getId_type_tarif()
    {
>>>>>>> e692f6eb786a80e05e5dc82582c29de483f6c14b
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
