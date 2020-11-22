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

			// Символы, которые будут использоваться в пароле.

			$chars="qazxswedcvfrtgbnhyujmkiolp1234567890QAZXSWEDCVFRTGBNHYUJMKIOLP";

			// Количество символов в пароле.

			$max=10;

			// Определяем количество символов в $chars

			$size=StrLen($chars)-1;

			// Определяем пустую переменную, в которую и будем записывать символы.

			$password=null;

			// Создаём пароль.

    		while($max--)
    		$password.=$chars[rand(0,$size)];

			// Выводим созданный пароль.

			echo
			"<center>
			Сгенерированный пароль:
			<hr><font face=verdana color=red size=7><b>".$password."</b></font><hr>
			<a href=&#63;>Создать новый пароль.</a></center>";
			
		?>

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