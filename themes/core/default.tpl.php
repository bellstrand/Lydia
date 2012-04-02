<!docktype html>
<html lang='<?=$language?>'>
<head>
	<meta charset='<?=$character_encoding?>' />
	<title><?=$title?></title>
	<link rel='stylesheet' href='<?=$stylesheet?>' />
</head>
<body>
	<header id='header'>
		<?=$header?>
	</header>
	<div id='main' role='main'>
		<?=$main?>
		<?=get_debug()?>
	</div>
	<footer id='footer'>
		<?=$footer?>
	</footer>
</body>
</html>