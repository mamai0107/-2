<?php
session_start();
include "../connect.php";

if(isset($_POST['login'])) {
    $login = $_POST['login'];
    if($login === '') {
        unset($login);
    }
}
if(isset($_POST['password'])){
    $password = $_POST['password'];
    if($password === '') {
        unset($password);
    }
}


$login = trim($_POST['login']);
$password = trim($_POST['password']);
// $login = "$login";
// var_dump($login);
$check_user = "SELECT * FROM `user` WHERE `login` = '$login' AND `password` = '$password'";
$result = mysqli_query($connect, $check_user);

$info_user = mysqli_fetch_array($result);

if(empty($info_user['id_user'])) {
    $_SESSION['message'] = 'Неправильный логин или пароль!';
    header("location: ../index.php");
    
}

else {
    if($info_user['password'] === $password)
    {
        $_SESSION['login'] = $info_user['login'];
        $_SESSION['id_user'] = $info_user['id_user'];
        header("location: ../accessories.php");
    }
    else{
        $_SESSION['message'] = 'Неправильный пароль!';
        header("location: ../index.php");
    }
}
