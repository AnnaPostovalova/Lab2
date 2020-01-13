<!DOCTYPE html>
<html>
	<head>
		<link href="style.css" rel="stylesheet">
		<meta charset="utf-8">
		<title>Информация о номерах</title>
		<style>
			.gradient {
				background: #fefcea;
				background: linear-gradient(to top,#0a4988, #030505);
				border-top: 1px solid #333;
				border-bottom: 1px solid #333;
				margin-top:0px;
				margin-bottom:0px;
				opacity: 0.8; 
				filter: alpha(Opacity=80);
				text-align: center;
				padding-left:0%;
			}
			.text {
				text-align: center;
			}
		</style>
		<meta name="keywords" content="отдых, отель, Дубаи">
		<meta name="description" content="Отель Волна  ">
		<link rel="shortcut icon" href="palma.ico" type="image/x-icon" />
	</head>
	
	<body>
		<div class="header">	

			<ul class="menu gradient"> 
				<li><a href="ot.php">Главная</a></li>
				<li><a href="bron.php">Бронирование</a></li>
				<li><a href="free.php">Свободные номера</a></li>
		    </ul>			
			<img width="100%" src="f11.jpg">
		</div>
		
		
		
		<div class="text"> 				
			Сободные номера: 
					<?php
				
				$mysqli = mysqli_connect("localhost", "root", "", "Hotel22"); //соединение с localhost
				$otv = mysqli_query($mysqli, "SELECT * FROM Hotel1"); // выбор таблицы
				
				// создание таблицы 
				echo '<table border>';
				echo '<thead>';
				echo '<tr>';
				echo '<th>Дата 1</th>';
				echo '<th>Дата 2</th>';
				echo '<th>Номер</th>';
				echo '<th>Статус</th>';
				echo '</tr>';
				echo '</thead>';
				echo '<tdoby>';
						
				while ($r = mysqli_fetch_array($otv)) { // вывод таблицы из бд
				echo '<tr>';
				echo '<td>' . $r['data1'] . '</td>';
				echo '<td>' . $r['data2'] . '</td>';
				echo '<td>' . $r['id_room'] . '</td>';
				echo '<td>' . $r['statys'] . '</td>';
				echo '</tr>';
				}
				echo '</tbody>';
				echo '<table>';
				$mysqli -> close(); //закрытие соединения
				
		?>
		</div>
		<br><br><br>
	
		<div class="footer gradient">
			

	
				<ul class="bottom" style="padding-left:10%">
					<li><a href="#" style="color: white;  text-transform: none;"> Мы в соцсетях:</a></li>
					<li><a href="#" style="color: white; text-transform: none;"> Вконтакте</a></li>
					<li><a href="#" style="color: white; text-transform: none;"> Facebook</a></li>
					<li><a href="#" style="color: white; text-transform: none;"> Instagram</a></li>
				</ul>
		
				<div class="bottom" style="color: white; padding-left:25%"> 2019 © Wave.ru Все права защищены. 
				<br>При копировании материалов ссылка на сайт обязательна. </div>
			
		</div>
	
			
	</body>
</html>