<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/header_style.css">
    <link rel="stylesheet" href="css/footer_style.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Exo+2:wght@200&family=Inter&family=Roboto&display=swap"
        rel="stylesheet">
    <title>Главная</title>
    <!-- <link type="image/x-icon" href="images/favicon.png" rel="shortcut icon"> -->
    <link type="Image/x-icon" href="images/favicon.png" rel="icon">
</head>
</head>

<body>
    <?php include 'header.html'; ?>
    <main>
        <section class="index-composition">
            <div class="block-composition-left">
                <img class="block-composition-left-img" src="images/sensei.png" alt="composition-img-1">
            </div>
            <div class="block-composition-center">
                <div>
                    <div class="block-composition-center-line"></div>
                    <div class="block-composition-center-text">Настоящая победа - это победа над самим собой.</div>
                    <div class="block-composition-center-line"></div>
                </div>
            </div>
            <div class="block-composition-right">
                <img class="block-composition-right-img" src="images/aikido_logo.png" alt="composition-img-2">
            </div>
        </section>
        <section class="index-information">
            <div class="index-information-title">О Федерации</div>
            <div class="index-information-text">
                <p>Федерация Айкидо Ametsuchi Dojo входит во Всестилевую Федерацию Айкидо России.
                    Поэтому все ученики проходят ежегодную аттестацию в Москве или Санкт-Петербурге. Является
                    организатором
                    крупных международных фестивалей Айкидо в Казани, с участием ведущих сенсеев России и зарубежья.
                    Каждый
                    ученик проходит все мастер-классы данных фестивалей.</p>
                <p>Обучая вас самозащите, мы не воспитываем
                    агрессию,
                    не культивируем идею насилия в ответ насилию. Это позволяет сохранять спокойствие и уверенность в
                    любой
                    ситуации,
                    в духе наследия Великого Мастера Уэсиба Морихей, который создал это единоборство после долгих лет
                    совершенствования тела и духа.</p>
            </div>
        </section>
        <section class="index-news">
            <div class="block-index-news">
                <img class="block-index-news-img" src="images/new_1.jpg" onError="this.src='images/not_found.png'">
                <div class="block-index-news-title">Константиновка, набор в новую детскую группу айкидо!</div>
                <div class="block-index-news-news">
                    <?php echo (file_get_contents('./all_news/new_1.txt')); ?>
                </div>
            </div>
            <div class="block-index-news">
                <img class="block-index-news-img" src="images/new_2.jpg" onError="this.src='images/not_found.png'">
                <div class="block-index-news-title">Аттестованы!</div>
                <div class="block-index-news-news">
                    В конце мая прошла плановая аттестация учеников Ametsuchi Dojo. Сенсеи федерации во главе с
                    Белоусовым Евгением Набиевичем были очень строги и "сдать на пояс" удалось единицам. Хотя число
                    участников было небывало большим - мероприятия заняло весь день. Мы поздравляем всех: и тех кто
                    "защитил свой пояс" и тех, кто получил новый. Вы и есть Ametsuchi. На вас равняется федерация.
                    До новых побед!

                </div>
            </div>
            <div class="block-index-news">
                <img class="block-index-news-img" src="images/new_3.jpg" onError="this.src='images/not_found.png'">
                <div class="block-index-news-title">Семинар Айкидо прошел успешно! </div>
                <div class="block-index-news-news">
                    В декабре прошел семинар Айкидо федерации Ametsuchi. Традиционно был выбран зал Ак Барс,
                    поскольку число участников снова бьет наши рекорды. Поздравляем всех успешно сдавших на пояс, а
                    тем, кому это не удалось желаем упорства и целеустремленности, ведь истинная сила рождается
                    именно здесь.

                </div>
            </div>
        </section>
    </main>
    <?php include 'footer.php'; ?>

</body>

</html>