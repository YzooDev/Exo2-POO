<?php

    include ("src/Entity/Vehicle.php");

    $car = new Vehicle("Mercedes CLK", 4, 250);

    $moto = new Vehicle("Honda CBR", 2, 280);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>
        <?php 
            echo "Le vehicule ".$car->getVehicleName()." est une : ".$car->detect()."<br>";
            echo "Le vehicule ".$moto->getVehicleName()." est une : ".$moto->detect()."<br>";
            $car->boost();
            echo "La nouvelle vitesse de ".$car->getVehicleName()." est de : ".$car->getSpeed()."km/h <br>";
            echo $car->fastest($moto) . "<br>";
        ?>
    </main>
</body>
</html>