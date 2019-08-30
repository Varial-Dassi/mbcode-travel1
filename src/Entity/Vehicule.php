<?php

use Doctrine\ORM\Mapping as ORM; 
/**
*  @ORM\Entity 
*/
class Vehicule
{
   /**
    * @ORM\Id
    * @ORM\GeneratedValue
    * @ORM\Column(type="integer")
    */
    protected $id_veh;
     /**
    * @ORM\Column(type="string")
    */
    protected $immatriculation;
     /**
    * @ORM\Column(type="string")
    */
    protected $type;
     /**
    * @ORM\Column(type="string")
    */
    protected $capacite;
    
   /**
    * @ORM\ManyToOne(targetEntity=Categorie::class)
    */
    protected $id_cat;
     
    public function getId_veh()
    {
      return $this->id_veh;
    }

    public function setId_veh($id_veh)
  {
      $this->id_veh = $id_veh;
  }

    public function getImmatriculation()
  {
    return $this->immatriculation;
  }

  public function setImmatriculation($immatriculation)
  {
      $this->immatriculation = $immatriculation;
  }
  
  public function getType()
  {
    return $this->type;
  }

  public function setType($type)
  {
      $this->type = $type;
  }
  
  public function getCapacite()
  {
    return $this->capacite;
  }

  public function setCapacite($capacite)
  {
      $this->capacite = $capacite;
  }

  public function getId_cat()
  {
    return $this->id_cat;
  }

  public function setId_cat($id_cat)
  {
      $this->id_cat = $id_cat;
  }

  }

?>
