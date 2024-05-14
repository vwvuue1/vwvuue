<?php
include "db.php";

  $id_user = filter_var(trim($_COOKIE['id_user']),FILTER_SANITIZE_STRING);
 
  $mysql = new mysqli("site", "root", "", "carfinder");
  setcookie('id_user', $user['id_user'], time() - 3600, "/");
  echo "
  <link rel='stylesheet' href='css/style.css'>

        <body class='body_check'>
      <div class='div_check'>
        <p>ПОДОЖДИТЕ! ВЫПОЛНЯЕТСЯ ВЫХОД ИЗ АККАУНТА</p>
      <img src='img/6.gif'>
  </div>
</body>";
      header('Refresh: 2; URL=auto.php');
      exit();
?>