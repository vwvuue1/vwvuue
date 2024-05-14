<?php
  $login = filter_var(trim($_POST['login']),
  FILTER_SANITIZE_STRING);
  $password = filter_var(trim($_POST['password']),
  FILTER_SANITIZE_STRING);


    $mysql = new mysqli('site','root','','carfinder');


  $result = $mysql->query("SELECT * FROM `user` WHERE `login` = '$login' AND `password` = '$password'");

  $user = $result->fetch_assoc();

  if(!empty($user) == 0) {
    echo "
        <link rel='stylesheet' href='css/style.css'>

              <body class='body_check'>
            <div class='div_check'>
              <p>НЕВЕРНЫЙ НОМЕР ТЕЛЕФОНА ИЛИ ПАРОЛЬ</p>
            <img src='img/6.gif'>
        </div>
      </body>";
    header('Refresh: 2; URL=auto.php');
    exit();
  }

  setcookie('id_user', $user['id_user'], time() + 3600, "/");


    $mysql->close();
    header('Refresh: 4; URL=wait.php');
    
 ?>