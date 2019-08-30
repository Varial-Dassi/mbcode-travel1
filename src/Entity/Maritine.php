<?php

use Doctrine\ORM\Mapping as ORM; 
/**
*  @ORM\Entity 
*/
class Maritine
{
   /**
    * @ORM\Id
    * @ORM\GeneratedValue
    * @ORM\Column(type="integer")
    */
    protected $id_mar;
     /**
    * @ORM\Column(type="string")
    */
    protected $type;
     /**
    * @ORM\Column(type="string")
    */
    protected $capacite;
    /**
    * @ORM\ManyToOne(targetEntity=Moyen_transport::class)
    */
    protected $id_moy_t;
   
     
    public function getId_mar()
    {
      return $this->id_mar;
    }

    public function setId_mare($id_mar)
  {
      $this->id_mar = $id_mar;
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

  public function getId_moy_t()
  {
    return $this->id_moy_t;
  }

  public function setId_moy_t($id_moy_t)
  {
      $this->id_moy_t = $id_moy_t;
  }

  }

?>
