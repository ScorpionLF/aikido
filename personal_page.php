<?php session_start();?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/header_style.css">
    <link rel="stylesheet" href="css/personal_page.css">
    <link rel="stylesheet" href="css/footer_style.css">
    <link rel="stylesheet" href="css/style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Exo+2:wght@200&family=Inter&family=Roboto&display=swap"
        rel="stylesheet">
    <title>Личный кабинет</title>
</head>

<body>
    <?php include 'header.html'; ?>
    <div class="personal_page">
        <div class="i_title_div">
            <div class="title_page_i">Личные данные</div>
            <div class="yellow_line"></div>
        </div>
        <div class="block_personal_page">
            <div class="photo_personal">
                <img class="img_person" src="images/image.jpg" alt="">
            </div>
            <div class="block_person">
                <div class="fio">
                    <div class="request">ФИО:</div>
                    <div class="info">
                        <?php
                        $login = $_SESSION['login'];
                        $file_arr = file("users/data.csv");
        				$lines = count($file_arr);
                        for ($i = 0; $i < $lines; $i++) {
                            $line = explode(';', $file_arr[$i]);
        					if (strval($line[1]) == strval($login)) {
                                echo $line[2].' '.$line[3].' '.$line[4];
                            }
                        }
                         ?>
                    </div>
                </div>
                <div class="data">
                    <div class="request">Дата рождения:</div>
                    <div class="info">
                        <?php
                        $login = $_SESSION['login'];
                        $file_arr = file("users/data.csv");
        				$lines = count($file_arr);
                        for ($i = 0; $i < $lines; $i++) {
                            $line = explode(';', $file_arr[$i]);
        					if (strval($line[1]) == strval($login)) {
                                echo $line[5];
                            }
                        }
                         ?>
                    </div>
                </div>
                <div class="data">
                    <div class="request">Дата оформления страховки:</div>
                    <div class="info">
                        <?php
                        $login = $_SESSION['login'];
                        $file_arr = file("users/data.csv");
        				$lines = count($file_arr);
                        for ($i = 0; $i < $lines; $i++) {
                            $line = explode(';', $file_arr[$i]);
        					if (strval($line[1]) == strval($login)) {
                                echo $line[6];
                            }
                        }
                         ?>
                    </div>
                </div>
                <div class="data">
                    <div class="request">Дата окончания страховки:</div>
                    <div class="info">
                        <?php
                        $login = $_SESSION['login'];
                        $file_arr = file("users/data.csv");
        				$lines = count($file_arr);
                        for ($i = 0; $i < $lines; $i++) {
                            $line = explode(';', $file_arr[$i]);
        					if (strval($line[1]) == strval($login)) {
                                echo $line[7];
                            }
                        }
                         ?>
                    </div>
                </div>
                <!-- <div class="data">
                    <div class="input__wrapper">
                        <input name="file" type="file" id="input__file" class="input input__file" multiple>
                     </div>
                </div> -->
            </div>
        </div>
    </div>
    <?php include 'footer.php'; ?>
</body>

</html>
