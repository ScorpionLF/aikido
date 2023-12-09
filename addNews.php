<!DOCTYPE html>
<html>
<head>
    <title>Добавить новость</title>
</head>
<body>
    <h1>Добавить новость</h1>
    <form action="addNews_script.php" method="post">
        <!-- <label for="title">Заголовок:</label> -->
        <input type="text" id="title" name="title"><br><br>
        
        <!-- <label for="descr">Новость:</label> -->
        <textarea id="descr" name="descr"></textarea><br><br>
        
        <!-- <label for="date">Дата:</label> -->
        <input type="date" id="data" name="data"><br><br>
        
        <input type="submit" value="Добавить">
    </form>
</body>
</html>