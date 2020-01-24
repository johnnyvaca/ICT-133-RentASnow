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
                $_SESSION["login"] = $email;
                require 'view/home.php';
                return;
            }
        }
    }
    require 'view/login.php';
}

function regiterAccount($email, $password)
{
    $users = getUsers();
    $hash = password_hash($password, PASSWORD_DEFAULT);
    $file = 'model/dataStorage/Comptes.json';

    $long = count($users);
    $index = 0;
    foreach ($users as $user) {
        $id = $user['id'];
        $arr_client[$index] = $user;
        $index++;


        if ($email == $user['email']) {
            require "view/login.php";
        }
    }

    $id++;
    $arr_client[$index] = ['id' => $id, 'email' => $email, 'password' => $hash];
    $json_string = json_encode($arr_client);
    file_put_contents($file, $json_string);
    require "view/profil.php";


}

?>