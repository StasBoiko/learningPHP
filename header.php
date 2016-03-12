<?
	require_once 'menu.php';
	require_once 'auth.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Первый скрипт</title>
</head>
<body>
    <ul id="menu">
<?
	foreach ($menu as $key => $value) {	
?>
	<li>
		<a href="<?=$key?>">
			<?=$value?>
		</a>
	</li>
<?
	}
?>
</ul>                                                                                                                                                                                                                 

