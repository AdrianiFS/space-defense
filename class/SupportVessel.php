<?php
class SupportVessel extends Vessel {

  
  function __construct($medicalUnit, $name) {
    $this->medicalUnit = $medicalUnit;

    /**
    * constructor heritage
    */
    parent::__construct($name);
  }


    /**
    * @return param
    */
   function getTask($task) {
    return $this->task;
  }


}
?>