<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <title>CARFINDER</title>
</head>

<body>

    <?php include 'templates/header.php'?>
    <!---------------------------------------------->

    <main>
        <div class="color-grey carfinderemain">
            <div class="color-green main-part3">
                <!-- РАЗДЕЛ 1 -->
                <h1 class="h1-up-white">Еще не определились с выбором автомобиля?</h1>
                <div class="container main-carfinder-part1">
                    <p class="dontlosetime-2"><i>Чтобы начать, просто заполните наш быстрый и простой опросник, где вы
                            укажете ваш бюджет, а также необходимые характеристики и функции.
                            <br> <br>Наши продвинутые алгоритмы будут анализировать вашу информацию и предлагать вам
                            наиболее подходящие варианты.</i>
                    </p>
                    <img src="img/carfinder-silvia.png" class="silvia">
                </div>
            </div>
            <!---------------------------------------------->

            <div class="container2">
                <h1 class="h1-bold">ФИЛЬТР   (Указать все)</h1><!-- РАЗДЕЛ 2 -->
                <form class="form-carfinder" action="<?=$_SERVER['PHP_SELF']?>" method="POST">
                    <div class="div-form-carfinder">
                        <!-- Блок Привод -->
                        <div class="div-form-carfinder-element">
                            <label class="label-carfinder">Привод</label>
                            <select required class="select-carfinder" name="drive_car" >
                                <option class="option-carfinder">Выбрать..</option>
                                <option class="option-carfinder" value="Передний"
                                    <?= $drive_car == 'Передний' ? 'selected' : '' ?>>Передний</option>
                                <option class="option-carfinder" value="Задний"
                                    <?= $drive_car == 'Задний' ? 'selected' : '' ?>>Задний</option>
                                <option class="option-carfinder" value="Полный"
                                    <?= $drive_car == 'Полный' ? 'selected' : '' ?>>Полный</option>
                            </select>
                        </div>

                        <!-- Блок Кузов -->
                        <div class="div-form-carfinder-element">
                            <label class="label-carfinder">Кузов</label>
                            <select class="select-carfinder" name="bodytype" required>
                                <option class="option-carfinder">Выбрать..</option>
                                <!-- Добавление атрибута 'selected' в зависимости от выбранного значения -->
                                <option class="option-carfinder" value="Седан"
                                    <?= $bodytype == 'Седан' ? 'selected' : '' ?>>Седан</option>
                                <option class="option-carfinder" value="Хэтчбек"
                                    <?= $bodytype == 'Хэтчбек' ? 'selected' : '' ?>>Хэтчбек</option>
                                <option class="option-carfinder" value="Универсал"
                                    <?= $bodytype == 'Универсал' ? 'selected' : '' ?>>Универсал</option>
                                <option class="option-carfinder" value="Лифтбек"
                                    <?= $bodytype == 'Лифтбек' ? 'selected' : '' ?>>Лифтбек</option>
                                <option class="option-carfinder" value="Кроссовер"
                                    <?= $bodytype == 'Кроссовер' ? 'selected' : '' ?>>Кроссовер</option>
                            </select>
                        </div>

                        <!-- Блок КПП -->
                        <div class="div-form-carfinder-element">
                            <label class="label-carfinder">КПП</label>
                            <select class="select-carfinder" name="transmission" required>
                                <option class="option-carfinder">Выбрать..</option>
                                <option class="option-carfinder" value="Механика"
                                    <?= $transmission == 'Механика' ? 'selected' : '' ?>>Механическая</option>
                                <option class="option-carfinder" value="Автомат"
                                    <?= $transmission == 'Автомат' ? 'selected' : '' ?>>Автоматическая</option>
                            </select>
                        </div>

                        <!-- Блок Расположение руля -->
                        <div class="div-form-carfinder-element">
                            <label class="label-carfinder">Расположение руля</label>
                            <select class="select-carfinder" name="wheel" required>
                                <option class="option-carfinder">Выбрать..</option>
                                <option class="option-carfinder" value="Правый"
                                    <?= $wheel == 'Правый' ? 'selected' : '' ?>>Правый</option>
                                <option class="option-carfinder" value="Левый"
                                    <?= $wheel == 'Левый' ? 'selected' : '' ?>>Левый</option>
                            </select>
                        </div>
                    </div>
                    <button class="cta" type="submit">
                        <span>ПОДОБРАТЬ</span>
                        <svg viewBox="0 0 13 10" height="10px" width="15px">
                            <path d="M1,5 L11,5"></path>
                            <polyline points="8 1 12 5 8 9"></polyline>
                        </svg>
                    </button>
                </form>

            </div>
            <!---------------------------------------------->
            <list>
                <?php include 'findercar.php'?>
            </list>
            <!--ДЛЯ ВЫВОДА НАЙДЕННЫХ АВТО-->
        </div>
        </div>
    </main>
    <!---------------------------------------------->

    <!--ФУТЕР-->
    <?php include 'templates/footer.php'?>
    <!---------------------------------------------->

</body>

</html>