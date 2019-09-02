<?php

use Doctrine\ORM\Mapping as ORM; 
/**
*  @ORM\Entity 
*/
class Location
{
    /**
    * @ORM\Id
    * @ORM\GeneratedValue
    * @ORM\Column(type="integer")
    */
    private $id;
    /**
    * 
    * @ORM\Column(type="datetime")
    */
    private $date_location;
    /**
    * 
    * @ORM\Column(type="string")
    */
    private $duree_location;
    /**
    * 
    * @ORM\Column(type="integer")
    */
    private $nb_location;
    /**
    * 
    * @ORM\ManyToOne(targetEntity=Client::class, inversedBy="id")
    */
    private $id_client;
    /**
    * 
    * @ORM\ManyToOne(targetEntity=Destination::class, inversedBy="id")
    */
    private $id_dest;
    /**
    * 
    * @ORM\ManyToOne(targetEntity=Vehicule::class, inversedBy="id")
    */
    private $id_vehicule;

    
    public function getId_location(){
        return $this->id_location;
    }
    public function getDate_location(){
        return $this->date_location;
    }
    public function getDuree_location(){
        return $this->duree_location;
    }
    public function getNb_location(){
        return $this->nb_location;
    }
    public function getCodeFactureL(){
        return $this->codeFactureL;
    }
    public function getId_client(){
        return $this->id_client;
    }
    public function getId_dest(){
        return $this->id_dest;
    }
    public function getId_vehicule(){
        return $this->id_veh;
    }
    
    public function setId_location($id_location){
        $this->id_location = $id_location;
    }
    public function setDate_location($date_location){
        $this->date_location = $date_location;
    }
    public function setDuree_location($duree_location){
        $this->duree_location = $duree_location;
    }
    public function setNb_location($nb_location){
        $this->nb_location = $nb_location;
    }
    public function setCodeFactureL($codeFactureL){
        $this->codeFactureL = $codeFactureL;
    }
    public function setId_client($id_client){
        $this->id_client = $id_client;
    }
    public function setId_dest($id_dest){
        $this->id_dest = $id_dest;
    }
    public function setId_vehicule($id_vehicule){
        $this->id_vehicule = $id_vehicule;
    }
  
}