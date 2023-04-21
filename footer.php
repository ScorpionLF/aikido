<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/footer_style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Exo+2:wght@200&family=Inter&family=Roboto&display=swap"
        rel="stylesheet">
    <title>footer</title>
</head>

<body>
    <footer>
        <section class="footer">
            <div class="block-footer-indormation">
                <div class="block-footer-indormation-text-1">Региональная общественная организация “Федерация Айкидо
                    “Аметсучи” по
                    республике
                    Татарстан”
                </div>
                <div class="block-footer-indormation-text-2">Разработка и поддержка сайта IT-компания "Альянс" © 2023.
                    Все права
                    защищены.</div>
            </div>
            <div class="block-footer-buttons">
                <div class="block-footer-buttons-elements">
                    <input type="image" class="block-footer-buttons-element-1" src="images/youtube.png" alt="youtube">
                    <input type="image" class="block-footer-buttons-element-2" src="images/vk.png" alt="vk">
                    <?php
                    if (isset($_SESSION['login'])) {
                        ?>
                        <a href="index" class="block-footer-buttons-element-button">Выйти</a>
                        <?php
                    } else {
                        ?>
                        <a href="#open" class="block-footer-buttons-element-button">Вход</a>
                        <div id="open" class="block-footer-modalWindow">
                            <a href="index" class="block-footer-modalWindow-overlay"></a>
                            <div class="block-footer-modalWindow-dialog">
                                <div class="block-footer-modalWindow-dialog-header">
                                    <div class="block-footer-modalWindow-dialog-header-imgs">
                                        <img class="block-footer-modalWindow-dialog-header-imgs-img" src="images/japan.jpg" onError="this.src='images/not_found.png'">
                                        <a href="#close" class="block-footer-modalWindow-dialog-header-imgs-close" aria-hidden="true">×</a>
                                    </div>
                                </div>
                                <div class="block-footer-modalWindow-dialog-body">
                                    <form action="login_script.php" method="post" class="block-footer-modalWindow-dialog-body-forms">
                                        <div class="block-footer-modalWindow-dialog-body-forms-group">
                                            <span class="block-footer-modalWindow-dialog-body-forms-group-title">Логин или e-mail <span>*</span></span>
                                            <input class="block-footer-modalWindow-dialog-body-forms-group-input" type="text" name="login">
                                        </div>
                                        <div class="block-footer-modalWindow-dialog-body-forms-group">
                                            <span class="block-footer-modalWindow-dialog-body-forms-group-title">Пароль <span>*</span></span>
                                            <input class="block-footer-modalWindow-dialog-body-forms-group-input" type="password" name="password">
                                        </div>
                                        <button type="submit" class="block-footer-modalWindow-dialog-body-button" name="submit">ВОЙТИ</button>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <?php
                    }
                    ?>
                </div>
            </div>
        </section>
    </footer>
</body>

</html>