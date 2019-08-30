<?php

use Doctrine\ORM\Mapping as ORM; 
/**
*  @ORM\Entity 
*/
class Societe_location
{
   /**
    * @ORM\id_soc_loc
    * @ORM\GeneratedValue
    * @ORM\Column(type="integer")
    */
    private $id_soc_loc;
     /**
    * @ORM\nom_soc_loc
    * @ORM\Column(type="string")
    */
    private $nom_soc_loc;

    public function getId_soc_loc(){
        return $this->id_soc_loc;
    }
    public function getNom_soc_loc(){
        return $this->nom_soc_loc;
    }

    public function setId_soc_loc($id_soc_loc){
        $this->id_soc_loc = $id_soc_loc;
    }
    public function setNom_soc_loc($nom_soc_loc){
        $this->nom_soc_loc = $nom_soc_loc;
    }

}