<?php
ob_start();
$title = "RentASnow - Login";


?>

    <h1>LISTE DES SNOWBOARDS A LOUER</h1>


    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModal"
            data-whatever="@getbootstrap">Ajouter Snowboard
    </button>
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
                    <form action="index.php?action=addSnow" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">bigimage</label>
                            <input type="file" name="bigimage" class="form-control" placeholder="bigimage">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">smallimage</label>
                            <input type="file" name="smallimage" class="form-control" placeholder="smallimage">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">modele</label>
                            <input type="text" name="modele" class="form-control" placeholder="modele">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">marque</label>
                            <input type="text" name="marque" class="form-control" placeholder="marque">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">dateretour</label>
                            <input type="date" name="dateretour" class="form-control" placeholder="dateretour">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">disponible</label>
                            <input type="checkbox" name="disponible" class="form-control" placeholder="disponible">
                        </div>


                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                            <input type="submit" class="btn btn-primary" value="Creer" name="submitSnow"><!--  -->
                        </div>
                    </form>

                </div>

            </div>
        </div>
    </div>
    <div class="card-group">


<?php

foreach ($snows as $snow) { ?>

    <input type="hidden" name="id" value="<?php$snow['id']?>">
    <input type="image" src="view/images/<?=$snow['smallimage']?>" alt="Submit" height="100px">
    <h5><?= $snow['marque'] ?></h5>
    <span><?= date('d.M.Y', strtotime($snow['dateretour'])) ?></span>

<?php } ?>

<?php

$content = ob_get_clean();
require "gabarit.php";
?>