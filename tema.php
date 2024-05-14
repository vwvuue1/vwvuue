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

$id_carr = filter_var(trim($_POST['id_carr']), FILTER_VALIDATE_INT); 
$theme = filter_var(trim($_POST['theme']), FILTER_SANITIZE_STRING); 

// Выполнение запроса 
$result = mysqli_query($conn, "INSERT INTO `discussions` (id_car, theme) VALUES ('$id_carr', '$theme')");

if ($result) {
    header("Refresh: 0.5; URL=carpage.php?id=" . htmlspecialchars($id_carr));
    exit();
} else {
    echo "Error: " . mysqli_error($conn);
}

mysqli_close($conn);
?>