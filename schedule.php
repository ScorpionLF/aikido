<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/schedule_style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Exo+2:wght@200&family=Inter&family=Roboto&display=swap"
        rel="stylesheet">
    <title>Расписание</title>
    <link type="Image/x-icon" href="images/favicon.png" rel="icon">
</head>
</head>

<body>
    <?php include 'header.php'; ?>
    <main>
    <div class="title-block">
            <div class="title">Расписание</div>
            <div class="title-block-line"></div>
        </div>
        <div class="schedule">
        <div class="schedule-information">
                <div class="schedule-information-address">
                г. Казань, ул. Яруллина, д. 6
                </div>
                <div class="schedule-information-trener">
                Белоусов Е. Н.
                </div>
                <div class="schedule-information-time">
                Время тренировок:
                </div>
                <div class="schedule-information-disign-line"></div>
                <div class="schedule-information-time-title">
                Детская группа от 5-12 лет:
                </div>
                <div class="schedule-information-time">
                ПН, СР, ПТ.<br>18:00 - 19:00
                </div>
                <div class="schedule-information-disign-line"></div>
                <div class="schedule-information-time-title">
                Взрослая группа от 12 лет:
                </div>
                <div class="schedule-information-time">
                ПН, СР, ПТ.<br>19:00 - 21:00
                </div>
            </div>            
            <div class="schedule-trener">
                <div class="schedule-trener-block">
                    <img class="schedule-trener-block-photo" src="images/instructor_1.jpg"
                        onError="this.src='images/not_found.png'">
                    <div class="schedule-trener-block-information">
                        <div class="schedule-trener-block-information-name"><strong>Белоусов Евгений Набиевич</strong></div>
                        <div class="schedule-trener-block-information-dan">
                            4 дан Айкидо Айкикай
                        </div>
                    </div>
                </div>
            </div>
            <div class="block-schedule-information">
                <div class="block-schedule-information-table">
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
    </main>
    <?php include 'footer.php'; ?>
</body>

</html>