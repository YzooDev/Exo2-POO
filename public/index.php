<?php 


include '../src/Entity/House.php';


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $myHouse = new House("mine", 10, 10, 2);
        echo "<p>la surface de {$myHouse->getHouseName()} est égale à : {$myHouse->surface()}m2 </p>";
    ?>
</body>
</html>