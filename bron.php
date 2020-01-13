<!DOCTYPE html>
<html>
	<head>
		<link href="style.css" rel="stylesheet">
		<meta charset="utf-8">
		<title>Бронирование номеров в отеле Волна</title>
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
				color: white;
				text-align: center;
				padding-left:0%;
			} 
		</style>
		<meta name="keywords" content="отдых, отель, Дубаи">
		<meta name="description" content="Отель Волна ">
		<link rel="shortcut icon" href="palma.ico" type="image/x-icon" />
	</head>
	
	<body>
		 <div class="header"> 
			<ul class = "menu gradient"> 
				<li><a href="ot.php">Главная</a></li>
				<li><a href="bron.php">Бронирование</a></li>
				<li><a href="free.php">Свободные номера</a></li>
			</ul>	
			<img width="100%" height="30%" src="f11.jpg">	
		</div>
	  	
			
		
		<div class="text"> 				
			<h1>Забронируйте номер</h1>
			
			<div class="vvod">
				<form method="post" action="bron.php">
										<table>
										<tr><td><p>Введите фамилию бронирующего:</p></td><td><p><input type="text" name="name" requiered></p></td></tr>
										
										<tr><td><p>Выберите дату заезда:</p></td><td><p><input type="text" name="data1" requiered></p></td></tr>
										
										<tr><td><p>Выберите дату окончания заезда:</p></td><td><p><input type="text" name="data2" requiered></p></td></tr>
										
										<tr><td><p>Количество человек:</p></td><td><p><input type="text" name="persons" requiered></p></td></tr>
										
										<tr><td><p> Выберите комнату: </p></td>
										<td>
										<?php
															
											$check_connect = new mysqli ('localhost', 'root', '', 'hotel22');
											mysqli_select_db($check_connect, "hotel22");
											$result_select = mysqli_query($check_connect, "SELECT * FROM allrooms");
										?>
																								
											   <select size="1" name="id_room">
												<?php while($object = mysqli_fetch_object($result_select)):?>
												<option value ="<?=$object->id?>"><?=$object->type?></option>
												<?php endwhile;?>
											   </select>
										</td>
										
										</tr>
											
									
										<tr><td><p>Выберите статус комнаты:</p></td> 
										<td><p><select name="statys"> 
											<option selected value="Забронировать">Забронировать</option>
											<option value="Освободить">Освободить</option>
										</select></p></td></tr>
										
									
										</table>
														
										<p></p>
										
										<p></p>
									</div>
											
										
										
										<br>
									<p style="text-align:right;	margin-bottom:0;"><input type="submit" name = "add"></p>
									<br>
									<br><br><br>
				</form>
			</div>
				<?php		
				$id_room = $_POST['id_room'];
				$name = $_POST['name'];
				$data1 = $_POST['data1'];
				$data2 = $_POST['data2'];
				$persons = $_POST['persons'];
				$statys = $_POST['statys'];
				$check_connect = mysqli_connect('localhost', 'root', '', 'hotel22');		 //соединение с localhost
				if(isset($_POST['add'])){ //проверка на пустоту
						$flag = 1; 
						$hotel22 = mysqli_query($check_connect, "SELECT * FROM hotel1"); //запрос к базе данных
						while ($hotel1 = mysqli_fetch_array($hotel22)) { //проверка по всему массиву с помощью цикла while
									if($hotel1['id_room']==$id_room){   // условие на бронировании одинакового номера
											if ($statys=="Освободить") {  // проверка статуса бронирования
													if(($hotel1['data1']==$data1) || ($hotel1['data2']==$data2)) { //проверка совпадения дат 
														echo $hotel1['id'];
														$gh = $hotel1['id'];
															$result = mysqli_query($check_connect, "UPDATE INTO `hotel1` SET `statys`='Освободить' WHERE id =$gh "); //смена статуса в базе данных
															$flag = 3;
					
											}		}
												else if(($hotel1['data1']==$data1) || ($hotel1['data2']==$data2)) { //проверка на совпадение дат при статусе "забронировать"
															 
													$flag = 0;
												
													}
												
											}
						
						
						if($flag == 1){
						//занесение данных в таблицу
							$a = 1;
							$hotel22 = mysqli_query($check_connect, "SELECT * FROM allrooms where `id`='$id_room'");  
							$allroms = mysqli_fetch_array($hotel22);
							$a = $allroms['id'];
							$result = mysqli_query($check_connect, "INSERT INTO `hotel1` (`id_room`, `name`, `data1`, `data2`, `persons`, `statys`) VALUES ('$id_room','$name', '$data1', '$data2', '$persons', '$statys')");
							$vivod2 = "Данные успешно добавлены ✔";
						}
						else{
						$vivod2 = 'Такая запись уже существует';
						}
				
						}
						} echo $vivod2;
				mysqli_close($check_connect);?> //закрытие соединения
		
		<div class="footer gradient">
	
				<ul class="bottom" style="padding-left:10%">
					<li><a href="#" style="color: white;  text-transform: none;"> Мы в соцсетях:</a></li>
					<li><a href="#" style="color: white; text-transform: none;"> Вконтакте</a></li>
					<li><a href="#" style="color: white; text-transform: none;"> Facebook</a></li>
					<li><a href="#" style="color: white; text-transform: none;"> Instagram</a></li>
				</ul>
		
				<div class="bottom" style="color: white; padding-left:25%"> 2019 © Wave.ru Все права защищены. 
					<br>При копировании материалов ссылка на сайт обязательна. 
				</div>
			
		</div>
	
			
		</div>
	</body>
</html>