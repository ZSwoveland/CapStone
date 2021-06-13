<?php 

require_once('ConnectDB.php');
require_once('../Classes/Users.php');

function checkLogin($u,$p, $dbu, $dbp){
    $dbu = UserNamesql($u, $p);
    $dbp = Passsql($u, $p);
    
    if($u == $dbu && $p == $dbp){
       echo "Login Successful";
    }
    else{
        echo "Login Fail";
    }
    
}

function UserNamesql($u, $p){
    $sql = "SELECT Username FROM Users where Username = '$u' and Password = '$p'";
    $result = Connect()->query($sql);
    
    return $result;
}

function Passsql($u, $p){
    $sql = "SELECT Password FROM Users where Username = '$u' and Password = '$p'";
    $result = Connect()->query($sql);
    
    return $result;
}



?>