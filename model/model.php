<?php

function getNews()
{
    return json_decode(file_get_contents("model/dataStorage/news.json"),true);
}
function getSnows()
{
    return json_decode(file_get_contents("model/dataStorage/Snows.json"),true);
}
function getUsers(){

    return json_decode(file_get_contents("model/dataStorage/Comptes.json"), true);
}
function putUser($index,$id,$email,$hash,$lastName,$firstName,$birthDate,$tableau){
    $tableau[$index] = ['id' => $id, 'email' => $email, 'password' => $hash, 'lastName' => $lastName, 'firstName' => $firstName, 'birthDate' => $birthDate];
    $file = 'model/dataStorage/Comptes.json';
    $json_string = json_encode($tableau);
    file_put_contents($file, $json_string);
}
function putSnow($index,$id,$model,$marque,$nameBigImage,$nameSmallImage,$dateretour,$disponible,$tableau){

    $tableau[$index] = ['id' => $id, 'model' => $model, 'marque' => $marque, 'bigimage' => $nameBigImage, 'smallimage' => $nameSmallImage, 'dateretour' => $dateretour,'disponible'=> $disponible];
    $file = 'model/dataStorage/Snows.json';
    $json_string = json_encode($tableau);
    file_put_contents($file, $json_string);
}

function deleteAccountModel($email)
{
    $users = getUsers();
    foreach ($users as $i => $user) {
        if ($user['email'] == $email) {
            unset($users[$i]);
            file_put_contents("model/dataStorage/Comptes.json", json_encode($users));
            return;
        }


    }

}
function deconnect(){
    unset($_SESSION);
   session_destroy();
}

?>