<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Личный сайт студента GeekBrains</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="content">
<?php
	include "menu.php"
?>
	<h1>Личный сайт студента GeekBrains</h1>


	<div class="center">
	<img src="img/фото1.jpg" width="200" height="333">
		<div class="box_text">
			<p><b>Добро пожаловать! Фёдор, очень приятно! (тот, что справа).</b></p>
			<p><b>Долго думал, как же выразить желание научиться писать скелет сайта...</b></p>
			<p><b>О себе кратко: всего понемногу и в меру.</b></p>
			<p>Ссылка на портал: <a href="https://geekbrains.ru/">GeekBrains</a></p>

			<p>На этом сайте вы можете сыграть в несколько игр, которые я написал:
			<a href="#">Главная</a>
			<a href="#">Загадки</a>
			<a href="#">Угадайка</a>
			</p>
		</div>
	</div>
</div>
	<div class="footer">
	Copyright &copy; <?php echo date("Y");?> FS
	</div>



</body>
</html>