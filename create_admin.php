<?php
session_start();

include "./connect.php";

// if (isset($_SESSION['ID_users'])) {
//   $IDuser = $_SESSION['ID_users'];
//   if ($IDuser === '') {
//     unset($IDuser);
//   }
// }
//     if (isset($IDuser)) {
//       $query_access = "SELECT * FROM users, role WHERE ID_users = '$IDuser' AND users.ID_role = role.iD_role";
//       addslashes($query_access);
//       $res_access = mysqli_query($connect, $query_access);
//       $row_access = mysqli_fetch_object($res_access);
//       $roles = $row_access->name_role;
//     } 
//     else {
//       $_SESSION['message'] = 'Доступ есть только у админов!';
//       header("location: ./index.php");
//     }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Админ добавление</title>
    <link rel="stylesheet" href="./css/style-admin.css">
</head>

<body>
    <div class="track_create">
        <div class="wrapper-container">
            <div class="form-content">
                <div class="div-ebassol-and-close">
                    <div class="div-create_title">
                        <a class="create_title">Добавление</a>
                    </div>
                    <div class="div-close-img div-close-btn-reg">
                        <a href="./admin_panel.php" class="close-img">Вернуться</a>
                    </div>
                </div>
                <form class="table_add" action="./create_admin_handler.php" method="post">
                    <div class="table_add_row">
                        <div class="div-input_form-login">
                            <input type="text" class="input_form-email" name="name" placeholder="Имя" required>
                        </div>
                        <div class="div-input_form-login">
                            <input type="text" class="input_form-email" name="price" placeholder="Цена" required>
                        </div>
                    </div>
            </div>
            <div class="button-panel">
                <input type="submit" class="submit" value="Добавить">
            </div>
            </form>
        </div>
    </div>
    </div>

</body>

</html>