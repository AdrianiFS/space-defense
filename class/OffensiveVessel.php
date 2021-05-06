<?php
class OffensiveVessel extends Vessel {
 private $cannons;

  // function __construct($cannons) {
  //   $this->cannons = $cannons;
  // }

  function attack() {
    return $this->coord;
  }

  function defense() {
    return $this->coord;
  }
  

    /**
     * Get the value of cannons
     */ 
    public function getCannons()
    {
        return $this->cannons;
    }

    /**
     * Set the value of cannons
     *
     * @return  self
     */ 
    public function setCannons($cannons)
    {
        $this->cannons = $cannons;

        return $this;
    }
}
?>