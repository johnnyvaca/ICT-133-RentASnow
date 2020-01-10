<?php
ob_start();
$title = "RentASnow - Login";
?>
<?php
session_start();
?>
    <form>
        <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
       <!--     <small id="emailHelp" class="form-text text-muted">We\'ll never share your email with anyone else.</small> -->
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Mot de Passe</label>
            <input type="password" class="form-control" id="exampleInputPassword1">
        </div>
        <button type="submit" class="btn btn-primary">Se Connecter</button>
    </form>
<?php
$content = ob_get_clean();
require "gabarit.php";
?>