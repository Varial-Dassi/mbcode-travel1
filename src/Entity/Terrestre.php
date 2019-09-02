<?php

use Doctrine\ORM\Mapping as ORM; 
<<<<<<< HEAD
/**
*  @ORM\Entity 
*/
class Terrestre
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
    protected $type;
     /**
    * @ORM\Column(type="string")
    */
    protected $capacite;
    /**
    * @ORM\ManyToOne(targetEntity=Moyen_transport::class, inversedBy="id")
    */
    protected $id_moy_t;
   
     
    public function getId_ter()
    {
      return $this->id_ter;
    }

    public function setId_ter($id_ter)
  {
      $this->id_ter = $id_ter;
  }

    public function getType()
  {
    return $this->type;
  }

  public function setType_compagn($type)
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
=======

/**
*  @ORM\Entity 
*  @ORM\InheritanceType("JOINED")
*  @ORM\DiscriminatorColumn(name="id_moy_t", type="integer")
*/
class Terrestre extends Moyen_transport
{
  
    
}

>>>>>>> e692f6eb786a80e05e5dc82582c29de483f6c14b
