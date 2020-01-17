<?php
session_start();
$username = "toto";
$_SESSION['email'] = $email;
require "controler/controler.php";
$action = $_GET['action'];
switch ($action){
    case "home":
        getHomePage();
        break;
    case "login":
        getLoginPage();
        break;
    case "snows":
        getSnowsPage();
        break;
    case "profil":
        getProfilPage();
        break;
    default:
        getHomePage();
}
?>