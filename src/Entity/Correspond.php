<?php

use Doctrine\ORM\Mapping as ORM; 
/**
*  @ORM\Entity 
*/
class Correspond
{
   /**
    * @ORM\Id
    * @ORM\GeneratedValue
    * @ORM\Column(type="integer")
    */
    protected $id;
  /**
    * @ORM\ManyToOne(targetEntity=Categorie::class, inversedBy="id")
    */
    protected $id_cat;
    /**
    * @ORM\ManyToOne(targetEntity=Tarif::class, inversedBy="id")
    */
    protected $id_tarif;
    
  public function getId()
  {
    return $this->id;
  }
    public function getId_cat()
    {
      return $this->id_cat;
    }

    public function setId_cat($id_cat)
  {
      $this->id_cat = $id_cat;
  }

    public function getId_tarif()
  {
    return $this->id_tarif;
  }

  public function setId_tarif($id_tarif)
  {
      $this->id_tarif = $id_tarif;
  }

   
  }

?>
