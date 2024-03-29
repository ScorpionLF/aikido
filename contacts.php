<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/contacts.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Exo+2:wght@200&family=Inter&family=Roboto&display=swap"
        rel="stylesheet">
    <title>Контакты</title>
    <link type="Image/x-icon" href="images/favicon.png" rel="icon">
</head>
</head>

<body>
    <?php include 'header.php'; ?>
    <main>
        <div class="title-block">
            <div class="title">Контакты</div>
            <div class="title-block-line"></div>
        </div>
        <div class="contacts">
            <div class="block-contacts-informations">
                <div class="contacts-line">
                    <img src="images/location-black.png">
                    <div class="contacts-line-info">г. Казань, ул. Ямашева, д. 36, этаж 2</div>
                </div>
                <div class="contacts-line">
                    <img src="images/call-black.png">
                    <div class="contacts-line-info">+7 (917) 228-75-32</div>
                </div>
                <div class="contacts-line">
                    <img src="images/video-square-black.png">
                    <a class="contacts-line-info" href="https://www.youtube.com/@ametsuchidojokazan">https://www.youtube.com/<br>@ametsuchidojokazan</a>
                </div>
                <div class="contacts-line">
                    <img src="images/device-message-black.png">
                    <a class="contacts-line-info" href="https://m.vk.com/aikidopower">https://m.vk.com/aikidopower</a>
                </div>
            </div>
            <div class="block-contacts-map">
                <!-- <img class="contacts-img-map" src="images/screen_map.png" alt=""> -->
                <div class="contacts-map">
                    <iframe
                        src="https://yandex.ru/map-widget/v1/?ll=49.101661%2C55.829023&mode=search&ol=geo&ouri=ymapsbm1%3A%2F%2Fgeo%3Fdata%3DCgg1NjI2Mzc4NBJo0KDQvtGB0YHQuNGPLCDQoNC10YHQv9GD0LHQu9C40LrQsCDQotCw0YLQsNGA0YHRgtCw0L0sINCa0LDQt9Cw0L3RjCwg0L_RgNC-0YHQv9C10LrRgiDQr9C80LDRiNC10LLQsCwgMzYiCg08aERCFbNQX0I%2C&z=16.61"
                        height="400" frameborder="1" allowfullscreen="true"
                        ></iframe>
                </div>
            </div>
        </div>
    </main>
    <?php include 'footer.php'; ?>
</body>

</html>
