<?php session_start();?>
<?php
	if (isset($_SESSION['login'])) {
		$login = $_SESSION['login'];
		if ($login == "admin") {
			header('Location:admin_page.php');
		} else {
			header('Location:personal_page.php');
		}
	} else {
		extract($_POST);

		if(isset($_POST['submit'])) {
			$login = $_POST['login'];
			$password = $_POST['password'];

			if (empty($login) or empty($password)) {
				echo "Введите логин и пароль.";
			} else {
				// compare password with database
				$file_arr = file("users/users.csv");
				$lines = count($file_arr);

				for ($i = 0; $i < $lines; $i++) {
					echo $i;
					$line = explode(';', $file_arr[$i]);
					if (strval($line[0]) != strval($login)) {
						if ($i + 1 == $lines) {
							die("Неверный логин.");
						}
					} else {
						if (strval($line[1]) != strval($password)) {
							echo '_'.$line[1].'_'.$password.'_';
							die("Неверный пароль.");
						} else {
							// setcookie("login", $login);
							$_SESSION['login']=$login;

							if ($login == "admin") {
								header('Location:admin_page.php');
							} else {
								header('Location:personal_page.php');
							}
						}
					}
				}
			}
		}
	}
?>
