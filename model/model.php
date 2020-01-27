<?php

function getNews()
{
    return json_decode(file_get_contents("model/dataStorage/news.json"), true);
}

function getSnows()
{
    return json_decode(file_get_contents("model/dataStorage/Snows.json"), true);
}

function getUsers()
{
    return json_decode(file_get_contents("model/dataStorage/Comptes.json"), true);
}

function putUser($tableau)
{

    $file = 'model/dataStorage/Comptes.json';
    $json_string = json_encode($tableau);
    file_put_contents($file, $json_string);
}

function putSnow($tableau)
{
    $file = 'model/dataStorage/Snows.json';
    $json_string = json_encode($tableau);
    file_put_contents($file, $json_string);
}

function deleteAccountModel($users)
{
   file_put_contents("model/dataStorage/Comptes.json", json_encode($users));
}
function deleteSnowModel($snows)
{
    file_put_contents("model/dataStorage/Snows.json", json_encode($snows));
}



?>