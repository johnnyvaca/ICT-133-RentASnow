<?php
session_start();
require "controler/controler.php";
$action = $_GET['action'];

var_dump($_SESSION);




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

        $email = $_POST['email'];
        $password = $_POST['password'];
        controlSession($email,$password);
        break;
    case "registerAccount":
        $addLastname = $_POST['addLastname'];
        $addFirstname = $_POST['addFirstname'];
        $addBirthDate = $_POST['addBirthDate'];
        $addEmail = $_POST['addEmail'];
        $addPassword = $_POST['addPassword'];

        regiterAccount($addEmail,$addPassword,$addLastname,$addFirstname,$addBirthDate);
        break;

    default:
        getHomePage();
}
?>