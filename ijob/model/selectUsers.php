<?php

include("./config/db.php");
include("./ulit/db.php");

//select
fuction getUseInfoByName(){
    $link = conectDb(DB_IP, DB_USER, DB_PAS, DB_NAME);
    if($link==false){
        return false;
    }
    $sql = "selet name from users where email= '".$_SESSION['email']."'";
    $res = mysqli_query($link, $sql);
    $row = mysqli_fetch_assoc($res);

    return $row["name"];
}






?>