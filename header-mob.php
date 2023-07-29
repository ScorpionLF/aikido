<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/header_style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Exo+2:wght@200&family=Inter&family=Roboto&display=swap"
        rel="stylesheet">
    <title>header</title>
    <link type="Image/x-icon" href="images/logo.png" rel="icon">
</head>

<body>
    <header>
        <div class="header-information">
            <div class="header-top-line"></div>
            <a class="header-information-logo" href="index">
                <img class="header-information-logo-img" src="images/logo.png" alt="logo">
                <div class="header-information-title"><strong>Ametsuchi Dojo</strong></div>
            </a>
            <div class="header-sign-in">

                <button onclick="document.getElementById('open-hed').style.display='block'" class="header-navigation-lk-img" href="sign-in">             
                    <img src="images/lk.png">
                </button>
                
                <!-- <button class="footer-button" onclick="document.getElementById('open').style.display='block'">Вход</button>                  --> -->
                <div id="open" class="header-modal">
                    <span onclick="document.getElementById('open-hed').style.display='none'" class="header-close" title="Close Modal">&times;</span>     
                    <form class="header-modal-content animate" action="login_script.php">
                        <div class="header-img-container">
                            <img src="images/japan.jpg" onError="this.src='images/not_found.png'" class="header-avatar">
                        </div>            
                        <div class="header-container">
                            <span class="block-modalWindow-dialog-body-forms-group-title">Логин или e-mail <span>*</span></span>
                            <input type="text" name="login">
                            <span class="block-modalWindow-dialog-body-forms-group-title">Пароль <span>*</span></span>
                            <input type="password" name="password">
                            <button class="header-modal-button" type="submit">ВОЙТИ</button>
                        </div>
                    </form>
                </div> 
                <script>
                    var modal = document.getElementById('open-hed');
                    // When the user clicks anywhere outside of the modal, close it.
                    window.onclick = function(event) {
                        if (event.target == modal) {
                            modal.style.display = "none";
                        }
                    }
                    </script> 
</div> 

            <nav class="main-nav-hamburger-menu">
                  <input id="menu__toggle" type="checkbox" />
                  <label class="menu__btn" for="menu__toggle">
                    <span></span>
                  </label>
                <ul class="menu__box">
                    <li><a class="menu__item" href="index">Главная</a></li>
                    <details>
                        <summary class="menu__item">Айкидо</summary>
                        <div class="header-navigation-buttons-dropdown">
                            <ul>
                                <li><a class="menu__item" href="history">История</a></li>
                                <li><a class="menu__item" href="terms">Термины</a></li>
                                <li><a class="menu__item" href="technique">Техники</a></li>
                                <li><a class="menu__item" href="principle">Принципы</a></li>
                                <li><a class="menu__item" href="etiquette">Этикет</a></li>
                            </ul>
                        </div>
                    </details>
                    <details>
                        <summary class="menu__item">Федерация</summary>
                        <div class="header-navigation-buttons-dropdown">
                            <ul>
                                <li><a class="menu__item" href="club">О школе</a></li>
                                <li><a class="menu__item" href="instructors">Тренеры</a></li>
                                <li><a class="menu__item" href="documents">Документы</a></li>
                                <li><a class="menu__item" href="news_page">Новости</a></li>
                            </ul>
                        </div>
                    </details>                   
                    <li><a class="menu__item" href="schedule">Расписание</a></li>
                    <!-- <li><a class="menu__item" href="gallery">Галерея</a></li> -->
                    <details>
                        <summary class="menu__item">Галерея</summary>
                        <div class="header-navigation-buttons-dropdown">
                            <ul>
                                <li><a class="menu__item" href="gallery">Фото</a></li>
                                <li><a class="menu__item" href="video-gallery">Видео</a></li>
                            </ul>
                        </div>
                    </details>      
                    <li><a class="menu__item" href="contacts">Контакты</a></li>
                </ul>
                </nav>
            <div class="header-information-contacts">
                Казань: ул. Ямашева, 36
                <br>Телефон: +7(917) 228-75-32
            </div>
        </div>
        <div class="header-bottom-line"></div>
        </header>
</body>

</html>