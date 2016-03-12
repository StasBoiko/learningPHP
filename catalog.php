<?
	require_once 'header.php';
?>
<h1>Каталог</h1>
<ul>
   <?  	require_once "goods.php";
		foreach ($goods as $key => $value) {?>
		<img src = "<?=$value['imgGood'][1];?>"/>
		<a href = "cart.php?id=<?echo $value['idGood'];?>"><?echo $value["nameGood"]["name"];?></a>
	<?}
?>
</ul>
<?
	require_once 'footer.php';
	
?>
