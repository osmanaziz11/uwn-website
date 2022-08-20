<?php 

include_once "../server/constants.php";
session_start();
session_unset();
session_destroy();
header('Location:'.constant("hostname")."Login.php");

?>