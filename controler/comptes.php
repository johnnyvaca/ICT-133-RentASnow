<?php

$mail = $_POST['newEmail'];
$pass = $_POST['newPassword'];


$tab = json_decode(file_get_contents("model/dataStorage/comptes.json"), true);
var_dump($tab);

//header('Location: http://localhost:800/index.php?action=home');
//exit();
//$tab[] = ["id" => 11, "modele" => "Carrel", "marque" => "CPNV", "bigimage" => "B101.jpg", "smallimage" => "B101_small.jpg", "dateretour" => "", "disponible" => true];
//file_put_contents('Snows.json', json_encode($tab));


?>