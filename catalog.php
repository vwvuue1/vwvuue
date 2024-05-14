<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <title>CATALOG</title>
</head>

<body>

    <?php include 'templates/header.php'?>
    <!---------------------------------------------->

    <main>
        <div class="color-grey">

            <div class="main-part3">
                <!-- РАЗДЕЛ 1 -->
                <h1 class="h1-up">Поиск автомобилей</h1>
            </div>
            <!---------------------------------------------->


            <div class="container2">
                <h1 class="h1-bold">ФИЛЬТР</h1><!-- РАЗДЕЛ 2 -->
                <form class="form-carfinder">
                    <div class="div-form-carfinder">
                        <div class="div-form-carfinder-element">
                            <label class="label-carfinder">Марка</label>
                            <select class="select-carfinder">
                                <option class="option-carfinder">Выбрать..</option>
                                <option class="option-carfinder"></option>
                                <option class="option-carfinder"></option>
                            </select>
                        </div>
                        <div class="div-form-carfinder-element">
                            <label class="label-carfinder">Модель</label>
                            <select class="select-carfinder">
                                <option class="option-carfinder">Выбрать..</option>
                                <option class="option-carfinder"></option>
                                <option class="option-carfinder"></option>
                                <option class="option-carfinder"></option>
                                <option class="option-carfinder"></option>
                            </select>
                        </div>

                        <div class="div-form-carfinder-element">
                            <label class="label-carfinder">Коробка</label>
                            <select class="select-carfinder">
                                <option class="option-carfinder">Выбрать..</option>
                                <option class="option-carfinder">Механика</option>
                                <option class="option-carfinder">Автомат</option>
                            </select>
                        </div>
                        <div class="div-form-carfinder-element">
                            <label class="label-carfinder">Тип кузова</label>
                            <select class="select-carfinder">
                                <option class="option-carfinder">Выбрать..</option>
                                <option class="option-carfinder">Седан</option>
                                <option class="option-carfinder">Хэтчбек</option>
                                <option class="option-carfinder">Лифтбек</option>
                                <option class="option-carfinder">Универсал</option>
                                <option class="option-carfinder">Кроссовер</option>
                            </select>
                        </div>
                        <div class="div-form-carfinder-element">
                            <label class="label-carfinder">Год выпуска</label>
                            <select class="select-carfinder">
                                <option class="option-carfinder">Выбрать..</option>
                                <option class="option-carfinder">2005</option>
                                <option class="option-carfinder">3245</option>
                            </select>
                        </div>
                        <div class="div-form-carfinder-element">
                            <label class="label-carfinder">Привод</label>
                            <select class="select-carfinder">
                                <option class="option-carfinder">Выбрать..</option>
                                <option class="option-carfinder">Передний</option>
                                <option class="option-carfinder">Задний</option>
                                <option class="option-carfinder">Полный</option>
                            </select>
                        </div>
                        <div class="div-form-carfinder-element">
                            <label class="label-carfinder">Цена, ₽</label>
                            <input placeholder="От" class="catalog-input" type="number">
                        </div>
                        <div class="div-form-carfinder-element">
                            <label class="label-carfinder"></label>
                            <input placeholder="До" class="catalog-input" type="number">
                        </div>

                    </div>
                    <button class="cta">
                        <span>НАЙТИ</span>
                        <svg viewBox="0 0 13 10" height="10px" width="15px">
                            <path d="M1,5 L11,5"></path>
                            <polyline points="8 1 12 5 8 9"></polyline>
                        </svg></button>
                </form>
            </div>
            <!---------------------------------------------->

            <div class="container2 carfinder-main-part2">
                <!-- РАЗДЕЛ 3 -->
                <h1 class="h1-bold ">НАЙДЕНО</h1>
                <list class="list-carfinder">
                    <div class="div-list-carfinder">
                        <img src="img/example_car.png" class="example-img">
                        <div class="example-div-text">
                            <h1 class="example-h1">Audi A8 Long 55 TFSI</h1>
                            <div class="example-div-text-p">
                                <p class="example-p">Одно из лучших предложений на российском рынке!
                                    Роскошный и элегантный представительский седан в стильном цветовом сочетании для
                                    самых взыскательных клиентов от надежной компании-импортера!</p>
                                <a href="carpage.html" class="cta">
                                    <span>ПОДРОБНЕЕ</span>
                                    <svg viewBox="0 0 13 10" height="10px" width="15px">
                                        <path d="M1,5 L11,5"></path>
                                        <polyline points="8 1 12 5 8 9"></polyline>
                                    </svg></a>
                            </div>
                        </div>
                    </div>
                    <div class="div-list-carfinder">
                        <img src="img/example_car2.png" class="example-img">
                        <div class="example-div-text">
                            <h1 class="example-h1">Lexus IS F</h1>
                            <div class="example-div-text-p">
                                <p class="example-p">Машина без технических вложений.
                                    Замена масла каждые 5т.км, два раза замена воздушного фильтра</p>
                                <button href="carpage.html" class="cta">
                                    <span>ПОДРОБНЕЕ</span>
                                    <svg viewBox="0 0 13 10" height="10px" width="15px">
                                        <path d="M1,5 L11,5"></path>
                                        <polyline points="8 1 12 5 8 9"></polyline>
                                    </svg></button>
                            </div>
                        </div>
                    </div>
                    <div class="div-list-carfinder">
                        <img src="img/example_car3.png" class="example-img">
                        <div class="example-div-text">
                            <h1 class="example-h1">Bentley Continental R</h1>
                            <div class="example-div-text-p">
                                <p class="example-p">Специальное издание Широкий корпус Mulliner, произведено всего 131
                                    автомобиль. Цвет black emerald.</p>
                                <a href="carpage.html" class="cta">
                                    <span>ПОДРОБНЕЕ</span>
                                    <svg viewBox="0 0 13 10" height="10px" width="15px">
                                        <path d="M1,5 L11,5"></path>
                                        <polyline points="8 1 12 5 8 9"></polyline>
                                    </svg></a>
                            </div>
                        </div>
                    </div>
                </list>
                <!--ДЛЯ ВЫВОДА НАЙДЕННЫХ АВТО-->
            </div>

        </div>
    </main>

    <!--ФУТЕР-->
    <?php include 'templates/footer.php'?>
    <!---------------------------------------------->

</body>

</html>