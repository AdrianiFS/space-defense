<?php
class OffensiveVessel extends Vessel {

  function __construct($cannons) {
    $this->cannons = $cannons;
  }

  function attack() {
    return $this->coord;
  }

  function defense() {
    return $this->coord;
  }
  
}
?>