<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/header_style.css">
    <link rel="stylesheet" href="css/footer_style.css">
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
    <?php include 'header.html'; ?>
    <div class="main">
        <section class="contacts">
            <div class="block-contacts-informations">
                <div class="contacts-information-line"><strong>Адрес:</strong> ул. Ямашева, д. 36</div>
                <div class="contacts-information-line"><strong>Телефон:</strong> +7 (999) 999-99-99</div>
                <div class="contacts-information-line"><strong>Вконтакте:</strong> ссылка</div>
                <div class="contacts-information-line"><strong>YouTube:</strong> ссылка</div>
            </div>
            <div class="block-contacts-map">
                <img class="contacts-img-map" src="images/screen_map.png" alt="">
                <div class="contacts-map">
                    <iframe
                        src="https://yandex.ru/map-widget/v1/?ll=49.101661%2C55.829023&mode=search&ol=geo&ouri=ymapsbm1%3A%2F%2Fgeo%3Fdata%3DCgg1NjI2Mzc4NBJo0KDQvtGB0YHQuNGPLCDQoNC10YHQv9GD0LHQu9C40LrQsCDQotCw0YLQsNGA0YHRgtCw0L0sINCa0LDQt9Cw0L3RjCwg0L_RgNC-0YHQv9C10LrRgiDQr9C80LDRiNC10LLQsCwgMzYiCg08aERCFbNQX0I%2C&z=16.61"
                        height="400" frameborder="1" allowfullscreen="true"
                        style="position:relative; border: none; height: 330px; width: 100%;"></iframe>
                </div>
            </div>
        </section>
    </div>
    <?php include 'footer.php'; ?>
</body>

</html>