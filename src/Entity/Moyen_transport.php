<?php

use Doctrine\ORM\Mapping as ORM; 
/**
*  @ORM\Entity 
*/
class Moyen_transport
{
   /**
    * @ORM\Id
    * @ORM\GeneratedValue
    * @ORM\Column(type="integer")
    */
<<<<<<< HEAD
    protected $id;
=======
    protected $id_moy_t;
>>>>>>> e692f6eb786a80e05e5dc82582c29de483f6c14b
     /**
    * @ORM\Column(type="string")
    */
    protected $type_transport;
     /**
    * @ORM\Column(type="string")
    */
    protected $capacite_transport;
<<<<<<< HEAD
    
    

=======
    /**
    * @ORM\ManyToOne(targetEntity=Categorie::class, inversedBy="id")
    */
    protected $id_categorie;
   /**
    * @ORM\ManyToOne(targetEntity=Compagnie_transport::class, inversedBy="id")
    */
    protected $id_comp_t;
>>>>>>> e692f6eb786a80e05e5dc82582c29de483f6c14b
     
    public function getId_moy_t(){
      return $this->id_moy_t;
    }
    public function getType_transport(){
    return $this->type_transport;
    }
    public function getCapacite_transport(){
      return $this->capacite_transport;
    }
<<<<<<< HEAD
    public function getId_cat(){
      return $this->id_cat;
=======
    public function getId_categorie(){
      return $this->id_categorie;
>>>>>>> e692f6eb786a80e05e5dc82582c29de483f6c14b
    }
    public function getId_comp_t(){
      return $this->id_comp_t;
    }
    
    public function setId_moy_t($id_moy_t){
      $this->id_moy_t = $id_moy_t;
    }
    public function setType_transport($type_transport){
        $this->type_transport = $type_transport;
    }
    public function setCapacite_transport($capacite_transport){
        $this->capacite_transport = $capacite_transport;
    }
<<<<<<< HEAD
    public function setId_cat($id_cat){
        $this->id_cat = $id_cat;
=======
    public function setId_categorie($id_categorie){
        $this->id_categorie = $id_categorie;
>>>>>>> e692f6eb786a80e05e5dc82582c29de483f6c14b
    }
    public function setId_comp_t($id_comp_t){
        $this->id_comp_t = $id_comp_t;
    }

  }

?>
