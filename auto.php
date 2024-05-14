<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <title>РЕГИСТРАЦИЯ</title>
</head>
<body >
    <div  class="background-color-registration">
        <div class="reg-div1">
            <div class="reg-div1-1">
                <div class="reg-div1-1-1">
                    <a href="reg.php" class="h1-reg">SIGN UP</a>
                    <a href="" class="h1-reg  activee">LOG IN</a>
                </div>
                <form class="form-reg" id="form" action="autolog.php" method="post">
                    <input class="input-reg" pattern="[0-9]{11}" type="tel" placeholder="Введите номер телефона" name="login" id="login" required>
                    <input class="input-reg" type="password" placeholder="Введите пароль" id="password" name="password" required>
                    <input type="submit" class="button-reg" id="button" value="ВОЙТИ">
                    <a href="index.php" class="withoutlog">ВОЙТИ БЕЗ АВТОРИЗАЦИИ</a>
                </form>
            </div>
        </div>
        <div class="reg-div2">

        </div>
    </div>
</body>
</html>