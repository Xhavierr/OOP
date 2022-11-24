<?php
require_once 'animal.php';
class frog extends animal{
    private $Jump = "hop-hop";
    public function Jump(){
        echo $this->Jump;
    }
}
$kodok = new Frog("buduk");
echo "Frog Name:";echo $kodok-> name;echo "<br>";
echo "Frog Legs:";echo $kodok->legs;echo "<br>";
echo "Frog blooded:";echo $kodok->cold_blooded;echo "<br>";
echo "Frog Jump:";$kodok->Jump();echo "<br>";echo "<br>";
    // echo "Animal Legs:"; echo $sheep->legs ;echo "<br>"; // "shaun" echo $sheep->legs; // 4
    // echo "Animal Blood:";echo $sheep->cold_blooded; // "no"

?>