<?php

$connection = mysqli_connect('localhost', 'root', '', 'aikido');

$query = "SELECT * FROM news";
$result = mysqli_query($connection, $query);

// if (!$result) {
//     die("Error: " . mysqli_error($connection));
// }
?>

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
        <p><?php echo $row['data']; ?></p>
    <?php endwhile; ?>

    <a href="addNews.php">Добавить новость</a>
</body>
</html>

<?php
mysqli_close($connection);
?>