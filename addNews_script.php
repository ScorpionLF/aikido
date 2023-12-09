<?php
// require_once 'dbconnect.php';
echo "HELP.";

// $host = 'localhost';
// $user = 'root';
// $password = '';
// $database = 'aikido';
// $connection = mysql_connect($host, $user, $password, $database);
$connection = mysqli_connect('localhost', 'root', '', 'aikido');

$title = $_POST['title'];
$descr = $_POST['descr'];
$date = $_POST['date'];

$query = "INSERT INTO news (title, descr, date) VALUES ('$title', '$descr', '$date')";
// $connection->query("INSERT INTO `news` (`title`, `descr`, `date`) VALUES('$title', '$descr', '$date')");



$result = mysqli_query($connection, $query);

// if (!$result) {
//     die("Error: " . mysqli_error($connection));
// }

// mysqli_close($connection);
$mysql->close();

header("Location: news_list.php");
// exit;
?>