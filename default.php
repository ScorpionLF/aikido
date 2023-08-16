<?php
$header = ' <header>
<div class="header-information">
    <div class="header-top-line"></div>
    <a class="header-information-logo" href="index">
        <img class="header-information-logo-img" src="images/logo.png" alt="logo">
        <div class="header-information-title"><strong>Ametsuchi Dojo</strong></div>
    </a>
    <!-- <a class="header-navigation-lk-img" href="#">             
        <img src="images/lk.png">
    </a> -->
<!-- ------------------menu smartphone----------------------- -->
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
<!-- ------------------menu desktop----------------------- -->
<div class="header-navigation-desktop">
    <div class="header-navigation-button">
        <a href="index" class="header-navigation-button-element">Главная</a>
    </div>
    <div class="header-navigation-button">
        <div class="header-navigation-button-dropdown">
            <button class="header-navigation-button-element">Айкидо</button>
            <div class="header-navigation-button-dropdown-content">
                <a href="history">История</a>
                <a href="terms">Термины</a>
                <a href="technique">Техники</a>
                <a href="principle">Принципы</a>
                <a href="etiquette">Этикет</a>
            </div>
        </div>
    </div>
    <div class="header-navigation-button">
        <div class="header-navigation-button-dropdown">
            <button class="header-navigation-button-element">Федерация</button>
            <div class="header-navigation-button-dropdown-content">
                <a href="club">О школе</a>
                <a href="instructors">Тренеры</a>
                <a href="documents">Документы</a>
                <a href="news_page">Новости</a>
            </div>
        </div>
    </div>
    <div class="header-navigation-button">
        <a href="schedule" class="header-navigation-button-element">Расписание</a>
    </div>
    <!-- <div class="header-navigation-button">
        <a href="gallery" class="header-navigation-button-element">Галерея</a>
    </div> -->
    <div class="header-navigation-button">
        <div class="header-navigation-button-dropdown">
            <button class="header-navigation-button-element">Галерея</button>
            <div class="header-navigation-button-dropdown-content">
                <a href="gallery">Фото</a>
                <a href="video-gallery">Видео</a>
            </div>
        </div>
    </div>
    <div class="header-navigation-button">
        <a href="contacts" class="header-navigation-button-element">Контакты</a>
    </div>
</div>
</header>'
?>