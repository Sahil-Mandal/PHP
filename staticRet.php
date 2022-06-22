<?php
class Food
{
    public $price,$taste;
    public function __construct($price,$taste)
    {
        $this->price=$price;
        $this->taste=$taste;
        echo "Taste is".$taste." "."And"." "."Price is".$price;
    }
    public static function foodInfo($price,$taste)
    {
        return new static($price,$taste);

    }
    public function deliveryInfo()
    {
        echo "\nDelivery within valley";
    }
}
$obj1=Food::foodInfo(120,"Good");
$obj1->deliveryInfo();
?>