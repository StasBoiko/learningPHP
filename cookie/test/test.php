<?php

$name=trim(stip_tags($POST['name']));
$phone=trim(stip_tags($POST['phone']));
$password=password_hashtrim(stip_tags($POST['passwd'])));

?>

<? 
	if(isset($_POST["auth"]) && !isset($_COOKIE['name'])){
		$name=trim(strip_tags($_POST['name']));
		$passwd=trim(strip_tags($_POST['passwd']));
		setcookie("name",$name);
		header("Location: "."test.php");
		die();
	}
?>

<?

	if(isset($_POST['name'])){
		
		setcookie("name","" , time()-3600);
		
		header("Location: "."index.php");
		die();
	};
?>


 <form name="order_all" action="<?$_SERVER['PHP_SELF']?>" method="post" id="order_all" class="order-form orderformcdn">
				 <div class="form">

					<h5>Успейте купить</h5>

					<input value="" class="name" id="fio" name="name" placeholder="Фамилия Имя Отчество">

					<input value="" class="phone" id="tel" name="phone" placeholder="Номер телефона">

					<input type="password" value="" class="passwd" id="passwd" name="passwd" placeholder="Номер телефона">

	                <input class="action submit" value="" type="submit" name="auth">	 			
				

				</div>
</form>


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