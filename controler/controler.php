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

function registerAccount($email, $password,$lastName,$firstName,$birthDate)
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


    putUser($index,$id,$email,$hash,$lastName,$firstName,$birthDate,$tableau);


    require "view/home.php";


}

function deleteAccount($email){
    deleteAccountModel($email);
    require 'view/login.php';
}


function uploadSnow($tmp_name,$name){

    $extention = strchr($name,".");
    $extentionAllowed = array(".jpg",".JPG",".png",".PNG");
    $destination = "view/images/".$name;

    if(in_array($extention,$extentionAllowed)){
        if(move_uploaded_file($tmp_name,$destination)){
            require "view/home.php";
            return;
        }

    }
}
function addSnow($model,$marque,$nameBigImage,$nameSmallImage,$dateretour,$disponible){
    $snows = getSnows();
    $index = 0;

    foreach ($snows as $snow) {
        $id = $snow['id'];
        $tableau[$index] = $snow;
        $index++;
    }
    $id++;
    putSnow($index,$id,$model,$marque,$nameBigImage,$nameSmallImage,$dateretour,$disponible,$tableau);


    require "view/home.php";
}


?>