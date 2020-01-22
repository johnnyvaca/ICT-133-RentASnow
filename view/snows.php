<?php
ob_start();
$title = "RentASnow - Login";
?>


<h1>LISTE DES SNOWBOARDS A LOUER</h1>

<div class="card-group">


            <?php
    foreach ($snows as $snow) { ?>
           <img src="view/images/<?= $snow['smallimage'] ?>" alt="..." class="rounded-lg">
        <!--   <img src=""  class="card-img-top" alt="PAS D'IMAGE" height="10px" width="40px">-->

                    <h5 class="card-title"><?= $snow['marque'] ?></h5>
                    <br><br>
                    <p class="card-text"><?= date('d.M.Y', strtotime($snow['dateretour'])) ?></p>


            <?php } ?>

<?php
$content = ob_get_clean();
require "gabarit.php";
?>