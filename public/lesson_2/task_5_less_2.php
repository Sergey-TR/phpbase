<?php

/*Используя имеющийся HTML шаблон, вывести текущий год в подвале при помощи встроенных функций PHP.*/

//ВЫВОЖУ ДАТУ, МЕСЯЦ, ГОД

$year = date('d M Y');
$allRight = 'Все права защищены, лично мной';

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<footer style="height: 70px;
    font-size: 20px;
    font-style: italic;
    color: white;
    display: flex;
    align-items: center;
    justify-content: center;
    padding-right: 20px;
    background-color: #4169E1;">
	<i><?= $allRight ?></i> &nbsp;&copy;&nbsp; <?= $year ?>
	</footer>
</body>
</html>