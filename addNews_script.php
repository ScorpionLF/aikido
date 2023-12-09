<?php

echo "HELP.";

$connection = mysqli_connect('localhost', 'root', '', 'aikido');

$title = $_POST['title'];
$descr = $_POST['descr'];
$data = $_POST['data'];

$query = "INSERT INTO news (title, descr, data) VALUES ('$title', '$descr', '$data')";
$result = mysqli_query($connection, $query);

// if (!$result) {
//     die("Error: " . mysqli_error($connection));
// }

mysqli_close($connection);

header("Location: news_list.php");

?>