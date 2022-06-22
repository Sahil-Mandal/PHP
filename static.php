<?php
 
 class Bike
 {
    public $cc,$vat;
    public function __construct($cc,$vat)
    {
        $this->cc=$cc;
        $this->vat=$vat;
    }
    public static function bikedetail($cc, $vat)
    {
        return new static($cc,$vat);
    }
    public function displayDetail()
    {
        echo $this->cc;
        echo $this->vat;
    }
 }
 $bike =  Bike::bikedetail(23,34);
 $bike->displayDetail();

?>