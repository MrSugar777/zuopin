<?php

//conect
funtion conectDb($ip, $use, $pas, $dbName){
    $k = mysqli_connect($ip, $use, $pas, $dbName);
    return $k;
}


?>