<?php
require_once 'model/model.php';
$action = $_GET['action'];
switch ($action){
    case "home":
        fnHome();
        break;
    case "login":
        fnLogin();
        break;
    case "snows":
        fnSnows();
        break;
    default:
        fnHome();



}
function fnHome()
{
    $news = getNews();
    require_once 'view/home.php';
}
function fnLogin()
{
    require_once 'view/login.php';
}
function fnSnows()
{
    require_once 'view/snows.php';
}
?>
