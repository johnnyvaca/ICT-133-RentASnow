<?php
ob_start();
$title = "RentASnow - Login";


?>

    <h1>LISTE DES SNOWBOARDS A LOUER</h1>

    <div class="card-group">


<?php
var_dump($_SERVER['PHP_SELF']);
foreach ($snows as $snow) { ?>

    <?= htmlspecialchars($_SERVER['PHP_SELF'])?>
    <form method="post" action="index.php?action=snows">
        <input type="hidden" name="id" value="<?php //$snow['id'] ?>">
        <input type="image" src="view/images/<?= $snow['smallimage'] ?>" class="rounded-lg" data-toggle="modal"
               data-target="#exampleModal"
               data-whatever="@getbootstrap" alt="vide" name="submit">
    </form>




    <h5 class="card-title"><?= $snow['marque'] ?></h5>
    <br><br>
    <p class="card-text"><?= date('d.M.Y', strtotime($snow['dateretour'])) ?></p>


<?php }

?>
<!--
    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModal"
            data-whatever="@getbootstrap">Creer un compte
    </button>
-->
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
                            <!--   <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                            <button type="submit" class="btn btn-primary">Creer</button> -->
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
<?php

$content = ob_get_clean();
require "gabarit.php";
?>