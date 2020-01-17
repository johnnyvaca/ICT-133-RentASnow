<?php
ob_start();
session_start();
$title = "RentASnow - Login";
?>
<?php
session_start();
?>
<form action="" method="get">
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
<?php
$content = ob_get_clean();
require "gabarit.php";
?>