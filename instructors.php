<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/instructors_style.css">
    <link rel="stylesheet" href="css/header_style.css">
    <link rel="stylesheet" href="css/footer_style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Exo+2:wght@200&family=Inter&family=Roboto&display=swap"
        rel="stylesheet">
    <title>Тренеры</title>
    <link type="image/x-icon" href="images/favicon.png" rel="shortcut icon">
    <link type="Image/x-icon" href="images/favicon.png" rel="icon"></head>
</head>

<body>
    <?php include 'header.html'; ?>

    <div class="main">
        <div class="treners">
            <div class="block">
                <img class="foto_1"  src="images/instructor_1.jpg"  onError="this.src='images/not_found.png'">
                <div class="block_info_left">
                    <div class="name_left"><strong>Белоусов Евгений Набиевич</strong></div>
                    <div class="info_i_left">
                        4 дан Айкидо Айкикай
                    </div>
                </div>
            </div>

            <div class="block">
            <img class="foto_1"  src="images/instructor_2.jpg"  onError="this.src='images/not_found.png'">
                <div class="block_info_right">
                    <div class="name_right"><strong>Гисмятов Рамис Расыхович</strong></div>
                    <div class="info_i_right">
                        1 дан Айкидо Айкикай
                    </div>
                </div>
            </div>

            <div class="block">
            <img class="foto_1"  src="images/instructor_3.jpg"  onError="this.src='images/not_found.png'">
                <div class="block_info_left">
                    <div class="name_left"><strong>Утяганов Руслан Анварович</strong></div>
                    <div class="info_i_left">
                        1 дан Айкидо Айкикай
                    </div>
                </div>
            </div>

            <div class="block">
            <img class="foto_1"  src="images/instructor_4.jpg"  onError="this.src='images/not_found.png'">
                <div class="block_info_right">
                    <div class="name_right"><strong>Белоусов Андрей Евгениевич</strong></div>
                    <div class="info_i_right">
                        1 дан Айкидо Айкикай
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include 'footer.php'; ?>
</body>

</html>