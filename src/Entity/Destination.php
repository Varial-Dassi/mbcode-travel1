<?php

use Doctrine\ORM\Mapping as ORM; 
/**
*  @ORM\Entity 
*/
class Destination
{
   /**
    * @ORM\Id
    * @ORM\GeneratedValue
    * @ORM\Column(type="integer")
    */
    protected $id_des;
     /**
    * @ORM\Column(type="string")
    */
    protected $pays;
     /**
    * @ORM\Column(type="string")
    */
    protected $ville;

    public function getId_des()
    {
      return $this->id_des;
    }

    public function setId_des($id_des)
    {
        $this->id_des = $id_des;
    }

    public function getPays()
  {
    return $this->pays;
  }

  public function setPays($pays)
  {
      $this->pays = $pays;
  }

    public function getVille()
  {
    return $this->ville;
  }
 
  public function setVille($ville)
  {
      $this->ville = $ville;
  }

  }

?>
