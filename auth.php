<?php
    session_start();
    
    
    $mysql = new mysqli('localhost', 'root', 'root', 'authorization');
    
    if($mysql->connect_error){
        die("Ошибка: " . $mysql->connect_error);
    }
    else {
        echo "Тут ошибок нет.";
    }
    
    $login = trim($_POST['login']);
    $pass = trim($_POST['pass']);


    // $pass = md5($pass."LoremIpsum");

    if (isset($_POST['submit'])) {
 
        if (!empty($login) && !empty($pass)) {

            $query = "SELECT * FROM users WHERE login = '$login' AND pass = '$pass'";
            $result = mysqli_query($query);
            $data = mysqli_fetch_array($result);
            
                if ($pass == $data['pass']) {
                    
                    if ($login == "admin") {
                        echo "Admin";
                        // $admin = $_SESSION['admin'];
                    }
                    else {
                        echo "User";
                        // $user = $_SESSION['user'];

                    }

                } 
                else {
                    echo "Неправильный пароль.";
                }

        }
        else {
            echo "Пустые поля.";
        }
    }

    $mysql->close();
    // header('Location: registration.html');
 ?>
