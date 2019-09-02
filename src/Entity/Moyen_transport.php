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
    protected $id;
     /**
    * @ORM\Column(type="string")
    */
    protected $type_transport;
     /**
    * @ORM\Column(type="string")
    */
    protected $capacite_transport;
    
    

     
    public function getId_moy_t(){
      return $this->id_moy_t;
    }
    public function getType_transport(){
    return $this->type_transport;
    }
    public function getCapacite_transport(){
      return $this->capacite_transport;
    }
    public function getId_cat(){
      return $this->id_cat;
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
    public function setId_cat($id_cat){
        $this->id_cat = $id_cat;
    }
    public function setId_comp_t($id_comp_t){
        $this->id_comp_t = $id_comp_t;
    }

  }

?>
