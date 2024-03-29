<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/instructors_style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Exo+2:wght@200&family=Inter&family=Roboto&display=swap"
        rel="stylesheet">
    <title>Тренеры</title>
    <link type="Image/x-icon" href="images/favicon.png" rel="icon">
</head>
</head>

<body>
    <?php include 'header.php'; ?>
    <main>
        <div class="mobile-title">
            <div class="title-block">
                <div class="title">Тренеры</div>
                <div class="title-block-line"></div>
            </div>
        </div>
        <div class="treners">
            <div class="block-trener">
                <img class="block-trener-photo" src="images/instructor_1.jpg" onError="this.src='images/not_found.png'">
                <div class="block-trener-information">
                    <div class="block-trener-information-name"><strong>Белоусов Евгений Набиевич</strong></div>
                    <div class="block-trener-information-dan">
                        4 дан Айкидо Айкикай
                    </div>
                </div>
            </div>

            <div class="block-trener">
                <img class="block-trener-photo" src="images/instructor_2.jpg" onError="this.src='images/not_found.png'">
                <div class="block-trener-information">
                    <div class="block-trener-information-name"><strong>Гисмятов Рамис Расыхович</strong></div>
                    <div class="block-trener-information-dan">
                        1 дан Айкидо Айкикай
                    </div>
                </div>
            </div>

            <div class="block-trener">
                <img class="block-trener-photo" src="images/instructor_3.jpg" onError="this.src='images/not_found.png'">
                <div class="block-trener-information">
                    <div class="block-trener-information-name"><strong>Утяганов Руслан Анварович</strong></div>
                    <div class="block-trener-information-dan">
                        1 дан Айкидо Айкикай
                    </div>
                </div>
            </div>

            <div class="block-trener">
                <img class="block-trener-photo" src="images/instructor_4.jpg" onError="this.src='images/not_found.png'">
                <div class="block-trener-information">
                    <div class="block-trener-information-name"><strong>Белоусов Андрей Евгеньевич</strong></div>
                    <div class="block-trener-information-dan">
                        1 дан Айкидо Айкикай
                    </div>
                </div>
            </div>
</div>
    </main>
    <?php include 'footer.php'; ?>
</body>

</html>