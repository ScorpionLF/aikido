<?php session_start();?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>admin page</title>
    </head>
    <body>
        <div style="text-align:center">
            <?php if(!empty($_SESSION['login']) and $_SESSION['login'] == 'admin'): ?>
            <?php echo "Административная панель."; ?>
            <a href="logout.php">Выйти</a>
        <?php else:
            echo '<h2>Для получения доступа в админ-панель нужно авторизоваться.</h2>';
            echo '<a href="index.php">На главную</a>';
        ?>
    <?php endif ?>
        </div>
    </body>
</html>
