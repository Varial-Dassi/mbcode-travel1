<?php
# src\Entity\Client.php

namespace Entity;
use Doctrine\ORM\Mapping as ORM; 
/**
*  @ORM\Entity 
* @ORM\Table(name="Client")
*/
class Client
{
   /**
    * @ORM\Id
    * @ORM\GeneratedValue
    * @ORM\Column(type="integer")
    */
    protected $id_client;
     /**
    * @ORM\Column(type="string")
    */
    protected $nom;
     /**
    * @ORM\Column(type="string")
    */
    protected $prenom;
     /**
    * @ORM\Column(type="string")
    */
    protected $email;
     /**
    * @ORM\Column(type="string")
    */
    protected $telephone;
     /**
    * @ORM\Column(type="string")
    */
    protected $nationalite;

    public function getId_client()
    {
      return $this->id_client;
    }

    public function setId_client($Id_client)
    {
        $this->Id_client = $Id_client;
    }

    public function getNom()
  {
    return $this->nom;
  }

  public function setNom($nom)
  {
      $this->nom = $nom;
  }
  
  public function getPrenom()
  {
    return $this->prenom;
  }

  public function setPrenom($Prenom)
  {
      $this->Prenom = $Prenom;
  }
  
  public function getEmail()
  {
    return $this->email;
  }

  public function setEmail($email)
  {
      $this->email = $email;
  }

  public function getTelephone()
  {
    return $this->telephone;
  }

  public function setTelephone($telephone)
  {
      $this->telephone = $telephone;
  }

  public function getNationalite()
  {
    return $this->nationalite;
  }

  public function setNationalite($Nationalite)
  {
      $this->Nationalite = $Nationalite;
  }

  }

?>
