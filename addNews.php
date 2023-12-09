<!-- <form method="post" action="addNews_script.php">
    <div>
        Title: <br />
        <textarea name="name" id="title" cols="30" rows="10"></textarea> <br />
        News: <br />
        <textarea name="input" id="input" cols="30" rows="20"></textarea> <br />
    </div>
    <div>
        <button type="submit">Add</button>
    </div>
</form> -->
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
        <input type="date" id="date" name="date"><br><br>
        
        <input type="submit" value="Добавить">
    </form>
</body>
</html>