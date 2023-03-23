<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/header_style.css">
    <link rel="stylesheet" href="css/main_style.css">
    <link rel="stylesheet" href="css/footer_style.css">
    <link rel="stylesheet" href="css/style.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Exo+2:wght@200&family=Inter&family=Roboto&display=swap"
        rel="stylesheet">
    <title>Главная</title>
</head>

<body style="min-height:100%">
    <?php include 'header.html'; ?>
    <div class="main">
        <div class="main_composition">
            <div id="leftBlock">
                <img class="sensei" src="images/sensei.png" alt="sensei">
            </div>
            <div id="rightBlock">
                <img class="aikido_logo" src="images/aikido_logo.png" alt="aikido_logo">
            </div>
            <div id="centralBlock">
                <div>
                    <div class="yellow_line"></div>
                    <div class="quote_text">Настоящая победа - это победа над самим собой.</div>
                    <div class="yellow_line"></div>
                </div>
            </div>
        </div>
        <div class="info_title">О Федерации</div>
        <div class="info_federation">
            <p>Федерация Айкидо Ametsuchi Dojo входит во Всестилевую Федерацию Айкидо России.
                Поэтому все ученики проходят ежегодную аттестацию в Москве или Санкт-Петербурге. Является организатором
                крупных международных фестивалей Айкидо в Казани, с участием ведущих сенсеев России и зарубежья. Каждый
                ученик проходит все мастер-классы данных фестивалей.</p>
            <p>Обучая вас самозащите, мы не воспитываем
                агрессию,
                не культивируем идею насилия в ответ насилию. Это позволяет сохранять спокойствие и уверенность в любой
                ситуации,
                в духе наследия Великого Мастера Уэсиба Морихей, который создал это единоборство после долгих лет
                совершенствования тела и духа.</p>
        </div>
        <div class="news">
            <div class="new_1">
                <div class="new_block">
                    <img class="new_image" src="images/image.jpg" alt="new_image_1">
                    <div class="new_title">Константиновка, набор в новую детскую группу айкидо!</div>
                    <div class="new">
                        <?php echo (file_get_contents('./news/new_1.txt')); ?>
                    </div>
                </div>
            </div>
            <div class="new_2">
                <div class="new_block">
                    <img class="new_image" src="images/image.jpg" alt="new_image_2">
                    <div class="new_title">Аттестованы!</div>
                    <div class="new">
                        В конце мая прошла плановая аттестация учеников Ametsuchi Dojo. Сенсеи федерации во главе с
                        Белоусовым Евгением Набиевичем были очень строги и "сдать на пояс" удалось единицам. Хотя число
                        участников было небывало большим - мероприятия заняло весь день. Мы поздравляем всех: и тех кто
                        "защитил свой пояс" и тех, кто получил новый. Вы и есть Ametsuchi. На вас равняется федерация.
                        До новых побед!

                    </div>
                </div>
            </div>
            <div class="new_3">
                <div class="new_block">
                    <img class="new_image" src="images/image.jpg" alt="new_image_3">
                    <div class="new_title">Семинар Айкидо прошел успешно!</div>
                    <div class="new">
                        В декабре прошел семинар Айкидо федерации Ametsuchi. Традиционно был выбран зал Ак Барс,
                        поскольку число участников снова бьет наши рекорды. Поздравляем всех успешно сдавших на пояс, а
                        тем, кому это не удалось желаем упорства и целеустремленности, ведь истинная сила рождается
                        именно здесь.

                    </div>
                </div>
            </div>
            <!-- <div class="transition">
                <img class="e_1" src="images/main/ellipse_yellow.png" alt="ellipse_yellow">
                <img class="e_2" src="images/main/ellipse_black.png" alt="ellipse_black">
                <img class="e_3" src="images/main/ellipse_yellow.png" alt="ellipse_yellow">
            </div> -->
        </div>
    </div>
    <?php include 'footer.php'; ?>

</body>

</html>