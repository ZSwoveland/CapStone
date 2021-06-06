<?php 

Class Users{
  
    public $fname = "";
    public $lname = "";
    public $bDate = 0;
    public $email = "";
    public $uname = "";
    public $password = "";
    public $country = "";

    function Users($first,$last,$date,$email,$user,$pass,$c){
        $this->fname = $first;
        $this->lname = $last;
        $this->bDate = $date;
        $this->email = $email;
        $this->uname = $user;
        $this->password = $pass;
        $this->country = $c;

    }



}



?>