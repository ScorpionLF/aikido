<!DOCTYPE html>
<html lang="ru">
<?php
require_once "session.php";
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/news.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Exo+2:wght@200&family=Inter&family=Roboto&display=swap"
        rel="stylesheet">
    <title>Главная</title>
    <link type="Image/x-icon" href="images/logo.png" rel="icon">
</head>

<body>
    <?php include 'header.php'; ?>
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
        <a class="block-index-news" onclick="document.getElementById('open_news_6').style.display='block'"> 
                <img class="block-index-news-img" src="images/new_3.jpg" onError="this.src='images/not_found.png'">
                <div class="block-news-title">Мастер-класс по Айкидо</div>
                <div class="block-news-news">
                    <?php echo (file_get_contents('./all_news/news_7.txt')); ?>
                </div>
            </a>  
            <div id="open_news_6" class="modal">
                <span onclick="document.getElementById('open_news_6').style.display='none'" class="close-news" title="Close Modal">&times;</span>     
                <div class="modal-news-content">
                    <img class="modal__img" src="images/new_3.jpg" onError="this.src='images/not_found.png'">
                    <div class="block__news">
                        <div class="block-news-title">Мастер-класс по Айкидо</div>
                        <p class="modal__news">
                            <?php echo (file_get_contents('./all_news/news_7.txt')); ?>
                        </p>
                    </div>
                </div> 
            </div> 
            <a class="block-index-news" onclick="document.getElementById('open_news_1').style.display='block'"> 
                <img class="block-index-news-img" src="images/new_6.jpg" onError="this.src='images/not_found.png'">
                <div class="block-news-title">Открываем новый сезон тренировок!</div>
                <div class="block-news-news">
                <?php echo (file_get_contents('./all_news/new_6.txt')); ?>
                </div>
            </a>  
            <div id="open_news_1" class="modal">
                <span onclick="document.getElementById('open_news_1').style.display='none'" class="close-news" title="Close Modal">&times;</span>     
                <div class="modal-news-content">
                    <img class="modal__img" src="images/new_6.jpg" onError="this.src='images/not_found.png'">
                    <div class="block__news">
                        <div class="block-news-title">Открываем новый сезон тренировок!</div>
                        <p class="modal__news">
                            <?php echo (file_get_contents('./all_news/new_6.txt')); ?>
                        </p>
                    </div>
                </div> 
            </div> 
            <a class="block-index-news" onclick="document.getElementById('open_news_2').style.display='block'"> 
                <img class="block-index-news-img" src="images/new_5.jpg" onError="this.src='images/not_found.png'">
                <div class="block-news-title">Ученики Ametsuchi отдыхают в Анапе</div>
                <div class="block-news-news">
                <?php echo (file_get_contents('./all_news/new_5.txt')); ?>
                </div>
            </a>  
            <div id="open_news_2" class="modal">
                <span onclick="document.getElementById('open_news_2').style.display='none'" class="close-news" title="Close Modal">&times;</span>     
                <div class="modal-news-content">
                    <img class="modal__img" src="images/new_5.jpg" onError="this.src='images/not_found.png'">
                    <div class="block__news">
                        <div class="block-news-title">Ученики Ametsuchi отдыхают в Анапе</div>
                        <p class="modal__news">
                            <?php echo (file_get_contents('./all_news/new_5.txt')); ?>
                        </p>
                    </div>
                </div> 
            </div> 
        </section>
        <a class="href-news" href="news_page">< Все новости ></a>
    </main>
    <?php include 'footer.php'; ?>
</body>
</html>