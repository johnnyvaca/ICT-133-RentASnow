<?php
ob_start();
$title = "RentASnow - Login";
?>

<h1>SUPPRIMER</h1>
<br>
<form method="post" action="index.php?action=deleteSnow">
    <?php
    foreach ($snows as $snow) { ?>
        <input type="image" src="view/images/<?= $snow['smallimage'] ?>" alt="Submit" height="100px">
        <h5><?= $snow['marque'] ?></h5>
        <span><?= date('d.M.Y', strtotime($snow['dateretour'])) ?></span>


    <?php } ?>
    <button type="submit">modif</button>
</form>
<?php
$content = ob_get_clean();
require "gabarit.php";
?>