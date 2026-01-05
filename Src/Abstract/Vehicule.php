<?php
namespace App\Abstract;
abstract class vehicule
{
    private $id;
    private $vehicule;

    public function getId()
    {
        return $this->id;
    }
 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    public function getVehicule()
    {
        return $this->vehicule;
    }
 
    public function setVehicule($vehicule)
    {
        $this->vehicule = $vehicule;

        return $this;
    }
}