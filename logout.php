<?php
    session_start();
    unset($_SESSION['login']);
    header('Location:/login_page.php')
?>
