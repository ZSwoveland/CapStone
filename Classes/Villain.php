<?php 

Class Villain{
  
    public $name = "";
    public $health = 0;

    function Villain($x, $y){
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