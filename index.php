<?php
$json = file_get_contents('phone_book.json');
$data = json_decode($json, true);

?>

<!DOCTYPE HTML>
<html lang="ru">
	<head>
		<meta charset="utf-8">
		<title>Задание к занятию «Установка и настройка веб-сервера»</title>
	</head>
	<body>
	
		<div style="width: 30%;">
			<table style="width: 100%; text-align: center;">
				<tr>
					<th>Фамилия</th>
					<th>Имя</th>
					<th>Адрес</th>
					<th>Телефон</th>
				</tr>
				<?php foreach ($data as $item) {?>
				<tr>
					<td><?php echo $item['firstName'] ?></td>
					<td><?php echo $item['lastName'] ?></td>
					<td><?php echo $item['address'] ?></td>
					<td><?php echo $item['phoneNumber'] ?></td>
				</tr>
				<?php } ?>		
			</table>
		</div>
	
	</body>
</html>