<?php
class SupportVessel extends Vessel {

  

  function __construct($medicalUnit) {
    $this->medicalUnit = $medicalUnit;
  }

   function getTask($task) {
    return $this->task;
  }


}
?>