<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/video-album.css">
    <link rel="stylesheet" href="css/err404.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Exo+2:wght@200&family=Inter&family=Roboto&display=swap"
        rel="stylesheet">
    <title>Название альбома</title>
    <link type="Image/x-icon" href="images/favicon.png" rel="icon">
</head>
</head>

<body>
    <?php include 'header.php'; ?>
    <main>
        <div class="mobile-title">
            <div class="title-block">
                <div class="title">Название альбома</div>
                <div class="title-block-line"></div>
            </div>
        </div>
        <!-- <div class="album-title">Название альбома</div> -->
        <div class="video-gallery">
        <!--     <div class="error">
                <div class="block-error__title">Страница в разработке.</div>
                <div class="block-error__imgs">
                    <img class="block-error__imgs-img" src="images/error.png" onError="this.src='images/not_found.png'">
                </div>
                <div class="block-error__text">Запрашиваемая страница не существует.<br> Возможно, страница еще не
                    создана или в запросе был указан неверный адрес.</div>
                <a href="index" class="block-error__button">ВЕРНУТЬСЯ НА ГЛАВНУЮ</a>
            </div> -->

            <a class="video-block" onclick="document.getElementById('open_video').style.display='block'"> 
                <div class="img-box">
                    <!-- <img src="" onError="this.src='images/not_found.png'"> -->
                    <iframe  src="https://www.youtube.com/embed/lQTaeof0660" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>                </div> 
                <!-- <title class="video-title">Обращение Сенсея Халидова Рашида Бакиевича к ученикам федерации Ametsuchi Dojo</title> -->
            </a>                 
            <div id="open_video" class="modal">
                <span onclick="document.getElementById('open_video').style.display='none'" class="close" title="Close Modal">&times;</span>     
                <div class="modal-video-content">
                <iframe class="video__item" src="https://www.youtube.com/embed/lQTaeof0660" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>                </div>
            </div> 
            <script>
                var modal = document.getElementById('open_video');
                // When the user clicks anywhere outside of the modal, close it.
                window.onclick = function(event) {
                    if (event.target == modal) {
                        modal.style.display = "none";
                    }
                }
            </script> 
        </div>
    </main>
    <?php include 'footer.php'; ?>
</body>

</html>