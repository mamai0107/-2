<?php

require_once '../connect1.php';
$dresses_id = $GET['id_admin'];
$name = $_POST['name'];
$price = $_POST['Price'];


mysqli_query($connect, query: "UPDATE `admin` SET `name` = '$name', `Price` = '$price' WHERE `admin`.`id_admin` = '$dresses_id'");
header("Location: ../adminka.php");
