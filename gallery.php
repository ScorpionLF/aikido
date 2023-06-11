<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/gallery_style.css">
    <link rel="stylesheet" href="css/err404.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Exo+2:wght@200&family=Inter&family=Roboto&display=swap"
        rel="stylesheet">
    <title>Галерея</title>
    <link type="Image/x-icon" href="images/favicon.png" rel="icon">
</head>
</head>

<body>
    <?php include 'header.html'; ?>
    <main>
        <div class="albums">
            <div class="error">
                <div class="block-error__title">Страница в разработке.</div>
                <div class="block-error__imgs">
                    <img class="block-error__imgs-img" src="images/error.png" onError="this.src='images/not_found.png'">
                </div>
                <div class="block-error__text">Запрашиваемая страница не существует.<br> Возможно, страница еще не
                    создана или в запросе был указан неверный адрес.</div>
                <a href="index" class="block-error__button">ВЕРНУТЬСЯ НА ГЛАВНУЮ</a>
            </div>
            <!-- <div class="block-album">
                <img class="block-album-img" src="images/album_1.jpg" onError="this.src='images/not_found.png'">
                <div class="block-album-title">Аттестация <br>
                    Май, 2022</div>
            </div>
            <div class="block-album">
                <img class="block-album-img" src="images/album_1.jpg" onError="this.src='images/not_found.png'">
                <div class="block-album-title">Аттестация <br>
                    Май, 2022</div>
            </div>
            <div class="block-album">
                <img class="block-album-img" src="images/album_1.jpg" onError="this.src='images/not_found.png'">
                <div class="block-album-title">Аттестация <br>
                    Май, 2022</div>
            </div>
            <div class="block-album">
                <img class="block-album-img" src="images/album_1.jpg" onError="this.src='images/not_found.png'">
                <div class="block-album-title">Аттестация <br>
                    Май, 2022</div>
            </div>
            <div class="block-album">
                <img class="block-album-img" src="images/album_1.jpg" onError="this.src='images/not_found.png'">
                <div class="block-album-title">Аттестация <br>
                    Май, 2022</div>
            </div>
            <div class="block-album">
                <img class="block-album-img" src="images/album_1.jpg" onError="this.src='images/not_found.png'">
                <div class="block-album-title">Аттестация <br>
                    Май, 2022</div>
            </div>
            <div class="block-album">
                <img class="block-album-img" src="images/album_1.jpg" onError="this.src='images/not_found.png'">
                <div class="block-album-title">Аттестация <br>
                    Май, 2022</div>
            </div> -->
        </div>
    </main>
    <?php include 'footer.php'; ?>
</body>

</html>