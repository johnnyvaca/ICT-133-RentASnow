<?php
require 'model/model.php';
function getHomePage()
{
    $news = getNews();
    require_once 'view/home.php';
}

function getLoginPage()
{
    require_once 'view/login.php';
}

function getSnowsPage()
{
    $snows = getSnows();
    require_once 'view/snows.php';
}

function getProfilPage()
{
    require_once 'view/profil.php';
}

function session($email,$password,$login)
{

    $users = getUsers();
    $try = 0;
    foreach ($users as $user) {
        if (password_verify($password, $user['password'])) {

            if ($email == $user['email']) {
             $_SESSION["login"] = $user;
                require_once 'view/snows.php';
            }
        }
        $try++;
    }
    if ($try == count($users)) {
        require_once 'view/login.php';

    }
}

?>