<?php
    session_start();
    
    
    $mysql = mysqli_connect('localhost', 'root', 'root', 'authorization');
    
    if($mysql->connect_error){
        die("Ошибка: " . $mysql->connect_error);
    }

    $login = trim($_POST['login']);
    $password = trim($_POST['password']);


    // $pass = md5($pass."LoremIpsum");

    if (isset($_POST['submit'])) {
 
        // if (!empty($login) && !empty($password)) {

            $query = "SELECT * FROM users WHERE login = '$login' AND password = '$password'";
            $result = mysqli_query($mysql, $query);
            $data = mysqli_fetch_array($result);



                if ($password == $data['password']) {
                    
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

        // }
        // else {
        //     echo "Пустые поля.";
        // }
    }

    $mysql->close();
    // header('Location: registration.html');
 ?>


