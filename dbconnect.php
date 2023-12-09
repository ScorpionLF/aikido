<?php
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'aikido';
$connection = mysql_connect($host, $user, $password, $database);

if (!$connection) {
    die("Error: " . mysql_connect_error());
}