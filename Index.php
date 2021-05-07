<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="mainContainer">
        

<?php
require 'Autoloader.php'; 
Autoloader::register(); 
static $color = 'rgba(200, 0, 0, 0.000)';
$fleetA = new Fleet('Fleet A');
$ambush = false;




if($ambush){
  
    $fleetListVessel = $fleetA->getVesselList();
    // print_r( $fleetListVessel[0][0]);

    for($i = 0; $i < count($fleetListVessel[1]); $i++){
    print_r($fleetListVessel[1][$i]);
    }

}else{

    $fleetListVessel = $fleetA->getVesselList();

    $allVessels = [];
    
    for($i = 0; $i < count($fleetListVessel[0]); $i++){
    array_push($allVessels, $fleetListVessel[0][$i]);
    }
    for($i = 0; $i < count($fleetListVessel[1]); $i++){
        array_push($allVessels, $fleetListVessel[1][$i]);
    }
 
    for($y = 1; $y <= 100; ++$y ) {
        for($x = 1; $x <= 100; ++$x ) {
    for($i= 0; $i < count($allVessels); ++$i ) {
        $xValues = $allVessels[$i][0]['x'];
        $yValues = $allVessels[$i][0]['y'];

       

           if($xValues == $x and $yValues == $y) {
                $color = 'rgba(200, 0, 0, 0.800)';
                // var_dump($color);
                break;
            } else {
                $color = 'rgba(200, 0, 0, 0.000)';
              
            }
    }
            echo "<div class='block' style=\"background-color:${color};\"></div>";
        }
    }
}

?>
    </div>

</body>
</html>


