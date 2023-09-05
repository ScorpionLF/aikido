<?php session_start();?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/err404.css">
        <title>admin page</title>
    </head>
    <body>
    <?php include 'header.php'; ?>
        <div style="text-align:center">
            <?php 
            // if(!empty($_SESSION['login']) and $_SESSION['login'] == 'admin'): ?>
            <?php echo "Административная панель."; ?>
            <a href="logout">Выйти</a>
        <?php 
        // else:
            // echo '<div class="error">
            // <div class="block-error__title">Страница не найдена<br>404</div>
            // <div class="block-error__text">Для получения доступа в админ-панель нужно авторизоваться.</div>
            // <a href="index" class="block-error__button">ВЕРНУТЬСЯ НА ГЛАВНУЮ</a>
        // </div>';
        ?>
    <?php 
    // endif ?>
        </div>
        <?php include 'footer.php'; ?>

    </body>
</html>
