<?php
    session_start();
    
    
    $mysql = mysqli_connect('localhost', 'root', '', 'authorization');
    
    if($mysql->connect_error){
        die("Ошибка: " . $mysql->connect_error);
    }

    $login = trim($_POST['login']);
    $password = trim($_POST['password']);


    // $pass = md5($pass."LoremIpsum");

    if (isset($_POST['submit'])) {
 
        if (!empty($login) && !empty($password)) {

            $query = "SELECT * FROM users WHERE login = '$login' AND password = '$password'";
            $result = mysqli_query($mysql, $query);
            $data = mysqli_fetch_array($result);

            if ($data) {

                if ($password == $data['password']) {
                    
                    $_SESSION['user'] = $data['login'];

                    if ($login == "admin") {
                        // echo "Admin";
                        // $admin = $_SESSION['admin'];
                        header('Location: admin_page');
                    }
                    else {
                        // echo "User";
                        // $login = $_SESSION['login'];
                        // $_SESSION['user'] = $data['login'];
                        header('Location: personal_page');
                    }

                } 
                else {
                    echo "Неправильный пароль.";
                }

            }    
        }
        else {
            echo '<main style="margin: 10% 30%;">
                    <h1 style="text-align: center; color: red;">Необходимо заполнить все поля</h1>
                    <form action="login.php" method="post">         
                        <div style="display: grid;">
                            <span style=" margin-bottom: 10px; margin-top: 20px; font-size: 20px; font-weight: 300;">Логин или e-mail <span style="color: red;">*</span></span>
                            <input style="padding: 10px;" id="login" type="text" name="login">
                            <span style=" margin-bottom: 10px; margin-top: 20px; font-size: 20px; font-weight: 300;">Пароль <span style="color: red;">*</span></span>
                            <input style="padding: 10px;" id="password" type="password" name="password">
                            <button style="background-color: #000; color: white; padding: 15px 0 15px 0px; margin: 25px 0; border: none; cursor: pointer; width: 100%; font-size: 20px;" type="submit" name="submit">ВОЙТИ</button>
                        </div>
                    </form>
                </main>';
            }
    }

    $mysql->close();
 ?>


