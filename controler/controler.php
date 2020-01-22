<?php
require 'model/model.php';
function getHomePage()
{
    $news = getNews();
    require_once 'view/home.php';
}
function getLoginPage()
{
    $users = getUsers();
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
function putUserPage()
{
    putUser();
    require_once 'view/profil.php';
}

?>