<?php
<<<<<<< HEAD
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM; 
/**
*  @ORM\Entity 
* @ORM\Table(
*       name="client", 
*         indexes={ 
*          @ORM\Index(name="search_nom_client", columns={"nom_client"}),
*           @ORM\Index(name="search_prenom_client", columns={"prenom_client"}),
*           @ORM\Index(name="search_email_client", columns={"email_client"}),
*           @ORM\Index(name="search_telephone_client", columns={"telephone_client"}),
*           @ORM\Index(name="search_nationalite_client", columns={"nationalite_client"})
*           } 
*           ) 
=======

use Doctrine\ORM\Mapping as ORM; 
/**
*  @ORM\Entity 
>>>>>>> e692f6eb786a80e05e5dc82582c29de483f6c14b
*/
class Client{
    /**
    * @ORM\Id
    * @ORM\GeneratedValue
    * @ORM\Column(type="integer")
    */
<<<<<<< HEAD
    private $id;
=======
    private $id_client;
>>>>>>> e692f6eb786a80e05e5dc82582c29de483f6c14b
     /**
    * 
    * @ORM\Column(type="string")
    */
<<<<<<< HEAD
    public $nom_client;
=======
    private $nom_client;
>>>>>>> e692f6eb786a80e05e5dc82582c29de483f6c14b
     /**
    * 
    * @ORM\Column(type="string")
    */
<<<<<<< HEAD
    public $prenom_client;
=======
    private $prenom_client;
>>>>>>> e692f6eb786a80e05e5dc82582c29de483f6c14b
     /**
    * 
    * @ORM\Column(type="string")
    */
<<<<<<< HEAD
    public $email_client;
=======
    private $email_client;
>>>>>>> e692f6eb786a80e05e5dc82582c29de483f6c14b
     /**
    * 
    * @ORM\Column(type="string")
    */
<<<<<<< HEAD
    public $telephone_client;
=======
    private $telephone_client;
>>>>>>> e692f6eb786a80e05e5dc82582c29de483f6c14b
     /**
    * 
    * @ORM\Column(type="string")
    */
<<<<<<< HEAD
    public $nationalite_client;

    public function getId_client(){
      return $this->id;
=======
    private $nationalite_client;

    public function getId_client(){
      return $this->id_client;
>>>>>>> e692f6eb786a80e05e5dc82582c29de483f6c14b
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
<<<<<<< HEAD
      $this->id = $id_client;
=======
      $this->id_client = $id_client;
>>>>>>> e692f6eb786a80e05e5dc82582c29de483f6c14b
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
<<<<<<< HEAD
    
    public function __toString(){ 
      $format = "Client (id: %s, nom_client: %s, prenom_client: %s, email_client: %s, telephone_client: %s,
      nationalite_client: %s)\n"; 
      return sprintf($format, $this->id, $this->nom_client, $this->prenom_client, $this->email_client,
      $this->telephone_client, $this->nationalite_client); 
  }
   
=======

>>>>>>> e692f6eb786a80e05e5dc82582c29de483f6c14b
  }

?>
