<?php

/*Написать функцию, которая заменяет в строке пробелы на подчеркивания и возвращает видоизмененную строчку.*/

$inputText = $_POST['translation'];

function changeSpace ($text) {
    // $underscores = array(" " => "_");
    // return strtr($text, $underscores);
    
    $textArr = explode(" ", $text);
    $underscores = implode("_", $textArr);
    return $underscores;

    // echo "<pre>";
    // print_r($textArr);
    // echo "</pre>";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task_5</title>
    <style type="text/css">
        body {
            margin: 0 auto;
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        input {
            height: 50px;
            width: 500px;
            font-size: 20px;
        }
        button {
            height: 50px;
            font-size: 20px;
        }
        button:hover {
            cursor: pointer;
        }
        p {
            width: 600px;
            height: 50px;
            font-size: 20px;
            border: 1px solid black;
            text-align: center;
        }
		
	</style>
</head>
<body>
    <!--НАДО ЧТОБЫ БОЛЕЕ МЕНЕЕ КРАСИВО БЫЛО-->

    <h3>ФОРМА МЕНЯЕТ ПРОБЕЛЫ НА НИЖНЕЕ ПОДЧЕРКИВАНИЕ</h3>
    <form method="post">
        <input type="textarea" name="translation" placeholder="введите текст">
        <button type="submit">ЗАМЕНИТЬ</button>
    </form>
    <h3>РЕЗУЛЬТАТ ЭТОГО БЕЗОБРАЗИЯ</h3>
    <p><?= changeSpace($inputText) ?></p>
</body>
</html>