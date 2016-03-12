<?php
	if (isset($_POST["auth"])&& !isset($_COOKIE['login'])){
		$login = trim(strip_tags($_POST['login']));
		$password = trim(strip_tags($_POST['password']));
		setcookie("login", $login);
		header("Location:" . "auth.php");
		die();
	} 
	
	if (isset($_POST['exit'])) {
		setcookie("login", "", time()-3600);
		header("Location:" . $_SERVER['PHP_SELF']);
		die();
	}
?>
<html>
	<head>
		<title>Авторизация</title>
	</head>
	<body>
		<?php
			if (!isset($_COOKIE['login'])) { ?>
				
			
				<form method = "POST" action = "<?=$_SERVER['PHP_SELF']?>">
					<input type = "text" name = "login" /><br />
					<input type = "password" name = "password" /><br />
					<input type = "submit" name = "auth" value = "Вход" />
				</form>
			<? } else { ?>
					<form method = "POST" action = "<?=$_SERVER['PHP_SELF']?>">
					<input type = "submit" name = "exit" value = "Выход" />
					</form>
				
		<?php
				}
			?>
	</body>
</html>