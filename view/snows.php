<?php
ob_start();
$title = "RentASnow - Login";
?>
<h1>LISTE DES SNOWBOARDS A LOUER</h1>

<div class="card-group">
<?php

for ($i = 0; $i <4; $i++) {
    ?>  <img src="images/B101.jpg" class="card-img-top" alt="PAS D'IMAGE">
        <div class="card">

            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
        </div>
    <?php
}

?></div>
<?php
$content = ob_get_clean();
require "gabarit.php";
?>