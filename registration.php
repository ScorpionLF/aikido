<?php
    $login = $_POST['login'];
    $name = $_POST['name'];
    $pass = $_POST['pass'];

    // if(mb_strlen($login) < 5 || mb_strlen($login) > 90) {
    //     echo "Недоступная длина логина!";
    // } else if(mb_strlen($name) < 3 || mb_strlen($name) > 50) {
    //     echo "Недоступная длина имени!";
    // }  else if(mb_strlen($pass) < 2 || mb_strlen($pass) > 10) {
    //     echo "Недоступная длина пароля! (от 2 до 10)";
    // }   
    // $pass = md5($_POST['pass']);
    
    $mysql = new mysqli('localhost', 'root', 'root', 'authorization');
    
    $mysql->query("INSERT INTO `users` (`login`, `pass`, `name`) VALUES('$login', '$pass', '$name')");

    $mysql->close();

    header('Location: registration.html');
?>