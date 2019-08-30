<?php

use Doctrine\ORM\Mapping as ORM; 
/**
*  @ORM\Entity 
*/
class Moyen_transport{
   /**
    * @ORM\id_moy_t
    * @ORM\GeneratedValue
    * @ORM\Column(type="integer")
    */
    protected $id_moy_t;
     /**
    * @ORM\type_moy_t
    * @ORM\Column(type="string")
    */
    protected $type_moy_t;
     /**
    * @ORM\capacite_moy_t
    * @ORM\Column(type="string")
    */
    protected $capacite_moy_t;
     /**
    * @ORM\categorie_moy_t
    * @ORM\Column(type="string")
    */
    protected $categorie_moy_t;
    /**
    * @ORM\compagnie_moy_t
    * @ORM\Column(type="string")
    */
    protected $compagnie_moy_t;
    /**
    * @ORM\tel_moy_t
    * @ORM\Column(type="string")
    */
    protected $tel_moy_t;
     
    public function getId_moy_t(){
      return $this->id_moy_t;
    }
    public function getNom_moy_t(){
    return $this->nom_moy_t;
    }
    public function getPrenom_moy_t(){
      return $this->prenom_moy_t;
    }
    public function getEmail_moy_t(){
      return $this->email_moy_t;
    }
    public function getTel_moy_t(){
      return $this->tel_moy_t;
    }


    public function setId_moy_t($id_moy_t){
      $this->id_moy_t = $id_moy_t;
    }
    public function setNom_moy_t($nom_moy_t){
      $this->nom_moy_t = $nom_moy_t;
    }
    public function setPrenom_moy_t($prenom_moy_t){
      $this->prenom_moy_t = $prenom_moy_t;
    }
    public function setEmail_moy_t($email_moy_t){
      $this->email_moy_t = $email_moy_t;
    }
    public function setTel_moy_t($tel_moy_t){
      $this->tel_moy_t = $tel_moy_t;
    }


  }


