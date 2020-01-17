<?php
ob_start();
$title = "RentASnow - Login";
?>
<?PHP
$email = $_GET["email"];
$password = $_GET["password"];
?>
<h1><?=$email?></h1>
<br>
<h1><?=$password?></h1>
<?php
$content = ob_get_clean();
require "gabarit.php";
?>
