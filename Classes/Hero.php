<?php 

Class Hero{
  
    public $name = "";
    public $health = 0;

    function Hero($x, $y){
        $this->name = $x;
        $this->health = $y;
    }

    public function setName($x){
        $this->name=$x;
    }
    public function getName(){
        return $name;
    }

}



?>