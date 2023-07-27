<?php session_start();?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/style.css">
        <title>admin page</title>
    </head>
    <body>
    <?php include 'header.html'; ?>
        <div style="text-align:center">
            <?php if(!empty($_SESSION['login']) and $_SESSION['login'] == 'admin'): ?>
            <?php echo "Административная панель."; ?>
            <a href="logout">Выйти</a>
        <?php else:
            echo '<h2>Для получения доступа в админ-панель нужно авторизоваться.</h2>';
            echo '<a href="index">На главную</a>';
        ?>
    <?php endif ?>
        </div>
        <?php include 'footer.php'; ?>

    </body>
</html>
