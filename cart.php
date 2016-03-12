<?php 
require_once "goods.php";
?>
<html>
	<head>
		<title>Карточка товара</title>
		
	</head>
	
	<body>
	<?php
		$good_id = $_GET['id'];
		echo $good_id;
		foreach ($goods as $key => $value) {
			if ($good_id == $value['idGood']) {
				echo $value['nameGood']['name'];
		
	?>
				<h1><?=$value['nameGood']['name'];?></h1>
				<img src = "<?=$value['imgGood'][1];?>" alt = "test.png" />
				<p><?=$value['description']['short'];?></p>
				<p><?=$value['price'];?></p>
				<a href = "buy.php">купить</a>
				<p></p>
			<?php
			}
		}	
		?>		
	</body>
</html>