<?php

require_once 'connect1.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>admin</title>
</head>
<style>
    th, td {
        padding: 10px;
    }

    th {
        background: #aaaaaa;
    }

    td {
        background: #888;
    }
</style>
<body>
    <table>
        <tr>
           <th>ID</th>
           <th>name</th>
           <th>Price</th>  
        </tr>
        <?php
        $dresses = mysqli_query($connect, query: "SELECT * FROM `admin`");
        $dresses = mysqli_fetch_all($dresses);
        foreach ($dresses as $dresses) {
            ?>
            <tr>
                <td><?= $dresses[0]?></td>
                <td><?= $dresses[1]?></td>
                <td><?= $dresses[2]?></td>
                <td><a href="update.php?id=<?=$dresses[0] ?>">Update</a></td>
                <td><a style="color:crimson;" href="./vendor/delete.php ?>">Delete</a></td>
            </tr>
            <?php
        }
       ?>
    </table>
        <h3>Add</h3>
        <form action="vendor/create.php" method="post">
            <p>Name</p>
            <input type="text" name="name">
            <p>Price</p>
            <input type="number" name="price"> <br> <br>
            <button type="submit">Add</button>
        </form>
</body>
</html>
