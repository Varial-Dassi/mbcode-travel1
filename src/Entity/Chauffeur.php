<?php

use Doctrine\ORM\Mapping as ORM; 
/**
*  @ORM\Entity 
*/
class Chauffeur
{
   /**
    * @ORM\id_chauf
    * @ORM\GeneratedValue
    * @ORM\Column(type="integer")
    */
    private $id_chauf;
     /**
    * @ORM\nom_chauf
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