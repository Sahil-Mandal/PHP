<?php
 class Place
 {
    public $place;

    public function __construct($name){
        $this->place = $name;
        echo $this->place;
    }

    public function setPlace($name) {
        $this->place = $name;
      
    
    }

    public function getPlace()
    {
       echo $this->place;
    }

    

 }

 $obj = new Place("Kathmandu");

 
?>