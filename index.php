<?php
session_start();




require "controler/controler.php";
$action = $_GET['action'];



switch ($action) {
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
        controlSession($email, $password);
        break;
    case "registerAccount":
        $addLastname = $_POST['addLastname'];
        $addFirstname = $_POST['addFirstname'];
        $addBirthDate = $_POST['addBirthDate'];
        $addEmail = $_POST['addEmail'];
        $addPassword = $_POST['addPassword'];

        registerAccount($addEmail, $addPassword, $addLastname, $addFirstname, $addBirthDate);
        break;
    case "addSnow":
        if (!empty($_FILES['smallimage'])) {

            $tmp_name = $_FILES['smallimage']['tmp_name'];
            $name = $_FILES['smallimage']['name'];
            $nameSmallImage = $name;
            uploadSnow($tmp_name, $name);
        }
        if (!empty($_FILES['bigimage'])) {

            $tmp_name = $_FILES['bigimage']['tmp_name'];
            $name = $_FILES['bigimage']['name'];
            $nameBigImage = $name;
            uploadSnow($tmp_name, $name);
        }

        $model = $_POST['modele'];
        $marque = $_POST['marque'];
        $dateretour = $_POST['dateretour'];
        $disponible = $_POST['disponible'];
        addSnow($model, $marque, $nameBigImage, $nameSmallImage, $dateretour, $disponible);

        break;
    case "deconnect":
        deconnect();
        require "view/home.php";
        break;
    case 'deleteAccount':
        $email = $_SESSION['email'];
        deleteAccount($email);

        break;
    case "ActiveDeleteSnow":
        ActiveDeleteSnow();
        break;
    case "ActiveModifSnow":
        ActiveModifSnow();
        break;
    case "deleteSnow":
        $snowsSelected =  $_POST['snowsSelected'];

        deleteSnow($snowsSelected);
        break;

    default:
        getHomePage();
}
?>