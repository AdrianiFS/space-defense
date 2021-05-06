<?php
require 'Autoloader.php'; 
Autoloader::register(); 


// var_dump(CommandShip::getMove(222));
// $vessel = new Destroyer();
// $pos = ['x'=> 12, 'y'=> 29];

//     var_dump("**********************". $vessel->setStartPosition($pos));



// Creating 50 positions, for each Vessel.
$randPos = [];
for ($i= 0; $i < 50; $i++)
{
    $x = rand(0, 100);
    $y = rand(0, 100);
    $position =  ['x'=> $x, 'y'=> $y];
    array_push($randPos, $position);
    // echo  $position['x'] . ' ' . $position['y'] . '<br> ' ;
}

// 25 vesseau chaque off et sout.
// 2 tableaux iterant 25 chaque 



 function offensiveVessels($randPos){
    
    $offensiveVessels = [];
    if(count($offensiveVessels) > 25){
    echo 'Plus de place';

    }else{
       var_dump(offensiveVesselBuilder(8, 8, 8, $randPos ));
    }
   
 }

 function offensiveVesselBuilder($i, $j, $k, $randPos ){

     if(($i + $j + $k) !== 24){
         echo "Erreur";
     }else{
         $listOffensiveVessel=[];

        //creation du Command (Singleton)

        $cmdShip = CommandShip::getInstance($randPos[0], "CommandShip");
        array_push($listOffensiveVessel, $cmdShip->getName(), $cmdShip->getStartPosition() .' <br>' );
        //creation des destroyers
       
        $d = 'Destroyer';
        for($i = 0; $i < 8; $i++){
        $destroyer  = new Destroyer($d . $i);
        $destroyer->setStartPosition($randPos[$i]);
        array_push($listOffensiveVessel, $destroyer->getName(),$destroyer->getStartPosition().' <br>' );
        }
        //creation des cruisers
        $b = 'Battleship';
        for($j = 0; $j < 8; $j++){
        $battleship  = new Battleship($b . $j);
        $battleship->setStartPosition($randPos[$j]);
        array_push($listOffensiveVessel, $battleship->getName() ,$battleship->getStartPosition().' <br>');
        }
        //creation des battleships
        $c = 'Cruiser';
        for($k= 0; $k< 8; $k++){
        $cruiser  = new Cruiser($c . $k);
        $cruiser->setStartPosition($randPos[$k]);
        array_push($listOffensiveVessel, $cruiser->getName() ,$cruiser->getStartPosition().' <br>');
        }
        // list of all offensive vessels 
        return $listOffensiveVessel;
     }
 
     
 }
 
 function supportVessels($nbr){
    $supportVessels = [];

}

$offFunction = offensiveVessels($randPos);
var_dump($offFunction);
?>


