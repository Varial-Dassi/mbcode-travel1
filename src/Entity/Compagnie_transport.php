<?php

use Doctrine\ORM\Mapping as ORM; 
/**
*  @ORM\Entity 
*/
class Compagnie_transport
{
   /**
    * @ORM\Id
    * @ORM\GeneratedValue
    * @ORM\Column(type="integer")
    */
    protected $id_comp_t;
     /**
    * 
    * @ORM\Column(type="string")
    */
    private $nom_comp_t;
    

    public function getId_comp_t(){
      return $this->id_comp_t;
    }
    public function getNom_comp_t(){
    return $this->nom_comp_t;
    }

    public function setId_comp_t($id_comp_t){
      $this->id_comp_t = $id_comp_t;
    }
    public function setNom_comp_t($nom_comp_t){
      $this->nom_comp_t = $nom_comp_t;
    }
   
  }

?>
