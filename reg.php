<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <title>РЕГИСТРАЦИЯ</title>
</head>

<body>
    <div class="background-color-registration">
        <div class="reg-div1">
            <div class="reg-div1-1">
                <div class="reg-div1-1-1">
                    <a href="" class="h1-reg activee">SIGN UP</a>
                    <a href="auto.php" class="h1-reg">LOG IN</a>
                </div>
                <form class="form-reg" id="form" action="check.php" method="post">
                    <input class="input-reg" type="text" id="name" name="name" placeholder="Введите имя" required>
                    <input class="input-reg" type="tel" pattern="[0-9]{11}" name="login" id="login"
                        placeholder="Введите номер телефона" required>
                    <input class="input-reg" type="password" name="password" placeholder="Придумайте пароль"
                        id="password" required>
                    <input type="submit" class="button-reg" id="button" value="ЗАРЕГИСТРИРОВАТЬСЯ">
                    <a href="index.php" class="withoutlog">ВОЙТИ БЕЗ РЕГИСТРАЦИИ</a>

                </form>
            </div>
        </div>
        <div class="reg-div2">

        </div>
    </div>
</body>

</html>