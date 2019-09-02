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
<<<<<<< HEAD
    protected $id;
=======
    protected $id_cat;
>>>>>>> e692f6eb786a80e05e5dc82582c29de483f6c14b
     /**
    * @ORM\Column(type="string")
    */
    protected $nom;
<<<<<<< HEAD


=======
>>>>>>> e692f6eb786a80e05e5dc82582c29de483f6c14b
    
    public function getId_cat(){
      return $this->id_cat;
    }
    public function getNom(){
    return $this->nom;
  }

  public function setId_cat($id_cat){
<<<<<<< HEAD
    $this->id_cat = $id_cat;
=======
    $this->id_cat = $id_client;
>>>>>>> e692f6eb786a80e05e5dc82582c29de483f6c14b
}
  public function setNom($nom){
        $this->nom = $nom;
    }

   
  }

?>
