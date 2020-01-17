<?php
/**
 * Created by Rent_a_Snow
 * Auteur : Arthur.BOURGUE
 * Date : 16 12 2019
 */

/** function to redirect the user to the home page
 * (depending the action received by the index)
**/
function home(){
    $_GET['action'] = "home";
    require "view/home.php";
}


/** function to redirect the user to the login page
 * (depending the action received by the index)
 **/
function login(){
    $_GET['action'] = "login";
    require "view/login.php";
}
?>