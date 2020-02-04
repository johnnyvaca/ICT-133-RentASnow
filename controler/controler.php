<?php

require 'model/model.php';
function getHomePage()
{
    $news = getNews();
    require 'view/home.php';
}

function getLoginPage()
{
    require 'view/login.php';
}

function getSnowsPage()
{
    $snows = getSnows();
    require 'view/snows.php';
}

function getProfilPage()
{
    require 'view/profil.php';
}

function controlSession($email, $password)
{
    $users = getUsers();

    foreach ($users as $user) {
        if (password_verify($password, $user['password'])) {

            if ($email == $user['email']) {


                $_SESSION["id"] = $user['id'];
                $_SESSION["email"] = $user['email'];
                $_SESSION["lastName"] = $user['lastName'];
                $_SESSION["firstName"] = $user['firstName'];
                $_SESSION["birthDate"] = $user['birthDate'];


                require 'view/home.php';
                return;
            }
        }
    }
    require 'view/login.php';
}

function registerAccount($email, $password, $lastName, $firstName, $birthDate)
{
    $users = getUsers();
    $hash = password_hash($password, PASSWORD_DEFAULT);


    $index = 0;
    foreach ($users as $user) {
        $id = $user['id'];
        $tableau[$index] = $user;
        $index++;
        if ($email == $user['email']) {

            require "view/login.php";
            return;
        }
    }
    $id++;
    $tableau[$index] = ['id' => $id, 'email' => $email, 'password' => $hash, 'lastName' => $lastName, 'firstName' => $firstName, 'birthDate' => $birthDate];
    putUser($tableau);
    require "view/home.php";
}

function deleteAccount($email)
{
    $users = getUsers();
    foreach ($users as $i => $user) {
        if ($user['email'] == $email) {
            unset($users[$i]);
            deleteAccountModel($users);
            require 'view/home.php';
            return;
        }
    }
}

function uploadSnow($tmp_name, $name)
{
    $extention = strchr($name, ".");
    $extentionAllowed = array(".jpg", ".JPG", ".png", ".PNG");
    $destination = "view/images/" . $name;
    if (in_array($extention, $extentionAllowed)) {
        if (move_uploaded_file($tmp_name, $destination)) {
            require "view/home.php";
            return;
        }
    }
}

function addSnow($model, $marque, $nameBigImage, $nameSmallImage, $dateretour, $disponible)
{
    $snows = getSnows();
    $index = 0;
    foreach ($snows as $snow) {
        $id = $snow['id'];
        $tableau[$index] = $snow;
        $index++;
    }
    $id++;
    $tableau[$index] = ['id' => $id, 'model' => $model, 'marque' => $marque, 'bigimage' => $nameBigImage, 'smallimage' => $nameSmallImage, 'dateretour' => $dateretour, 'disponible' => $disponible];
    putSnow($tableau);
    require "view/snows.php";
}

function deconnect()
{
    unset($_SESSION);
    session_destroy();
}

function ActiveDeleteSnow()
{
    $snows = getSnows();
    require "view/snows.php";
}

function ActiveModifSnow()
{
    $snows = getSnows();
    require "view/modif.php";
}
function deleteSnow($snowsSelected)
{

    $snows = getSnows();
    foreach ($snows as $i => $snow) {
if(in_array($snow['id'],$snowsSelected)){
var_dump($snow['id']);
var_dump($snowsSelected);
    unset($snows[$i]);
    deleteSnowModel($snows);
}
    }
}

?>