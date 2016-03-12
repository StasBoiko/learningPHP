	<html>
		<head>
			<title>Регистрация</title>
		</head>
		<body>
			<?php
				if (isset($_POST['register'])) {
					$name = trim(strip_tags($_POST['name']));
					$sname = trim(strip_tags($_POST['sname']));
					$login = trim(strip_tags($_POST['login']));
					$password = md5(trim(strip_tags($_POST['password'])));
					$email = trim(strip_tags($_POST['email']));
		
					$users = unserialize(file_get_contents("users.txt")); // читаем, переводим в нормальный вид
					$users[] = ["name" => "$name", "sname" => "$sname", "login" => "$login", 
								"password" => "$password", "email" => "$email"
								];
					file_put_contents("users.txt", serialize($users));  //положили назад и преобразовали в непонятный вид=)
	} else { ?>
					<form method = "POST" action = "<?=$_SERVER['PHP_SELF']?>">
							<input type = "text" name = "name" placeholder = "Имя" /><br />
							<input type = "text" name = "sname" placeholder = "Фамилия" /><br />					
							<input type = "text" name = "login" placeholder = "Логин"/><br />
							<input type = "password" name = "password" placeholder = "Пароль" /><br />
							<input type = "text" name = "email" placeholder = "email" /><br />
							<input type = "submit" name = "register" value = "Регистрация" />
					</form>
<?php 	} ?>
		</body>
	</html>