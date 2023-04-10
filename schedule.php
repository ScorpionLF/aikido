<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/schedule_style.css">
    <link rel="stylesheet" href="css/header_style.css">
    <link rel="stylesheet" href="css/footer_style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Exo+2:wght@200&family=Inter&family=Roboto&display=swap"
        rel="stylesheet">
    <title>Расписание</title>
    <link type="image/x-icon" href="images/favicon.png" rel="shortcut icon">
    <link type="Image/x-icon" href="images/favicon.png" rel="icon"></head>
</head>

<body>
    <?php include 'header.html'; ?>

    <div class="main">
        <div class="schedule">
            <div class="schedule_left_div">
                <img class="img_tr" src="images/instructor_1.jpg"  onError="this.src='images/not_found.png'">
                <div class="info_tr">
                    Белоусов Е.Н. <br>
                    4 дан
                </div>
            </div>
            <div class="schedule_right_div">
                <div id="table" class="table">
                    <table>
                        <tr>
                            <th>Группы</th>
                            <th>Дни</th>
                            <th>Время</th>
                            <th>Адрес</th>
                        </tr>
                        <tr>
                            <th>Детская</th>
                            <th>Пн., ср., пт.</th>
                            <th>18:00 - 19:00</th>
                            <th>ул. Ямашева, д. 36</th>
                        </tr>
                        <tr>
                            <th>Взрослая</th>
                            <th>Пн., ср., пт.</th>
                            <th>19:00 - 21:00</th>
                            <th>ул. Ямашева, д. 36</th>
                        </tr>
                    </table>
                </div>
                </div>
            </div>
            <!-- <div class="schedule_right_div">
                <div class="maps">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1120.4904545474737!2d49.10169281735697!3d55.8282906571291!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x415952ae457ec33f%3A0x942bb741ea0d311!2z0L_RgC3Rgi4g0KXRg9GB0LDQuNC90LAg0K_QvNCw0YjQtdCy0LAsIDM2LCDQmtCw0LfQsNC90YwsINCg0LXRgdC_LiDQotCw0YLQsNGA0YHRgtCw0L0sIDQyMDA0NA!5e0!3m2!1sru!2sru!4v1675417328707!5m2!1sru!2sru"
                        width="630" height="400" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div> -->
        </div>

    </div>

    <?php include 'footer.php'; ?>
</body>

</html>