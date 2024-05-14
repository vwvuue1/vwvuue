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

// Проверка наличия куки 'id_user'
if (isset($_COOKIE['id_user'])) {
    $id_user = filter_var(trim($_COOKIE['id_user']), FILTER_VALIDATE_INT);
    $id_discussions = filter_var(trim($_POST["id_discussions"]), FILTER_SANITIZE_STRING);
    $text_comment = filter_var($_POST["text_comment"], FILTER_SANITIZE_STRING);

    // Выполнение запроса только, если куки установлены
    $result = mysqli_query($conn, "INSERT INTO `comment` (id_discussions, id_user, text_comment) VALUES ('$id_discussions', '$id_user', '$text_comment')");

    if ($result) {
        header("Refresh: 0.5; URL=discussions.php?id=" . htmlspecialchars($id_discussions));
        exit();
    } else {
        echo "Error: " . mysqli_error($conn);
    }
} else {
    // Обработка случая, когда куки не установлены
    echo "
    <link rel='stylesheet' href='css/style.css'>

          <body class='body_check'>
        <div class='div_check'>
          <p>Комментарий не отвправлен, так как пользователь не вошел в систему!</p>
        <img src='img/6.gif'>
    </div>
  </body>";
    header("Refresh: 2; URL=discussions.php?id=" . htmlspecialchars($id_discussions));
    exit();
}

mysqli_close($conn);
?>
