<?php
/**
 * Created by Rent_a_Snow
 * Auteur : Arthur.BOURGUE
 * Date : 06 01 2020
 */
// tampon de flux stocké en mémoire
ob_start();
$titre = "Rent a Snow - Login";
?>

<div>
    <h4>username :</h4>
    <form>
        <input type="text" name="username" required>

    <h4>Password :</h4>

        <input type="password" name="password" required>
        <br>
        <input type="submit" name="login">
        <input type="reset" name="reset" value="Reset" >
    </form>
</div>

<?php
$content = ob_get_clean();
require "gabarit.php";


?>
