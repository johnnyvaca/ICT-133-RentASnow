<?php
session_start();
require "controler/controler.php";
$action = $_GET['action'];
$password = $_POST['password'];
$email = $_POST['email'];


$addEmail = $_POST['addEmail'];
$addPassword = $_POST['addPassword'];
if(isset($email)){
 $okey =   controlSession($email,$password);
 if ($okey == true){
     $_SESSION["login"] = $email;
 }
}
if(isset($addEmail)){
    account($addEmail,$addPassword);
}
if(isset($_SESSION["login"])){

}
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