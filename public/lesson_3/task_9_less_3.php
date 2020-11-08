<?php

/* *Объединить две ранее написанные функции в одну, которая получает строку на русском языке, 
    производит транслитерацию и замену пробелов на подчеркивания (аналогичная задача решается 
    при конструировании url-адресов на основе названия статьи в блогах).*/

    $inputText = $_POST['translation'];

    /* ЭТО РАБОТАЕТ, НО ЕСТЬ КАКОЙ-ТО ПОДВОХ, НАВЕРНОЕ ЕСТЬ КАКАЯ-ТО ВСТОЕННАЯ ФУНКЦИЯ,
       НО Я ЛИБО НЕ РАЗОБРАЛСЯ ИЛИ НЕ НАШЕЛ .
       МОЖНО ПРОСТО В МАССИВ $word ВСТАВИТБ " " => "_" ЭТО ТОЖЕ РАБОТАЕТ С ОДНИМ STRTR, НО ЭТО СОВСЕМ НЕ
       ВЕРНО, ХОТЯ СООТВЕТСТВУЕТ ЗАДАНИЮ*/

    function textTranslation ($text) {
 
        $letters = [
            "а" => "a",
            "б" => "b",
            "в" => "v",
            "г" => "g",
            "д" => "d",
            "е" => "e",
            "ё" => "yo",
            "ж" => "zh",
            "з" => "z",
            "и" => "i",
            "й" => "iy",
            "к" => "k",
            "л" => "l",
            "м" => "m",
            "н" => "n",
            "о" => "o",
            "п" => "p",
            "р" => "r",
            "с" => "s",
            "т" => "t",
            "у" => "u",
            "ф" => "f",
            "х" => "kh",
            "ц" => "tc",
            "ч" => "ch",
            "ш" => "sh",
            "щ" => "shch",
            "ы" => "y",
            "э" => "e",
            "ю" => "iu",
            "я" => "ia",
            "ь" => ""
        ];
     

        // $underscores = array(" " => "_");
        // return strtr(strtr($text, $letters), $underscores);

        $textArr = explode(" ", $text);
    $translate = '';
    foreach ($textArr as $words) {

        $wordArr = mb_str_split($words, 1);
        $word = '';

          foreach ($wordArr as $letter) {             
              $word .= $letters[$letter];
              $trans = $word . " ";
         }       

         $translate .= $trans;
                
    }
        $transExp = explode(" ", $translate);
        $translateUndescore = implode("_", $transExp);

    return $translateUndescore;

    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task_4</title>
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

    <form method="post">
        <input type="textarea" name="translation" placeholder="введите текст">
        <button type="submit">translate</button>
    </form>
    <h3>РЕЗУЛЬТАТ ЭТОГО БЕЗОБРАЗИЯ</h3>
    <p><?= textTranslation($inputText) ?></p>
</body>
</html>