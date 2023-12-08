<?php
    $login = $_POST['login'];
    $name = $_POST['name'];
    $password = $_POST['password'];
    
    $mysql = mysqli_connect('localhost', 'root', '', 'aikido');
    
    $mysql->query("INSERT INTO `users` (`login`, `password`, `name`) VALUES('$login', '$password', '$name')");

    $mysql->close();

    header('Location: registration.html');
?>