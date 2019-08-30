<?php

use Doctrine\ORM\Mapping as ORM; 
/**
*  @ORM\Entity 
*/
class Correspond
{
  /**
    * @ORM\ManyToOne(targetEntity=Categorie::class)
    */
    protected $id_cat;
    /**
    * @ORM\ManyToOne(targetEntity=Tarif::class)
    */
    protected $id_tarif;
    

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
