<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/timetable_style.css">
    <link rel="stylesheet" href="css/header_style.css">
    <link rel="stylesheet" href="css/footer_style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Exo+2:wght@200&family=Inter&family=Roboto&display=swap"
        rel="stylesheet">
    <title>Расписание</title>
</head>

<body>
    <?php include 'header.html'; ?>
    <!-- <header>
        <div class="cap">
            <div class="line"></div>
            <div class="logo" id="logo">
                <img class="logo_img" src="images/logo.png" alt="logo">
            </div>
            <div class="slogan_center" id="slogan_center">
                <div class="title_slogan"><strong>Ametsuchi Dojo</strong></div>
                <div class="slogan">Энергия непреодолимой силы</div>
            </div>
            <div class="contact" id="contact">
                Казань: ул. Ямашева 36
                <br>Телефон: +7 (999) 999-99-99
            </div>
        </div>
        <div class="menu">
            <div class="menu-line"></div>
            <div class="buttons">
                <div class="m_button">
                    <button class="menu_button">Главная</button>
                </div>
                <div class="m_button">
                    <div class="dropdown">
                        <button class="menu_button">Айкидо</button>
                        <div class="dropdown-content">
                            <a href="#">История</a>
                            <a href="#">Термины</a>
                            <a href="#">Техники</a>
                            <a href="#">Принципы</a>
                            <a href="#">Этикет</a>
                        </div>
                    </div>
                </div>
                <div class="m_button">
                    <div class="dropdown">
                        <button class="menu_button">Федерация</button>
                        <div class="dropdown-content">
                            <a href="#">О школе</a>
                            <a href="#">Инструкторы</a>
                            <a href="#">Расписание</a>
                            <a href="#">Документы</a>
                        </div>
                    </div>
                </div>
                <div class="m_button">
                    <button class="menu_button">Расписание</button>
                </div>
                <div class="m_button">
                    <button class="menu_button">Галерея</button>
                </div>
            </div>
        </div>
    </header> -->

    <div class="main">
        <div class="i_title_div">
            <div class="title_page_i">Расписание</div>
            <div class="line_line"></div>
        </div>
        <div class="timetable">
            <div class="timetable_left_div">
                <div class="table_info">
                    <div class="title-page-t">Казань</div>
                    <div class="adress">Ул. Ямашева, д. 36 <br>Белоусов Е.Н.</div>
                </div>
                <div class="table">
                    <table>
                        <tr>
                            <th>Дни недели</th>
                            <th>Детская группа</th>
                            <th>Взрослая группа</th>
                        </tr>
                        <tr>
                            <th>Понедельник</th>
                            <th>18.00 - 19.00</th>
                            <th>19.00 - 21.00</th>
                        </tr>
                        <tr>
                            <th>Среда</th>
                            <th>18.00 - 19.00</th>
                            <th>19.00 - 21.00</th>
                        </tr>
                        <tr>
                            <th>Пятница</th>
                            <th>18.00 - 19.00</th>
                            <th>19.00 - 21.00</th>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="timetable_right_div">
                <div class="maps">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1120.4904545474737!2d49.10169281735697!3d55.8282906571291!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x415952ae457ec33f%3A0x942bb741ea0d311!2z0L_RgC3Rgi4g0KXRg9GB0LDQuNC90LAg0K_QvNCw0YjQtdCy0LAsIDM2LCDQmtCw0LfQsNC90YwsINCg0LXRgdC_LiDQotCw0YLQsNGA0YHRgtCw0L0sIDQyMDA0NA!5e0!3m2!1sru!2sru!4v1675417328707!5m2!1sru!2sru"
                        width="700" height="400" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>

    </div>
    <!-- <footer>
        <div class="footer">
            <div class="footer_one_div" id="footer_one_div">
                <div class="footer-text">Региональная общественная организация “Федерация Айкидо “Аметсучи” по
                    республике
                    Татарстан”
                </div>
                <div class="alyans">
                    Разработка и поддержка сайта IT-компания "Альянс"
                </div>
            </div>
            <div class="footer_second_div" id="footer_second_div">
                <div class="button_footer">
                    <input type="image" class="youtube" src="images/youtube.png" alt="youtube">
                    <input type="image" class="vk" src="images/vk.png" alt="vk">
                    <button class="sign">Вход</button>
                </div>
                <div class="law">Федерация Айкидо Ametsuchi Dojo © 2023. Все права защищены.</div>
            </div>
        </div>
    </footer> -->
    <?php include 'footer.php'; ?>
</body>

</html>