<?php
class Vessel {
  
private $startPosition = ['x'=> 0, 'y' => 0];
private $endPosition = ['x'=> 0, 'y' => 0];
private $name = "";

public function __construct($name  ){
  $this->name = $name;
}

/**
 * @param
 */ 
public static function getMoveOrder($coord){

  }

/**
 * Get the value of startPosition
 */ 
public function getStartPosition(){

return $this->startPosition;
}

/**
 * Set the value of startPosition
 *
 * @return  self
 */ 
public function setStartPosition($startPosition){
  if($startPosition['x'] >= 0 && $startPosition['x'] <= 100 ){
    if($startPosition['y'] >= 0 && $startPosition['y'] <= 100 ){
      $this->startPosition = $startPosition;
      return $startPosition;
    }else{
      echo 'Erreur Position Y choisi:'. $startPosition['y'];
      echo 'La valeur Y doit etre comprise entre 0 et 100';
    }
  }else{
    echo 'Erreur Position X choisi:'. $startPosition['x'];
    echo 'La valeur X doit etre comprise entre 0 et 100';
  }

}

/**
 * Get the value of name
 */ 
public function getName(){
return $this->name;
}

/**
 * Set the value of name
 *
 * @return  self
 */ 
public function setName($name)
{
$this->name = $name;

return $this;
}

/**
 * Get the value of endPosition
 */ 
public function getEndPosition()
{
return $this->endPosition;
}

/**
 * Set the value of endPosition
 *
 * @return  self
 */ 
public function setEndPosition($endPosition)
{
$this->endPosition = $endPosition;

return $this;
}
}
?>