<?php

require "controler/controler.php";
$action = $_GET['action'];



session_start();


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
    case "sessionVerify":
        $password = $_POST['password'];
        $email = $_POST['email'];
        controlSession($email,$password);
        break;
    case "registerAccount":
        $addEmail = $_POST['addEmail'];
        $addPassword = $_POST['addPassword'];
        regiterAccount($addEmail,$addPassword);
        break;

    default:
        getHomePage();
}
?>