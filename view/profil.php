<?php
ob_start();
$title = "RentASnow - Login";
?>

<h1>PROFIL</h1>
<?php
$content = ob_get_clean();
require "gabarit.php";
?>
