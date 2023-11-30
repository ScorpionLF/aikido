<?php
// start the session
session_start();

// if the user is already logged in then redirect user to welcome page



// if (isset($_SESSION["userid"]) && $_SESSION["userid"] === true) {
if (!isset($_SESSION["user"])) {
	// echo $_SESSION["userid"];
	// exit;
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/footer_style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Exo+2:wght@200&family=Inter&family=Roboto&display=swap"
        rel="stylesheet">
    <title>footer</title>
</head>

<body>
    <footer>
        <div class="footer">
            <div class="block-footer-indormation">
                <div class="block-footer-indormation-text-1">Региональная общественная организация “Федерация Айкидо
                    “Аметсучи” по
                    республике
                    Татарстан”
                </div>
                <div class="footer-block-contacts-infoline">
                    <img class="footer-block-contacts-icon" src="images/location.png">
                    <div class="footer-block-contacts-text">г. Казань, ул. Ямашева, д. 36</div>
                </div>
                <div class="footer-block-contacts-infoline">
                    <img class="footer-block-contacts-icon" src="images/call.png">
                    <div class="footer-block-contacts-text">+7 (917) 228-75-32</div>
                </div>
                <div class="footer-block-contacts-infoline">
                    <img class="footer-block-contacts-icon" src="images/device-message.png">
                    <a href="https://m.vk.com/aikidopower">
                        <div class="footer-block-contacts-text">https://m.vk.com/aikidopower</div>
                    </a>
                </div>
                <div class="footer-block-contacts-infoline">
                    <img class="footer-block-contacts-icon" src="images/video-square.png">
                    <a href="https://www.youtube.com/@ametsuchidojokazan">
                        <div class="footer-block-contacts-text">https://www.youtube.com/@ametsuchidojokazan</div>
                    </a>
                </div>
                <div class="block-footer-indormation-text-2">Разработка и поддержка сайта IT-компания "Альянс" ©<?php echo date("Y"); ?>. 
                    Все права
                    защищены.</div>
            </div>
            <div class="block-footer-buttons">
                <div class="block-footer-buttons-elements">
                    <a href="https://www.youtube.com/@ametsuchidojokazan">
                        <input type="image" class="block-footer-buttons-element" src="images/href_yt.svg" alt="youtube">
                    </a>
                    <a href="https://m.vk.com/aikidopower">
                        <input type="image" class="block-footer-buttons-element" src="images/href_vk.svg" alt="vk">
                    </a>
                    <a href="https://t.me/aikidopower">
                        <input type="image" class="block-footer-buttons-element" src="images/href_tg.svg" alt="vk">
                    </a>
                    <?php
                    if (isset($_SESSION['user'])) {
                        ?>
                        <a href="logout" class="footer-button">Выйти</a>
                        <?php
                    } else {
                        ?>
                        <button class="footer-button" onclick="document.getElementById('open').style.display='block'">Вход</button>                 
                        <div id="open" class="modal">
                            <span onclick="document.getElementById('open').style.display='none'" class="close" title="Close Modal">&times;</span>     
                            <form class="modal-content animate" action="login.php" method="post">
                                <div class="img-container">
                                    <img src="images/japan.jpg" onError="this.src='images/not_found.png'" class="avatar">
                                </div>            
                                <div class="container">
                                    <span class="block-modalWindow-dialog-body-forms-group-title">Логин или e-mail <span>*</span></span>
                                    <input id="login" type="text" name="login">
                                    <span class="block-modalWindow-dialog-body-forms-group-title">Пароль <span>*</span></span>
                                    <input id="password" type="password" name="password">
                                    <button class="modal-button" type="submit" name="submit">ВОЙТИ</button>
                                </div>
                            </form>
                        </div> 
                        <script>
                            var modal = document.getElementById('open');
                            // When the user clicks anywhere outside of the modal, close it.
                            window.onclick = function(event) {
                                if (event.target == modal) {
                                    modal.style.display = "none";
                                }
                            }
                        </script> 
                        <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>