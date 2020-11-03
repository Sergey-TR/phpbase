<?php

//С помощью цикла while вывести все числа в промежутке от 0 до 100, которые делятся на 3 без остатка.

$i = 0;
$intNumber = [];

//МОЖНО КОНЕЧНО И БЕЗ МАССИВА, НО РАЗ УЖ ТЕМА И МАССИВЫ ТОЖЕ, ТОГДА БУДЕТ С МАССИВОМ.

while($i++ <= 100) {
    if ($i %3 == 0) {
       array_push($intNumber, $i);
    }
    
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task_1</title>
    <style type="text/css">
        body {
            margin: 0 auto;
            height: 100vh;
            display: flex;
            justify-content: space-around;
            align-items: center;
        }
		.block {
			width: 20px;
            height: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 16px;
            font-weight: bold;
		}
	</style>
</head>
<body>
    <?php foreach ($intNumber as $value) { ?>
        <p class="block"><?= $value ?></p> 
    <?php } ?>
</body>
</html>