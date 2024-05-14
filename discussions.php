<?php
// Подключение к базе данных
$servername = "site";
$username = "root";
$password = "";
$dbname = "carfinder";

// Создаем соединение
$conn = new mysqli($servername, $username, $password, $dbname);

// Проверяем соединение
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Получаем id темы из параметра запроса
$id_discus = isset($_GET['id']) ? intval($_GET['id']) : 0;

// Инициализация переменной для данных темы
$row = [];

// Если id машины указан, выполняем запрос к базе данных
if ($id_discus > 0) {
    $stmt = $conn->prepare("SELECT * FROM discussions WHERE id_discussions = ?");
    $stmt->bind_param("i", $id_discus);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    } else {
        echo "Тема не найдена";
    }

    $stmt->close();
}

// Закрываем соединение
$conn->close();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <title>DISCUSSION</title>
</head>

<body>



    <?php include 'templates/header.php'?>

    <main>
        <div class="color-grey">
            <div class="main-discussion">
                <div class="container2">
                    <h1 class="h1-up">ОБСУЖДЕНИЯ</h1>
                    <!--РАЗДЕЛ 1-->
                    <div class="">
                        <form class="form-discussion" method="POST" action="comment.php">
                        <input type="hidden" value="<?=$row['id_discussions']?>" name="id_discussions" id="id_discussions" >
                            <textarea placeholder="ВВЕДИТЕ ВАШ КОММЕНТАРИЙ" class="paste-comment" name="text_comment"
                                id="text_comment"></textarea>
                            <input type="hidden" value="s">
                            <button class="cta" type="submit" onclick="alert('Отзыв отправлен')">
                                <span>ОТПРАВИТЬ</span>
                                <svg viewBox="0 0 13 10" height="10px" width="15px">
                                    <path d="M1,5 L11,5"></path>
                                    <polyline points="8 1 12 5 8 9"></polyline>
                                </svg></button>
                        </form>
                    </div>
                    <h1 class="h1-bold">ВСЕ КОММЕНТАРИИ ДАННОЙ ТЕМЫ</h1>
                    <!--РАЗДЕЛ 2-->
                    <list class="list-discussion">
                    <?php include 'commentfind.php'?>
                        
                    </list>
                </div>
            </div>
        </div>
    </main>

    <!--ФУТЕР-->
    <?php include 'templates/footer.php'?>
    <!---------------------------------------------->

</body>

</html>