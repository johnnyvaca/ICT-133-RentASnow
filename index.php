<?php
session_start();
require "controler/controler.php";
$password = $_POST['password'];
$email = $_POST['email'];
$login = $_SESSION["login"];
if(isset($email)){
    session($email,$password,$login);
}

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