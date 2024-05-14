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

// Получаем id машины из параметра запроса
$id_car = isset($_GET['id']) ? intval($_GET['id']) : 0;

// Инициализация переменной для данных машины
$row = [];

// Если id машины указан, выполняем запрос к базе данных
if ($id_car > 0) {
    $stmt = $conn->prepare("SELECT * FROM car WHERE id_car = ?");
    $stmt->bind_param("i", $id_car);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    } else {
        echo "Машина не найдена";
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
    <title><?=$row['brand']?> <?=$row['model']?>, <?=$row['year_car']?></title>
</head>

<body>

    <?php include 'templates/header.php'?>
    <!---------------------------------------------->

    <main>
        <div class="color-grey user-main">

            <div class="main-part3-carpage">
                <!-- РАЗДЕЛ 1 -->
                <input class="h1-up-carpage" value="<?=$row['brand']?> <?=$row['model']?>, <?=$row['year_car']?>"
                    disabled>
            </div>
            <!---------------------------------------------->

            <div class="container3">
                <!-- РАЗДЕЛ 2 -->



                <div class="carpage-div-between">

                    <div class="carpage-div1-column">
                        <div class="carpage-div1-image">
                        <img src="<?=$row['newcar']?>" class="example-img-carpage">
                            <div class="div1-carpage-p">
                                <p class="carpage-p1">НОВЫЙ</p>
                                <p class="carpage-p1-light">ЦЕНА: <b><?=$row['pricebefore']?> РУБ.</b></p>
                            </div>
                        </div>
                        <div class="carpage-div1-image">
                            <img src="<?=$row['oldcar']?>" class="example-img-carpage">
                            <div class="div1-carpage-p">
                                <p class="carpage-p1">Б/У</p>
                                <p class="carpage-p1-light">ЦЕНА: <b><?=$row['priceafter']?> РУБ.</b></p>
                            </div>
                        </div>
                        <div class="carpage-div1-image">
                            <img src="<?=$row['thicknesscar']?>" class="example-img-carpage">
                            <div class="div1-carpage-p">
                                <p class="carpage-p1">Толщина лкп</p>
                            </div>
                        </div>
                    </div>
                    <div class="carpage-div2-column">
                        <div class="div-1">
                            <h1 class="carpage-h1">ТЕХНИЧЕСКИЕ ХАРАКТЕРИСТИКИ</h1>
                            <div class="carpage-div2">
                                <div class="div1-carpage-p">
                                
                                    <p class="carpage-p1">СТРАНА ПРОИЗВОДИТЕЛЬ</p>
                                    <input class="carpage-p1-light carcarcar"  type="text"
                                        value="<?=$row['country']?>" disabled>
                                </div>
                                <div class="div1-carpage-p">
                                    <p class="carpage-p1">МОЩНОСТЬ ДВИГАТЕЛЯ</p>
                                    <input class="carpage-p1-light carcarcar"  type="text"
                                        value="<?=$row['engine_power']?> л.с." disabled>
                                </div>
                                <div class="div1-carpage-p">
                                    <p class="carpage-p1">ТРАНСМИССИЯ</p>
                                    <input class="carpage-p1-light carcarcar" type="text"
                                        value="<?=$row['transmission']?>" disabled>
                                </div>
                                <div class="div1-carpage-p">
                                    <p class="carpage-p1">РАСХОД ДВИГАТЕЛЯ</p>
                                    <input class="carpage-p1-light carcarcar" type="text"
                                        value="<?=$row['fuel_consumption']?> л." disabled>
                                </div>
                                <div class="div1-carpage-p">
                                    <p class="carpage-p1">ОБЪЕМ ДВИГАТЕЛЯ</p>
                                    <input class="carpage-p1-light carcarcar" type="text"
                                        value="<?=$row['size_engine']?> л." disabled>
                                </div>
                                <div class="div1-carpage-p">
                                    <p class="carpage-p1">КОЛИЧЕСТВО МЕСТ</p>
                                    <input class="carpage-p1-light carcarcar" type="text"
                                        value="<?=$row['number_of_seats']?>" disabled>
                                </div>
                                <div class="div1-carpage-p">
                                    <p class="carpage-p1">ТИП КУЗОВА</p>
                                    <input class="carpage-p1-light carcarcar" type="text" value="<?=$row['bodytype']?>"
                                        disabled>
                                </div>
                                <div class="div1-carpage-p">
                                    <p class="carpage-p1">ТИП ДВИГАТЕЛЯ</p>
                                    <input class="carpage-p1-light carcarcar" type="text"
                                        value="<?=$row['type_engine']?>" disabled>
                                </div>
                                <div class="div1-carpage-p">
                                    <p class="carpage-p1">ПРИВОД</p>
                                    <input class="carpage-p1-light carcarcar" type="text" value="<?=$row['drive']?>"
                                        disabled>
                                </div>
                                <div class="div1-carpage-p">
                                    <p class="carpage-p1">РАСПОЛОЖЕНИЕ РУЛЯ</p>
                                    <input class="carpage-p1-light carcarcar" type="text" value="<?=$row['wheel']?>"
                                        disabled>
                                </div>

                            </div>
                        </div>
                        <div class="div-2">
                            <h1 class="carpage-h1">ВИДЕООБЗОР</h1>
                            <div class="carpage-comment">
                                <?=$row['video']?>
                            </div>

                        </div>
                        <div class="div-2">
                            <h1 class="carpage-h1">ОБСУЖДЕНИЯ</h1>
                            <div class="carpage-comment">
                                <form class="form-comment-carpage" method="POST" action="tema.php">
                                <input type="hidden" value="<?=$row['id_car']?>" name="id_carr" id="id_carr" >
                                    <input type="text" placeholder="НОВАЯ ТЕМА" class="paste-comment-carpage"
                                        name="theme" id="theme">
                                    <button class="form-button-carpage" type="submit"
                                        onclick="alert('Новая тема добавлена')"><img src="img/plus_png.png"
                                            class="plus_png"></button>
                                </form>
                                <form method="POST">
                                <?php include 'discussionfind.php'?>
                                </form>
                                
                                

                            </div>

                        </div>
                    </div>

                </div>
                <!---------------------------------------------->



            </div>
        </div>
    </main>


    <!--ФУТЕР-->
    <?php include 'templates/footer.php'?>
    <!---------------------------------------------->


</body>

</html>