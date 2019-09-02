<?php

use Doctrine\ORM\Mapping as ORM; 
/**
*  @ORM\Entity 
*/
class Chauffeur
{
   /**
    * @ORM\Id
    * @ORM\GeneratedValue
    * @ORM\Column(type="integer")
    */
<<<<<<< HEAD
    protected $id;
=======
    private $id_chauf;
>>>>>>> e692f6eb786a80e05e5dc82582c29de483f6c14b
     /**
    * @ORM\Column(type="string")
    */
    private $nom_chauf;

    public function getId_chauf(){
        return $this->id_chauf;
    }
    public function getNom_chauf(){
        return $this->nom_chauf;
    }

    public function setId_chauf($id_chauf){
        $this->id_chauf = $id_chauf;
   }
    public function setNom_chauf($nom_chauf){
        $this->nom_chauf = $nom_chauf;
   }
}