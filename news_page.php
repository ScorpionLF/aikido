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
    <div class="mobile-title">
            <div class="title-block">
                <div class="title">Новости</div>
                <div class="title-block-line"></div>
            </div>
        </div>
        <div class="news">
            <a class="block-news" onclick="document.getElementById('open_news_1').style.display='block'"> 
                <img class="block-news-img" src="images/new_6.jpg" onError="this.src='images/not_found.png'">
                <div class="block-news-title">Открываем новый сезон тренировок!</div>
                <div class="block-news-news">
                <?php echo (file_get_contents('./all_news/new_6.txt')); ?>
                    <div class="block-news-date">09.08.2023</div>
                </div>
            </a>  
            <div id="open_news_1" class="modal">
                <span onclick="document.getElementById('open_news_1').style.display='none'" class="close" title="Close Modal">&times;</span>     
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
            <a class="block-news" onclick="document.getElementById('open_news_2').style.display='block'"> 
                <img class="block-news-img" src="images/new_5.jpg" onError="this.src='images/not_found.png'">
                <div class="block-news-title">Ученики Ametsuchi отдыхают в Анапе</div>
                <div class="block-news-news">
                <?php echo (file_get_contents('./all_news/new_5.txt')); ?>
                    <div class="block-news-date">18.07.2022</div>
                </div>
            </a>  
            <div id="open_news_2" class="modal">
                <span onclick="document.getElementById('open_news_2').style.display='none'" class="close" title="Close Modal">&times;</span>     
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
            <a class="block-news" onclick="document.getElementById('open_news_3').style.display='block'"> 
                <img class="block-news-img" src="images/new_4.jpg" onError="this.src='images/not_found.png'">
                <div class="block-news-title">Ametsuchi посетил Сенсей Сергей Флоренко</div>
                <div class="block-news-news">
                <?php echo (file_get_contents('./all_news/new_3.txt')); ?>
                    <div class="block-news-date">22.06.2023</div>
                </div>
            </a>  
            <div id="open_news_3" class="modal">
                <span onclick="document.getElementById('open_news_3').style.display='none'" class="close" title="Close Modal">&times;</span>     
                <div class="modal-news-content">
                    <img class="modal__img" src="images/new_4.jpg" onError="this.src='images/not_found.png'">
                    <div class="block__news">
                        <div class="block-news-title">Ametsuchi посетил Сенсей Сергей Флоренко</div>
                        <p class="modal__news">
                            <?php echo (file_get_contents('./all_news/new_3.txt')); ?>
                        </p>
                    </div>
                </div> 
            </div> 
            <a class="block-news" onclick="document.getElementById('open_news_4').style.display='block'"> 
                <img class="block-news-img" src="images/new_1.jpg" onError="this.src='images/not_found.png'">
                <div class="block-news-title">Аттестованы!</div>
                <div class="block-news-news">
                    <?php echo (file_get_contents('./all_news/new_1.txt')); ?>
                    <div class="block-news-date">27.05.2023</div>
                </div>
            </a>  
            <div id="open_news_4" class="modal">
                <span onclick="document.getElementById('open_news_4').style.display='none'" class="close" title="Close Modal">&times;</span>     
                <div class="modal-news-content">
                    <img class="modal__img" src="images/new_1.jpg" onError="this.src='images/not_found.png'">
                    <div class="block__news">
                        <div class="block-news-title">Аттестованы!</div>
                        <p class="modal__news">
                            <?php echo (file_get_contents('./all_news/new_1.txt')); ?>
                        </p>
                    </div>
                </div> 
            </div> 
            <a class="block-news" onclick="document.getElementById('open_news_5').style.display='block'"> 
                <img class="block-news-img" src="images/new_2.jpg" onError="this.src='images/not_found.png'">
                <div class="block-news-title">Семинар Сенсея Халидова!</div>
                <div class="block-news-news">
                    <?php echo (file_get_contents('./all_news/new_2.txt')); ?>
                    <div class="block-news-date">14.05.2023</div>
                </div>
            </a>  
            <div id="open_news_5" class="modal">
                <span onclick="document.getElementById('open_news_5').style.display='none'" class="close" title="Close Modal">&times;</span>     
                <div class="modal-news-content">
                    <img class="modal__img" src="images/new_2.jpg" onError="this.src='images/not_found.png'">
                    <div class="block__news">
                        <div class="block-news-title">Семинар Сенсея Халидова!</div>
                        <p class="modal__news">
                            <?php echo (file_get_contents('./all_news/new_2.txt')); ?>
                        </p>
                    </div>
                </div> 
            </div> 
            <a class="block-news" onclick="document.getElementById('open_news_6').style.display='block'"> 
                <img class="block-news-img" src="images/new_3.jpg" onError="this.src='images/not_found.png'">
                <div class="block-news-title">Ушел Великий Мастер...</div>
                <div class="block-news-news">
                    <?php echo (file_get_contents('./all_news/new_4.txt')); ?>
                    <div class="block-news-date">26.04.2022</div>
                </div>
            </a>  
            <div id="open_news_6" class="modal">
                <span onclick="document.getElementById('open_news_6').style.display='none'" class="close" title="Close Modal">&times;</span>     
                <div class="modal-news-content">
                    <img class="modal__img" src="images/new_3.jpg" onError="this.src='images/not_found.png'">
                    <div class="block__news">
                        <div class="block-news-title">Ушел Великий Мастер...</div>
                        <p class="modal__news">
                            <?php echo (file_get_contents('./all_news/new_4.txt')); ?>
                        </p>
                    </div>
                </div> 
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