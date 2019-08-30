<?php

use Doctrine\ORM\Mapping as ORM; 
/**
*  @ORM\Entity 
*/
class Client{
    /**
    * @ORM\Id
    * @ORM\GeneratedValue
    * @ORM\Column(type="integer")
    */
    private $id_client;
     /**
    * 
    * @ORM\Column(type="string")
    */
    private $nom_client;
     /**
    * 
    * @ORM\Column(type="string")
    */
    private $prenom_client;
     /**
    * 
    * @ORM\Column(type="string")
    */
    private $email_client;
     /**
    * 
    * @ORM\Column(type="string")
    */
    private $telephone_client;
     /**
    * 
    * @ORM\Column(type="string")
    */
    private $nationalite_client;

    public function getId_client(){
      return $this->id_client;
    }
    public function getNom_client(){
      return $this->nom_client;
    }
    public function getPrenom_client(){
      return $this->prenom_client;
    }
    public function getEmail_client(){
      return $this->email_client;
    }
    public function getTelephone_client(){
      return $this->telephone_client;
    }
    public function getNationalite_client(){
      return $this->nationalite_client;
    }

    public function setId_client($id_client){
      $this->id_client = $id_client;
    }
    public function setNom_client($nom_client){
      $this->nom_client = $nom_client;
    }
    public function setPrenom_client($prenom_client){
      $this->prenom_client = $prenom_client;
    }
    public function setEmail_client($email_client){
      $this->email_client = $email_client;
    }
    public function setTelephone_client($telephone_client){
      $this->telephone_client = $telephone_client;
    }
    public function setNationalite_client($nationalite_client){
      $this->nationalite_client = $nationalite_client;
    }

  }

?>
