<?php

require_once '../connect1.php';

$name = $_POST['name'];
$price = $_POST['price'];

mysqli_query($connect, query: "INSERT INTO `admin` (`id_admin`, `name`, `Price`) VALUES (NULL, '$name', '$price')");

header ("Location: ../adminka.php");