<?php

ob_start();
session_start();
$title = "RentASnow - Login";
?>

<?php if(isset($_SESSION['login'])){
    // style="pointer-events: none;"

    session_destroy();
    header('Location: http://localhost:800/index.php?action=home');
    exit();
    ?>

<?php }else{?>

    <form action="controler/session.php" method="post">
        <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                   placeholder="Email">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Mot de Passe</label>
            <input type="password" name="password" class="form-control" id="exampleInputPassword1"
                   placeholder="Mot de passe">
        </div>
        <button type="submit" class="btn btn-primary">Se Connecter</button>
    </form>


<?php  }  ?>

<?php



$content = ob_get_clean();
require "gabarit.php";
?>