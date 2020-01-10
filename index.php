<?php

session_start();
$username = "toto";
$_SESSION['username'] = $username;

require "controler/controler.php";

?>

