<?php session_start();?>
<?php
	extract($_POST);

	if(isset($_POST['submit'])) {
		$login = $_POST['login'];
		$password = $_POST['password'];

		if (empty($login) or empty($password)) {
			echo "Введите логин и пароль.";
		} else {
			$filename = $login . ".csv";

			// check file existion
			if (@fopen("users/" . $filename, "r")) {
				$f = fopen("users/" . $filename, 'r');

				if ($f === false) {
					die('Error opening the file ' . $filename);
				}

				// compare password with database
				if (($buffer = fgets($f, 100)) !== false) {
					$old_pass = (explode(';', $buffer))[0];
					if ($old_pass !== $password) {
						echo "Неверный пароль.";
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

				// close the file
				fclose($f);
			} else {
				die("Неверный логин.");
			}
		}
	}
?>
