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
// Инициализация переменных
$discussion = '';
$id_car = filter_var($_POST["id_car"],FILTER_SANITIZE_STRING);
?>

<?php

// Формирование SQL-запроса
$sql = "SELECT * FROM comment";
// Выполнение запроса
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Вывод данных
    while ($row = $result->fetch_assoc()) {
        ?>
        <div class="list-discussion-element">
                            <h1 class="h1-for-comment"><?=$row['id_user']?></h1>
                            <textarea class="output-comment" disabled><?=$row['text_comment']?></textarea>
                        </div>
                                <?php
        }
                            } else {
        echo "<h1 class='label-carfinder'>Комментариев пока нет</h1>";
    }


// Закрытие соединения
$conn->close();
?>