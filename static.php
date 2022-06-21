<?php
 
 class Bike
 {
    public $cc,$vat;
    public function __construct($cc,$vat)
    {
        $this->cc=$cc;
        $this->vat=$vat;
    }
    public static function bikedetail($cc)
    {
        echo $cc;
    }
    public function displayDetail()
    {
        echo $this->cc;
        echo $this->vat;
    }
 }
 Bike::bikedetail(220);



?>