<?php

use Doctrine\ORM\Mapping as ORM; 
/**
*  @ORM\Entity 
*/
class Conduit
{
  /**
    * @ORM\ManyToOne(targetEntity=Chauffeur::class)
    */
    protected $id_chauf;
   /**
    * @ORM\ManyToOne(targetEntity=Vehicule::class)
    */
    protected $id_veh;
    

    public function getId_chauf()
    {
      return $this->id_chauf;
    }

    public function setId_chauf($id_chauf)
    {
        $this->id_chauf = $id_chauf;
    }

    public function getId_veh()
  {
    return $this->id_veh;
  }

  public function setId_veh($id_veh)
  {
      $this->id_veh = $id_veh;
  }
   
  }

?>
