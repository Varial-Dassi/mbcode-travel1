<?php
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM; 
/**
*  @ORM\Entity 
*/
class Destination
{
   /**
    * @ORM\Id
    * @ORM\GeneratedValue
    * @ORM\Column(type="integer")
    */
    protected $id;
     /**
    * 
    * @ORM\Column(type="string")
    */
    private $pays_dest;
     /**
    * 
    * @ORM\Column(type="string")
    */
    private $ville_dest;

    public function getId_dest(){
      return $this->id_dest;
    }
    public function getPays_dest(){
      return $this->pays_dest;
    }
    public function getVille_dest(){
      return $this->ville_dest;
    }
  

    public function setId_dest($id_dest){
      $this->id_dest = $id_dest;
    }
    public function setPays_dest($pays_dest){
      $this->pays_dest = $pays_dest;
    }
    public function setVille_dest($ville_dest){
      $this->ville_dest = $ville_dest;
    }
}
?>
