<?php
class Cruiser
 extends OffensiveVessel {

  private $cannons = 6;


  function getTask($task) {
    return $this->task;
  }


}