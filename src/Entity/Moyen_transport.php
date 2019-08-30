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
    protected $id_moy_t;
     /**
    * @ORM\Column(type="string")
    */
    protected $type_transport;
     /**
    * @ORM\Column(type="string")
    */
    protected $capacite_transport;
    /**
    * @ORM\ManyToOne(targetEntity=Categorie::class, inversedBy="id")
    */
    protected $id_categorie;
   /**
    * @ORM\ManyToOne(targetEntity=Compagnie_transport::class, inversedBy="id")
    */
    protected $id_comp_t;
     
    public function getId_moy_t(){
      return $this->id_moy_t;
    }
    public function getType_transport(){
    return $this->type_transport;
    }
    public function getCapacite_transport(){
      return $this->capacite_transport;
    }
    public function getId_categorie(){
      return $this->id_categorie;
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
    public function setId_categorie($id_categorie){
        $this->id_categorie = $id_categorie;
    }
    public function setId_comp_t($id_comp_t){
        $this->id_comp_t = $id_comp_t;
    }

  }

?>
