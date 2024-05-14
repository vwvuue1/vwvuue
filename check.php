<?php
$servername = "site";
$database = "carfinder";
$username = "root";
$password = "";
// Создаем соединение
$conn = mysqli_connect($servername, $username, $password, $database);
// Проверяем соединение
if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
}
$login = filter_var(trim($_POST['login']),FILTER_SANITIZE_STRING); 
$name = filter_var(trim($_POST['name']),FILTER_SANITIZE_STRING);
$password = filter_var(trim($_POST['password']),FILTER_SANITIZE_STRING); 

$mysql = new mysqli('site','root','','carfinder');

    $result = $mysql->query("SELECT login FROM `user` WHERE login = '$login'");
    
    if (mysqli_num_rows($result) > 0)
    {
        echo "
        <link rel='stylesheet' href='css/style.css'>

              <body class='body_check'>
            <div class='div_check'>
              <p>ПРОФИЛЬ С ТАКИМИ ДАННЫМИ УЖЕ СУЩЕСТВУЕТ</p>
            <img src='img/6.gif'>
        </div>
      </body>";
            header('Refresh: 2; URL=reg.php');
            exit();
    }
    else
    {
        $mysql->query("INSERT INTO `user` (name,login,password) VALUES ('$name','$login','$password')");
        echo "
        <link rel='stylesheet' href='css/style.css'>

              <body class='body_check'>
            <div class='div_check'>
              <p>РЕГИСТРАЦИЯ ПРОШЛА УСПЕШНО</p>
            <img src='img/6.gif'>
        </div>
      </body>";
              header('Refresh: 3; URL=auto.php');
    exit();
    }

?>