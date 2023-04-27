<?php

session_start();

if(empty($_POST["email"]) || empty($_POST["password"])){
	header('Location: ' . $_SERVER['HTTP_REFERER']);
	exit();
}


$emailN = $_POST['email'];
$passW = $_POST['password'];
$userlist = file ('login.txt');
foreach ($userlist as $user) {
    $user_details = explode('|', $user);
    if ($user_details[0] == $emailN && $user_details[1] == $passW) {
       $_SESSION["email"] = $emailN;
        break;
    }
}
header('Location: index.php');




?>