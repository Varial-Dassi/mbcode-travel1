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
    protected $id_compagn;
     /**
    * @ORM\Column(type="string")
    */
    protected $nom;
    

    public function getId_compagn()
    {
      return $this->id_compagn;
    }

    public function setId_compagn($id_compagn)
    {
        $this->id_compagn = $id_compagn;
    }

    public function getNom()
  {
    return $this->nom;
  }

  public function setNom($nom)
  {
      $this->nom = $nom;
  }

   
  }

?>
