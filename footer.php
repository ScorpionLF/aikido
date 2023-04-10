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
                        <a href="index.php" class="sign">Выйти</a>
                        <?php
                    } else {
                        ?>
                        <a href="#login_page.php" class="sign">Вход</a>
                        <div class="modal" id="login_page.php" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-header">
                                    <h2 style="text-align:center; font-family: Roboto; font-size: 28px">Вход в личный
                                        кабинет</h2>
                                    <a href="#close" class="btn-close" aria-hidden="true">×</a>
                                </div>
                                <div class="modal-body">
                                    <form action="login_script.php" method="post" style="text-align:center;">
                                        <div class="form-group">
                                            <input class="text_sign" type="text" placeholder="Введите логин" name="login">
                                        </div>
                                        <div class="form-group">
                                            <input class="text_sign" type="password" placeholder="Введите пароль"
                                                name="password">
                                        </div>
                                        <button type="submit" class="btn_btn-primary" name="submit">Войти</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>
