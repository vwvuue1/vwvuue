<?php 
ini_set('display_errors', 'off');
include "db.php";
$cock = $_COOKIE['id_user'];
$result = mysqli_query($conn, "SELECT * from `user` where `id_user` = $cock");
$user = mysqli_fetch_assoc($result);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <title>ЛИЧНЫЙ КАБИНЕТ</title>
</head>

<body>

    <?php include 'templates/header.php'?>
    <!---------------------------------------------->

    <main class="main-user color-grey">
        <div class="color-grey user-main">

            <div class="main-part3">
                <!-- РАЗДЕЛ 1 -->
                <h1 class="h1-up">ЛИЧНЫЙ КАБИНЕТ</h1>
            </div>
            <!---------------------------------------------->

            <div class="container">
                <div class="div-user">
                    <input type="text" value="<?php echo $user['name'] ?>" class="h1-bold" id="name" name="name"
                        disabled>
                    <form class="form-carfinder" action="exit_account.php" method="POST">
                        <button class="cta">
                            <span>LOGOUT</span>
                            <svg viewBox="0 0 13 10" height="10px" width="15px">
                                <path d="M1,5 L11,5"></path>
                                <polyline points="8 1 12 5 8 9"></polyline>
                            </svg>
                        </button>
                    </form>
                </div>
            </div>

        </div>
        <div class="wheeltwo container ">
            <div class="ball"><img src="img/wheeltwo.png" class="twowheel"></div>
        </div>
    </main>

    <?php include 'templates/footer.php'?>

</body>

</html>