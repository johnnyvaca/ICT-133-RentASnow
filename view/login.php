<?php

ob_start();

$title = "RentASnow - Login";
?>

<?php if (isset($_SESSION['email'])) {
    session_destroy();
    require "index.php";
    ?>
<?php } else { ?>

    <form action="index.php?action=sessionVerify" method="post">

        <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <input type="email" name="email" class="form-control" aria-describedby="emailHelp"
                   placeholder="Email">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Mot de Passe</label>
            <input type="password" name="password" class="form-control"
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
                    <form action="index.php?action=registerAccount" method="post">
                        <div class="form-group">
                            <label for="nom">Nom</label>
                            <input type="text" name="addLastname" class="form-control"
                                   placeholder="Nom">
                        </div>
                        <div class="form-group">
                            <label for="prenom">Prenom</label>
                            <input type="text" name="addFirstname" class="form-control"
                                   placeholder="Prenom">
                        </div>
                        <div class="form-group">
                            <label for="nom">date de naissance</label>
                            <input type="date" name="addBirthDate" class="form-control"
                                   placeholder="Date de naissance">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">email</label>
                            <input type="email" name="addEmail" class="form-control" id="exampleInputEmail1"
                                   aria-describedby="emailHelp"
                                   placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="col-form-label">Mot de Passe</label>
                            <input type="password" name="addPassword" class="form-control" id="exampleInputPassword1"
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