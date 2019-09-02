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
<<<<<<< HEAD
    protected $id;
=======
    protected $id_comp_t;
>>>>>>> e692f6eb786a80e05e5dc82582c29de483f6c14b
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
