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
        <button class="btn btn-info">Creer votre compte</button>
    </form>

    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">Open modal for @getbootstrap</button>

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Recipient:</label>
                            <input type="text" class="form-control" id="recipient-name">
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="col-form-label">Message:</label>
                            <textarea class="form-control" id="message-text"></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Send message</button>
                </div>
            </div>
        </div>
    </div>
<?php  }  ?>

<?php



$content = ob_get_clean();
require "gabarit.php";
?>