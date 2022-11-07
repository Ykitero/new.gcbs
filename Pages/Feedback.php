<!DOCTYPE html>
<html lang="ru">
<head>
	<?php require "SharedBlocks/head.php"?>
</head>
<body>
	<?php require "SharedBlocks/sudo-top.php"?>
	<?php require "SharedBlocks/menu.php"?>
	<?php require "SharedBlocks/top.php"?>
	<form class="mybody">
		<div class="form-row">
			<div class="col-md-6 mb-3">
				<label for="validationDefault01">Имя</label>
				<input type="text" class="form-control" id="validationDefault01" placeholder="Имя" required>
			</div>
			<div class="col-md-6 mb-3">
				<label for="validationDefault02">Фамилия</label>
				<input type="text" class="form-control" id="validationDefault02" placeholder="Фамилия" required>
			</div>
		</div>
		<div class="form-row">
			<div class="col-md-6 mb-3">
				<label for="validationDefault03">Адрес электронной почты</label>
				<input type="text" class="form-control" id="validationDefault03" placeholder="name@example.ru" required>
			</div>
			<div class="col-md-6">
				<label for="validationDefault05">Номер чительского билета</label>
				<input type="text" class="form-control" id="validationDefault05" placeholder="354872" required>
			</div>
		</div>
		<div class="form-group">
			<div class="form-group">
				<label for="exampleFormControlTextarea1">Опишите ваш вопрос или проблему</label>
				<textarea class="form-control" id="exampleFormControlTextarea1 validationDefault05" rows="3" placeholder="Опишите ваш вопрос или проблему"></textarea>
			</div>
			<div class="form-group">
				<label for="exampleFormControlFile1">Прикрепить фотографию</label>
				<input type="file" class="form-control-file" id="exampleFormControlFile1">
			</div>
			<div class="form-check">
				<input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
				<label class="form-check-label" for="invalidCheck2">
					Согласитесь с условиями
				</label>
			</div>
		</div>
		<div class="text-center">
			<br /><br /><button type="submit" class="btn btn-primary">Отправить обращение</button>
		</div>
	</form>
	<?php require "SharedBlocks/footer.php"?>
</body>
</html>