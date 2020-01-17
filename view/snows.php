<?php
ob_start();
$title = "RentASnow - Login";
?>


<h1>LISTE DES SNOWBOARDS A LOUER</h1>

<div class="card-group">
<?php
    ?>


            <?php
    foreach ($snows as $snow) { ?>
        <img src="view/images/<?= $snow['smallimage'] ?>"  class="card-img-top" alt="PAS D'IMAGE" height="10px" width="40px">
        <div class="card" id="carte">

                <div class="card-body">
                    <h5 class="card-title"><?= $snow['marque'] ?></h5>
                    <p class="card-text"><?= date('d.M.Y', strtotime($snow['dateretour'])) ?></p>
                </div> </div>
        <br>
            <?php } ?>




    <?php


?></div>
<?php
$content = ob_get_clean();
require "gabarit.php";
?>