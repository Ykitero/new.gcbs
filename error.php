<!DOCTYPE html>
<html lang="ru">
<head>
	<title>Ops...</title>
	<?php require "SharedBlocks/head.php"?>
</head>
<body>
	<?php require "SharedBlocks/sudo-top.php"?>
	<?php require "SharedBlocks/menu.php"?>
	<?php require "SharedBlocks/top.php"?>
	<?php require "SharedBlocks/social-link.php"?>
	<div class="errors">
		<h3 class="errors">Erorr 404: Page not found / Ошибка 404: Страница не найдена</h3>
		<button class="orderpay" type="button" href= feedback.php>Сообщить о проблеме</button>
		<button class="orderpay" type="button" href= index.php>перейти на главную</button>
		<div class="conteiner errors-pic"><img src="img/error404.png"></div>
	</div>
	<?php require "SharedBlocks/footer.php"?>
</body>
</html>