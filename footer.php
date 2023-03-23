<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/footer_style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Exo+2:wght@200&family=Inter&family=Roboto&display=swap"
        rel="stylesheet">
    <title>footer</title>
</head>

<body>
    <footer>
        <div class="footer">
            <div class="footer_first_div" id="footer_one_div">
                <div class="footer-text">Региональная общественная организация “Федерация Айкидо “Аметсучи” по
                    республике
                    Татарстан”
                </div>
                <div class="footer_third_div">Разработка и поддержка сайта IT-компания "Альянс" © 2023. Все права
                    защищены.</div>
            </div>
            <div class="footer_second_div" id="footer_second_div">
                <div class="button_footer">
                    <input type="image" class="youtube" src="images/youtube.png" alt="youtube">
                    <input type="image" class="vk" src="images/vk.png" alt="vk">
                    <?php
                    if (isset($_SESSION['login'])) {
                        ?>
                        <a href="logout.php" class="sign">Выйти</a>
                        <?php
                    } else {
                        ?>
                        <a href="login_page.php" class="sign">Вход</a>
                        <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>