<?php
class Vehiclefunc
{
    public $model;
    public $color;
    public $price;
    public function __construct($m,$c,$p)
    {
        $this->model=$m;
        $this->color=$c;
        $this->price=$p;
        // $this->getVehicleDetail();
    }
    public function getVehicleDetail()
    {
        echo $this->model."<br>".$this->color."<br>".$this->price;
    }
}
$obj1=new Vehiclefunc("Santro","Silver",1450000);
 $obj1->getVehicleDetail();
?>