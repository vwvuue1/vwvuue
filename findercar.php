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
$drive_car = $bodytype = $transmission = $wheel = '';

// Проверка, был ли запрос отправлен методом POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Получаем значения из POST-запроса
    $drive_car = $_POST['drive_car'] ?? '';
    $bodytype = $_POST['bodytype'] ?? '';
    $transmission = $_POST['transmission'] ?? '';
    $wheel = $_POST['wheel'] ?? '';

    ?>
<div class="container2 carfinder-main-part2">
    <!-- РАЗДЕЛ 3 -->
    <h1 class="h1-bold ">НАЙДЕНО</h1>
    <?php

    // Формирование SQL-запроса
    $sql = "SELECT * FROM car";
    $conditions = array();

    if (!empty($drive_car)) {
        $conditions[] = "drive = '$drive_car'";
    }
    if (!empty($bodytype)) {
        $conditions[] = "bodytype = '$bodytype'";
    }
    if (!empty($transmission)) {
        $conditions[] = "transmission = '$transmission'";
    }
    if (!empty($wheel)) {
        $conditions[] = "wheel = '$wheel'";
    }

    // Добавление условий к запросу, если они есть
    if (!empty($conditions)) {
        $sql .= " WHERE " . implode(' AND ', $conditions);
    }

    // Выполнение запроса
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Вывод данных
        while ($row = $result->fetch_assoc()) {
            ?>
    <div class="div-list-carfinder">
    <img src="<?=$row['newcar']?>" class="example-img">
        <div class="example-div-text">
            <h1 class="example-h1"><?=$row['brand']?> <?=$row['model']?></h1>
            <div class="example-div-text-p">
            <p class="example-p">Страна производитель: <?=$row['country']?>, КПП: <?=$row['transmission']?>, Привод: <?=$row['transmission']?>, Мощность двигателя: <?=$row['engine_power']?>л.с.</p>
                <a href="carpage.php?id=<?= htmlspecialchars($row['id_car']) ?>" class="cta">
                    <span>ПОДРОБНЕЕ</span>
                    <svg viewBox="0 0 13 10" height="10px" width="15px">
                        <path d="M1,5 L11,5"></path>
                        <polyline points="8 1 12 5 8 9"></polyline>
                    </svg></a>
            </div>
        </div>
    </div>
    <?php
        }
    } else {
        echo "<h1 class='h1-bold'>0 результатов</h1>";
    }
}

// Закрытие соединения
$conn->close();
?>