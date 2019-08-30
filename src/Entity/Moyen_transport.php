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
    protected $type;
     /**
    * @ORM\Column(type="string")
    */
    protected $capacite;
    /**
    * @ORM\ManyToOne(targetEntity=Categorie::class)
    */
    protected $id_cat;
   /**
    * @ORM\ManyToOne(targetEntity=compagnie_transport::class)
    */
    protected $id_compagn;
     
    public function getId_moy_t()
    {
      return $this->id_moy_t;
    }

    public function setId_moy_t($id_moy_t)
  {
      $this->id_moy_t = $id_moy_t;
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

  public function getId_compagn()
  {
    return $this->id_compagn;
  }

  public function setId_compagn($id_compagn)
  {
      $this->id_compagn = $id_compagn;
  }

  }

?>
