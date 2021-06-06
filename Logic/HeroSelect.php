<?php 
require_once('ConnectDB.php');

Class HeroSelect{
//Creates a connection the search the DB
public function selectFromDB($Name){
    
    $sql = "SELECT Health FROM Heroes where HeroName = '$Name'";
    $result = Connect()->query($sql);

    return $result;
}
//Inserts where the Hero HP is needed
public function HeroHP($Name){
    if(selectFromDB($Name) != NULL){
        return selectFromDB($Name);
    }
    else{
        return "Error has Occurred check Database";
    }
} 

//Gets the Hero Name from Buttons of the WebPage
public function HeroSelection($name){
    

    return $name;
}}
?>