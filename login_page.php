<?php
    require_once 'login_script.php';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Вход</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link type="image/x-icon" href="images/logo.png" rel="shortcut icon">
    <link type="Image/x-icon" href="images/logo.png" rel="icon">
    </head>
    <body>
        <h2 style="text-align:center; padding-top:100px">Вход в личный кабинет</h2>
        <form action="login_script.php" method="post" style="text-align:center; padding-top:80px">
            <div class="form-group">
                <input type="text" placeholder="Введите логин" name="login">
            </div>
            <div class="form-group">
                <input type="text" placeholder="Введите пароль" name="password">
            </div>
            <button type="submit" class="btn btn-primary" style="background-color:grey" name="submit">Войти</button>
        </form>
    </body>
</html>
