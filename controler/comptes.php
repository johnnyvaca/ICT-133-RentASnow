<?php


$email = $_POST['newEmail'];
$password = $_POST['newPassword'];
$hash = password_hash($password, PASSWORD_DEFAULT);
$file = '../model/dataStorage/Comptes.json';
$users = json_decode(file_get_contents($file), true);
$long = count($users);
$index = 0;
foreach ($users as $user) {
    $id = $user['id'];
    $arr_client[$index] = $user;
    $index++;


    if ($email == $user['email']) {
        header('Location: http://localhost:800/index.php?action=login');
        exit();
    }
}

$id++;
$arr_client[$index] = ['id' => $id, 'email' => $email, 'password' => $hash];
$json_string = json_encode($arr_client);

file_put_contents($file, $json_string);


header('Location: http://localhost:800/index.php?action=home');
exit();


?>