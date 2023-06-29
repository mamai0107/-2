<?php
session_start();
include "./connect.php";

// if (isset($_SESSION['ID_users'])) {
//     $IDuser = $_SESSION['ID_users'];
//     if ($IDuser === '') {
//         unset($IDuser);
//     }
// }
// if (isset($IDuser)) {
//     $query_access = "SELECT * FROM users, role WHERE ID_users = '$IDuser' AND users.ID_role = role.iD_role";
//     addslashes($query_access);
//     $res_access = mysqli_query($connect, $query_access);
//     $row_access = mysqli_fetch_object($res_access);
//     $roles = $row_access->name_role;
// } else {
//     $_SESSION['message'] = 'Доступ есть только у админов!';
//     header("location: ./index.php");
// }

if (isset($_GET['idA'])) {
    $playlist = $_GET['idA'];
}

if (isset($_POST['name'])) {
    $playlistname = $_POST['name'];
    if ($playlistname === '') {
        unset($playlistname);
    }
}

if (isset($_POST['price'])) {
    $playlistphoto = $_POST['price'];
    if ($playlistphoto === '') {
        unset($playlistphoto);
    }
}

$playlistname = trim($_POST['name']);
$playlistphoto = trim($_POST['price']);

$queryplaylist = "UPDATE `admin` SET `name` = '$playlistname', `price` = '$playlistphoto' WHERE id_admin = '$playlist'";
addslashes($queryplaylist);
$resCreateTrack = mysqli_query($connect, $queryplaylist) or die(mysqli_error($connect));

header("location: ./admin_panel.php");