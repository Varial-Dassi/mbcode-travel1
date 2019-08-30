<?php

use Doctrine\ORM\Mapping as ORM; 
/**
*  @ORM\Entity 
*/
class Type_tarif
{
   /**
    * @ORM\Id
    * @ORM\GeneratedValue
    * @ORM\Column(type="integer")
    */
    protected $id_type_tar;
     /**
    * @ORM\Column(type="string")
    */
    protected $designation;
    

    public function getId_type_tar()
    {
      return $this->id_type_tar;
    }

    public function setId_type_tar($id_type_tar)
  {
      $this->id_type_tar = $id_type_tar;
  }

    public function getDesignation()
  {
    return $this->designation;
  }

  public function setDesignation($designation)
  {
      $this->designation = $designation;
  }

   
  }

?>
