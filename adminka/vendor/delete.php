<?php

require_once '../connect1.php';

$dresses_id = $_GET['id_admin'];
$name = $_POST['name'];
$price = $_POST['Price'];

mysqli_query($connect, query:"DELETE FROM `admin` WHERE `id_admin` = '$dresses_id'");

header ("Location: ../adminka.php");