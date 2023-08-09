<?php 
	//session_start();
?>
<?php
	//if (isset($_SESSION['login'])) {
	//	$login = $_SESSION['login'];
	//	if ($login == "admin") {
	//		header('Location:admin_page.php');
	//	} //else {
		//	header('Location:personal_page');
		//}
	//} else {
	//	extract($_POST);
//
	//	if(isset($_POST['submit'])) {
	//		$login = $_POST['login'];
	//		$password = $_POST['password'];
//
	//		if (empty($login) or empty($password)) {
	//			echo "Введите логин и пароль.";
	//		} else {
	//			// compare password with database
	//			$file_arr = file("users/users.csv");
	//			$lines = count($file_arr);
//
	//			for ($i = 0; $i < $lines; $i++) {
	//				// echo $i;
	//				$line = explode(';', $file_arr[$i]);
	//				if (strval($line[1]) != strval($login)) {
	//					if ($i + 1 == $lines) {
	//						header('Location:404');
	//					}
	//				} else {
	//					if (strval($line[2]) != strval($password)) {
	//						// echo '_'.$line[2].'_'.$password.'_';
	//						die("Неверный пароль.");
	//					} else {
	//						// setcookie("login", $login);
	//						$_SESSION['login']=$login;
//
	//						if ($login == "admin") {
	//							header('Location:admin_page');
	//						} else {
	//							header('Location:personal_page');
	//						}
	//					}
	//				}
	//			}
	//		}
	//	}
//	}
?>

<?php
session_start(); //Запускаем сессии

class AuthClass {
    private $_login = "admin"; //Устанавливаем логин
    private $_password = "admin"; //Устанавливаем пароль

    /**
     * Проверяет, авторизован пользователь или нет
     * Возвращает true если авторизован, иначе false
     */
    public function isAuth() {
        if (isset($_SESSION["is_auth"])) { //Если сессия существует
            return $_SESSION["is_auth"]; //Возвращаем значение переменной сессии is_auth (хранит true если авторизован, false если не авторизован)
        }
        else return false; //Пользователь не авторизован, т.к. переменная is_auth не создана
    }
    
    /**
     * Авторизация пользователя
     * $login
     * $passwors 
     */
    public function auth($login, $passwors) {
        if ($login == $this->_login && $passwors == $this->_password) { //Если логин и пароль введены правильно
            $_SESSION["is_auth"] = true; //Делаем пользователя авторизованным
            $_SESSION["login"] = $login; //Записываем в сессию логин пользователя
			if ($login == "admin") {
				header("Location: admin_page");
			}
            return true;
        }
        else { //Логин и пароль не подошел
            $_SESSION["is_auth"] = false;
            return false; 
        }
    }
    
    /**
     * Метод возвращает логин авторизованного пользователя 
     */
    public function getLogin() {
        if ($this->isAuth()) { //Если пользователь авторизован
            return $_SESSION["login"]; //Возвращаем логин, который записан в сессию
        }
    }
    
    
    public function out() {
        $_SESSION = array(); //Очищаем сессию
        session_destroy(); //Уничтожаем
    }
}

$auth = new AuthClass();

if (isset($_POST["login"]) && isset($_POST["password"])) { //Если логин и пароль были отправлены
    if (!$auth->auth($_POST["login"], $_POST["password"])) { //Если логин и пароль введен не правильно
        echo "<h2 style='color:red;'>Логин и пароль введен не правильно!</h2>";
    }
}

if (isset($_GET["is_exit"])) { //Если нажата кнопка выхода
    if ($_GET["is_exit"] == 1) {
        $auth->out(); //Выходим
        header("Location: index"); //Редирект после выхода
    }
}

?>

<?php 
if ($auth->isAuth()) { // Если пользователь авторизован, приветствуем:  
    echo "Здравствуйте, " . $auth->getLogin() ;
    echo "<br/><br/><a href='?is_exit=1'>Выйти</a>"; //Показываем кнопку выхода
} 
else { //Если не авторизован, показываем форму ввода логина и пароля
?>

<form method="post" action="">
    Логин: <input type="text" name="login" 
    value="<?php echo (isset($_POST["login"])) ? $_POST["login"] : null; // Заполняем поле по умолчанию ?>" />
    <br/>
    Пароль: <input type="password" name="password" value="" /><br/>
    <input type="submit" value="Войти" />
</form>

<?php 
} 
