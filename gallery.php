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
    <title>Фото</title>
    <link type="Image/x-icon" href="images/favicon.png" rel="icon">
</head>
</head>

<body>
    <?php include 'header.html'; ?>
    <main>
    <!-- <div class="title-block">
            <div class="title">Фото</div>
            <div class="title-block-line"></div>
        </div> -->
        <div class="gallery">
            <div class="error">
                <div class="block-error__title">Страница в разработке.</div>
                <div class="block-error__imgs">
                    <img class="block-error__imgs-img" src="images/error.png" onError="this.src='images/not_found.png'">
                </div>
                <div class="block-error__text">Запрашиваемая страница не существует.<br> Возможно, страница еще не
                    создана или в запросе был указан неверный адрес.</div>
                <a href="index" class="block-error__button">ВЕРНУТЬСЯ НА ГЛАВНУЮ</a>
            </div>
            <!-- <a href="#" class="gallery-album">
                <img src="images/new_1.jpg" onError="this.src='images/not_found.png'"/>
	            <div class="gallery-album-info">
                    <span>
                        <div class="gallery-album-info-line">DD.MM.YYY</div>
                        <div class="gallery-disign-line"></div>
                        <div class="gallery-album-info-line">Album Title</div>
                    </span>
                </div>
            </a>
            <a href="#" class="gallery-album">
                <img src="images/new_2.jpg" onError="this.src='images/not_found.png'"/>
	            <div class="gallery-album-info">
                    <span>
                        <div class="gallery-album-info-line">DD.MM.YYY</div>
                        <div class="gallery-disign-line"></div>
                        <div class="gallery-album-info-line">Album Title</div>
                    </span>
                </div>
            </a>
            <a href="#" class="gallery-album">
                <img src="images/new_3.jpg" onError="this.src='images/not_found.png'"/>
	            <div class="gallery-album-info">
                    <span>
                        <div class="gallery-album-info-line">DD.MM.YYY</div>
                        <div class="gallery-disign-line"></div>
                        <div class="gallery-album-info-line">Album Title</div>
                    </span>
                </div>
            </a> -->
        </div>
    </main>
    <?php include 'footer.php'; ?>
</body>

</html>