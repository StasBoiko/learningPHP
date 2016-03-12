<? 
	if(isset($_POST["auth"]) && !isset($_COOKIE['login'])){
		$login=trim(strip_tags($_POST['login']));
		$passwd=trim(strip_tags($_POST['passwd']));
		setcookie("login",$login);
		header("Location: "."index.php");
		die();
	}
?>

<?

	if(isset($_POST['login'])){
		
		setcookie("login","" , time()-3600);
		
		header("Location: "."index.php");
		die();
	};
?>


<DOCTYPE html>
<html>
<head>
	<title>Avtorizaciaa</title>
</head>
<body>

	<? if (isset($_COOKIE['login'])) {?>
		<form method="POST" action="<?=$_SERVER['PHP_SELF']?>">
		
		<input type="submit" name="exit" value="VIHOD">
	</form>

	<?}else{?>

	<form method="POST" action="<?=$_SERVER['PHP_SELF']?>">
	<input type="text" name="login" /><br/>
	<input type="password" name="passwd" /><br/>
	<input type="submit"  value="VHOD" />
	</form>

<?};?>

</body>