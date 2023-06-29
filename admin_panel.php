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
    <title>админ вывод</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style-admin.css">
</head>

<body>
<!-- 
<header>
        <div class="admin-container">
            <ul class="main-menu-panel">
                <li class="main-menu_item"><a href="./index-panel.php" class="main-menu__link"><img src="./images/svg/logo_green.svg" alt="logo_purple" class="logo_purple"></a></li>
                <li class="main-menu-panel_item"><a href="./track-panel.php" class="menu-item-panel">Трек</a></li>
                <li class="main-menu-panel_item"><a href="./playlists-panel.php" class="menu-item-panel">Плейлисты</a></li>
                <li class="main-menu-panel_item"><a href="./musicians-panel.php" class="menu-item-panel">Музыканты</a></li>
                <li class="main-menu-panel_item"><a href="./albums-panel.php" class="menu-item-panel admin-menu-pressed">Альбомы</a></li>
                <li class="main-menu-panel_item"><a href="./users-panel.php" class="menu-item-panel">Пользователи</a></li>
                <li class="main-menu-panel_item"><a href="./genre-panel.php" class="menu-item-panel">Жанр</a></li>
                <li class="main-menu-panel_item"><a href="./favorite-panel.php" class="menu-item-panel">Любимое</a></li>
                <li class="main-menu-panel_item"><a href="./adding_to_a_playlist-panel.php" class="menu-item-panel">Добавление в плейлист</a></li>
                <li class="main-menu-panel_item"><a href="./adding_in_favorite-panel.php" class="menu-item-panel">Добавление в любимое</a></li>
                <li class="main-menu-panel_item"><a href="./adding_in_album-panel.php" class="menu-item-panel">Добавление в альбом</a></li>
            </ul>
        </div>
        <hr>
    </header> -->
    <nav class="navbar fixed-top navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Добро пожаловать</a>
  </div>
</nav>

    <div class="div-title-admin">
        <div class="admin-container">
            <div class="add-btn-divs">
                <div class="div-title-admin">
                    <h1 class="title-admin">Админ</h1>
                </div>
                <div class="btn_add">
                    <a href="./create_admin.php">Добавить запись</a>
                </div>
            </div>
        </div>
    </div>

    <div class="table">
        <div class="admin-container">
            <div class="table_row title">
                <div class="table_sell id">
                    <p class="admin_table_cell_first">ID</p>
                </div>
                <div class="table_sell">
                    <p class="admin_table_cell-text margin-admin-user-table">Наименование</p>
                </div>
                <div class="table_sell">
                    <p class="admin_table_cell-text margin-admin-user-table">Цена</p>
                </div>
            </div>
        </div>
    </div>

    <?php
    if (isset($_GET['id_admin'])) {
        $albumsD = $_GET['id_admin'];
        $qDeletealbums= "DELETE FROM `admin` WHERE id_admin='$albumsD'";
        addslashes($qDeletealbums);
        $resDeletealbums = mysqli_query($connect, $qDeletealbums) or die(mysqli_error($connect));
    }

$qInfoAlbums = "SELECT * FROM `admin`";
    addslashes($qInfoAlbums);
    $resInfoAlbums = mysqli_query($connect, $qInfoAlbums) or die(mysqli_error($connect));
    while ($InfoAlbums = mysqli_fetch_object($resInfoAlbums)) {
        echo "
    <div class=\"body-table\">
        <div class=\"admin-container\">
            <div class=\"admin_table_row\">
                <div class=\"admin_table_cell_first admin_projects_table_id\">
                    <p>$InfoAlbums->id_admin</p>
                </div>
                <div class=\"admin_table_cell admin_projects_table_name\">
                    <p class=\"admin_table_cell-text margin-admin-user-table\">$InfoAlbums->name</p>
                </div>
                <div class=\"admin_table_cell admin_projects_table_name\">
                    <p class=\"admin_table_cell-text margin-admin-user-table\">$InfoAlbums->Price</p>
                </div>
                <div class=\"admin_projects_table_act\">
                    <a href=\"edit_admin.php?idA=$InfoAlbums->id_admin\">изменить</a>
                <a href=\"?id_admin=$InfoAlbums->id_admin\">Удалить</a>
            </div>
        </div>
    </div>
";
    }
    ?>

</body>

</html>