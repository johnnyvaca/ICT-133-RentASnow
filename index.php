<?php

session_start();
$username = "toto";
$_SESSION['username'] = $username;
echo "<a href='test.php'>test</a>";
echo "$_SESSION[$username]";


require "controler/controler.php";

home();

?>

