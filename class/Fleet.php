<?php
class Fleet{
private $name;
private $vesselList = [];

public function __construct($name){
    $this->name = $name;
    $this->offensiveVessels();
    $this->supportVessels();
   
}

function offensiveVessels(){
    $offensiveVessels = $this->offensiveVesselBuilder(8, 8, 8 );
    if(count($offensiveVessels) > 25){
    echo 'Plus de place';
    }else{
    array_push($this->vesselList, $offensiveVessels);
    }
 }

/**
 * Creation of offensive vessels
 *
 * return  array
 */ 
function offensiveVesselBuilder($a, $b, $c ){

     if(($a + $b + $c) !== 24){
         echo "Erreur";
     }else{
         $listOffensiveVessel=[];
        
        //creation du Command (Singleton)
       
        $commandShip = CommandShip::getInstance(['x'=> rand(0, 100), 'y'=> rand(0, 100)], "CommandShip");
        $params =[$commandShip->getPosition()];
        array_push($listOffensiveVessel,  $params  );
      
        //creation des destroyers
        $destroyerName = '<i style="color:red">Destroyer</i>';
        for($i = 0; $i < $a; $i++){
        $destroyer  = new Destroyer($i . '-' . 'name: ' . $destroyerName);
        $destroyer->setStartPosition(['x'=> rand(0, 100), 'y'=> rand(0, 100)]);
        $params = [ $destroyer->getStartPosition()];
        array_push($listOffensiveVessel, $params);
    
        }
      
        //creation des cruisers
        $battleshipName = '<i style="color:blue">Battleship</i>';
        for($j = 0; $j < $b; $j++){
        $battleship  = new Battleship($battleshipName . $j);
        $battleship->setStartPosition(['x'=> rand(0, 100), 'y'=> rand(0, 100)]);
        $params = [ $battleship->getStartPosition()];
        array_push($listOffensiveVessel, $params);

        }

        //creation des battleships
        $cruiserName = '<i style="color:green">Cruiser</i>';
        for($k= 0; $k< $c; $k++){
        $cruiser  = new Cruiser($cruiserName . $k);
        $cruiser->setStartPosition(['x'=> rand(0, 100), 'y'=> rand(0, 100)]);
        $params = [$cruiser->getStartPosition()];
        array_push($listOffensiveVessel, $params );

        }

        // list of all offensive vessels 
        return $listOffensiveVessel;
     }
 }


 function supportVessels(){
    $supportVessels = $this->supportVesselsBuilder(8, 8, 9 );
    if(count($supportVessels) > 25){
    echo 'Plus de place';
    }else{
    array_push($this->vesselList, $supportVessels);
    }
 }

 /**
 * Creation of support vessels
 *
 * return  array
 */ 
function supportVesselsBuilder($a, $b, $c){
    $listSupportVessel=[];

        //creation des cargos
        $cargoName = '<i style="color:red">Cargo</i>';
        for($i = 0; $i < $a; $i++){
        $cargo  = new Cargo($i . '-'. 'name: ' .'mrdical', $cargoName);
        $cargo->setStartPosition(['x'=> rand(0, 100), 'y'=> rand(0, 100)]);
        $params = [ $cargo->getStartPosition()];
        array_push($listSupportVessel, $params);

        }
      
        //creation des cruisers
        $mechanicalAssistanceName = '<i style="color:blue">MecanicalAssistance</i>';
        for($j = 0; $j < $b; $j++){
        $mechanicalAssistance  = new MechanicalAssistance('mrdical',$mechanicalAssistanceName . $j);
        $mechanicalAssistance->setStartPosition(['x'=> rand(0, 100), 'y'=> rand(0, 100)]);
        $params = [ $mechanicalAssistance->getStartPosition()];
        array_push($listSupportVessel, $params);
 
        }

        //creation des battleships
        $refuelingName = '<i style="color:green">Cruiser</i>';
        for($k= 0; $k< $c; $k++){
        $refueling  = new Refueling('mrdical', $refuelingName . $k);
        $refueling->setStartPosition(['x'=> rand(0, 100), 'y'=> rand(0, 100)]);
        $params = [ $refueling->getStartPosition()];
        array_push($listSupportVessel, $params);

        }

        // list of all offensive vessels 
        return $listSupportVessel;
      
}
    
    

/**
 * Get the value of vesselList
 */ 
public function getVesselList()
{
return $this->vesselList;
}

/**
 * Set the value of vesselList
 *
 * @return  self
 */ 
public function setVesselList($vesselList)
{
$this->vesselList = $vesselList;

return $this;
}

/**
 * Get the value of name
 */ 
public function getName()
{
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
}
?>