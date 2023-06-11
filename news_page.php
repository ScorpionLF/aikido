<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/news.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Exo+2:wght@200&family=Inter&family=Roboto&display=swap"
        rel="stylesheet">
    <title>Новости</title>
    <link type="Image/x-icon" href="images/favicon.png" rel="icon">
</head>
</head>

<body>
    <?php include 'header.html'; ?>
    <main>
        <div class="news">
            <div class="block-news">
                <img class="block-news-img" src="images/new_1.jpg" onError="this.src='images/not_found.png'">
                <div class="block-news-title">Аттестованы!</div>
                <div class="block-news-news">
                    <?php echo (file_get_contents('./all_news/new_1.txt')); ?>
                    <div class="block-news-date">27.05.2023</div>
                </div>
            </div>
            <div class="block-news">
                <img class="block-news-img" src="images/new_2.jpg" onError="this.src='images/not_found.png'">
                <div class="block-news-title">Семинар Сенсея Халидова!</div>
                <div class="block-news-news">
                    <?php echo (file_get_contents('./all_news/new_2.txt')); ?>
                    <div class="block-news-date">14.05.2023</div>
                </div>
            </div>
            <div class="block-news">
                <img class="block-news-img" src="images/new_3.jpg" onError="this.src='images/not_found.png'">
                <div class="block-news-title">Ушел Великий Мастер...</div>
                <div class="block-news-news">
                    <?php echo (file_get_contents('./all_news/new_3.txt')); ?>
                    <div class="block-news-date">26.04.2022</div>
                </div>
            </div>
            <div class="block-news">
                <img class="block-news-img" src="images/new_4.jpg" onError="this.src='images/not_found.png'">
                <div class="block-news-title">Президент Федерации Айкидо Узбекистана...</div>
                <div class="block-news-news">
                    <div class="block-news-date">07.03.2023</div>
                </div>
            </div>
            <div class="block-news">
                <img class="block-news-img" src="images/new_5.jpg" onError="this.src='images/not_found.png'">
                <div class="block-news-title">С днем Защитника Отечества!</div>
                <div class="block-news-news">
                    <div class="block-news-date">23.02.2022</div>
                </div>
            </div>
            <div class="block-news">
                <img class="block-news-img" src="images/new_6.jpg" onError="this.src='images/not_found.png'">
                <div class="block-news-title">Семинар Айкидо прошел успешно!</div>
                <div class="block-news-news">
                    <div class="block-news-date">30.12.2022</div>
                </div>
            </div>
            <!-- <div class="block-news">
                <img class="block-news-img" src="images/new_7.jpg" onError="this.src='images/not_found.png'">
                <div class="block-news-title">Семинар Айкидо прошел успешно!</div>
                <div class="block-news-news">
                    <?php echo (file_get_contents('./all_news/new_7.txt')); ?>
                    <div class="block-news-date">30.12.2022</div>
                </div>
            </div>
            <div class="block-news">
                <img class="block-news-img" src="images/new_8.jpg" onError="this.src='images/not_found.png'">
                <div class="block-news-title">Аттестованы!</div>
                <div class="block-news-news">
                    <?php echo (file_get_contents('./all_news/new_8.txt')); ?>
                    <div class="block-news-date">30.12.2022</div>
                </div>
            </div>
            <div class="block-news">
                <img class="block-news-img" src="images/new_9.jpg" onError="this.src='images/not_found.png'">
                <div class="block-news-title">Семинар Айкидо прошел успешно!</div>
                <div class="block-news-news">
                    <?php echo (file_get_contents('./all_news/new_9.txt')); ?>
                    <div class="block-news-date">30.12.2022</div>
                </div>
            </div> -->
        </div>
        <div class="block-news-transitions">
            <div class="block-news-transitions-arrow">
                < </div>
                    <div class="block-news-transitions-number-page">1 </div>
                    <div class="block-news-transitions-number-page">2 </div>
                    <div class="block-news-transitions-number-page">3 </div>
                    <div class="block-news-transitions-arrow">></div>
            </div>
    </main>

    <?php include 'footer.php'; ?>
</body>

</html>