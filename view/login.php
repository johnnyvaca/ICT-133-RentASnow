<?php

ob_start();

$title = "RentASnow - Login";
?>

<?php if (isset($_SESSION['login'])) {
    // style="pointer-events: none;"

    session_destroy();
    header('Location: http://localhost:800/index.php?action=home');
    exit();
    ?>

<?php } else { ?>

    <form action="index.php" method="post">
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
        <!--    <button class="btn btn-info">Creer votre compte</button> -->
        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModal"
                data-whatever="@getbootstrap">Creer un compte
        </button>

    </form>


    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Creation d'un compte</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="controler/comptes.php" method="post">
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">email</label>
                            <input type="email" name="newEmail" class="form-control" id="exampleInputEmail1"
                                   aria-describedby="emailHelp"
                                   placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="col-form-label">Mot de Passe</label>
                            <input type="password" name="newPassword" class="form-control" id="exampleInputPassword1"
                                   placeholder="Mot de passe">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                            <button type="submit" class="btn btn-primary">Creer</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
<?php } ?>

<?php


$content = ob_get_clean();
require "gabarit.php";
?>