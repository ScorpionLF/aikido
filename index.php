
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/header_style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Exo+2:wght@200&family=Inter&family=Roboto&display=swap"
        rel="stylesheet">
    <title>Главная</title>
    <link type="Image/x-icon" href="images/logo.png" rel="icon">
</head>

<body>
    <?php 
        require 'default.php';
        echo $header;
    ?>
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
            <div class="mobile-title">
                <div class="title-block">
                    <div class="title">О Федерации</div>
                    <div class="title-block-line"></div>
                </div>
            </div>
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
                <a href="news_page" style="text-decoration: none;">
                    <div class="block-index-news">
                        <img class="block-index-news-img" src="images/new_6.jpg" onError="this.src='images/not_found.png'">
                        <div class="block-index-news-title">Открываем новый сезон тренировок!</div>
                        <div class="block-index-news-news">
                            Федерация Айкидо Ametsuchi Dojo объявляет набор в детские группы.
                        </div>
                        <input class="block__hidden" type="checkbox" id="is_hidden">
                        <label for="is_hidden">Прочитать всё.</label>
                        <div class="hidden__news">
                            <?php echo (file_get_contents('./all_news/new_6.txt')); ?>
                        </div>
                    </div>
                </a>
                <a href="news_page" style="text-decoration: none;">
                    <div class="block-index-news">
                        <img class="block-index-news-img" src="images/new_5.jpg" onError="this.src='images/not_found.png'">
                        <div class="block-index-news-title">Ученики Ametsuchi отдыхают в Анапе</div>
                        <div class="block-index-news-news">
                            Ученики Ametsuchi отдыхают в Анапе на берегу черного моря.
                        </div>
                        <input class="block__hidden" type="checkbox" id="is_hidden_2">
                        <label for="is_hidden_2">Прочитать всё.</label>
                        <div class="hidden__news">
                            <?php echo (file_get_contents('./all_news/new_5.txt')); ?>
                        </div>
                    </div>
                </a>
                <a href="news_page" style="text-decoration: none;">
                    <div class="block-index-news">
                        <img class="block-index-news-img" src="images/new_2.jpg" onError="this.src='images/not_found.png'">
                        <div class="block-index-news-title">Семинар Сенсея Халидова!</div>
                        <div class="block-index-news-news">
                            Прошел 4-й международный семинар Айкидо под руководством Сенсея Халидова!
                        </div>
                        <input class="block__hidden" type="checkbox" id="is_hidden_3">
                        <label for="is_hidden_3">Прочитать всё.</label>
                        <div class="hidden__news">
                            <?php echo (file_get_contents('./all_news/new_2.txt')); ?>
                        </div>
                    </div>
                </a>
            </section>
    </main>
    <?php include 'footer.php'; ?>

</body>
</html>