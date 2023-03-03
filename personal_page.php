<?php session_start();?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/header_style.css">
    <link rel="stylesheet" href="css/personal_page.css">
    <link rel="stylesheet" href="css/footer_style.css">
    <link rel="stylesheet" href="css/style.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Exo+2:wght@200&family=Inter&family=Roboto&display=swap"
        rel="stylesheet">
    <title>Личный кабинет</title>
</head>

<body style="min-height:100%">
    <?php include 'header.html'; ?>
    <div class="personal_page">
        <div class="i_title_div">
            <div class="title_page_i">Личные данные</div>
            <div class="yellow_line"></div>
        </div>
        <div class="block_personal_page">
            <div class="photo_personal">
                <img class="img_person" src="images/image.jpg" alt="">
            </div>
            <div class="block_person">
                <div class="fio">
                    <div class="request">ФИО:</div>
                    <div class="info">Хатипова Линиза Фаниловна</div>
                </div>
                <div class="data">
                    <div class="request">Дата рождения:</div>
                    <div class="info">26.04.2003</div>
                </div>
                <div class="data">
                    <div class="request">Дата оформления страховки:</div>
                    <div class="info">02.03.2023</div>
                </div>
                <div class="data">
                    <div class="request">Дата окончания страховки:</div>
                    <div class="info">02.03.2024</div>
                </div>
                <!-- <div class="data">
                    <div class="input__wrapper">
                        <input name="file" type="file" id="input__file" class="input input__file" multiple>
                     </div>
                </div> -->
            </div>
        </div>
    </div>
    <?php include 'footer.html'; ?>
</body>

</html>
