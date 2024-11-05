<?php
class car{
    public $model="";

    public function setModel($newval){
        $this->model = $newval;
    }
    public function getModel(){
        return "The car model is " .$this->model. "<br>";
    }
}

class compact extends car{
    private $seat = "0";
    public function setSeat($newval){
        $this->seat = $newval;
    }
    public function getSeat(){
        return "Number of seats is " .$this->seat. "<br>";
    }
}

class mpv extends car{
    private $minSeat = "0";
    private $maxSeat = "0";
    public function setSeat($min,$max){
        $this->minSeat = $min;
        $this->maxSeat = $max;
    }
    public function getSeat(){
        return "Number of seats is between " .$this->minSeat. " and " .$this->maxSeat. "<br>";
    }
}

$car1 = new compact();
$car1->setModel("Toyota");
echo $car1->getModel();
$car1->setSeat("4");
echo $car1->getSeat();

$car2 = new mpv();
$car2->setModel("Honda");
echo $car2->getModel();
$car2->setSeat("6","8");
echo $car2->getSeat();
?>