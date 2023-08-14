<?php
    session_start();
    unset($_SESSION['admin']);
    unset($_SESSION['user']);
    header('Location:index');
?>
