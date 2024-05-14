<?php
include "db.php";
$id_user = filter_var(trim($_COOKIE['id_user']),FILTER_SANITIZE_STRING);
$mysql = new mysqli("site", "root", "", "carfinder");

echo "
        <link rel='stylesheet' href='css/style.css'>

              <body class='body_check'>
            <div class='div_check'>
              <p>ПОДОЖДИТЕ.. ВЫПОЛНЯЕТСЯ ВХОД В АККАУНТ</p>
            <img src='img/6.gif'>
        </div>
      </body>";
              header('Refresh: 4; URL=index.php');
    exit();
?>