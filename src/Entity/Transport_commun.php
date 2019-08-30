<?php

use Doctrine\ORM\Mapping as ORM; 
/**
*  @ORM\Entity 
*/
class Transport_commun
{
   /**
    * @ORM\Id
    * @ORM\GeneratedValue
    * @ORM\Column(type="integer")
    */
    protected $id_tras;
     /**
    * @ORM\Column(type="string")
    */
    protected $nom;
     /**
    * @ORM\Column(type="string")
    */
    protected $capacite;
    /**
    * @ORM\ManyToOne(targetEntity=Compagnie_transport::class)
    */
    protected $id_compagn;
   
     
    public function getId_tras()
    {
      return $this->id_tras;
    }

    public function setId_tras($id_tras)
    {
        $this->id_tras = $id_tras;
    }

    public function getNom()
  {
    return $this->nom;
  }
  
  public function setNom_t($nom)
  {
      $this->nom = $nom;
  }

  public function getCapacite()
  {
    return $this->capacite;
  }
 
  public function setCapacite($capacite)
  {
      $this->capacite = $capacite;
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
