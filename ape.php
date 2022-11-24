<?php
require_once 'animal.php';
class ape extends animal{
    private $Yell = "Auooo";
    public function Yell(){
        echo $this->Yell;
    }
}
$sungokong = new Ape("Kera Sakti");
echo "Ape Name:";echo $sungokong-> name;echo "<br>";
echo "Ape Legs:";echo $sungokong->legs;echo "<br>";
echo "Ape blooded:";echo $sungokong->cold_blooded;echo "<br>";
echo "Ape Yell:";$sungokong->Yell();echo "<br>";echo "<br>";
    // echo "Animal Legs:"; echo $sheep->legs ;echo "<br>"; // "shaun" echo $sheep->legs; // 4
    // echo "Animal Blood:";echo $sheep->cold_blooded; // "no"

?>