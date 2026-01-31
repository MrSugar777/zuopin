<?php



function checkLogin(){
    if(isset($_SESSION['email']){
        return true;
    }else{
        return false;
    }
}


?>