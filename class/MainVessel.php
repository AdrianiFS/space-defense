<?php
class mainVessel {
  
private $startPosition = ['x'=> 0, 'y' => 0];
private $name = "";
private $typr=["type2", 'type2'];
private static $typeOfVessel = array("OffensiveVesssels" => 0, "SupportVessels" => 1);

public function __construct($name ){
  $this->name = $name;
}

  public static function getMove($coord){
    return $coord;
  }

/**
 * Get the value of startPosition
 */ 
public function getStartPosition()
{
return $this->startPosition;
}

}
?>