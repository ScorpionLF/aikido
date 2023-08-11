<?php
    session_start();

    $mysql = new mysqli('localhost', 'root', 'root', 'authorization');
    $mysql->query("INSERT INTO `users` (`login`, `pass`, `name`) VALUES('$login', '$pass', '$name')");


    $login = $_POST['login'];
    $pass = $_POST['pass'];
 
    // $pass = md5($pass."LoremIpsum");

    if (isset($_POST['submit'])) {
        $result = result_query("SELECT * FROM `users` WHERE `login` = '".$login."' AND `pass` = '".$pass."'");
        $data = fetch_assoc($result);

        if ($data['pass'] === $pass) {
            if ($data['login'] == "admin") {
                setcookie('login', $data['login'], time() + 60 * 60, "/");
                // header("Location: admin_page");
                echo "Admin";
            }
            else {
                setcookie('login', $data['login'], time() + 60 * 60, "/");
                // header("Location: personal_page");
                echo "User";
            }
        }
        else {
            echo "Error";
        }
    }
    else {
        echo "Error";
    }

 


   



 

    $mysql->close();
    // header('Location: registration.html');
 ?>
