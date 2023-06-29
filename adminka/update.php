<?php

    require_once 'connect1.php';

    $dresses_id = $_GET['id'];
    $dresses = mysqli_query($connect, query:"SELECT * FROM `admin` WHERE id_admin = '$dresses_id'");
    $dresses = mysqli_fetch_assoc($dresses);
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update</title>
</head>
<body>
<h3>Update</h3>
        <form action="./vendor/uuuupdate.php" method="post">
            <p>Name</p>
            <input type="text" name="name" value="<?=$dresses['name'] ?>">
            <p>Price</p>
            <input type="number" name="Price" value="<?=$dresses['Price'] ?>"> <br> <br>
            <button type="submit">Update</button>
        </form>
</body>
</html>


