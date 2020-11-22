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

<div class="contentWrap">
	<div class="content">
		<div class="center">

	<h1><b>Игра в загадки</b></h1>

	<div class="box">

		<?php

			if(isset($_GET['userAnswer1']) && isset($_GET['userAnswer2']) && isset($_GET['userAnswer3'])) {
			$userAnswer = mb_strtolower($_GET["userAnswer1"]);
			$score = 0;
			if($userAnswer == "оля" || $userAnswer == "ольга") {
				$score++;
			}

			$userAnswer = mb_strtolower($_GET["userAnswer2"]);
			if($userAnswer == "часы" || $userAnswer == "часики") {
				$score++;
			}

			$userAnswer = mb_strtolower($_GET["userAnswer3"]);
			if($userAnswer == "2" || $userAnswer == "две") {
				$score++;
			}

			$userAnswer = mb_strtolower($_GET["userAnswer4"]);
			if($userAnswer == "2" || $userAnswer == "два") {
				$score++;
			}

			echo "Вы угадали" . $score . " загадок";
			}

		?>

	<form method="GET">
		<p><b>У Олиной мамы было 4 дочери: Маша, Олеся, Наталья, Светлана.Как зовут пятую дочь?</b></p>
		<input type="text" name="userAnswer1">
		<p><b>Что может в одно и то же время стоять и ходить, висеть и стоять, ходить и лежать?</b></p>
		<input type="text" name="userAnswer2">
		<p><b>На ферме было 2 коня, 1 кролик, 1 щенок, 1 кошка, свинья и поросенок, корова и теленок, индюк и гусь. Пришел хозяин с собакой. Сколько на ферме стало ног? Ответ записать числом.</b></p>
		<input type="text" name="userAnswer3">
		<p><b>Два друга играли в шахматы 2 часа. Сколько часов играл каждый из игроков? Ответ пишите числом.</b></p>
		<input type="text" name="userAnswer4">
		<br>
		<br>
		<br>
		<br>
		<input type="submit" value="Ответить" name="">>
	</form>

	</div>

		</div>
	</div>
</div>




</div>
	<div class="footer">
	Copyright &copy; <?php echo date("Y");?> FS
	</div>
</body>
</html>