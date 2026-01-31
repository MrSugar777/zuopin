<?php
session_start();

include("./facde/homeFacad.php");
include("./ulit/checkStatus.php");

$longinStatus = checkLogin();



showHome();




?>