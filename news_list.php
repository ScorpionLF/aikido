<?php
// require_once 'dbconnect.php';

// $host = 'localhost';
// $user = 'root';
// $password = '';
// $database = 'aikido';
// $connection = mysql_connect($host, $user, $password, $database);
$connection = mysqli_connect('localhost', 'root', '', 'aikido');

$query = "SELECT * FROM news";
// $connection->query("SELECT * FROM news");
$result = mysqli_query($connection, $query);

// if (!$result) {
//     die("Error: " . mysqli_error($connection));
// }
// ?>


<!DOCTYPE html>
<html>
<head>
    <title>Список новостей</title>
</head>
<body>
    <h1>Список новостей</h1>

    <?php while ($row = mysqli_fetch_array($result)): ?>
        <h2><?php echo $row['title']; ?></h2>
        <p><?php echo $row['descr']; ?></p>
        <p><?php echo $row['date']; ?></p>
    <?php endwhile; ?>

    <a href="addNews.php">Добавить новость</a>
</body>
</html>

<?php
mysqli_close($connection);
?>