<?php

use Doctrine\ORM\Mapping as ORM; 
/**
*  @ORM\Entity 
*/
class Categorie
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
    protected $nom;


    
    public function getId_cat(){
      return $this->id_cat;
    }
    public function getNom(){
    return $this->nom;
  }

  public function setId_cat($id_cat){
    $this->id_cat = $id_cat;
}
  public function setNom($nom){
        $this->nom = $nom;
    }

   
  }

?>
