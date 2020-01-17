<?php
/**
 * Created by Rent_a_Snow
 * Auteur : Arthur.BOURGUE
 * Date : 16 12 2019
 */

require "controler/controler.php";

if(isset($_GET['action'])){
    $action = $_GET['action'];
    switch ($action){
        case 'home':
            home();
            break;
        case 'login':
            login();
            break;
        case 'contact';
            contact();
            break;

        default :
            home();
    }
}else{
    home();
}
?>

