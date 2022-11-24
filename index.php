<?php
    require_once 'animal.php';
    $sheep = new Animal("shaun");
    echo "Animal Name:";echo $sheep->name;echo "<br>";
    echo "Animal Legs:"; echo $sheep->legs ;echo "<br>"; // "shaun" echo $sheep->legs; // 4
    echo "Animal Blood:";echo $sheep->cold_blooded;echo "<br>";echo "<br>"; // "no"

    require_once 'frog.php';
    require_once 'ape.php';



?>