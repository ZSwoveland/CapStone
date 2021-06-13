<?php 
require_once('ConnectDB.php');
require_once('../Classes/Users.php');


function insertsql($f,$l,$bd,$e,$u,$p,$c){
    $sql = "INSERT INTO `users`(`FirstName`, `LastName`, `BirthDate`, `EmailAddress`, `UserName`, `Password`, `Country`) VALUES ('$f','$l','$bd','$e','$u','$p','$c')";
    $result = Connect()->query($sql);
    
    return $result;
}




?>